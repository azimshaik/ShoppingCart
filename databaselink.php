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
?>