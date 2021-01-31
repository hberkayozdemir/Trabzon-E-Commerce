<?php 
// error_reporting(0);

$con=mysqli_connect("localhost","root","","trabzon_data_base");

if(mysqli_connect_errno()){

    echo " Failed to connect my sqli on functions.php ".mysqli_connect_error();
}





function getCats(){
    global $con;
    $get_cats="SELECT * FROM categories";
 
   $run_cats=mysqli_query($con,$get_cats);
   while($row_cats=mysqli_fetch_array($run_cats)){
    $cat_id=$row_cats['cat_id'];
    $cat_title=$row_cats['cat_title'];
echo"<li> <a href='index.php?cat=$cat_id'>$cat_title</a></li>";
   }
  }


  
function getBrands(){
    global $con;
    $get_brands="SELECT * FROM brands";
 
   $run_brands=mysqli_query($con,$get_brands);
   while($row_brands=mysqli_fetch_array($run_brands)){
    $brand_id=$row_brands['brand_id'];
    $brand_title=$row_brands['brand_title'];
echo"<li> <a href='index.php?brand=$brand_id'>$brand_title</a></li>";
   }
  }



?>


