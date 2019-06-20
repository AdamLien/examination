<?php

// 关闭调试模式
define('YII_DEBUG', false);

// 引入核心文件
require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

// 引入配置文件
$config = require(__DIR__ . '/../config/web.php');

// 运行
(new yii\web\Application($config))->run();
