<?php
include("dbc.php");

$Sno=$_POST['Sno'];
$password=$_POST['password'];
$_SESSION['Sno']=$Sno;

if ($Sno && $password){
	 $sql="select *from student where Sno='$Sno'and password='$password'"; 
     $res = mysql_query($sql);
     $rows=mysql_num_rows($res);
	 
	  if($rows){
		   header("refresh:0;url=student_result.php");//跳转页面，注意路径
		   exit;
	   } else {
			echo "<script language='javascript'>alert('学号或密码不正确！');history.back();</script>";
	   }
 }

else 
{
 echo "<script language='javascript'>alert('学号和密码不能为空!');history.back();</script>";
}


?>

