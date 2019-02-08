<?php

include_once('IMethodHolder.php');

class ImplementAlpha implements IMethodHolder
{
    public function getInfo($info)
    {
        echo "This is News!" . $info . "<br/>";
    }

    public function sendInfo($info)
    {
        return $info;
    }

    public function calculate($first, $second)
    {
        $caculated = $first * $second;
        return $caculated;
    }
    // 只要保证接口的方法都实现了，就可以按需增加任意的方法和属性
    public function useMethods()
    {
        $this->getInfo("The sky is falling···");
        echo $this->sendInfo("Vote for Senator Snort") . "<br/>";
        echo "You make $" . $this->calculate(20, 15) . " in your part-time job<br/>";
    }
}

$worker = new ImplementAlpha();
$worker->useMethods();