<?php
interface IRepository{
    public function get_all();
    public function get($callback);
    public function add($entity);
    public function remove($entity);
}