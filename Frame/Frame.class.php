<?php
//声明命名空间
namespace Frame;
//框架初始类文件
final class Frame
{
    public static function run()
    {
        //网页字符集//初始化配置文件//获取路由参数//常用常量设置 类的自动加载,请求分发
        self::initCharset();//设置字符集
        self::initConfig();//设置配置文件
//        self::initRoute();//初始化路由参数
//        self::ininConst();//初始化常量
//        self::initAutoload();//类的自动加载
//        self::initDispatch();//请求分发

    }

    private static function initCharset()
    {
        header("content-type:text/html;charset=utf-8");
        echo "背景";
    }

    private static function initConfig()
    {
        
    }


}