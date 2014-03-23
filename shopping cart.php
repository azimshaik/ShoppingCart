
<?php
session_start();

if(!session_is_registered(userid))
{
header('location:login.html');
}
else
{
echo $_POST['userid'];
$result = mysqli_query($con,"SELECT  * FROM customer");

while($row = mysqli_fetch_array($result))
  {
  echo $row['firstname'] ;
  echo "<br>";
  }

mysqli_close($con);

}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Shopping cart Page</title>
<link rel="stylesheet" href=" type="text/css"/>	
<meta charset="utf-8"/>
</head>
<body>
<fieldset>
<legend>
<p><h3>Welcome to the WP2 Shopping  Cart</h3></p>
</legend>

<section>
<form action="logout.php" method="POST">
<input type="submit" name="Logout" value="Logout">
</form>
</section>
</fieldset>
</body>
</html>