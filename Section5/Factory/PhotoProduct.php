<?php
include_once('Product.php');

class PhotoProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct = "<img src=\"https://i.loli.net/2019/02/12/5c622c6ed5044.png\"><br />";
        return $this->mfgProduct;
    }
}