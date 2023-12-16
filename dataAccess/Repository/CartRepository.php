<?php
include_once APP_ROOT . "/dataAccess/Repository/IRepository/IRepository.php";
include_once APP_ROOT . "/models/Cart.php";
class CartRepository implements IRepository
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
        $sql = "SELECT * FROM carts";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $carts = null;
        if ($result) {
            $carts = [];
            foreach ($result as $cart) {
                $obj = new Cart();
                $this->to_Cart($obj, $cart);
                array_push($carts, $obj);
            }
        }

        return $carts;
    }
    public function get($id)
    {
        $sql = "SELECT * FROM carts where id  = :id LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $id,
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $cart = null;
        if ($result) {
            $cart = new Cart();
            $this->to_Cart($cart, $result);
        }
        return $cart;
    }

    public function add($entity)
    {
        $sql = "INSERT INTO carts (order_id, user_id) VALUES (:order_id, :user_id)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':order_id' => $entity->get_order_id(),
            ':user_id' => $entity->get_user_id(),
        ]);
    }
    public function remove($entity)
    {
        $sql = "DELETE FROM carts WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $entity->get_id(),
        ]);
    }
    public function update($entity)
    {
        $sql = "UPDATE carts SET 
        order_id = :order_id,
        user_id = :user_id
         WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $entity->get_id(),
            ':order_id' => $entity->get_order_id(),
            ':user_id' => $entity->get_user_id(),
        ]);
    }
    public function to_Cart($cart, $cart_in_db)
    {
        $cart->set_id((int) $cart_in_db["id"]);
        $cart->set_order_id((int) $cart_in_db["order_id"]);
        $cart->set_user_id((int) $cart_in_db["user_id"]);
    }
}
