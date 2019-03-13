# mon-container

基于PHP的工厂服务容器, 只要实现以下功能:

* 对象、函数存储绑定
* 对象、方法、函数依赖注入, 参数绑定

## 安装

```
composer require mongdch/mon-container
```

## 文档说明

#### 获取实例

例子：

```php
$container = \mon\factory\Container::instance();

```

#### 注册绑定服务
> Container bind($abstract, $server = null)

注意：register方法只支持直接的数组注册

参数说明：

|参数名|是否必须|类型|说明|
|:----|:---|:----- |-----|
| abstract | 是  | array|string | 类名称或标识符或者数组, 数组则批量注册 |
| server | 否  | string|instance | 要绑定的实例 |

例子：

```php
// 绑定对象
$container->bind('test', Test::class);
// 静态绑定服务
Container::set('demo2', A::class);

```

#### 判断容器中是否存在某个类或标识
> bool has($name)

参数说明：

|参数名|是否必须|类型|说明|
|:----|:---|:----- |-----|
| name | 是  | string | 类名称或标识符 |

例子：

```php
$exists = $container->has('demo');
var_dump($exists);

```

#### 获取实例或者结果集
> any make($name, $vars = [], $new = false)

参数说明：

|参数名|是否必须|类型|说明|
|:----|:---|:----- |-----|
| name | 是  | string | 类名称或标识符 |
| vars | 是  | array | 绑定的参数 |
| new | 否  | bool | 是否保存实例 |

例子：

```php
// 获取实例或者结果集
$ret = $container->make('demo');
var_dump($ret);

$class = $container->make('test');
var_dump($class->say());

// 静态获取实例或者结果集
$ret2 = Container::get('demo');
var_dump($ret2);

```

##### 更多用法请查看examples/index.php

---

# 版本

### 1.0.0

* 发布第一个LTS版本


---

# 致谢

感谢您的支持和阅读，如果有什么不足的地方或者建议还请@我，如果你觉得对你有帮助的话还请给个star。

---

# 关于

作者邮箱： 985558837@qq.com

作者博客： [http://blog.gdmon.com](http://blog.gdmon.com)
