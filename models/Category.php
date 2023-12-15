<?php

class Category
{
    private $id;
    private $name;

    // Getter methods
    public function get_id()
    {
        return $this->id;
    }

    public function get_name()
    {
        return $this->name;
    }

    // Setter methods
    public function set_id($id)
    {
        $this->id = $id;
    }

    public function set_name($name)
    {
        $this->name = $name;
    }
}
