<?php
include "../includes/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="skyblue">
    <div class=form_box>
        <form action="" method="post" enctype="multipart/form-data">
            <table bgcolor="#187eae" align="center" width="%100">
                <tr align="center">
                    <td>

                        <a href="../index.php">
                            <img src="../images/trabzonlogo.png" width="50%" height="100px" alt="">
                    </td>
                    </a>
                <tr>
                    <td colspan="7">
                        <h2>Delete  Product</h2>
                        <div class=border_bottom></div>
                    </td>
                </tr>
                <tr>
                    <td> <b>Delete Ex Product:</b></td>
                    <td>
                    <select  name="product_title" >

<option value=""> Select a Product</option>
  <?php
global $con;

$get_products="SELECT * FROM products";
$run_products=mysqli_query($con,$get_products);

while($row_products=mysqli_fetch_array($run_products)){
$product_id=$row_products['product_id'];
$product_title=$row_products['product_title'];

echo "<option value='$product_id'>$product_title</option>";
}
?>





  </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="7"><input type="submit" name="delete_product" value="Delete Product"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
<?php 

if(isset($_POST['delete_product'])){
$product_title=mysqli_real_escape_string($con,$_POST['product_title']);
$delete_product=mysqli_query($con,"delete from products where product_id='$_POST[product_title]' ");


if($delete_product){

    echo "<script>alert('$product_title has been deleted succesfully')</script>";
    echo "<script>window.open('index.php')</script>";
}
else{
    echo    "we did mistake ";
}


}


?>
