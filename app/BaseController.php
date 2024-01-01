<?php
class BaseController{
    protected IUnitOfWork $unit_of_work;
    protected $area;
    protected $layout;
    protected $shared_data; // share data among pages
    public function __construct($unit_of_work){
        $this->unit_of_work = $unit_of_work;
    }

    public function view($url, $data = null) {
        if($this->shared_data) {
            extract($this->shared_data);
        }
        if ($data != null) {
            extract($data);
        }
        if($this->area) {
            $content = $this->load_view($url);
            require $this->load_layout();
        }else {
            require $url;
        }
        exit();
    }
    private function load_layout() {
        return APP_ROOT . "/area/$this->area/views/$this->layout.php";
    }

    private function load_view($view) {
        return APP_ROOT . "/area/$this->area/views/$view.php";
    }

    public function json($arr){
        header('Content-Type: application/json');
        echo json_encode($arr);
        exit(); // end here
    }

    public static function redirect($url) {
        header('Location: '.$url.'');
    }

}