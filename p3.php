<?php 
session_start();
	if(isset($_POST['sub']))
	{	print_r($_POST);
		// $Json_data='{'+$_POST['ac_no']+$_POST['title']+$_POST['aut']+$_POST['pub']+$_POST['eid']+'}';
		$Json_data='{}'
		$arr=json_encode($Json_data,true);
		print_r($Json_data);
		// print_r($arr);
		echo $arr;
	}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	<center>
			ACCESS no:<input type="text" name="ac_no"><br>
			TITLE:<input type="text" name="title"><br>
			AUTHORS:<input type="text" name="aut"><br>
			PUBLISHER:<input type="text" name="pub"><br>
			EDITION:<input type="text" name="eid"><br>
			<input type="submit" name="sub" value="SUBMIT">


	</center>
</form>

</body>
</html>