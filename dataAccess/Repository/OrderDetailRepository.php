<?php
include_once APP_ROOT . "/dataAccess/Repository/IRepository/IRepository.php";
include_once APP_ROOT . "/models/OrderDetail.php";
class OrderDetailRepository implements IRepository
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this -> db = $db;
    }
    public function get_db()
    {
        return $this -> db;
    }

    public function get_all()
    {
        $sql = "SELECT * FROM order_details";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute();
        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);

        $order_details = null;
        if ($result) {
            $order_details = [];
            foreach ($result as $order_detail) {
                $obj = new OrderDetail();
                $this -> to_order_detail($obj, $order_detail);
                array_push($order_details, $obj);
            }
        }

        return $order_details;
    }
    public function get($id)
    {
        $sql = "SELECT * FROM order_details where id  = :id LIMIT 1";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
        $result = $stmt -> fetch(PDO::FETCH_ASSOC);

        $order_detail = null;
        if ($result) {
            $order_detail = new OrderDetail();
            $this -> to_order_detail($order_detail, $result);
        }
        return $order_detail;
    }

    public function get_by_order_id($order_id)
    {
        $sql = "SELECT * FROM order_details where order_id  = :order_id LIMIT 1";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':order_id' => $order_id,
        ]);
        $result = $stmt -> fetch(PDO::FETCH_ASSOC);

        $order_detail = null;
        if ($result) {
            $order_detail = new OrderDetail();
            $this -> to_order_detail($order_detail, $result);
        }

        return $order_detail;
    }
    public function add($entity)
    {
        $sql = "INSERT INTO order_details 
        (product_name, product_quantity, product_price, 
        product_discount_price, 
        product_color, product_size, product_id, order_id)
        VALUES (:product_name, :product_quantity, :product_price, 
        :product_discount_price, 
        :product_color, :product_size, :product_id, :order_id)";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':product_name'             => $entity -> get_product_name(),
            ':product_quantity'         => $entity -> get_product_quantity(),
            ':product_price'            => $entity -> get_product_price(),
            ':product_discount_price'   => $entity -> get_product_discount_price(),
            ':product_color'            => $entity -> get_product_color(),
            ':product_size'             => $entity -> get_product_size(),
            ':product_id'               => $entity -> get_product_id(),
            ':order_id'                 => $entity -> get_order_id(),
        ]);
    }
    public function remove($entity)
    {
        $sql = "DELETE FROM order_details WHERE id = :id";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':id' => $entity -> get_id(),
        ]);
    }
    public function update($entity)
    {
        $sql = "UPDATE order_details SET 
        product_name            = :product_name,
        product_quantity        = :product_quantity,
        product_price           = :product_price,
        product_discount_price  = :product_discount_price,
        product_color           = :product_color,
        product_size            = :product_size,
        product_id              = :product_id,
        order_id                = :order_id
        WHERE id                = :id";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':id'                       => $entity -> get_id(),
            ':product_name'             => $entity -> get_product_name(),
            ':product_quantity'         => $entity -> get_product_quantity(),
            ':product_price'            => $entity -> get_product_price(),
            ':product_discount_price'   => $entity -> get_product_discount_price(),
            ':product_color'            => $entity -> get_product_color(),
            ':product_size'             => $entity -> get_product_size(),
            ':product_id'               => $entity -> get_product_id(),
            ':order_id'                 => $entity -> get_order_id(),
            // Add other columns as needed
        ]);
    }


    public function to_order_detail($order_detail, $order_detail_in_db)
    {
        if($order_detail_in_db["id"] != null)
            $order_detail -> set_id((int) $order_detail_in_db["id"]);
        if($order_detail_in_db["product_name"] != null)
            $order_detail -> set_product_name($order_detail_in_db["product_name"]);
        if($order_detail_in_db["product_quantity"] != null)      
            $order_detail -> set_product_quantity((int) $order_detail_in_db["product_quantity"]);
        if($order_detail_in_db["product_price"] != null)      
            $order_detail -> set_product_price((float) $order_detail_in_db["product_price"]);
        if($order_detail_in_db["product_discount_price"] != null)      
            $order_detail -> set_product_discount_price((float) $order_detail_in_db["product_discount_price"]);
        if($order_detail_in_db["product_color"] != null)      
            $order_detail -> set_product_color($order_detail_in_db["product_color"]);
        if($order_detail_in_db["product_size"] != null)      
            $order_detail -> set_product_size($order_detail_in_db["product_size"]);
        if($order_detail_in_db["product_id"] != null)      
             $order_detail -> set_product_id((int) $order_detail_in_db["product_id"]);
        if($order_detail_in_db["order_id"] != null)      
            $order_detail -> set_order_id((int) $order_detail_in_db["order_id"]);
    }
}
