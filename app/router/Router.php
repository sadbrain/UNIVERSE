<?php
require_once "Request.php";
class Router
{

    //lưu controller và action
    private $routing_table = [];
    //chứa key là những router, value là thông tin về route đó
    //nhóm 3 lệnh dưới biến router thành một singleton
    private static ?Router $_instance = null;

    public function __construct()
    {
        $this->routing_table = [];
    }
    public function get_routing_table()
    {
        return $this->routing_table;
    }
    public static function get_router()
    {
        if (!self::$_instance) {
            self::$_instance = new Router();
        }
        return self::$_instance;
    }
    public function add(string $name_route, string $area, string $controller, string $action, array $params = null)
    {

        //kiểm tra route có trong danh sách _routingTable, có thì tiến hành đăng ký
        $this->routing_table[$name_route] =  [
            "area" => $area,
            "controller" => $controller,
            "action" => $action,
            "params" => $params,
        ];
    }

    public function forward(string $request, $unit_of_work)
    {
        $req = new Request($request, $unit_of_work);
        $parameter = $req->get_parameter();
        $route = $req->get_route();
        if (!array_key_exists($route, $this->routing_table)) {
            echo "không tìm thấy trang";
        } else {
            
            $controller = $this->routing_table[$route]['controller'];
            $action = $this->routing_table[$route]['action'];
            $area = $this->routing_table[$route]['area'];
            $controllerPath = "area/$area/controllers/$controller.php";
            $params = $this->routing_table[$route]['params'];

            if ($controllerPath) {
                require_once($controllerPath);
                $controller = new $controller($unit_of_work);
                
                // Kiểm tra và gọi action

                if (method_exists($controller, $action)) {

                    if ($parameter == null && $params ==null) {
                        $controller->{$action}();

                    }else if($params == null && $parameter != null){
                        echo "parameter not found";

                    }else if($params != null && $parameter == null){
                        $controller->{$action}();

                    }else{
                        if(count($parameter) <= count($params)){
                            call_user_func_array([$controller, $action], $parameter);

                        }
                        else{
                        echo "parameter is so much";

                        }
                    }
                } else {
                    echo "Action '$action' không tồn tại trong controller '$controllerName'.";
                }
            } else {
                echo "Không tìm thấy file controller '$controllerPath'.";
            }
        }
    }
}
// parameter null params null;
// parameter co params null;
// paramter null params co;
// paramter co params co;
