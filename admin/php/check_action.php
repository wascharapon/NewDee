<?php 
session_start();
error_reporting(0);
if($_SESSION['status']!='admin')
{
	unset($_SESSION['id']);
	unset($_SESSION['name']);
	unset($_SESSION['status']);
	session_destroy();
			echo "<script>alert('ออกจากระบบ');window.location.href = '../../user/index.php?page=0';</script>";
}
?> 