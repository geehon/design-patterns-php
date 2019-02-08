<?php
/**
 * 定义一个接口
 */
interface IMethodHolder
{
    public function getInfo($info);

    public function sendInfo($info);

    public function calculate($first, $second);
}