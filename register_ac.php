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

//get values from form
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$address = $_POSt['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];

//insert into table 
$sql ="INSERT INTO $tbl_name(id,firstname,lastname,email,address,city,state,zip4,password)VALUES('$id','$firstname','$lastname','$email','$address','$city','$state','$zip4','$password')";
$result = mysql_query($sql);

//sucess insertion check
if($result){
    echo"you have registered successfully";
    echo "<BR>";
}
else{
    echo "ERROR";
}

?>
<?php 
mysql_close();
?>