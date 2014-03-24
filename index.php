<?php
  session_start();
  require_once("databaselink.php");
    echo $_SESSION["userid"];
       
        $page = $_GET['page'];
        $id = $_GET['id'];
        //echo $page;
        echo $id;
        
  
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>hello</h1>
        <div>
     <?php require($page . ".php"); ?> 
        </div>
        <h1>Cart</h1>
        <div>
<?php

$cart = array();
$cart= $_SESSION['cart'];
    $sql = "SELCT *FROM 'product' WHERE id IN (";$sql .= implode(",", $_SESSION['cart']) . ")";
echo $cart;
echo $sql;
?>


        </div>
        <a href="logout.php">logout</a>
    </body>
</html>

<!-- 

< ?php/*

cart
< ?php
    if(isset($_SESSION['cart'])){
    
    $sql ="SELECT * FROM product WHERE id IN ("; 
    foreach($_SESSION['cart']) as $id => $value){
            $sql .= $id. ",";
    }
    $sql = substr($sql,0,-1) . ") ORDER BY id ASC";
    $query = mysql_query($sql);
    while($row = mysql_fetch_array($query)){
?>
    <p>< ?php echo $row['name']; ?>< ?php echo $_SESSION['cart'][$row['id']]['quantity']; ?></p>
    <a href="index.php?page=cart">Go to cart</a>
< ?php
             }
                                       }else{
    echo "<p>Your cart is empty.<br/> Please add some products</p>";
}
?>
  session_start();
    require_once("databaselink.php");
    if(isset($_GET['page'])){
        &pages = array("products","cart");
        if(in_array($_GET['page'],$pages)){
            $page = $_GET['page'];
        
        }else{
            $page = "products";
        }else{
            $page = "products";
        }
    }
?>

< ?php require('cart.php'); ?>    
         < ?php /*require($page . ".php");*/ ?>


   < ?php 
        session_start();
        echo $_SESSION["userid"];
       
        $page = $_GET['page'];
        $id = $_GET['id'];
        echo $page;
        echo $id;
        require('products.php');
        ?>

-->