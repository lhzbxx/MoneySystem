<?php
define('OSS2', 'http://keli.oss-cn-qingdao.aliyuncs.com/'); //把*替换成对应的Bucket 由于经常用到该链接，所以定义成常量
return array(
	//'配置项'=>'配置值'
    'SHOW_PAGE_TRACE' =>true,

    //数据库配置
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => '127.0.0.1', // 服务器地址
    'DB_NAME' => 'MoneySystem', // 数据库名
    'DB_USER' => 'root', // 用户名
    'DB_PWD' => '', // 密码
    'DB_PORT' => 3306, // 端口
    'DB_PREFIX' => '', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG' => FALSE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增

    'UPLOAD_SITEIMG_OSS2' => array (
        'maxSize' => 5 * 1024 * 1024,//文件大小
        'rootPath' => './',
        'saveName' => array ('uniqid', ''),
        'savePath' => 'fapiao/',    //保存路径
        'subName'  =>  array('date', 'Y-m'),
        'driver' => 'Aliyun',
        'driverConfig' => array (
            'AccessKeyId' => 'wJpWSmKgD5G7iL8Y',    //AccessKeyId
            'AccessKeySecret' => 'q8p58zLho7FWt9DCHmQHRIlbjTknv4',//AccessKeySecret
            'domain' => OSS2,        //
            'Bucket' => 'keli',         //Bucket
            'Endpoint' => 'http://oss-cn-qingdao.aliyuncs.com',//'http://oss-cn-qingdao-internal.aliyuncs.com',
            //如果是杭州的服务器
            //Endpoint设置成
            //'Endpoint' => 'http://oss-cn-hangzhou.aliyuncs.com',
        ),
    ),
);