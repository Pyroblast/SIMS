<?php
session_start();
$mysql_servername = "localhost"; //������ַ
$mysql_username = "root"; //���ݿ��û���
$mysql_password =""; //���ݿ�����
$mysql_database ="student"; //���ݿ�
mysql_connect($mysql_servername , $mysql_username , $mysql_password);
mysql_select_db($mysql_database); 
if(mysqli_connect_errno())
{
echo "�������ݿ�ʧ��";
exit;
}
$Sno=$_POST['Sno'];
$password=$_POST['password'];
$_SESSION['Sno']=$Sno;

if ($Sno && $password){
	 $sql="select *from student where Sno='$Sno'and password='$password'"; 
     $res = mysql_query($sql);
     $rows=mysql_num_rows($res);
	 
	  if($rows){
		   header("refresh:0;url=student_result.php");//��תҳ�棬ע��·��
		   exit;
	   } else {
			echo "<script language='javascript'>alert('ѧ�Ż����벻��ȷ��');history.back();</script>";
	   }
 }

else 
{
 echo "<script language='javascript'>alert('ѧ�ź����벻��Ϊ��!');history.back();</script>";
}


?>

