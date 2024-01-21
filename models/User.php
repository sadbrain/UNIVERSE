<?php
require_once APP_ROOT . "/app/BaseModel.php";

class User extends BaseModel implements JsonSerializable
{
    private ?int $id;
    private ?string $name;
    private ?string $email;
    private ?string $password;
    private ?string $role;
    private ?string $created_by;
    private ?string $updated_by;
    private ?string $deleted_by;
    private ?DateTime $created_at;
    private ?DateTime $updated_at;
    private ?DateTime $deleted_at;
    public function __construct()
    {
        $this->id = 0;
        $this->name = null;
        $this->email = null;
        $this->password = null;
        $this->role = null;
        $this->created_by = null;
        $this->updated_by = null;
        $this->deleted_by = null;
        $this->created_at = null;
        $this->updated_at = null;
        $this->deleted_at = null;
    }
    public function jsonSerialize() {
        return get_object_vars($this);
    }
    public function get_id(): ?int
    {
        return $this->id;
    }
    public function get_name(): ?string
    {
        return $this->name;
    }
    public function get_email(): ?string
    {
        return $this->email;
    }
    public function get_password(): ?string
    {
        return $this->password;
    }
    public function get_role(): ?string
    {
        return $this->role;
    }

    public function get_created_by(): ?string
    {
        return $this->created_by;
    }
    public function get_updated_by(): ?string
    {
        return $this->updated_by;
    }
    public function get_deleted_by(): ?string
    {
        return $this->deleted_by;
    }
    public function get_created_at(): ?DateTime
    {
        return $this->created_at;
    }
    public function get_updated_at(): ?DateTime
    {
        return $this->updated_at;
    }
    public function get_deleted_at(): ?DateTime
    {
        return $this->deleted_at;
    }
    public function set_id(int $id)
    {
        $this->id = $id;
    }
    public function set_name(string $name)
    {
        $this->name = $name;
    }
    public function set_email(string $email)
    {
        $this->email = $email;
    }
    public function set_password(string $password)
    {
        $this->password = $password;
    }
    public function set_role(string $role)
    {
        $this->role = $role;
    }
    public function set_created_by(string $created_by)
    {
        $this->created_by = $created_by;
    }
    public function set_updated_by(string $updated_by)
    {
        $this->updated_by = $updated_by;
    }
    public function set_deleted_by(string $deleted_by)
    {
        $this->deleted_by = $deleted_by;
    }
    public function set_created_at(DateTime $created_at)
    {
        $this->created_at = $created_at;
    }
    public function set_updated_at(DateTime $updated_at)
    {
        $this->updated_at = $updated_at;
    }
    public function set_deleted_at(DateTime $deleted_at)
    {
        $this->deleted_at = $deleted_at;
    }
}