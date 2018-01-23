<?php 
	//日历表格制作
	header("Content-type:text/html;charset=utf-8");
	$today = date('d');
	$nextyear = $preyear = $y = @$_GET['y']?$_GET['y']:date('Y');
	$m = @$_GET['m']?$_GET['m']:date('m');
	if($m == 12){
		$nextyear++;
		$am = 1;
		$pm = $m-1;
	}else{
		if($m ==1){
			$preyear--;
			$pm = 12;
			$am = $m+1;
		}else{
			$pm = $m-1;
			$am = $m+1;
		}
	}
	echo "<div style='margin-bottom:10px;'><a href='rili.php?y=$preyear&m=$pm'>上一月</a>";
	echo "【",$y,'年',$m,'月',"】";
	echo "<a href='rili.php?y=$nextyear&m=$am'>下一月</a> | <a href='rili.php?y=".date('Y').'&m='.date('m')."'>当前月</a></div>";
	
	$start = date('w',mktime(0,0,0,$m,1,$y));
	$days = date('t',mktime(0,0,0,$m,1,$y));
	echo "<table width='700px' border='1px solid #111'>";
	echo "<tr align='center'>
			<th>日</th>
			<th>一</th>
			<th>二</th>
			<th>三</th>
			<th>四</th>
			<th>五</th>
			<th>六</th>
		<tr/>";
	for($i=1;$i<=$days;){
		echo "<tr align='center'>";
		for($a = 1;$a<=7;$a++){
			if($start>0){
				echo "<td>&nbsp;</td>";
				$start--;
				continue;
			}
			if($i>$days){
				echo "<td>&nbsp;</td>";
			}else{
				if($today == $i){
					echo "<td style='color:white;background:gray;'>$i</td>";
				}else{
					echo "<td>$i</td>";
				}
			}
			$i++;
		}
		echo "</tr>";
	}
	echo "</table>";
?>