<?php
include_once APP_ROOT . "/dataAccess/Repository/IRepository/IRepository.php";
include_once APP_ROOT . "/models/ProductImage.php";
class ProductImageRepository implements IRepository
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
        $sql = "SELECT * FROM product_images";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $product_images = null;
        if ($result) {
            $product_images = [];
            foreach ($result as $product_image) {
                $obj = new ProductImage();
                $this->to_product_image($obj, $product_image);
                array_push($product_images, $obj);
            }
        }

        return $product_images;
    }
    public function get($id)
    {
        $sql = "SELECT * FROM product_images where id  = :id LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $id,
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $product_image = null;
        if ($result) {
            $product_image = new ProductImage();
            $this->to_product_image($product_image, $result);
        }
        return $product_image;
    }
    public function add($entity)
    {
        $sql = "INSERT INTO product_images (url, size, format, upload_date, product_id)
        VALUES (:url, :size, :format, :upload_date, :product_id)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':url' => $entity->get_url(),
            ':size' => $entity->get_size(),
            ':format' => $entity->get_format(),
            ':upload_date' => $entity->get_upload_date(),
            ':product_id' => $entity->get_product_id(),
        ]);
    }
    public function remove($entity)
    {
        $sql = "DELETE FROM product_images WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $entity->get_id(),
        ]);
    }
    public function update($entity)
    {
        $sql = "UPDATE product_images SET 
        url = :url,
        size = :size,
        format = :format,
        upload_date = :upload_date,
        product_id = :product_id
        WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $entity->get_id(),
            ':url' => $entity->get_url(),
            ':size' => $entity->get_size(),
            ':format' => $entity->get_format(),
            ':upload_date' => $entity->get_upload_date(),
            ':product_id' => $entity->get_product_id(),
            // Add other columns as needed
        ]);
    }

    public function to_product_image($product_image, $product_image_in_db)
    {
        $product_image->set_id((int) $product_image_in_db["id"]);
        $product_image->set_url($product_image_in_db["url"]);
        $product_image->set_size($product_image_in_db["size"]);
        $product_image->set_format($product_image_in_db["format"]);
        $product_image->set_upload_date(new DateTime($product_image_in_db["upload_date"]));
        $product_image->set_product_id((int) $product_image_in_db["product_id"]);
    }
}
