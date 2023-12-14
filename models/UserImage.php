<?php

class UserImage
{
    private $id;
    private $url;
    private $size;
    private $format;
    private $upload_date;
    private $user_id;

    // Getter methods
    public function get_id() {
        return $this->id;
    }

    public function get_url() {
        return $this->url;
    }

    public function get_size() {
        return $this->size;
    }

    public function get_format() {
        return $this->format;
    }

    public function get_upload_date() {
        return $this->upload_date;
    }

    public function get_user_id() {
        return $this->user_id;
    }

    // Setter methods
    public function set_id($id) {
        $this->id = $id;
    }

    public function set_url($url) {
        $this->url = $url;
    }

    public function set_size($size) {
        $this->size = $size;
    }

    public function set_format($format) {
        $this->format = $format;
    }

    public function set_upload_date($upload_date) {
        $this->upload_date = $upload_date;
    }

    public function set_user_id($user_id) {
        $this->user_id = $user_id;
    } 

}
?>