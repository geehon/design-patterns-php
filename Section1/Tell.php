<?php
/**
 * 单一职责,单例模式
 * 
 * 类中的方法修饰符没有限制，修饰符是在非类内部直接调用时生效，
 * private 只能在类内部访问，实例化对象(new)的时候，会调用构造方法，
 * 但调用时发现构造方法修饰符为 private，不能在外部直接访问，所以报错，
 * 如果构造方法被私有化（private），就不能再使用  new 关键字，
 * 需要在类中写一个静态方法，因为静态方法调用不会走构造方法，
 * 再在静态方法中调用构造函数即可，此过程为“单例模式”的核心逻辑
 */
class Tell
{
    public $userAgent;

    private function __construct()
    {
        $this->userAgent = $_SERVER['HTTP_USER_AGENT'];
    }
    
    public static function agent()
    {
        return new Tell();
    }
}

$user = Tell::agent();
echo $user->userAgent;