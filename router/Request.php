<?php
require_once "Parameter.php";
class Request{
    public function __construct(string $request){
        $this -> analyze($request);
    }
    private $route;
    private $parameter;
    public function get_route(){
        return $this -> route;
    }
    public function get_parameter(){
        return $this -> parameter;
    }
    private function analyze($request){

        //chech có tham số hay không
        $is_question_mark = strpos($request, "?");

        if($is_question_mark){
            $this ->route = explode("?", $request)[0]."?";
            $params = explode("?", $request)[1];
            $parameter = new Parameter($params);
            $this -> parameter = $parameter->get_pairs();

        }else{
            $route =  explode("?", $request)[0];
            $array_route = explode("/", $request);
            $last_element = $array_route[count($array_route)-1];
            if(is_numeric($last_element)){
                $this -> parameter = ["id" => $last_element];
                array_pop($array_route);
                $this ->route = implode("/", $array_route) ."/";
            }else{
                $this ->route = $route;

            }
            
           
            // print_r( $this ->route);
            // print_r( $this ->parameter);
        }



    }
    
}