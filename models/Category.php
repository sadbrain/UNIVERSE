<?php
require_once APP_ROOT ."/app/BaseModel.php";

class Category extends BaseModel  implements JsonSerializable
{
    private ?int $id;
    private ?string $name;
    private ?string $slug;
    private ?string $description;
    private ?string $created_by;
    private ?string $updated_by;
    private ?string $deleted_by;
    private ?DateTime $created_at;
    private ?DateTime $updated_at;
    private ?DateTime $deleted_at;
    public function __construct(){
        $this -> id = 0;
        $this -> name = null;
        $this -> slug = null;
        $this -> description = null;
        $this -> created_by = null;
        $this -> updated_by = null;
        $this -> deleted_by = null;
        $this -> created_at = null;
        $this -> updated_at = null;
        $this -> deleted_at = null;
    }
    public function jsonSerialize() {
        return get_object_vars($this);
    }
    // Getter methods
    public function get_id() : ?int
    {
        return $this -> id;
    }
    public function get_name() : ?string
    {
        return $this -> name;
    }
    public function get_slug() : ?string
    {
        return $this -> slug;
    }
    public function get_description() : ?string
    {
        return $this -> description;
    }
    public function get_created_by() : ?string
    {
        return $this -> created_by;
    }
    public function get_updated_by() : ?string
    {
        return $this -> updated_by;
    }
    public function get_deleted_by() : ?string
    {
        return $this -> deleted_by;
    }
    public function get_created_at() : ?DateTime
    {
        return $this -> created_at;
    }
    public function get_updated_at() : ?DateTime
    {
        return $this -> updated_at;
    }
    public function get_deleted_at() : ?DateTime
    {
        return $this -> deleted_at;
    }
    // Setter methods
    public function set_id(int $id)
    {
        $this -> id = $id;
    }
    public function set_name(string $name)
    {
        $this -> name = $name;
    }
    public function set_slug(string $slug) 
    {
         $this -> slug = $slug;
    }
    public function set_description(string $description) 
    {
         $this -> description = $description;
    }
    public function set_created_by(string $created_by) 
    {
         $this -> created_by = $created_by;
    }
    public function set_updated_by(string $updated_by) 
    {
         $this -> updated_by = $updated_by;
    }
    public function set_deleted_by(string $deleted_by)
    {
         $this -> deleted_by = $deleted_by;
    }
    public function set_created_at(DateTime $created_at)
    {
         $this -> created_at = $created_at;
    }
    public function set_updated_at(DateTime $updated_at)
    {
         $this -> updated_at = $updated_at;
    }
    public function set_deleted_at(DateTime $deleted_at)
    {
         $this -> deleted_at = $deleted_at;
    }
}