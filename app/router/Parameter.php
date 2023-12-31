<?php
class Parameter{
    private $pairs = [];
    public function get_pairs(){
        return $this->pairs; 
    }
    public function __construct(string $param){
        $pairs = explode("&", $param);
        foreach ($pairs as $pair){
            $p = explode("=", $pair);
            if (count($p) == 2 ) //thường khi cắt sẽ được 2 phần tử
            {
                $key = trim($p[0]);
                $value = trim($p[1]);
                $this->pairs[$key] = $value;
            }
        }
    }
}