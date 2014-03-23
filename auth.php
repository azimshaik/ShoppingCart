<?php 
session_start();
require_once('databaselink.php');
$userid=$_POST['uid'];
 $password=$_POST['pass'];

	  //sql injection
$userid = stripslashes($userid);
$password = stripslashes($password);
$userid = mysql_real_escape_string($userid);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM $tbl_name WHERE id='$userid' and password='$password'";
$result=mysql_query($sql);


$count=mysql_num_rows($result);
if($count==1)
{
$_SESSION["userid"] = $userid;
header("location:index.php");
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();


?>