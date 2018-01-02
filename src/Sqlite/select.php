<?php
    require_once('cls_sqlite.php');
    $DB=new SQLite('YangChi.db'); //这个数据库文件名字任意
    //创建数据库表。
    $table = 'yc_test'; /** 表名 */

    //读取数据
    print_r($DB->getlist("select * from $table order by id desc"));
?>