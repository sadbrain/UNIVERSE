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
        $sql = "SELECT * FROM users";
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
        $sql = "INSERT INTO users (name, address, phone, email, password, role)
        VALUES (:name, :address, :phone, :email, :password, :role)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':name' => $entity->get_name(),
            ':address' => $entity->get_address(),
            ':phone' => $entity->get_phone(),
            ':email' => $entity->get_email(),
            ':password' => $entity->get_password(),
            ':role' => $entity->get_role(),
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
        name = :name,
        address = :address,
        phone = :phone,
        email = :email,
        password, = :password,
        role, = :role
        WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $entity->get_id(),
            ':name' => $entity->get_name(),
            ':address' => $entity->get_address(),
            ':phone' => $entity->get_phone(),
            ':email' => $entity->get_email(),
            ':password' => $entity->get_password(),
            ':role' => $entity->get_role(),
            // Add other columns as needed
        ]);
    }
    public function to_user($user, $user_in_db)
    {
        $user->set_id($user_in_db["id"]);
        $user->set_name($user_in_db["name"]);
        $user->set_address($user_in_db["address"]);
        $user->set_phone($user_in_db["phone"]);
        $user->set_email($user_in_db["email"]);
        $user->set_password($user_in_db["password"]);
        $user->set_role($user_in_db["role"]);
    }
}
