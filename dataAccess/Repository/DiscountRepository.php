<?php
include_once APP_ROOT . "/dataAccess/Repository/IRepository/IRepository.php";
include_once APP_ROOT . "/models/Discount.php";
class DiscountRepository implements IRepository
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
        $sql = "SELECT * FROM discounts ORDER BY created_at DESC";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute();
        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);

        $discounts = null;
        if ($result) {
            $discounts = [];
            foreach ($result as $discount) {
                $obj = new Discount();
                $this -> to_discount($obj, $discount);
                array_push($discounts, $obj);
            }
        }

        return $discounts;
    }
    public function get($id)
    {
        $sql = "SELECT * FROM discounts where id  = :id LIMIT 1";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
        $result = $stmt -> fetch(PDO::FETCH_ASSOC);

        $discount = null;
        if ($result) {
            $discount = new Discount();
            $this -> to_discount($discount, $result);
        }
        return $discount;
    }
    public function add($entity)
    {
        $sql = "INSERT INTO discounts 
        ( discount_price, discount_from, discount_to, 
         product_id, created_by, updated_by, deleted_by, 
         created_at, updated_at, deleted_at)
        VALUES ( :discount_price, :discount_from, :discount_to,   
         :product_id, :created_by, :updated_by, :deleted_by, 
         :created_at, :updated_at, :deleted_at)";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':discount_price'   => $entity -> get_discount_price(),
            ':discount_from'    => $entity -> get_discount_from() ? $entity -> get_discount_from() -> format('Y-m-d H:i:s') : null,
            ':discount_to'      => $entity -> get_discount_to() ? $entity -> get_discount_to() -> format('Y-m-d H:i:s') : null,
            ':product_id'       => $entity -> get_product_id(),
            ':created_by'       => $entity -> get_created_by(),
            ':updated_by'       => $entity -> get_updated_by(),
            ':deleted_by'       => $entity -> get_deleted_by(),
            ':created_at'       => $entity -> get_created_at() ? $entity -> get_created_at() -> format('Y-m-d H:i:s') : null,
            ':updated_at'       => $entity -> get_updated_at() ? $entity -> get_updated_at() -> format('Y-m-d H:i:s') : null,
            ':deleted_at'       => $entity -> get_deleted_at() ? $entity -> get_deleted_at() -> format('Y-m-d H:i:s') : null,
        ]);
    }
    public function remove($entity)
    {
        $sql = "DELETE FROM discounts WHERE id = :id";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':id' => $entity -> get_id(),
        ]);
    }
    public function update($entity)
    {
        $sql = "UPDATE discounts SET 
        discount_price  = :discount_price,
        discount_from   = :discount_from,
        discount_to     = :discount_to,
        product_id,     = :product_id,
        deleted_at      = :deleted_at,
        updated_at      = :updated_at,
        created_at      = :created_at,
        deleted_by      = :deleted_by,
        updated_by      = :updated_by,
        created_by      = :created_by
        WHERE id        = :id";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':id'               => $entity -> get_id(),
            ':discount_price'   => $entity -> get_discount_price(),
            ':discount_from'    => $entity -> get_discount_from() ? $entity -> get_discount_from() -> format('Y-m-d H:i:s') : null,
            ':discount_to'      => $entity -> get_discount_to() ? $entity -> get_discount_to() -> format('Y-m-d H:i:s') : null,
            ':product_id'       => $entity -> get_product_id(),
            ':created_by'       => $entity -> get_created_by(),
            ':updated_by'       => $entity -> get_updated_by(),
            ':deleted_by'       => $entity -> get_deleted_by(),
            ':created_at'       => $entity -> get_created_at() ? $entity -> get_created_at() -> format('Y-m-d H:i:s') : null,
            ':updated_at'       => $entity -> get_updated_at() ? $entity -> get_updated_at() -> format('Y-m-d H:i:s') : null,
            ':deleted_at'       => $entity -> get_deleted_at() ? $entity -> get_deleted_at() -> format('Y-m-d H:i:s') : null,
            // Add other columns as needed
        ]);
    }

    public function get_by_key($key, $value, $limit = null)
    {
        if($limit == null)
        $sql = "SELECT * FROM discounts where $key  = :value ORDER BY created_at DESC";
        else
        $sql = "SELECT * FROM discounts where $key  = :value ORDER BY created_at DESC Limit  $limit";

        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':value' => $value,
        ]);
        if($limit != null && $limit == 1) {
            $discount = null;
            $result = $stmt -> fetch(PDO::FETCH_ASSOC);
            if($result){
                $discount = new Discount();
                $this -> to_discount($discount, $result); 
            }
            return $discount;

        }else{
            $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            $discounts = null;
            if ($result) {
                $discounts = [];
                foreach ($result as $discount) {
                    $obj = new Discount();
                    $this -> to_discount($obj, $discount);
                    array_push($discounts, $obj);
                }
            }
            return $discounts;
        }
    }

    public function to_discount($discount, $discount_in_db)
    {
        if($discount_in_db["id"] != null) 
            $discount -> set_id((int) $discount_in_db["id"]);
        if($discount_in_db["discount_price"] != null) 
            $discount -> set_discount_price((float) $discount_in_db["discount_price"]);
        if($discount_in_db["discount_from"] != null) 
            $discount -> set_discount_from(new DateTime($discount_in_db["discount_from"]));
        if($discount_in_db["discount_to"] != null) 
            $discount -> set_discount_to(new DateTime($discount_in_db["discount_to"]));
        if($discount_in_db["product_id"] != null) 
            $discount -> set_product_id((int) $discount_in_db["product_id"]);
        if( $discount_in_db["created_by"] != null)
             $discount -> set_created_by($discount_in_db["created_by"]);
        if( $discount_in_db["updated_by"] != null)
             $discount -> set_updated_by($discount_in_db["updated_by"]);
        if( $discount_in_db["deleted_by"] != null)
             $discount -> set_deleted_by($discount_in_db["deleted_by"]);
        if( $discount_in_db["created_at"] != null)
             $discount -> set_created_at(new DateTime($discount_in_db["created_at"]));
        if( $discount_in_db["updated_at"] != null)
             $discount -> set_updated_at(new DateTime($discount_in_db["updated_at"]));
        if( $discount_in_db["deleted_at"] != null)
             $discount -> set_deleted_at(new DateTime($discount_in_db["deleted_at"]));
    
    }
}
