<?php
  session_start();
  require_once("databaselink.php");
    if(isset($_GET['page'])){
        $pages = array("products","cart");
        if(in_array($_GET['page'],$pages)){
            $page = $_GET['page'];
        }
        else{
            $page = "products"; 
    }
    }else{
        $page = 'products';
    }
    echo $_SESSION["userid"];
       
        $page = $_GET['page'];
       $id = $_GET['id'];
        //echo $page;
        echo $id;
        echo $row['id'];
        
  
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
    if(isset($_SESSION['cart'])){
    
    $sql ="SELECT * FROM product WHERE id IN ("; 
    foreach($_SESSION['cart']) as $id => $value){
            $sql .= $id. ",";
    }
    $sql = substr($sql,0,-1) . ") ORDER BY id ASC";
    $query = mysql_query($sql);
    while($row = mysql_fetch_array($query)){
?>
    <p><?php echo $row['name']; ?><?php echo $_SESSION['cart'][$row['id']]['quantity']; ?></p>
    <a href="index.php?page=cart">Go to cart</a>
<?php
             }
                                       }else{
    echo "<p>Your cart is empty.<br/> Please add some products</p>";
}
?>
<!--< ?php 
    echo $_GET['id'] . "<br/>";
    echo $_SESSION['cart'] . "<br/>";
    require('databaselink.php');
    $sql = "SELECT * FROM `product` WHERE id='{$_GET['id']}'";
    echo $sql . "<br/>";
    $queryc = mysql_query($sql);
   while($row = mysql_fetch_assoc($queryc)){
    
        echo $row['id'];
        echo $row['description'];
        echo $row['price'];
   }
?>-->
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