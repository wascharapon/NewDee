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
      if(isset($_GET['page']))
      {
        $page = $_GET['page']; 
      }
      else
      {
        $page = 99; 
      }
		
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
         <li ><a href="contact.php?page=99">แสดงความคิดเห็น</a></li> 
                  <li style="margin-left:530px"><a href="../login.php">ปรับแต่ง</a></li>   
				</ul>
			</nav>
		</header>

			
        <br><p style="margin-top:5%"></p>
			<div style="border:1px #ccc solid;width:90%;margin-left:5%;">
            <div style="margin:2% 2% 2% 5%">
            <form action="php/contact_action.php" method="post">
        <center><h1 style="color:red">แสดงความคิดเห็น</h1> 
        <br>
        <h2>ชื่อผู้ใช้งาน</h2>
         <br>
      	<input type="text" name="name" style="height:30px;border:1px #000 solid;" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบุชื่อของท่าน"required>
         <br><br>
        <h2>ความคิดเห็น</h2>
         <br>
        <textarea name="text" style="height:200px; width:600px;border:1px #000 solid;"></textarea>
        <br><br>
        <input type="submit" class="readmore" value="ส่ง" style="width:100px;font-size:20px">
        </form>
       </center>
       
            
           
            
            </div>
            </div>
       <p style="margin-top:3%"></p>
		<footer>
			<p></p>
		</footer>
	</body>
</html>
		
		
			
    
    