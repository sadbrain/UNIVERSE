<?php
include_once APP_ROOT . "/dataAccess/Repository/IRepository/IRepository.php";
include_once APP_ROOT . "/models/User.php";
class UserRepository implements IRepository
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
        $sql = "SELECT * FROM users where deleted_by IS null && deleted_at IS null  ORDER BY created_at DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $users = null;
        if ($result) {
            $users = [];
            foreach ($result as $user) {
                $obj = new User();
                $this->to_user($obj, $user);
                array_push($users, $obj);
            }
        }

        return $users;
    }
    public function get($id)
    {
        $sql = "SELECT * FROM users where id  = :id LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $id,
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $user = null;
        if ($result) {
            $user = new User();
            $this->to_user($user, $result);
        }
        return $user;
    }
    public function add($entity)
    {
        $sql = "INSERT INTO users 
        (name, email, password, role, created_by,
         updated_by, deleted_by, created_at, updated_at, deleted_at)
        VALUES (:name, :email, :password, :role, , :created_by, 
         :updated_by, :deleted_by, :created_at, :updated_at, :deleted_at)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':name'         => $entity->get_name(),
            ':email'        => $entity->get_email(),
            ':password'     => $entity->get_password(),
            ':role'         => $entity->get_role(),
            ':created_by'   => $entity->get_created_by(),
            ':updated_by'   => $entity->get_updated_by(),
            ':deleted_by'   => $entity->get_deleted_by(),
            ':created_at'   => $entity->get_created_at() ? $entity->get_created_at()->format('Y-m-d H:i:s') : null,
            ':updated_at'   => $entity->get_updated_at() ? $entity->get_updated_at()->format('Y-m-d H:i:s') : null,
            ':deleted_at'   => $entity->get_deleted_at() ? $entity->get_deleted_at()->format('Y-m-d H:i:s') : null,
        ]);
    }


    public function remove($entity)
    {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $entity->get_id(),
        ]);
    }
    public function update($entity)
    {
        $sql = "UPDATE users SET 
        name        = :name,
        email       = :email,
        password    = :password,
        role        = :role,
        deleted_at  = :deleted_at,
        updated_at  = :updated_at,
        created_at  = :created_at,
        deleted_by  = :deleted_by,
        updated_by  = :updated_by,
        created_by  = :created_by
        WHERE id    = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id'         => $entity->get_id(),
            ':name'         => $entity->get_name(),
            ':email'        => $entity->get_email(),
            ':password'     => $entity->get_password(),
            ':role'         => $entity->get_role(),
            ':created_by'   => $entity->get_created_by(),
            ':updated_by'   => $entity->get_updated_by(),
            ':deleted_by'   => $entity->get_deleted_by(),
            ':created_at'   => $entity->get_created_at() ? $entity->get_created_at()->format('Y-m-d H:i:s') : null,
            ':updated_at'   => $entity->get_updated_at() ? $entity->get_updated_at()->format('Y-m-d H:i:s') : null,
            ':deleted_at'   => $entity->get_deleted_at() ? $entity->get_deleted_at()->format('Y-m-d H:i:s') : null,
            // Add other columns as needed
        ]);
    }

    public function to_user($user, $user_in_db)
    {
        if ($user_in_db["id"] != null)
            $user->set_id((int) $user_in_db["id"]);
        if ($user_in_db["name"] != null)
            $user->set_name($user_in_db["name"]);
        if ($user_in_db["email"] != null)
            $user->set_email($user_in_db["email"]);
        if ($user_in_db["password"] != null)
            $user->set_password($user_in_db["password"]);
        if ($user_in_db["role"] != null)
            $user->set_role($user_in_db["role"]);
        if ($user_in_db["created_by"] != null)
            $user->set_created_by($user_in_db["created_by"]);
        if ($user_in_db["updated_by"] != null)
            $user->set_updated_by($user_in_db["updated_by"]);
        if ($user_in_db["deleted_by"] != null)
            $user->set_deleted_by($user_in_db["deleted_by"]);
        if ($user_in_db["created_at"] != null)
            $user->set_created_at(new DateTime($user_in_db["created_at"]));
        if ($user_in_db["updated_at"] != null)
            $user->set_updated_at(new DateTime($user_in_db["updated_at"]));
        if ($user_in_db["deleted_at"] != null)
            $user->set_deleted_at(new DateTime($user_in_db["deleted_at"]));
    }
}
