<?php

ini_set('display_errors', 'On');

// 定义插件文件路径
define('SWL_PATH', __DIR__);

// 安装目录
define('SWL_DIR_NAME', basename(__DIR__));

// 自动加载器
require SWL_PATH . DIRECTORY_SEPARATOR . 'autoloader.php';
