<?php
$name=$_POST['name'];
$pass=$_POST['passw'];

if($name=='admin' && $pass=='admin')
{
	echo "<script>window.location.assign('afteradminlogin.php');</script>";
}
else
{
	readfile('adminlogin2.html');
}


?>