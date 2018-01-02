<?php
	require_once('cls_sqlite.php');
    $DB=new SQLite('YangChi.db'); //这个数据库文件名字任意
    //创建数据库表。
    $table = 'yc_city'; /** 表名 */

    $DB->query("create table $table(cityid integer primary key,parentid integer(20) default 0,cityname varchar(50),cityqp varchar(50),cityszm varchar(50),level tinyint default 1,status tinyint default 1)");

    $res = $DB->getlist("select * from $table order by cityid asc");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>城市列表</title>
</head>
<body>
	<div>
		<a href="city_edit.php">添加城市</a>
	</div>
	
	<div>
		<table>
			<tr>
				<th>编号</th>
				<th>城市名</th>
				<th>全拼</th>
				<th>首字母</th>
				<th>level</th>
				<th>上级</th>
			</tr>
			<?php
				foreach ($res as $key => $value) {
			?>
			<tr>
				<td><?php echo $value['cityid']; ?></td>
				<td><?php echo $value['cityname']; ?></td>
				<td><?php echo $value['cityqp']; ?></td>
				<td><?php echo $value['cityszm']; ?></td>
				<td><?php echo $value['level']; ?></td>
				<td><?php echo $value['parentid']; ?></td>
			</tr>
			<?php } ?>

		</table>
	</div>

</body>
</html>