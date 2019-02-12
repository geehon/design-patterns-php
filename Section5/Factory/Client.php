<?php
include_once('TextFactory.php');
include_once('PhotoFactory.php');

class Client
{
    private $someTextObject;
    private $somePhotoObject;

    public function __construct()
    {
        $this->somePhotoObject = new PhotoFactory();
        echo $this->somePhotoObject->startFactory();
        $this->someTextObject = new TextFactory();
        echo $this->someTextObject->startFactory();
    }
}

$worker = new Client();