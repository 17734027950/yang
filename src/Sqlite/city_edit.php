<?php
	error_reporting(0);

	$cityid = $_GET['cityid'];

	require_once('cls_sqlite.php');
    $DB=new SQLite('YangChi.db'); //这个数据库文件名字任意
    //创建数据库表。
    $table = 'yc_city'; /** 表名 */

    $DB->query("create table $table(cityid integer primary key,parentid integer(20) default 0,cityname varchar(50),cityqp varchar(50),cityszm varchar(50),level tinyint default 1,status tinyint default 1)");

    $res = $DB->getlist("select * from $table order by cityid asc");

	if($_POST){

		$cityid = $_POST['cityid'];
		if($cityid){

		}else{
			$args = $_POST['args'];
		    $add = $DB->add($table,$args);

		    $res_cityid = $DB->query($add);

		    header('Location:city.php');
		    exit;
		}
		exit;
	}else{
		$title = '添加';
		if($cityid){
			$title = '编辑';
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
</head>
<body>
	<form action="" method="post">
		<p>上级城市: 
			<select name="args[parentid]" id="">
				<option value="0">作为一级城市</option>
				<?php
					foreach ($res as $key => $value) {
				?>
				<option value="<?php echo $value['cityid']; ?>"><?php echo $value['cityname']; ?></option>
				<?php } ?>
			</select>
		</p>
		<p>城市名: <input type="text" name="args[cityname]" id="" required="required"></p>
		<p>城市全拼: <input type="text" name="args[cityqp]" id="" required="required"></p>
		<p>城市首字母: <input type="text" name="args[cityszm]" id="" required="required"></p>
		<p>level: <input type="text" name="args[level]" id="" required="required"></p>
		<p> <input type="hidden" name="cityid" value="<?php echo $cityid; ?>"> </p>
		<p> <input type="submit" value="提交"> </p>
	</form>
</body>
</html>