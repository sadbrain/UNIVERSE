<?php
include_once APP_ROOT . "/dataAccess/Repository/IRepository/IRepository.php";
include_once APP_ROOT . "/models/Category.php";
class CategoryRepository implements IRepository
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
        $sql = "SELECT * FROM categories Where deleted_by IS null && deleted_at IS null ORDER BY created_at DESC ";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute();
        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);

        $categories = null;
        if ($result) {
            $categories = [];
            foreach ($result as $category) {
                $cate = new Category();
                $this -> to_category($cate, $category);
                array_push($categories, $cate);
            }
        }

        return $categories;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM categories where id  = :id LIMIT 1";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
        $result = $stmt -> fetch(PDO::FETCH_ASSOC);

        $category = null;
        if ($result) {
            $category = new Category();
            $this -> to_category($category, $result);
        }
        return $category;
    }

    public function get_by_key($key, $value)
    {
        $sql = "SELECT * FROM categories where $key  = :value ORDER BY created_at DESC";
        $stmt = $this -> db -> prepare($sql);
        
        $stmt -> execute([
            ':value' => $value,
        ]);
        $result = $stmt -> fetch(PDO::FETCH_ASSOC);

        $categories = null;
        if ($result) {
            $categories = [];
            foreach ($result as $category) {
                $cate = new Category();
                $this -> to_category($cate, $category);
                array_push($categories, $cate);
            }
        }

        return $categories;
    }

    public function add($entity)
    {
        $sql = "INSERT INTO categories 
        (name, slug, description, created_by,
         updated_by, deleted_by, created_at, updated_at, deleted_at) 
         VALUES (:name, :slug, :description, :created_by, 
         :updated_by, :deleted_by, :created_at, :updated_at, :deleted_at)";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':name'       => $entity -> get_name(),
            ':slug'       => $entity -> get_slug(),
            ':description'=> $entity -> get_description(),
            ':created_by' => $entity -> get_created_by(),
            ':updated_by' => $entity -> get_updated_by(),
            ':deleted_by' => $entity -> get_deleted_by(),
            ':created_at' => $entity -> get_created_at() ? $entity -> get_created_at()  -> format('Y-m-d H:i:s') : null,
            ':updated_at' => $entity -> get_updated_at() ? $entity -> get_updated_at() -> format('Y-m-d H:i:s') : null,
            ':deleted_at' => $entity -> get_deleted_at() ? $entity -> get_deleted_at() -> format('Y-m-d H:i:s') : null,
        ]);
    }
    public function remove($entity)
    {
        $sql = "DELETE FROM categories WHERE id = :id";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':id' => $entity -> get_id(),
        ]);
    }
    public function update($entity)
    {
        $sql = "UPDATE categories SET 
        name        = :name,
        deleted_at  = :deleted_at,
        updated_at  = :updated_at,
        created_at  = :created_at,
        deleted_by  = :deleted_by,
        updated_by  = :updated_by,
        created_by  = :created_by,
        description = :description,
        slug        = :slug 
        WHERE id    = :id";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':id'         => $entity -> get_id(),
            ':name'       => $entity -> get_name(),
            ':slug'       => $entity -> get_slug(),
            ':description'=> $entity -> get_description(),
            ':created_by' => $entity -> get_created_by(),
            ':updated_by' => $entity -> get_updated_by(),
            ':deleted_by' => $entity -> get_deleted_by(),
            ':created_at' => $entity -> get_created_at() ? $entity -> get_created_at()  -> format('Y-m-d H:i:s') : null,
            ':updated_at' => $entity -> get_updated_at() ? $entity -> get_updated_at ()-> format('Y-m-d H:i:s') : null,
            ':deleted_at' => $entity -> get_deleted_at() ? $entity -> get_deleted_at ()-> format('Y-m-d H:i:s') : null,
            // Add other columns as needed
        ]);
    }
    public function to_category($category, $category_in_db)
    {
        if( $category_in_db["id"] != null) $category -> set_id((int) $category_in_db["id"]);
        if( $category_in_db["name"] != null) $category -> set_name($category_in_db["name"]);
        if( $category_in_db["slug"] != null) $category -> set_slug($category_in_db["slug"]);
        if( $category_in_db["description"] != null) $category -> set_description($category_in_db["description"]);
        if( $category_in_db["created_by"] != null) $category -> set_created_by($category_in_db["created_by"]);
        if( $category_in_db["updated_by"] != null) $category -> set_updated_by($category_in_db["updated_by"]);
        if( $category_in_db["deleted_by"] != null) $category -> set_deleted_by($category_in_db["deleted_by"]);
        if( $category_in_db["created_at"] != null) $category -> set_created_at(new DateTime($category_in_db["created_at"]));
        if( $category_in_db["updated_at"] != null) $category -> set_updated_at(new DateTime($category_in_db["updated_at"]));
        if( $category_in_db["deleted_at"] != null) $category -> set_deleted_at(new DateTime($category_in_db["deleted_at"]));
    }
    public function to_category_array($category)
    {
        // $category_array = [];
        $category_array["id"] =  $category -> get_id();
        $category_array["name"] =  $category -> get_name();
        $category_array["slug"] =  $category -> get_slug();
        $category_array["description"] =  $category -> get_description();
        $category_array["created_by"] =  $category -> get_created_by();
        $category_array["updated_by"] =  $category -> get_updated_by();
        $category_array["deleted_by"] =  $category -> get_deleted_by();
        $category_array["created_at"] =  $category -> get_created_at();
        $category_array["updated_at"] =  $category -> get_updated_at();
        $category_array["deleted_at"] =  $category -> get_deleted_at();
        return $category_array;
    }
}
