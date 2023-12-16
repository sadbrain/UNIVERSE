<?php

class Category
{
    private int $id;
    private string $name;

    // Getter methods
    public function get_id() : int
    {
        return $this->id;
    }

    public function get_name() : string
    {
        return $this->name;
    }

    // Setter methods
    public function set_id(int $id)
    {
        $this->id = $id;
    }

    public function set_name(string $name)
    {
        $this->name = $name;
    }
}
