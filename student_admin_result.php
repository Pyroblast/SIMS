<?php  
$page=$_GET['page'];  
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

    <title>学生信息管理系统 | 学生信息管理</title>

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

    <div class="container" style="width:700px">
		<div class="panel panel-primary">
		<!-- Default panel contents -->
			<div class="panel-heading">学生信息管理</div>

				<!-- Table -->
				<table class="table table-hover table-bordered">
				<tr class="primary">
				<td>学号</td>
				<td>姓名</td>
				<td>年龄</td>
				<td>性别</td>
				<td>系别</td>
				<td style="width:56px"></td>
				</tr>

				<?php

					$sql="select *from student;"; 
					$pagesize=8;  
					$result=mysql_query($sql); 
					$row=mysql_fetch_row($result); 
					$rows=mysql_num_rows($result); 
					
					if($rows%$pagesize==0)  
						$total=(int)($rows/$pagesize); 
					else   
						$total=(int)($rows/$pagesize)+1; 
					
					if(isset($_GET['page'])) 
						$page=(int)($_GET['page']); 
					else  
						$page=1;
					
					$start=($page-1)*$pagesize;  
					$sql="select *from student limit $start,$pagesize "; 
					$result=mysql_query($sql);  
					$row=mysql_fetch_row($result); 
					
					while($row){  
							echo 
									"
									<tr>
									<td><a href=student_course_admin.php?Sno=$row[0]>$row[0]</a></td>
									<td>$row[1]</td>
									<td>$row[2]</td>  
									<td>$row[3]</td>
									<td>$row[4]</td>
									<td><a href=delete.php?id=$row[0]>delete</a></td>
									</tr>
									"; 
							$row=mysql_fetch_row($result); 
								}  
				?>
				</table>
			</div>
			<div style="text-align:center">
				<ul class="pagination">
				<li>
			<?php
				echo "<a href=student_admin_result.php?page=1>&laquo;</a>"; 
			?>
				</li>
			<?php
				if($page==1){
			?>
				<li>
			<?php
					echo "<a href='#'>$page</a>"; 
			?>
				</li>
			<?php
			}
				if($page>1){  
					$prev=$page-1; 
			?>
				<li>
			<?php
					echo "<a href=student_admin_result.php?page=$prev>前一页</a>"; 
			?>
				</li>
				<li>
			<?php
					echo "<a href='#'>$page</a>"; 
			?>
				</li>
			<?php
  
							}  
				if($page<$total){ 
					$next=$page+1; 
			?>
				<li>
			<?php
					echo "<a href=student_admin_result.php?page=$next>下一页</a>"; 
			?>
				</li>
				<li>
			<?php
					echo "<a href=student_admin_result.php?page=$total>&raquo;</a>"; 
							}  

			?>
				</li>
				</ul>
			</div>
			<br />
			<div style="text-align:center">
				<div >
					<button type="button" class="btn  btn-primary" onclick="location.href='student_insert.html'">学生信息添加</button>
					<button type="button" class="btn  btn-primary" onclick="location.href='student_avg.php'">学生平均成绩排名</button>
				</div>
			</div>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
