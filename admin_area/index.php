<!DOCTYPE html>
<html lang="en">
<head>
<style>

    body{

        font-family: sans-serif;
    }
         input[type = submit] {
            background-color: orange;
            border: none;
            text-decoration: none;
            color: white;
            padding: 20px 20px;
            margin: 20px 20px;
            cursor: pointer;
            font-size: 34px; 
         }
      </style>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=".../styles/style.css">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Admin Panel </title>
</head>
<body bgcolor="skyblue">
<a href="../index.php">
<img  width="600px" height="100px" src="../images/trabzonlogo.png" alt="">
</a>
<h2>Admin Panel</h2>


<a href="insert_product.php">
    <input type="submit" value="Add Item">

</a>
<a href="delete_product.php">
    <input type="submit" value="Delete Item">

</a>
<a href="insert_category.php">
    <input type="submit" value ="Add Categories">

</a>
<a href="delete_category.php">

    <input type="submit" value ="Delete Categories">
</a>

</body>
</html>