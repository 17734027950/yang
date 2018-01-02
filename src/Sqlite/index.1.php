<?php
    /***
    //应用举例
    require_once('cls_sqlite.php');
    //创建实例
    $DB=new SQLite('blog.db'); //这个数据库文件名字任意
    //创建数据库表。
    $DB->query("create table test(id integer primary key,title varchar(50))");
    //接下来添加数据
    $DB->query("insert into test(title) values('泡菜')");
    $DB->query("insert into test(title) values('蓝雨')");
    $DB->query("insert into test(title) values('Ajan')");
    $DB->query("insert into test(title) values('傲雪蓝天')");
    //读取数据
    print_r($DB->getlist('select * from test order by id desc'));
    //更新数据
    $DB->query('update test set title = "三大" where id = 9');
    ***/
    require_once('cls_sqlite.php');
    $DB=new SQLite('YangChi.db'); //这个数据库文件名字任意
    //创建数据库表。
    $table = 'yc_test'; /** 表名 */

    $DB->query("create table $table(id integer primary key,title varchar(50),content text default null,status tinyint default 1)");

    $DB->query("alter table $table add age int default 0");
   
    //读取数据
    // print_r($DB->getlist("select * from $table order by id desc"));
    // die;

    $args[] = array('title','杨驰');
    $args[] = array('content','杨驰');
    $args[] = array('age','29');
    $args[] = array('status','1');
    $add = $DB->add($table,$args);

    // echo $add;
    $DB->query($add);

    print_r($DB->getlist("select * from $table order by id desc"));

    die;


    $args[] = array('title','杨');
    $args[] = array('status','1');
    $condition[] = array('id','1');
    $condition[] = array('status','1');
    $res = $DB->update($table,$args,$condition);

    print_r($res);

?>