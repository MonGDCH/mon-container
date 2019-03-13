<?php

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/Test.php';
require __DIR__ . '/A.php';

function demo($a)
{
    return $a;
}

use \mon\factory\Container;

// 获取实例
$container = Container::instance();

// 绑定匿名方法
$container->bind('demo', function(){
    return 'Closure';
});

// 绑定对象
$container->bind('test', Test::class);

// 判断是否存在某个服务
$exists = $container->has('demo');
var_dump($exists);

// 获取实例或者结果集
$ret = $container->make('demo');
var_dump($ret);

$class = $container->make('test');
var_dump($class->say());

// 执行函数
$demo = $container->invokeFunction('demo', [123456]);
var_dump($demo);

// 执行对象方法
$test = $container->invokeMethd('Test@demo');
var_dump($test);

// 获取对象实例
$a = $container->invokeClass(A::class);
var_dump($a);


// 静态获取实例或者结果集, 调用make方法
$ret2 = Container::get('demo');
var_dump($ret2);

// 静态绑定服务, 调用bind方法
Container::set('demo2', A::class);