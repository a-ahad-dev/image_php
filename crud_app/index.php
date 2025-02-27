<?php
include("connection.php");
if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];

    $filename = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $upload_file = "upload_image/".$filename;
    move_uploaded_file($tmp_name, $upload_file);


    $query = "INSERT INTO data (name,price,image) VALUES( '$name','$price','$upload_file' ) ";
    $data = mysqli_query($cont, $query);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>
    <div class="container">
        <div class="row">
            <div class="col4"></div>
            <div class="col">
                <form method="post" enctype="multipart/form-data">
                    <h1>card</h1>
                    <input type="text" placeholder="Item Name" name="name" class="form-control mt-3">
                    <input type="text" placeholder="Item Price" name="price" class="form-control mt-3 ">
                    <input type="file" name="image" class="form-control mt-3 ">
                    <input type="submit" name="btn" class="btn btn-outline-danger mt-3 ">
                </form>
            </div>
            <div class="col4"></div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>