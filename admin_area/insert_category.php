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
                        <h2>Add Category</h2>
                        <div class=border_bottom></div>
                    </td>
                </tr>
                <tr>
                    <td> <b>Add New Category:</b></td>
                    <td><input type="text" name="product_cat" size="60" require></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="7"><input type="submit" name="insert_cat" value="Add Category"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
<?php  

if(isset($_POST['insert_cat'])){
$product_cat=mysqli_real_escape_string($con,$_POST['product_cat']);

$insert_cat=mysqli_query($con,"insert into categories (cat_title) values ('$product_cat') ");

if($insert_cat){
    echo "<script>alert('$product_cat has succesfully added')</script>";
    echo "<script>window.open(window.location.href,'_self')</script>";
}




}




?>