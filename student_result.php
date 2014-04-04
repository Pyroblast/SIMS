<?php
session_start();
$mysql_servername = "localhost"; //主机地址
$mysql_username = "root"; //数据库用户名
$mysql_password =""; //数据库密码
$mysql_database ="student"; //数据库
mysql_connect($mysql_servername , $mysql_username , $mysql_password);
mysql_select_db($mysql_database); 
if(mysqli_connect_errno())
{
echo "连接数据库失败";
exit;
}  
?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>

    <title>学生信息管理系统 | 学生课程查询</title>

    <!-- Bootstrap core CSS -->
    <link href="../SIMS/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../SIMS/css/coursetable.css" rel="stylesheet">
	<link href="../SIMS/css/bootstrap-select.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container" style="width:400px">
		<div class="panel panel-success">
		<!-- Default panel contents -->
			<div class="panel-heading">学生课程查询</div>

				<!-- Table -->
				<table class="table table-hover table-bordered">
				<tr class="success">
				<td>课程</td>
				<td>分数</td>
				<td style="width:56px"></td>
				</tr>


				<?php
					$Sno=$_SESSION['Sno'];   
					$result=mysql_query("select * from sreport where Sno='$Sno'"); 
  
					$rows=mysql_num_rows($result); 
					for($i=0; $i<$rows; $i++) 
						{  
							$row=mysql_fetch_row($result); 
								echo 
									"<tr>
									<td>$row[2]</td>
									<td>$row[3]</td>  
									<td>
										<a href=delete_course.php?id=$row[1]&Cname=$row[2]>delete</a>
									</td>
									</tr>";
 
						}
				?>
				</table>
			</div>

				<form action='student_course_insert.php' method='post'>
					<div style="float:left;position:relative;">
						<select class="selectpicker"  data-style="btn-success"  name='course'>

							<optgroup label="Required Course">
							<option value='Chinese'>Chinese</option>
							<option value='Math'>Math</option>
							<option value='English'>English</option>
							</optgroup>
	
							<optgroup label="Elective Course">
							<option value='Physical'>Physical</option>
							<option value='Chemical'>Chemical</option>
							<option value='Biology'>Biology</option>
							<option value='History'>History</option>
							<option value='Geography'>Geography</option>
							<option value='Politics'>Politics</option>
							<option value='Computer'>Computer</option>
							<option value='Art'>Art</option>
							<option value='Music'>Music</option>
							<option value='PE'>PE</option>
							</optgroup>

						</select>
					</div>
				    <div style="float:right;">
						<button type="submit" class="btn btn-success">添加课程</button>
					</div>

				</form>



    </div> <!-- /container -->

	<script src="../SIMS/js/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="../SIMS/js/bootstrap.js" type="text/javascript"></script>
	<script src="../SIMS/js/bootstrap-select.js" type="text/javascript"></script>
	<script type="text/javascript">  
      window.onload=function(){  
          $('.selectpicker').selectpicker();  
      };  
    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
