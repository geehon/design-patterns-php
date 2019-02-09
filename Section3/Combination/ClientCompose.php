<?php
include_once('DoText.php');
include_once('DoMath.php');
// 使用组合
class ClientCompose
{
    private $added;
    private $divided;
    private $textNum;
    private $output;

    public function __construct()
    {
        $useMath = new DoMath();
        $this->added = $useMath->simpleAdd(40, 60);
        $this->divided = $useMath->simpleDivide($this->added, 25);

        $useText = new DoText();
        $this->textNum = $useText->numToText($this->divided);
        $this->output = $useText->addFace("you results", $this->textNum);
        echo $this->output;
    }
}

$worker = new ClientCompose();