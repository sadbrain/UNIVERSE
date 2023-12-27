<?php
class BaseController{
    protected $controller;
    protected $controller_path;
    protected IUnitOfWork $unit_of_work;
    protected $action;
    protected $area;
    public function __construct(IUnitOfWork $unit_of_work, $controller, $controller_path, $area, $action)
    {
        $this->unit_of_work = $unit_of_work;
        $this->controller = $controller;
        $this->controller_path = $controller_path;
        $this->action = $action;
        $this->area = $area;
    }
    public function view($action = null, $controller = null, $area = null){
        if($action == null) $action = $this->action;
        if($controller == null) $controller =substr($this -> controller, 0, strpos($this -> controller, "Controller"));
        if($area == null) $area = $this->area;
        return APP_ROOT . "/area/$area/views/$controller/$action.php";
        
    }
    public function redirct_to_action($action){
        $controller =substr($this -> controller, 0, strpos($this -> controller, "Controller"));

        header("Location: /".URL_SUBFOLDER ."/" .ucfirst($this -> area). "/". $controller. "/" . $action);
    }
    public static function render_body($view_body){
        require_once $view_body;
    }
    public function use_layout($view_body, $view_layout = null){
        echo $view_layout;
        if($view_layout == null)
            return APP_ROOT . "/views/Shared/_layout.php";
        else 
            return APP_ROOT . "/area/admin/views/Layout/_layout.php";
    }
}