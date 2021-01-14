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
		error_reporting(0);
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

        <br><p style="margin-top:2.30%"></p>
        
        
        
		<div id="secwrapper" >
			<section >
            
		        <?php 
			if($_GET['page']==0)
			{
			$sql ="SELECT * FROM news ORDER BY id DESC";
			$rs = @mysqli_query($con,$sql);
			$num = 1;
			$j=0;
			while ($row = mysqli_fetch_array($rs))
	{			
				$bool = false;
				 if($num==1 && $bool==false )
					{?>
                    <article >
					<a href="detail_data.php?id=<?php echo  $row['id']; ?>&&page=<?php echo $page; ?>"><img src="../admin/img/photo/<?php echo  $row['photo']; ?>" alt=""/ style="width:100%"></a>
					<img src="images/featured.png" alt="" id="featuredico"/>
					<h1 style="height:48px"> <?php echo  $row['subject']; ?></h1>
                 
					<br>
                    <h1 style="float:right; color:red;">วันที่ <?php echo  $row['date']; ?></h1>
                     <br>
					<a href="detail_data.php?id=<?php echo  $row['id']; ?>&&page=<?php echo $page; ?>" class="readmore">อ่านต่อ >></a>
				</article>
                <?php $num=$num+1;$j=$j+1; $bool=true; }
				
				
				 if($num==2 && $bool==false){?>
				<article>
<a href="detail_data.php?id=<?php echo  $row['id']; ?>&&page=<?php echo $page; ?>"><img src="../admin/img/photo/<?php echo  $row['photo']; ?>" alt=""/ style="width:100%"></a>
					<h1 style="height:48px"> <?php echo  $row['subject']; ?></h1>
                
					<br>
                  <h1 style="float:right; color:red;">วันที่ <?php echo  $row['date']; ?></h1>
                     <br>
			<a href="detail_data.php?id=<?php echo  $row['id']; ?>&&page=<?php echo $page; ?>" class="readmore">อ่านต่อ >></a>
				</article>
                <?php $num=$num+1; $j=$j+1;  $bool=true; } 
				
				
				if($num==3 && $bool==false){?>
				<article class="rightcl">
<a href="detail_data.php?id=<?php echo  $row['id']; ?>&&page=<?php echo $page; ?>"><img src="../admin/img/photo/<?php echo  $row['photo']; ?>" alt=""/ style="width:100%"></a>
				<h1 style="height:48px"> <?php echo  $row['subject']; ?></h1>
              
					<br>
   <h1 style="float:right; color:red;">วันที่ <?php echo  $row['date']; ?></h1>
                     <br>
				<a href="detail_data.php?id=<?php echo  $row['id']; ?>&&page=<?php echo $page; ?>" class="readmore">อ่านต่อ >></a>
				</article>	
                   
					<?php
				$num=1; $j=$j+1; $bool=true; }	
				
				if($j==6)
				{
					break;
				}
						} 
					  }
					 elseif($_GET['page']!=0)
					 {
						 $category = $array[$_GET['page']];
								$sql ="SELECT * FROM news
		WHERE  category LIKE '$category' ORDER BY id DESC ";
			$rs = @mysqli_query($con,$sql);
			$num = 1;
			$j=0;
			while ($row = mysqli_fetch_array($rs))
	{			
						$bool = false;
				 if($num==1 && $bool==false )
					{?>
                    <article >
				<a href="detail_data.php?id=<?php echo  $row['id']; ?>&&page=<?php echo $page; ?>"><img src="../admin/img/photo/<?php echo  $row['photo']; ?>" alt=""/ style="width:100%"></a>
					<img src="images/featured.png" alt="" id="featuredico"/>
					<h1 style="height:48px"> <?php echo  $row['subject']; ?></h1>
                 
					<br>
                     <h1 style="float:right; color:red;">วันที่ <?php echo  $row['date']; ?></h1>
                     <br>
			<a href="detail_data.php?id=<?php echo  $row['id']; ?>&&page=<?php echo $page; ?>" class="readmore">อ่านต่อ >></a>
				</article>
                <?php $num=$num+1;$j=$j+1; $bool=true; }
				
				
				 if($num==2 && $bool==false){?>
				<article>
					<a href="detail_data.php?id=<?php echo  $row['id']; ?>&&page=<?php echo $page; ?>"><img src="../admin/img/photo/<?php echo  $row['photo']; ?>" alt=""/ style="width:100%"></a>
					<h1 style="height:48px"> <?php echo  $row['subject']; ?></h1>
                
					<br>
                  <h1 style="float:right; color:red;">วันที่ <?php echo  $row['date']; ?></h1>
                     <br>
				<a href="detail_data.php?id=<?php echo  $row['id']; ?>&&page=<?php echo $page; ?>" class="readmore">อ่านต่อ >></a>
				</article>
                <?php $num=$num+1; $j=$j+1;  $bool=true; } 
				
				
				if($num==3 && $bool==false){?>
				<article class="rightcl">
		<a href="detail_data.php?id=<?php echo  $row['id']; ?>&&page=<?php echo $page; ?>"><img src="../admin/img/photo/<?php echo  $row['photo']; ?>" alt=""/ style="width:100%"></a>
				<h1 style="height:48px"> <?php echo  $row['subject']; ?></h1>
              
					<br>
                  <h1 style="float:right; color:red;">วันที่ <?php echo  $row['date']; ?></h1>
                     <br>
					<a href="detail_data.php?id=<?php echo  $row['id']; ?>&&page=<?php echo $page; ?>" class="readmore">อ่านต่อ >></a>
				</article>	
                   
					<?php
				$num=1; $j=$j+1; $bool=true; }	
				
						} 	
					 }
					 ?>
                     
                     
                     
                     
			</section>
		</div>
       
		<footer>
			<p></p>
		</footer>
	</body>
</html>
		
		
			
    
    