<?php
$host="webdev.cs.kent.edu"; // Host name 
$username="ashaik"; // Mysql username 
$password="810703910"; // Mysql password 
$db_name="ashaik"; // Database name 
$tbl_name="customer"; // Table name 
$tbl_name2="orders";
$tbl_name3="order_item";
$tbl_name4="product";


// Connect to server and select databse.
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

//get form values
$id = $_POST['id'];
$password = $_POST['password'];
$newpassword = $_POST['newpassword'];
$newpassword2 = $_POST['newpassword2'];
//check if the user id and password are valid

//insert into table 
$sql ="UPDATE $tbl_name SET password = '$newpassword' WHERE id='$id';";
$result = mysql_query($sql);

//sucess insertion check
if($result){
    echo"you have changed successfully";
    echo "<BR>";
}
else{
    echo "ERROR";
}
?>
<?php 
mysql_close();
?>