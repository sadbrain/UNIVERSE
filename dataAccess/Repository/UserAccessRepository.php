<?php
include_once APP_ROOT . "/dataAccess/Repository/IRepository/IRepository.php";
include_once APP_ROOT . "/models/UserAccess.php";
class UserAccessRepository implements IRepository
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
    public function get_db()
    {
        return $this->db;
    }

    public function get_all()
    {
        $sql = "SELECT * FROM user_access";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $users = null;
        if ($result) {
            $users = [];
            foreach ($result as $user) {
                $obj = new UserAccess();
                $this->to_user_access($obj, $user);
                array_push($users, $obj);
            }
        }

        return $users;
    }
    public function get($id)
    {
        $sql = "SELECT * FROM user_access where id  = :id LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $id,
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $user = null;
        if ($result) {
            $user = new UserAccess();
            $this->to_user_access($user, $result);
        }
        return $user;
    }
    public function get_num_user_access($start_date, $end_date){
        $sql = "SELECT COUNT(*) AS user_access_count
        FROM universe.user_access
        WHERE visit_date >= :start_date AND visit_date <= :end_date"; 
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':start_date' => $start_date,
            ':end_date' => $end_date,
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function get_by_ip_address($ip_address)
    {
        $sql = "SELECT * FROM user_access where ip_address  = :ip_address LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':ip_address' => $ip_address,
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $user = null;
        if ($result) {
            $user = new UserAccess();
            $this->to_user_access($user, $result);
        }
        return $user;
    }

    public function add($entity)
    {
        $sql = "INSERT INTO user_access 
        (ip_address, user_agent, server_name,visit_date)
        VALUES (:ip_address, :user_agent, :server_name, :visit_date)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':ip_address'         => $entity->get_ip_address(),
            ':user_agent'        => $entity->get_user_agent(),
            ':server_name'     => $entity->get_server_name(),
            ':visit_date'   => $entity->get_visit_date() ? $entity->get_visit_date()->format('Y-m-d H:i:s') : null,
        ]);
    }


    public function remove($entity)
    {
        $sql = "DELETE FROM user_access WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $entity->get_id(),
        ]);
    }
    public function update($entity)
    {
        $sql = "UPDATE user_access SET 
        ip_address        = :ip_address,
        user_agent       = :user_agent,
        server_name    = :server_name,
        visit_date  = :visit_date
        WHERE id    = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id'         => $entity->get_id(),
            ':ip_address'         => $entity->get_ip_address(),
            ':user_agent'        => $entity->get_user_agent(),
            ':server_name'     => $entity->get_server_name(),
            ':visit_date'   => $entity->get_visit_date() ? $entity->get_visit_date()->format('Y-m-d H:i:s') : null,
            // Add other columns as needed
        ]);
    }
  
    public function to_user_access($user, $user_in_db)
    {
        if ($user_in_db["id"] != null)
            $user->set_id((int) $user_in_db["id"]);
        if ($user_in_db["ip_address"] != null)
            $user->set_ip_address($user_in_db["ip_address"]);
        if ($user_in_db["user_agent"] != null)
            $user->set_user_agent($user_in_db["user_agent"]);
        if ($user_in_db["server_name"] != null)
            $user->set_server_name($user_in_db["server_name"]);
        if ($user_in_db["visit_date"] != null)
            $user->set_visit_date(new DateTime($user_in_db["visit_date"]));
    }
}
