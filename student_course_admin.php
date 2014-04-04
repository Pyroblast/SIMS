<?php
session_start();
$mysql_servername = "localhost"; //主机地址
$mysql_username = "root"; //数据库用户名
$mysql_password =""; //数据库密码
$mysql_database ="student"; //数据库
mysql_connect($mysql_servername , $mysql_username , $mysql_password);
mysql_select_db($mysql_database); 
mysql_query("set character set 'utf8'");//读库
mysql_query("set names 'utf8'");//写库

if(mysqli_connect_errno())
{
echo "连接数据库失败";
exit;
}  
?>
<!DOCTYPE html>
<html lang="zh-cn">
  <meta charset="utf-8">

  <head>

    <title>学生信息管理系统 | 学生课程管理</title>

    <!-- Bootstrap core CSS -->
    <link href="../SIMS/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../SIMS/css/studenttable.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container" style="width:600px">
		<div class="panel panel-primary">
		<!-- Default panel contents -->
			<div class="panel-heading">学生课程管理</div>

				<!-- Table -->
				<table class="table table-hover table-bordered">
				<tr class="primary">
				<td>学号</td>
				<td>课程</td>
				<td>分数</td>
				<td style="width:56px"></td>
				<td style="width:56px"></td>
				</tr>

				<?php

					$Sno=$_GET['Sno'];   
					$result=mysql_query("select * from sreport where Sno='$Sno'"); 
  
					$rows=mysql_num_rows($result); 
					for($i=0; $i<$rows; $i++) {  
						$row=mysql_fetch_row($result); 
						 echo 
								"<tr>
								 <td>$row[1]</td>
								 <td>$row[2]</td>
								 <td>$row[3]</td>  
								 <td><a href=delete_course_admin.php?id=$row[1]&Cname=$row[2]>delete</a></td>
								 <td><a href=student_mark_change.php?id=$row[1]&Cname=$row[2]>change</a></td>
								 </tr>";
								 
								}
				?>
				</table>
				</div>
					<div style="text-align:center">
						<button type="button" class="btn btn-block btn-primary" onclick="location.href='student_admin_result.php'">返回学生信息管理</button>
					</div>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
