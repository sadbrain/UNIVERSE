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
        $sql = "SELECT * FROM orders ORDER BY created_at DESC";
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

    public function get_num_order($start_date, $end_date){
        $sql = "SELECT COUNT(*) AS order_count
        FROM universe.orders
        WHERE created_at >= :start_date AND created_at <= :end_date and status = 'DONE'"; 
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':start_date' => $start_date,
            ':end_date' => $end_date,
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function get_total_revenue_order($start_date, $end_date){
        $sql = "SELECT SUM(total) AS total_revenue
        FROM universe.orders
        WHERE created_at >= :start_date AND created_at <= :end_date AND status = 'DONE'"; 
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':start_date' => $start_date,
            ':end_date' => $end_date,
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result; 
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':start_date' => $start_date,
            ':end_date' => $end_date,
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
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
    
    public function get_last_entity()
    {
        $sql = "SELECT * FROM orders ORDER BY id DESC LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
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
        $sql = "INSERT INTO orders (buyer_name, buyer_email, buyer_phone, 
        buyer_address, total,
         shipping_cost, status, created_at )
         VALUES (:buyer_name, :buyer_email, :buyer_phone, 
        :buyer_address, :total, 
        :shipping_cost, :status, :created_at)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':buyer_name'       => $entity->get_buyer_name(),
            ':buyer_email'      => $entity->get_buyer_email(),
            ':buyer_phone'      => $entity->get_buyer_phone(),
            ':buyer_address'    => $entity->get_buyer_address(),
            ':total'            => $entity->get_total(),
            ':shipping_cost'    => $entity->get_shipping_cost(),
            ':status'           => $entity->get_status(),
            ':created_at'       => $entity->get_created_at() ? $entity->get_created_at()->format('Y-m-d H:i:s') : null,

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
        buyer_name      = :buyer_name,
        buyer_email     = :buyer_email,
        buyer_phone     = :buyer_phone,
        buyer_address   = :buyer_address,
        total           = :total,
        shipping_cost   = :shipping_cost,
        status          = :status,
created_at      = :created_at,
        WHERE id        = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id'               => $entity->get_id(),
            ':buyer_name'       => $entity->get_buyer_name(),
            ':buyer_email'      => $entity->get_buyer_email(),
            ':buyer_phone'      => $entity->get_buyer_phone(),
            ':buyer_address'    => $entity->get_buyer_address(),
            ':total'            => $entity->get_total(),
            ':shipping_cost'    => $entity->get_shipping_cost(),
            ':status'           => $entity->get_status(),
            ':created_at'       => $entity->get_created_at() ? $entity->get_created_at()->format('Y-m-d H:i:s') : null,
            // Add other columns as needed
        ]);
    }
    public function to_order($order, $order_in_db)
    {
        if ($order_in_db["id"] != null)
            $order->set_id((int) $order_in_db["id"]);
        if ($order_in_db["buyer_name"] != null)
            $order->set_buyer_name($order_in_db["buyer_name"]);
        if ($order_in_db["buyer_email"] != null)
            $order->set_buyer_email($order_in_db["buyer_email"]);
        if ($order_in_db["buyer_phone"] != null)
            $order->set_buyer_phone($order_in_db["buyer_phone"]);
        if ($order_in_db["buyer_address"] != null)
            $order->set_buyer_address($order_in_db["buyer_address"]);
        if ($order_in_db["total"] != null)
            $order->set_total((float) $order_in_db["total"]);
        if ($order_in_db["shipping_cost"] != null)
            $order->set_shipping_cost((float) $order_in_db["shipping_cost"]);
        if ($order_in_db["status"] != null)
            $order->set_status($order_in_db["status"]);
        if ($order_in_db["created_at"] != null)
            $order->set_created_at(new DateTime($order_in_db["created_at"]));
    }
}
