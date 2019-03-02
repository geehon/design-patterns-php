# 第六章 原型设计模式（prototype design pattern）

使用克隆技术复制实例化的对象。
原型设计模式的目的是：通过使用克隆以减少实例化对象的开销。

## 何时使用原型模式：

项目要求创建某个原型对象的多个实例。

## 克隆不会启动构造函数

```php
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
```

输出：

> Hello,clone!
> Constructor creation
> I'm doing the work!
> Constructor creation
> I'm doing the work!

## 构造函数不要做具体工作

如果一个类实例化时完成大量的初始化，结果往往不灵活，而且这是过度耦合的设计。