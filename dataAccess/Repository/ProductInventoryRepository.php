<?php
include_once APP_ROOT . "/dataAccess/Repository/IRepository/IRepository.php";
include_once APP_ROOT . "/models/ProductInventory.php";
class ProductInventoryRepository implements IRepository
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
        $sql = "SELECT * FROM product_inventories ORDER BY created_at DESC";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute();
        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);

        $product_inventories = null;
        if ($result) {
            $product_inventories = [];
            foreach ($result as $product_inventory) {
                $obj = new ProductInventory();
                $this -> to_product_inventory($obj, $product_inventory);
                array_push($product_inventories, $obj);
            }
        }

        return $product_inventories;
    }
    public function get($id)
    {
        $sql = "SELECT * FROM product_inventories where id  = :id LIMIT 1";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
        $result = $stmt -> fetch(PDO::FETCH_ASSOC);

        $product_inventory = null;
        if ($result) {
            $product_inventory = new ProductInventory();
            $this -> to_product_inventory($product_inventory, $result);
        }
        return $product_inventory;
    }
    public function add($entity)
    {
        $sql = "INSERT INTO product_inventories 
        ( quantity, quantity_buyed, size, color,
         product_id, created_by, updated_by, deleted_by, 
         created_at, updated_at, deleted_at)
        VALUES ( :quantity, :quantity_buyed, :size,  :color, 
         :product_id, :created_by, :updated_by, :deleted_by, 
         :created_at, :updated_at, :deleted_at)";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':quantity'         => $entity -> get_quantity(),
            ':quantity_buyed'   => $entity -> get_quantity_buyed(),
            ':size'             => $entity -> get_size(),
            ':color'            => $entity -> get_color(),
            ':product_id'       => $entity -> get_product_id(),
            ':created_by'       => $entity -> get_created_by(),
            ':updated_by'       => $entity -> get_updated_by(),
            ':deleted_by'       => $entity -> get_deleted_by(),
            ':created_at'       => $entity -> get_created_at() ? $entity -> get_created_at()  -> format('Y-m-d H:i:s') : null,
            ':updated_at'       => $entity -> get_updated_at() ? $entity -> get_updated_at()  -> format('Y-m-d H:i:s') : null,
            ':deleted_at'       => $entity -> get_deleted_at() ? $entity -> get_deleted_at()  -> format('Y-m-d H:i:s') : null,
        ]);
        return $stmt -> fetch();
    }
    public function remove($entity)
    {
        $sql = "DELETE FROM product_inventories WHERE id = :id";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':id' => $entity -> get_id(),
        ]);
    }
    public function update($entity)
    {
        $sql = "UPDATE product_inventories SET 
        quantity        = :quantity,
        quantity_buyed  = :quantity_buyed,
        color           = :color,
        size            = :size,
        product_id      = :product_id,
        deleted_at      = :deleted_at,
        updated_at      = :updated_at,
        created_at      = :created_at,
        deleted_by      = :deleted_by,
        updated_by      = :updated_by,
        created_by      = :created_by
        WHERE id        = :id";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':id' => $entity -> get_id(),
            ':quantity'         => $entity -> get_quantity(),
            ':quantity_buyed'   => $entity -> get_quantity_buyed(),
            ':size'             => $entity -> get_size(),
            ':color'            => $entity -> get_color(),
            ':product_id'       => $entity -> get_product_id(),
            ':created_by'       => $entity -> get_created_by(),
            ':updated_by'       => $entity -> get_updated_by(),
            ':deleted_by'       => $entity -> get_deleted_by(),
            ':created_at'       => $entity -> get_created_at() ? $entity -> get_created_at()  -> format('Y-m-d H:i:s') : null,
            ':updated_at'       => $entity -> get_updated_at() ? $entity -> get_updated_at()  -> format('Y-m-d H:i:s') : null,
            ':deleted_at'       => $entity -> get_deleted_at() ? $entity -> get_deleted_at()  -> format('Y-m-d H:i:s') : null,
        ]);
    }

    public function get_by_key($key, $value, $limit = null)
    {
        if($limit == null) $sql = "SELECT * FROM product_inventories where $key  = :value ORDER BY created_at DESC";
        else $sql = "SELECT * FROM product_inventories where $key  = :value ORDER BY created_at DESC Limit $limit";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':value' => $value,
        ]);

        if($limit != null && $limit == 1) {
            $product_inventory = null;
            $result = $stmt -> fetch(PDO::FETCH_ASSOC);
            if($result){
                $product_inventory = new ProductInventory();
                $this -> to_product_inventory($product_inventory, $result); 
            }
            return $product_inventory;

        }else{
            $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            $product_inventories = null;
            if ($result) {
                $product_inventories = [];
                foreach ($result as $product_inventory) {
                    $obj = new ProductInventory();
                    $this -> to_product_inventory($obj, $product_inventory);
                    array_push($product_inventories, $obj);
                }
            }
            return $product_inventories;
        }

    }
    public function to_product_inventory($product_inventory, $product_inventory_in_db)
    {
        if($product_inventory_in_db["id"] != null)
            $product_inventory -> set_id((int) $product_inventory_in_db["id"]);
        if($product_inventory_in_db["quantity"] != null)
            $product_inventory -> set_quantity((int) $product_inventory_in_db["quantity"]);
        if($product_inventory_in_db["quantity_buyed"] != null)
            $product_inventory -> set_quantity_buyed((int) $product_inventory_in_db["quantity_buyed"]);
        if($product_inventory_in_db["size"] != null)
            $product_inventory -> set_size($product_inventory_in_db["size"]);
        if($product_inventory_in_db["color"] != null)
            $product_inventory -> set_color($product_inventory_in_db["color"]);
        if($product_inventory_in_db["product_id"] != null)
            $product_inventory -> set_product_id((int) $product_inventory_in_db["product_id"]);
        if( $product_inventory_in_db["created_by"] != null)
             $product_inventory -> set_created_by($product_inventory_in_db["created_by"]);
        if( $product_inventory_in_db["updated_by"] != null)
             $product_inventory -> set_updated_by($product_inventory_in_db["updated_by"]);
        if( $product_inventory_in_db["deleted_by"] != null)
             $product_inventory -> set_deleted_by($product_inventory_in_db["deleted_by"]);
        if( $product_inventory_in_db["created_at"] != null)
             $product_inventory -> set_created_at(new DateTime($product_inventory_in_db["created_at"]));
        if( $product_inventory_in_db["updated_at"] != null)
             $product_inventory -> set_updated_at(new DateTime($product_inventory_in_db["updated_at"]));
        if( $product_inventory_in_db["deleted_at"] != null)
             $product_inventory -> set_deleted_at(new DateTime($product_inventory_in_db["deleted_at"]));
    }
    
}
