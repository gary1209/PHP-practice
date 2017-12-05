
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">

	<title>Gary Hsu's HW2</title>
</head>
<body>

<h1 style="color:#00BBFF;text-align: center;">三角形面積計算器</h1>
<form action="hw2.php" method="post" align="center">

	輸入第一個點的&nbsp;&nbsp;&nbsp;&nbsp;X座標<input type="number" name="par1">Y座標<input type="number" name="par2"><br>

	輸入第二個點的&nbsp;&nbsp;&nbsp;&nbsp;X座標<input type="number" name="par3">Y座標<input type="number" name="par4"><br>

	輸入第三個點的&nbsp;&nbsp;&nbsp;&nbsp;X座標<input type="number" name="par5">Y座標<input type="number" name="par6"><br>

	<input type="submit" value="計算" style="
	color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    border-radius: 4px;
    cursor: pointer;">

    <input type="reset" value="清除" style="
	color: #fff;
    background-color: #d9534f;
    border-color: #d9534f;
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    border-radius: 4px;
    cursor: pointer;">

</form>

<h3 align="center">
	
	<?php
	$par1 = $_REQUEST["par1"];
	$par2 = $_REQUEST["par2"];
	$par3 = $_REQUEST["par3"];
	$par4 = $_REQUEST["par4"];
	$par5 = $_REQUEST["par5"];
	$par6 = $_REQUEST["par6"];



	if(is_numeric($par1)&&is_numeric($par2)&&is_numeric($par3)&&is_numeric($par4)&&is_numeric($par5)&&is_numeric($par6)){
		echo "第一個點的座標為: (".$par1.",".$par2.")";

		echo "<br>";

		echo "第二個點的座標為: (".$par3.",".$par4.")";

		echo "<br>";

		echo "第三個點的座標為: (".$par5.",".$par6.")";

		$par1=(float)$par1;
		$par2=(float)$par2;
		$par3=(float)$par3;
		$par4=(float)$par4;
		$par5=(float)$par5;
		$par6=(float)$par6;
		
		echo "<br>";
		echo "<br>";


		$temp = abs((1/2)*((($par1*$par4)+($par3*$par6)+($par5*$par2))-(($par2*$par3)+($par4*$par5)+($par6*$par1))));
		if ($temp != 0) {
			echo "三角形面積為:".$temp;
		} else {
			echo "這三點無法構成三角形，所以面積為0喔!";
		}
		

		

		
	}else{

	echo "每個座標皆需要為數字才可以計算喔!";

	echo "請重新輸入座標";
}

	

	?>

</h3>



</body>
</html>
