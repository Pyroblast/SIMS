<?php
include("dbc.php");
$id=$_POST['id'];
$password=$_POST['password'];
$_SESSION['id']=$id;

if ($id && $password){
	 $sql="select * from admin where id='$id' and password='$password'"; 
     $res = mysql_query($sql);
     $rows=mysql_num_rows($res);
	 
	  if($rows){
		   header("refresh:0;url=student_admin_result.php");//跳转页面，注意路径
		   exit;
	   } else {
			echo "<script language='javascript'>alert('账号或密码不正确！');history.back();</script>";
	   }
 }

else 
{
 echo "<script language='javascript'>alert('账号和密码不能为空!');history.back();</script>";
}


?>

