<?php

include "../includes/db.php";
error_reporting(0);


?>  
<!DOCTYPE html>

<html lang="en">
<head>

<link rel="stylesheet" href="./styles/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserting Product</title>
    <!-- <link rel="stylesheet" href="./styles/style.css"> -->
</head>
<body bgcolor="skyblue">


<form action="insert_product.php" method="post" enctype="multipart/form-data" >

<table align="center" width="795" border="2" bgcolor="#187eae" >
    <tr align= "center">
        <td>

        <a href="../index.php">
            <img src="../images/trabzonlogo.png" width="50%" height="100px" alt=""></td>
        </a>

<td>

<img src="../images/product.jpg" width="50%" height="100px" alt="">
</td>
    </tr>
<tr align="center">
<td style="color:white" colspan="7"> <h2>Insert New Product Here</h2></td>
</tr>
<tr>
<td align="right"> <b>Product Title:</b></td>
<td><input type="text" name="product_title" size=60> </td>
</tr>
<tr>
<td align="right">
<b>Product Category : </b>
</td >
<td > 
<select  name="product_cat" id="">
<option value=""> Select a category</option>
 
<?php


global $con;

$get_cats="SELECT * FROM categories";
$run_cats=mysqli_query($con,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats)){

    $cat_id=$row_cats['cat_id'];
    $cat_title=$row_cats['cat_title'];
echo "<option value='$cat_id'>$cat_title</option>";
}



?>
</select>
</td>
</tr>


<tr>
<td align="right">
<b>Product Brand : </b>
</td >
<td > 
<select  name="product_brand" id="">
<option value=""> Select a brand</option>
 <?php 
 global $con;

 $get_brands="SELECT * FROM brands";
 $run_brands=mysqli_query($con,$get_brands);
 while($row_brands=mysqli_fetch_array($run_brands)){
$brand_id=$row_brands['brand_id'];
$brand_title=$row_brands['brand_title'];
echo "<option value ='$brand_id'> $brand_title</option>";
 }
 
 
 ?> 


</select>
</td>
</tr>


<tr>

<td align="right"><b>Product Image: </b></td>
<td><input type="file" name="product_image"></td>

</tr>


<tr>

<td align="right"><b>Product Price : </b></td>
<td><input type="text" name="product_price" required></td>

</tr>


<tr>
<td align="right"> <b>Product Description:</b></td>
<td><textarea name="product_desc" id="" cols="20" rows="10"></textarea></td>

</tr>

<tr>


<td align="right"><b>Product Keywords:</b></td>
<td><input type="text" name="product_keywords" required></td>
</tr>

<tr align="center">
    <td colspan="7">
        <input type="submit" name="insert_post" value="Insert Product Now">
     
    </td>
</tr>
</table>

</form>
</body>
</html>


<?php
if(isset($_POST['insert_post'])){
$product_title=$_POST['product_title'];
$product_cat=$_POST['product_cat'];
$product_brand=$_POST['product_brand'];
$product_price=$_POST['product_price'];
$product_desc=trim(mysqli_real_escape_string($_POST['product_desc']));
$product_keywords=$_POST['product_keywords'];




$product_image=$_FILES['product_image']['name'];
$product_image_tmp=$_FILES['product_image']['tmp_name'];


move_uploaded_file($product_image_tmp,"product_images/$product_image");

$insert_product=" insert into products (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords) 
values ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keyword') ";

$insert_pro=mysqli_query($con,$insert_product);


if($insert_pro){
    echo "<script>alert('Product Has Been inserted successfully!')</script>";
    
}






}


?>
