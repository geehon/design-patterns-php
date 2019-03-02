<?php
class HelloClone
{
    private $builtInConstructor;
    public function __construct()
    {
        echo "Hello,clone!<br />";
        $this->builtInConstructor = "Constructor creation<br />";
    }

    public function doWork()
    {
        echo $this->builtInConstructor;
        echo "I'm doing the work!<br />";
    }
}

$original = new HelloClone();
$original->doWork();

// 克隆不会执行构造函数
$cloneIt = clone $original;
$cloneIt->doWork();