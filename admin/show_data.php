<?php include'php/check_action.php' ?>
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
    <style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
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
   <div style="margin-left:11%" class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="data:image/png;base64,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" width="150" height="150"  alt="User Image">
        <div>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">ระบบสมาชิก</span></a></li>
         <li><a class="app-menu__item" href="add_data.php"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">เพิ่มข่าว</span></a></li>
          <li><a class="app-menu__item active" href="show_data.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">ตารางข้อมูลข่าว</span></a></li>
             <li><a class="app-menu__item" href="show_contact.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">ความคิดเห็น</span></a></li>
          
        </li>
      
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i>&nbsp;&nbsp;&nbsp;ตารางข้อมูล</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">

        </ul>
      </div>
  
         <div class="row">
        <div class="col-md-12">      
          <div class="tile">
       
            <div class="tile-body"> 

<form action="search_show_data.php" method="POST">
<br>
<input type="text"  placeholder="Search for names.." title="Type in a name" style="margin-left:75%; height:32px" name="text_search" >&nbsp;&nbsp;

<button class="btn btn-primary" type="submit" ><i class="fa fa-fw fa-lg fa-check-circle"></i>ค้นหา</button>
<br><br>
</form>
<table id="myTable">
  <tr class="header">
    <th style="width:10%;">ลำดับ</th>
    <th style="width:40%;">หัวข้อข่าว</th>
    <th style="width:20%;">หมวดหมู่</th>
      <th style="width:15%;">วันที่</th>
      <th style="width:10%;">แก้ไข/ลบ</th>

  </tr>
  <tr>
        <?php 
	    
			include'php/connect.php';
			$sql ="SELECT * FROM news ORDER BY id DESC";
			$rs = @mysqli_query($con,$sql);

			while ($row = mysqli_fetch_array($rs))
	{	
                 echo " <tr>
                    <td>".$row['id']."</td>
					  <td>".$row['subject']."</td>
					<td>".$row['category']."</td>
					  <td>".$row['date']."</td>";
				
			
					?>
                    <td> <center><button class="btn btn-primary" onclick="window.location.href='edit_data.php?id=<?php echo $row['id'];?> '">แก้ไขข้อมูล</button></center> </td>  </tr>
					<?php
					
						
					 }   ?>
  </tr>
</table>


            </div>
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
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
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