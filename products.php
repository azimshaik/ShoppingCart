<h2><?php if(isset($message)){echo $message;}?>
</h2>
<?php 
    if(isset($_GET['action']) && $_GET['action'] == "add"){
    $id = intval($_GET['id']);
        if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id][quantity]++;
             }else{
            $sql = "SELECT * FROM product WHERE id={$id}";
            $query2 = mysql_query($sql);
            if(mysql_num_rows($query2)!=0){
                $row2 = mysql_fetch_array($query2);
                $_SESSION['cart'][$row2['id']] = array("quantity" =>1,"price" =>$row2['price']);
            }else{
                $message = "This product id is valid";
            }
        }
    }
?>
<h1>Products</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
                <th>Add</th>
            </tr>
            <?php
            require('databaselink.php');
            
 $sql = "SELECT * FROM  `product` WHERE 1";

$query = mysql_query($sql);
while($row = mysql_fetch_assoc($query))
{
    ?>
 <tr>
     
     <td><?php echo $row['id']; ?></td>
     <td><?php echo $row['description']; ?></td>
     <td><?php echo $row['price']; ?></td>
     <td><input type="checkbox" name="items[]" value="<?php echo $row['id']; ?>"></td>
     <td><a href="index.php?page=products&action=add&id=<?php echo $row['id']; ?>">Add to cart</a></td>
 </tr>   
<?php
}
?>

<a href="index.php?page=products&action=add&id=<?php echo $row['id']; ?>">Add to cart</a>
                
            
        </table>
    <!-- 
< ?php 
                $sql = "SELECT * FROM  `product` WHERE 1";
                $query = mysql_query($sql) or die(mysql_error());
                while($row = mysql_fetch_assoc($query)){
            ?>
            <tr>
           
            <td>< ?php echo $row['description']; ?></td>
            <td>&< ?php echo $row['price']; ?></td>
            <td><a href="index.php?page=products&action=add&id=< ?php echo['id']; ?>">Add to Cart</a></td>
            </tr>
            < ?php 
                }
            ?>
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "</tr>";
    
-->