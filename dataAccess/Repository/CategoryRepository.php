<?php
include_once APP_ROOT . "/dataAccess/Repository/IRepository/IRepository.php";
include_once APP_ROOT . "/models/Category.php";
class CategoryRepository implements IRepository
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
        $sql = "SELECT * FROM categories";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $categories = null;
        if ($result) {
            $categories = [];
            foreach ($result as $category) {
                $cate = new Category();
                $this->to_category($cate, $category);
                array_push($categories, $cate);
            }
        }

        return $categories;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM categories where id  = :id LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $id,
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $category = null;
        if ($result) {
            $category = new Category();
            $this->to_category($category, $result);
        }
        return $category;
    }

    public function get_by_key($key, $value)
    {
        $sql = "SELECT * FROM categories where $key  = :value";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':value' => $value,
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $categories = null;
        if ($result) {
            $categories = [];
            foreach ($result as $category) {
                $cate = new Category();
                $this->to_category($cate, $category);
                array_push($categories, $cate);
            }
        }

        return $categories;
    }

    public function add($entity)
    {
        $sql = "INSERT INTO categories (name) VALUES (:name)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':name' => $entity->get_name(),
        ]);
    }
    public function remove($entity)
    {
        $sql = "DELETE FROM categories WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $entity->get_id(),
        ]);
    }
    public function update($entity)
    {
        $sql = "UPDATE categories SET name = :name WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $entity->get_id(),
            ':name' => $entity->get_name(),
            // Add other columns as needed
        ]);
    }
    public function to_category($category, $category_in_db)
    {
        $category->set_id($category_in_db["id"]);
        $category->set_name($category_in_db["name"]);
    }
}
