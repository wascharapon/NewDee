<?php 
session_start();
unset($_SESSION['id']);
unset($_SESSION['name']);
unset($_SESSION['status']);
session_destroy();
		echo "<script>alert('ออกจากระบบ');window.location.href = '../../user/index.php?page=0';</script>";
?>