<?php
    require_once('cls_sqlite.php');
    $DB=new SQLite('YangChi.db'); //这个数据库文件名字任意
    //创建数据库表。
    $table = 'yc_test'; /** 表名 */

    $DB->query("create table $table(id integer primary key,title varchar(50))");
    
    $title = $_POST['title'];
    $count = $DB->RecordCount("select * from $table where title='{$title}'");
    if($count=='0'){
        $DB->query("insert into $table(title) values('{$title}')");
    }
    //读取数据
    print_r($DB->getlist("select * from $table order by id desc"));
?>