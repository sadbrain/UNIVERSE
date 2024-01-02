<?php
require_once "Parameter.php";
class Request{
    private $unit_of_work;
    public function __construct(string $request, $unit_of_work){
        $this -> unit_of_work = $unit_of_work;
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
        //có tham số sau dấu hỏi
        if($is_question_mark){
            $this ->route = explode("?", $request)[0];
            $params = explode("?", $request)[1];
            $parameter = new Parameter($params);
            $this -> parameter = $parameter->get_pairs();
        }else{

            $arr_req = explode("/", $request);
            //xóa phần tử "" ở đầu và cuối mảng
            if($arr_req[0] == ""){
                array_shift($arr_req);
            }
            if($arr_req[count($arr_req) - 1] == ""){
                array_pop($arr_req);
            }

            if(count($arr_req) >= 3){
                $area = $arr_req[0];
                $controller = $arr_req[1];
         
                //case 1
                    //không có tên action
                    //chỉ có controller
                $controllerPath = "area/".strtolower($area)."/controllers/".$controller."Controller.php";

                if(file_exists(APP_ROOT . "/" . $controllerPath)){
                    $action = isset($arr_req[3]) ? $arr_req[3] : null;
                    //không có action
                    if($action == null){
                        $this -> route = "/".implode("/", $arr_req);
                    }
                    //không có action nhưng nó là index và có tham số
                    require_once($controllerPath);
                    $controller_instance =  $controller."Controller";
                     $controller_instance = new $controller_instance($this -> unit_of_work);
                        if(!method_exists($controller_instance, $action)){
                        $this -> route = "/".implode("/", array_slice($arr_req,0,3));
                        $this -> parameter = array_slice($arr_req,3,count($arr_req)-1);
                    }else{
                        $this -> route = "/".implode("/", array_slice($arr_req,0,4)) ;
                        $this -> parameter = array_slice($arr_req,4,count($arr_req)-1);
                    }

                }
            }else {
                $this -> route = $request;
            }

        
        }



    }
    
}