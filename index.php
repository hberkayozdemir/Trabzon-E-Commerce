<?php  
error_reporting(0);     
include "includes/db.php";
include "functions/functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping For Electronics</title>
    <link rel="stylesheet" href="styles/style.css" media="all" />
</head>

<body bgcolor="skyblue">

    <!-- main container starts here -->
    <div class="main_wrapper">

        <div class="header_wrapper">
            <div class="header_logo">
                <a href="index.php">
                    <img id=" logo" src="images/trabzonlogo.png" alt="">
                </a>

            </div>

            <div id="form">
                <form action="results.php" method="get" enctype="multipart/form-data">

                    <input type="text" name="user_query" placeholder="Search a Product" />

                    <input type="submit" name="search" value="Search" />



                </form>

            </div>






            <!-- form sonu -->

            <!-- cart bası -->

            <!-- cart sonu   -->
            <!-- reg log bası -->

            <!-- reg log sonu   -->




        </div>

        <div class="menubar">
            <ul id="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="all_products.php">All Products</a></li>
                <li><a href="./admin_area">My Account</a></li>
                <li><a href="index.php">Shopping Cart</a></li>
                <li><a href="http://localhost/workSpace/HBOSOFTWARE/index.php">Contact Us</a></li>
            
            </ul>


            <!-- headerwrappersonu -->







            <div class="content_wrapper">
                <div id="sidebar">



                    <div id="sidebar_title"> Categories </div>
                    <ul id=cats>

            <?php getCats(); ?>

                    </ul>
                    <div id="sidebar_title">Brands</div>
                    <ul id="cats">

            <?php getBrands(); ?>

                    </ul>
                </div>



                <!-- ürünler burda gösterilecek -->
                <div id="content_area">

                    <div id=products_box>
<?php 

if(!isset($_GET['cat'])){

    if(!isset($_GET['brand'])){
                $get_pro="SELECT * FROM products order by RAND() LIMIT 0,6";
                $run_pro=mysqli_query($con,$get_pro);

                while($row_pro=mysqli_fetch_array($run_pro)){

                    $pro_id=$row_pro['product_id'];
                    $pro_cat=$row_pro['product_cat'];
                    $pro_brand=$row_pro['product_brand'];
                    $pro_title=$row_pro['product_title'];
                    $pro_price=$row_pro['product_price'];
                    $pro_desc=$row_pro['product_desc'];
                    $pro_image=$row_pro['product_image'];
                    $pro_keywords=$row_pro['product_keywords'];
                
                echo"

                <div id='single_Product'>

                <h3>$pro_title</h3>
                <img src='admin_area/product_images/$pro_image' width='180' height='180' alt=''>
                <p>  <b>Price : $  $pro_price</b>  </p>
                </div>
                
                ";
                }
            }
                }

?>

<?php

if(isset($_GET['cat'])){
$cat_id=$_GET['cat'];
$get_cat_pro="select * from products where product_cat='$cat_id' ";
$run_cat_pro=mysqli_query($con,$get_cat_pro);


$count_cats=mysqli_num_rows($run_cat_pro);

if($count_cats==0){
    echo "<h4 style ='padding:20px;'>No Product where found in this category</h4>";
}

while($row_cat_pro=mysqli_fetch_array($run_cat_pro)){

    $pro_id=$row_cat_pro['product_id'];
    $pro_cat=$row_cat_pro['product_cat'];
    $pro_brand=$row_cat_pro['product_brand'];
    $pro_title=$row_cat_pro['product_title'];
    $pro_price=$row_cat_pro['product_price'];
    $pro_image=$row_cat_pro['product_image'];

    echo " 
    <div id='single_Product'>

    <h3>$pro_title</h3>
    <img src='admin_area/product_images/$pro_image' width='180' height='180' alt=''>
    <p>  <b>Price : $  $pro_price</b>  </p>
    </div>
    
    ";
    

}
}
?>

<?php
if(isset($_GET['brand'])){
    $brand_id=$_GET['brand'];
    $get_brand_pro="select * from products where product_brand='$brand_id' ";
    $run_brand_pro=mysqli_query($con,$get_brand_pro);
    
    
    $count_brand=mysqli_num_rows($run_brand_pro);
    
    if($count_brand==0){
        echo "<h4 style ='padding:20px;'>No Product where found in this category</h4>";
    }
    
    while($row_brand_pro=mysqli_fetch_array($run_brand_pro)){
    
        $pro_id=$row_brand_pro['product_id'];
        $pro_cat=$row_brand_pro['product_cat'];
        $pro_brand=$row_brand_pro['product_brand'];
        $pro_title=$row_brand_pro['product_title'];
        $pro_price=$row_brand_pro['product_price'];
        $pro_image=$row_brand_pro['product_image'];

        echo " 
        <div id='single_Product'>
    
        <h3>$pro_title</h3>
        <img src='admin_area/product_images/$pro_image' width='180' height='180' alt=''>
        <p>  <b>Price : $  $pro_price</b>  </p>
        </div>
        
        ";
        
    
    }
    }








?>


                    </div> <!--  prdouct box end -->


                </div>
                <!--Content wrapper end -->


                <!--  main_wrapper  stop here -->

                <div id=footer>
                    <h2 style="text-align:center; padding-top:30px;"> &copy; 2021 <a style="text-align:center"
                            href="http://localhost/workSpace/HBOSOFTWARE/">HBOSOFTWARE</a> </h2>
                </div>

            </div>
        
           


</body>

</html>