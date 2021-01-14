<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />>
        <title>NEWDEE.COM</title>
    </head>
		<body>
		<header>
         <?php
		 	include'php/connect.php';
		
		  $page = $_GET['page']; 
		
		  		 $array= array('ข่าวใหม่','กีฬา','อาชญากรรม','ไอที','ข่าวบันเทิง','สุขภาพ','เกมส์'); 
		 
		  ?>
			<h1><a href="index.php?page=0">newsdee.com</a><span id="version"></span></h1>
			<nav>
				<ul>
      
                    <?php for($i=0;$i< count($array);$i++){   ?>
                    <li>  
                    <?php if($page == $i){ ?>
                  	<li><a href="index.php?page=<?php echo $i; ?>" class="current">
                    <?php } else {?>
                    <a href= "index.php?page=<?php echo $i;?>" >  
					<?php } 
					echo $array[$i]; ?></a></li>
                  	 <?php } ?>
         <li ><a href="contact.php">แสดงความคิดเห็น</a></li> 
                  <li style="margin-left:530px"><a href="../login.php">ปรับแต่ง</a></li>   
				</ul>
			</nav>
		</header>
  <?php 
			$id = $_GET['id'];
			$sql ="SELECT * FROM news WHERE id='$id'";
			$rs = @mysqli_query($con,$sql);
			$row = mysqli_fetch_array($rs);
			?>
			
        <br><p style="margin-top:5%"></p>
			<div style="border:1px #ccc solid;width:90%;margin-left:5%;">
            <div style="margin:2% 2% 2% 5%">
        <h1 style="color:red"><?php echo  $row['subject']; ?></h1> 
            <br>
            <center><img src="../admin/img/photo/<?php echo $row['photo']; ?>" style="border:1px #ccc solid"></center>
            <br><br>
            <p><?php echo $row['body']; ?></p>
            
           
            
            </div>
            </div>
       <p style="margin-top:3%"></p>
		<footer>
			<p></p>
		</footer>
	</body>
</html>
		
		
			
    
    