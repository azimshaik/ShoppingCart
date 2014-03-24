<?php 
session_start();
     require_once('databaselink.php');
      if(isset($_POST['ChangePassword']))
      {
	  $uid=$_POST['uid'];
      $passwordvalue=$_POST['oldpassword'];
      $password=$_POST['newpassword'];
      $confirm_pwd=$_POST['newpassword2'];   
      $select=mysql_query("select * from customer"); 
      $fetch=mysql_fetch_array($select);
      $data_pwd=$fetch['password'];

      if($password==$confirm_pwd && $data_pwd==$passwordvalue)
        {
      $insert=mysql_query("update customer set password='$password' where uid='$uid'"); 
       echo "Successful";
        }
      else
        {
       echo $login1="password not match plz try again";
        }
      }
      ?>

<?php 
// close connection 
mysql_close();
?>