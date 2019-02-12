<?php
include_once('Creator.php');
include_once('PhotoProduct.php');

class PhotoFactory extends Creator
{
    protected function factoryMethod()
    {
        $product = new PhotoProduct();
        return $product->getProperties();
    }
}