<?php include "../includes/db.php"; ?>
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
                        <h2>Delete  Category</h2>
                        <div class=border_bottom></div>
                    </td>
                </tr>
                <tr>
                    <td> <b>Delete Ex Category:</b></td>
                    <td>
                    <select  name="product_cat" >
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
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="7"><input type="submit" name="delete_cat" value="Delete Category"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>


<?php 


if(isset($_POST['delete_cat'])){

$product_cat=mysqli_real_escape_string($con,$_POST['product_cat']);
$delete_cat=mysqli_query($con,"delete from categories where cat_id='$_POST[product_cat]' ");

if($delete_cat){
    echo "<script>alert('$product_cat has been deleted succesfully')</script>";
    echo "<script>window.open('index.php')</script>";
}


}

?>