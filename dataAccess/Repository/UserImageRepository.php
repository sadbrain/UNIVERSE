<?php
include_once APP_ROOT . "/dataAccess/Repository/IRepository/IRepository.php";
include_once APP_ROOT . "/models/UserImage.php";
class UserImageRepository implements IRepository
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
        $sql = "SELECT * FROM user_images";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $user_images = null;
        if ($result) {
            $user_images = [];
            foreach ($result as $user_image) {
                $obj = new UserImage();
                $this->to_user_image($obj, $user_image);
                array_push($user_images, $obj);
            }
        }

        return $user_images;
    }
    public function get($id)
    {
        $sql = "SELECT * FROM user_images where id  = :id LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $id,
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $user_image = null;
        if ($result) {
            $user_image = new UserImage();
            $this->to_user_image($user_image, $result);
        }
        return $user_image;
    }
    public function add($entity)
    {
        $sql = "INSERT INTO user_images (url, size, format, upload_date, user_id)
        VALUES (:url, :size, :format, :upload_date, :user_id)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':url' => $entity->get_url(),
            ':size' => $entity->get_size(),
            ':format' => $entity->get_format(),
            ':upload_date' => $entity->get_upload_date(),
            ':user_id' => $entity->get_user_id(),
        ]);
    }
    public function remove($entity)
    {
        $sql = "DELETE FROM user_images WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $entity->get_id(),
        ]);
    }
    public function update($entity)
    {
        $sql = "UPDATE user_images SET 
        url = :url,
        size = :size,
        format = :format,
        upload_date = :upload_date,
        user_id = :user_id
        WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $entity->get_id(),
            ':url' => $entity->get_url(),
            ':size' => $entity->get_size(),
            ':format' => $entity->get_format(),
            ':upload_date' => $entity->get_upload_date(),
            ':user_id' => $entity->get_user_id(),
            // Add other columns as needed
        ]);
    }

    public function to_user_image($user_image, $user_image_in_db)
    {
        $user_image->set_id($user_image_in_db["id"]);
        $user_image->set_url($user_image_in_db["url"]);
        $user_image->set_size($user_image_in_db["size"]);
        $user_image->set_format($user_image_in_db["format"]);
        $user_image->set_upload_date($user_image_in_db["upload_date"]);
        $user_image->set_user_id($user_image_in_db["user_id"]);
    }
}
