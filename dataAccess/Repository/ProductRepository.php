<?php
include_once APP_ROOT . "/dataAccess/Repository/IRepository/IRepository.php";
include_once APP_ROOT . "/models/Product.php";
class ProductRepository implements IRepository
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
        $sql = "SELECT * FROM products where deleted_by IS null && deleted_at IS null  ORDER BY created_at DESC";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute();
        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);

        $products = null;
        if ($result) {
            $products = [];
            foreach ($result as $product) {
                $obj = new Product();
                $this -> to_product($obj, $product);
                array_push($products, $obj);
            }
        }

        return $products;
    }
    public function get($id)
    {
        $sql = "SELECT * FROM products where id  = :id LIMIT 1";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
        $result = $stmt -> fetch(PDO::FETCH_ASSOC);

        $product = null;
        if ($result) {
            $product = new Product();
            $this -> to_product($product, $result);
        }
        return $product;
    }
    public function add($entity)
    {
        $sql = "INSERT INTO products 
        (name, thumbnail, brand, slug, description, 
        price, rating, category_id, created_by,
         updated_by, deleted_by, created_at, updated_at, deleted_at)
        VALUES (:name, :thumbnail, :brand, :slug, :description,  
        :price, :rating, :category_id, :created_by, 
         :updated_by, :deleted_by, :created_at, :updated_at, :deleted_at)";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':name'         => $entity -> get_name(),
            ':thumbnail'    => $entity -> get_thumbnail(),
            ':brand'        => $entity -> get_brand(),
            ':slug'         => $entity -> get_slug(),
            ':description'  => $entity -> get_description(),
            ':price'        => $entity -> get_price(),
            ':rating'       => $entity -> get_rating(),
            ':category_id'  => $entity -> get_category_id(),
            ':created_by'   => $entity -> get_created_by(),
            ':updated_by'   => $entity -> get_updated_by(),
            ':deleted_by'   => $entity -> get_deleted_by(),
            ':created_at'   => $entity -> get_created_at() ? $entity -> get_created_at() -> format('Y-m-d H:i:s') : null,
            ':updated_at'   => $entity -> get_updated_at() ? $entity -> get_updated_at() -> format('Y-m-d H:i:s') : null,
            ':deleted_at'   => $entity -> get_deleted_at() ? $entity -> get_deleted_at() -> format('Y-m-d H:i:s') : null,
        ]);
    }
    public function get_last_entity(){
        $sql = "SELECT * FROM products where deleted_by IS null && deleted_at IS null  ORDER BY id DESC limit 1";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute();
        $result = $stmt -> fetch(PDO::FETCH_ASSOC);
        $product = null;
        if ($result) {
            $product = new Product();
            $this -> to_product($product, $result);
        }

        return $product;
    }
    public function get_by_category_id($id){
        $sql = "SELECT * FROM universe.products where category_id = :id";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);

        $products = null;
        if ($result) {
            $products = [];
            foreach ($result as $product) {
                $obj = new Product();
                $this -> to_product($obj, $product);
                array_push($products, $obj);
            }
        }

        return $products;
    }
    public function remove($entity)
    {
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $this -> db->prepare($sql);
        $stmt -> execute([
            ':id' => $entity -> get_id(),
        ]);
    }
    public function update($entity)
    {
        $sql = "UPDATE products SET 
        name        = :name,
        thumbnail   = :thumbnail,
        brand       = :brand,
        slug        = :slug,
        description = :description,
        price       = :price,
        rating      = :rating,
        category_id = :category_id,
        deleted_at  = :deleted_at,
        updated_at  = :updated_at,
        created_at  = :created_at,
        deleted_by  = :deleted_by,
        updated_by  = :updated_by,
        created_by  = :created_by
        WHERE id    = :id";
        $stmt = $this -> db->prepare($sql);
        $stmt -> execute([
            ':id'         => $entity -> get_id(),
            ':name'       => $entity -> get_name(),
            ':thumbnail'  => $entity -> get_thumbnail(),
            ':brand'      => $entity -> get_brand(),
            ':slug'       => $entity -> get_slug(),
            ':description'=> $entity -> get_description(),
            ':price'      => $entity -> get_price(),
            ':rating'     => $entity -> get_rating(),
            ':category_id'=> $entity -> get_category_id(),
            ':created_by' => $entity -> get_created_by(),
            ':updated_by' => $entity -> get_updated_by(),
            ':deleted_by' => $entity -> get_deleted_by(),
            ':created_at' => $entity -> get_created_at() ? $entity -> get_created_at() -> format('Y-m-d H:i:s') : null,
            ':updated_at' => $entity -> get_updated_at() ? $entity -> get_updated_at() -> format('Y-m-d H:i:s') : null,
            ':deleted_at' => $entity -> get_deleted_at() ? $entity -> get_deleted_at() -> format('Y-m-d H:i:s') : null,
            // Add other columns as needed
        ]);
    }

    public function to_product($product, $product_in_db)
    {
        if($product_in_db["id"] != null)
            $product->set_id((int) $product_in_db["id"]);
        if($product_in_db["name"] != null)
            $product->set_name($product_in_db["name"]);
        if($product_in_db["thumbnail"] != null)
            $product->set_thumbnail($product_in_db["thumbnail"]);
        if($product_in_db["brand"] != null)
            $product->set_brand($product_in_db["brand"]);
        if($product_in_db["slug"] != null)
            $product->set_slug($product_in_db["slug"]);
        if($product_in_db["description"] != null)
            $product->set_description($product_in_db["description"]);
        if($product_in_db["price"] != null)
            $product->set_price((float) $product_in_db["price"]);
        if($product_in_db["rating"] != null)
            $product->set_rating((float) $product_in_db["rating"]);
        if($product_in_db["category_id"] != null)
            $product->set_category_id((int) $product_in_db["category_id"]);
        if( $product_in_db["created_by"] != null)
             $product->set_created_by($product_in_db["created_by"]);
        if( $product_in_db["updated_by"] != null)
             $product->set_updated_by($product_in_db["updated_by"]);
        if( $product_in_db["deleted_by"] != null)
             $product->set_deleted_by($product_in_db["deleted_by"]);
        if( $product_in_db["created_at"] != null)
             $product->set_created_at(new DateTime($product_in_db["created_at"]));
        if( $product_in_db["updated_at"] != null)
             $product->set_updated_at(new DateTime($product_in_db["updated_at"]));
        if( $product_in_db["deleted_at"] != null)
             $product->set_deleted_at(new DateTime($product_in_db["deleted_at"]));
    }
}

