<?php
require_once APP_ROOT . "/app/BaseModel.php";

class UserAccess extends BaseModel implements JsonSerializable
{
    private ?int $id;
    private ?string $ip_address;
    private ?string $user_agent;
    private ?string $server_name;
    private ?DateTime $visit_date;
    public function __construct()
    {
        $this->id = 0;
        $this->ip_address = null;
        $this->user_agent = null;
        $this->server_name = null;
        $this->visit_date = null;
    }
    public function jsonSerialize() {
        return get_object_vars($this);
    }
    // Getter methods
    public function get_id(): ?int
    {
        return $this->id;
    }
    public function get_ip_address(): ?string
    {
        return $this->ip_address;
    }
    public function get_user_agent(): ?string
    {
        return $this->user_agent;
    }
    public function get_server_name(): ?string
    {
        return $this->server_name;
    }


    public function get_visit_date(): ?DateTime
    {
        return $this->visit_date;
    }


    // Setter methods
    public function set_id(int $id)
    {
        $this->id = $id;
    }
    public function set_ip_address(string $ip_address)
    {
        $this->ip_address = $ip_address;
    }
    public function set_user_agent(string $user_agent)
    {
        $this->user_agent = $user_agent;
    }
    public function set_server_name(string $server_name)
    {
        $this->server_name = $server_name;
    }


    public function set_visit_date(DateTime $visit_date)
    {
        $this->visit_date = $visit_date;
    }

}
