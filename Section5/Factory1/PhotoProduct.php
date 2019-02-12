<?php
include_once('Product.php');

class PhotoProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct = "<!DOCTYPE html><html><head><meta charset='UTF-8' />";
        $this->mfgProduct .= "<title>Mountain Factory</title>";
        $this->mfgProduct .= "</head><body>";
        $this->mfgProduct .= "<img src='https://i.loli.net/2019/02/12/5c622c6ed5044.png' width='200' height='50'/> ";
        $this->mfgProduct .= "</body></html>";
        return $this->mfgProduct;
    }
}