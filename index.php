<?php
//(0)Home应用常量定义
define("DS",DIRECTORY_SEPARATOR);//斜线(/、\)，根据操作系统决定
define("ROOT_PATH",getcwd().DS);//网站根目录
define("APP_PATH",ROOT_PATH."Home".DS);//平台目录
//(1)包含核心框架类文件
require(ROOT_PATH."Frame".DS."Frame.class.php");
//(2)框架初始化
\Frame\Frame::run();
?>