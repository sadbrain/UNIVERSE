<?php
class ProductImage
{
    private int $id;
    private string $url;
    private string $size;
    private string $format;
    private DateTime $upload_date;
    private int $product_id;

    // Getter methods
    public function get_id() : int
    {
        return $this->id;
    }

    public function get_url() : string
    {
        return $this->url;
    }

    public function get_size() : string
    {
        return $this->size;
    }

    public function get_format() : string
    {
        return $this->format;
    }

    public function get_upload_date() : DateTime
    {
        return $this->upload_date;
    }

    public function get_product_id() : int
    {
        return $this->product_id;
    }

    // Setter methods
    public function set_id(int $id)
    {
        $this->id = $id;
    }

    public function set_url(string $url)
    {
        $this->url = $url;
    }

    public function set_size(string $size)
    {
        $this->size = $size;
    }

    public function set_format(string $format)
    {
        $this->format = $format;
    }

    public function set_upload_date(DateTime $upload_date)
    {
        $this->upload_date = $upload_date;
    }

    public function set_product_id(int $product_id)
    {
        $this->product_id = $product_id;
    }
}
