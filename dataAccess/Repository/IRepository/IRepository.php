<?php
interface IRepository{
    public function get_all();
    public function get($id);
    public function add($entity);
    public function remove($entity);
    public function update($entity);
}   