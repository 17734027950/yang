<?php
    require_once('cls_sqlite.php');
    $DB=new SQLite('YangChi.db'); //这个数据库文件名字任意
    //创建数据库表。
    $table = 'yc_test'; /** 表名 */

    $DB->query("create table $table(id integer primary key,title varchar(50))");
    
    $id = $_POST['id'];
    $title = $_POST['title'];

    $DB->query("update $table set title = '$title' where id='$id'");
?>