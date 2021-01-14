<?php include'php/check_action.php' ?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript"> 
//<![CDATA[

	CKEDITOR.replace( 'editor1',
		{
			fullPage : true,
			uiColor : '#efe8ce' 
		});
//]]>
</script>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin</title>
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.php">Admin</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
     
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="php/logout_action.php" ><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
 
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <aside class="app-sidebar">
   <div style="margin-left:11%" class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="http://facilitateit.net/images/Back-Office-Admin.png" width="150" height="150"  alt="User Image">
        <div>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">ระบบสมาชิก</span></a></li>
         <li><a class="app-menu__item active" href="add_data.php"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">เพิ่มข่าว</span></a></li>
          <li><a class="app-menu__item" href="show_data.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">ตารางข้อมูลข่าว</span></a></li>
             <li><a class="app-menu__item" href="show_contact.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">ความคิดเห็น</span></a></li>
          
        </li>
      
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>&nbsp;&nbsp;เพิ่มข้อมูล</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">

   
        </ul>
      </div>
            <?php 
	     $id=$_GET['id'];
      			include'php/connect.php';
			$sql ="SELECT * FROM news where id = $id";
			$rs = @mysqli_query($con,$sql);

			$row = mysqli_fetch_array($rs);
	?>
      <div class="row">
        <div class="col-md-6">
          <div class="tile"> 
            <div class="tile-body" style="font-size:18px">
  				<form action="php/edit_data_action.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label">หัวข้อข่าว</label>
                  <input class="form-control" name="name" type="text" value="<?php echo $row['subject']; ?>" required>
                </div>
	
                <div class="form-group">
                  <label class="control-label">หน้าปก</label>
                  <input class="form-control" name="Logo_new" type="file">
  
                </div><br>
                		<?php $array= array('กีฬา','อาชญากรรม','ไอที','ข่าวบันเทิง','สุขภาพ','เกมส์'); ?>
                <div class="form-group">
                  <label class="control-label">หมวดหมู่&nbsp;&nbsp;</label>
                  
                   <select name="category">
           						 <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
                                       <?php for($i=0;$i< count($array);$i++){   ?>
             
   												<option value="<?php echo $array[$i]; ?>"><?php echo $array[$i]; ?></option>
                  	 <?php } ?>
                   </select>
                  

                </div>
                   </div>
 
          </div>
        </div>
        <div class="col-md-12" >
          <div class="tile">
           <h3><i class="fa fa-edit"></i>&nbsp;เนื้อความ</h3> <br>
            <div class="tile-body" >

                
        
           <textarea class="ckeditor" id="editor1" name="body" cols="35" rows="10"   ><?php echo $row['body']; ?>
</textarea>
            
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
             
              <button class="btn btn-primary" type="submit" ><i class="fa fa-fw fa-lg fa-check-circle"></i>แก้ไข</button>
              &nbsp;&nbsp;&nbsp;
              <a class="btn btn-secondary" href="show_data.php"><i class="fa fa-fw fa-lg fa-times-circle"></i>ยกเลิก</a>
				<a class="btn btn-secondary" href="php/delete_data.php?id=<?php echo $row['id'];?>" style="background-color:#F00;border:2px solid red;margin-left:2%"><i class="fa fa-fw fa-lg fa-times-circle"></i>ลบข้อมูล</a>

                </div>
              </div>
                </form>
            </div>
            
          </div>
        </div>
       
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>