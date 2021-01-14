<?php 
session_start();
include'connect.php';
if($_POST['username']!=''&&$_POST['password']!='')
{
	$username = $_POST['username'];
$password = $_POST['password'];
 $sql = "SELECT * FROM account WHERE id='$username' && pass='$password'";
$rs = mysqli_query($con,$sql);
$num = mysqli_num_rows($rs);

if($num==1)
{
  if($bn=mysqli_fetch_array($rs))
  {	  
  $_SESSION['id']=$bn['order_id'];
	  $_SESSION['name']=$bn['id'];
	    $_SESSION['status']=$bn['status'];

		if($_SESSION['status']=='admin')
		{
			echo "<script>alert('เข้าสู่ระบบเรียบร้อย');window.location.href = '../admin/index.php';</script>";
		}
  }
  
}
else
{
			echo "<script>alert('ไอดีหรือรหัสผ่านไม่ถูกต้อง');window.location.href = '../login.php';</script>";
}
}
else
{
		echo "<script>alert('กรุณากรอกข้อมูลให้เรียบร้อบ');window.location.href = '../login.php';</script>";
}

?>