<?php
include_once APP_ROOT . "/dataAccess/Repository/IRepository/IRepository.php";
include_once APP_ROOT . "/models/Order.php";
class OrderRepository implements IRepository
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
        $sql = "SELECT * FROM orders";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $orders = null;
        if ($result) {
            $orders = [];
            foreach ($result as $order) {
                $obj = new Order();
                $this->to_order($obj, $order);
                array_push($orders, $obj);
            }
        }

        return $orders;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM orders where id  = :id LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $id,
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $order = null;
        if ($result) {
            $order = new Order();
            $this->to_order($order, $result);
        }
        return $order;
    }
    public function add($entity)
    {
        $sql = "INSERT INTO orders (quantity, status, total, size, color, date_time, product_id, user_id)
         VALUES (:quantity, :status, :total, :size, :color, :date_time, :product_id, :user_id)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':quantity' => $entity->get_quantity(),
            ':status' => $entity->get_status(),
            ':total' => $entity->get_total(),
            ':size' => $entity->get_size(),
            ':color' => $entity->get_color(),
            ':date_time' => $entity->get_date_time(),
            ':product_id' => $entity->get_product_id(),
            ':user_id' => $entity->get_user_id(),
        ]);
    }
    public function remove($entity)
    {
        $sql = "DELETE FROM orders WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $entity->get_id(),
        ]);
    }
    public function update($entity)
    {
        $sql = "UPDATE orders SET 
        quantity = :quantity,
        status = :status,
        total = :total,
        size = :size,
        color = :color,
        date_time = :date_time,
        product_id = :product_id,
        user_id = :user_id
        WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $entity->get_id(),
            ':quantity' => $entity->get_quantity(),
            ':status' => $entity->get_status(),
            ':total' => $entity->get_total(),
            ':size' => $entity->get_size(),
            ':color' => $entity->get_color(),
            ':date_time' => $entity->get_date_time(),
            ':product_id' => $entity->get_product_id(),
            ':user_id' => $entity->get_user_id(),
            // Add other columns as needed
        ]);
    }
    public function to_order($order, $order_in_db)
    {
        $order->set_id($order_in_db["id"]);
        $order->set_quantity($order_in_db["quantity"]);
        $order->set_status($order_in_db["status"]);
        $order->set_total($order_in_db["total"]);
        $order->set_size($order_in_db["size"]);
        $order->set_color($order_in_db["color"]);
        $order->set_date_time($order_in_db["date_time"]);
        $order->set_product_id($order_in_db["product_id"]);
        $order->set_user_id($order_in_db["user_id"]);
    }
}
