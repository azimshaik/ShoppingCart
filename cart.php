<!--< ?php 
session_start();
echo $_SESSION["userid"];
echo "cart"; 
?>-->
<h1>Cart</h1>
<?php
if(isset($_SESSION['cart'])){
    $sql ="SELECT * FROM product WHERE id IN ("; 
    foreach($_SESSION['cart']) as $id => $value){
            $sql .= $id. ",";
    }
    $sql = subr($sql,0,-1) . ") ORDER BY ASC";
}
while($row = mysql_fetch_array($query)){
?>
    <p><"php echo $row['name']; ?><?php echo $_SESSION['cart'][$row['id']]['quantity'];?></p>
<?php
                                       }else{
    echo "<p>Your cart is empty. Please add some products</p>";
?>