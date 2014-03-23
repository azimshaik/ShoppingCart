
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>hello</h1>
        <div>
         <?php 
        session_start();
        echo $_SESSION["userid"];
       
        $page = $_GET['page'];
        $id = $_GET['id'];
        echo $page;
        echo $id;
        require('products.php');
        ?>
        </div>
        <a href="logout.php">logout</a>
    </body>
</html>

<!-- 

< ?php/*
session_start();
require_once("databaselink.php");
if(isset($_GET['page'])){
    $pages = array("products","cart");
    if(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
    }else{
        $page = "products";
    }
}else{
    $page = "products";
}*/
?>

< ?php require('cart.php'); ?>    
         < ?php /*require($page . ".php");*/ ?>
-->