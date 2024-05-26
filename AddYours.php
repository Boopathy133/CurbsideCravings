<?php
require_once 'connect.php';

if (isset($_POST["submit"])) {
    $productName = $_POST["productName"];
    $price = $_POST["price"];
    // FOR UPLOAD PHOTOS
    $upload_dir = "uploads/"; //STORE THE UPLOADED IMAGE
    $upload_dir.$_FILES["image"]["name"];
    $upload_file = $upload_dir.basename($_FILES["image"]["name"]);
    $imageType = strtolower(pathinfo($upload_file,PATHINFO_EXTENSION)); //USED TO DETECT IMAGE FORMAT
    $check = $_FILES["image"]["size"]; // TO DETECT THE SIZE OF THE IMAGE
    $upload_ok = 0;

    if (file_exists($upload_file)) {
        echo "<script>alert('The file already exists')</script>";
        $upload_ok=0;
    }else {
        $upload_ok = 1;
        if ($check!== false) {
            $upload_ok = 1;
            if ($imageType == 'jpg' || $imageType == 'png' || $imageType == 'jpeg' || $imageType == 'gif') {
                $upload_ok = 1;
            } else {
                echo '<script>alert("Please change the image format")</script>';
            }
            
        }else {
            echo '<script>alert("The photo size is 0 please change the photo")</script>';
            $upload_ok = 0;
        }
    }
    if ($upload_ok == 0) {
        echo '<script>alert("Sorry your file is does\'t uploaded. Please try again")</script>';
    } else {
        if ($productName !== "" && $price !=="") {
            move_uploaded_file($_FILES["image"]["tmp_name"],$upload_file);
        }
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Yours</title>
</head>

<body>
    <header>
        <a href="#" class="logo"> <span>Crubside</span> Cravings</a>
    </header>
    

    <section id="upload_container">
        <form action="AddYours.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="productName" id="productName" placeholder="Product Name" required>
            <input type="number" name="price" id="price" placeholder="Product Price" required>
            <input type="file" name="image" id="image" required hidden>
            <button id="choose" onclick="upload()">Choose Image</button>
            <input type="submit" value="Upload" name="submit">
        </form>
    </section>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            list-style: none;
            text-decoration: none;
            scroll-behavior: smooth;
            scroll-padding-top: 3rem;
        }

        :root {
            --main-color: #ff9f0d;
            --text-color: #fff;
            --other-color: #212121;
            --second-color: #9e9e9e;
            --bg-color: #111111;
            --bg-font: 4.5rem;
            --h2-font: 2.6rem;
            --p-font: 1.1rem;
            --card-background-color: #ffffff5b;
        }
        body{
            background: var(--bg-color);
            color: var(--text-color);
        }
        header{
            position: fixed;
            width: 100%;
            top: 0;
            right: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: left;
            background-color: transparent;
            padding: 5px 5%;
            transition: all .50s ease;
            padding: 30px;
        }
        .logo{
            display: flex;
            align-items: center;
            justify-content: left;
            padding-right: 925px;
            color: var(--text-color);
            font-size: 33px;
            font-weight: 700;
        }
        span{
            color: #ff9f0d;
        }
        section{
            position: fixed;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: left;
            padding-top: 100px;
            transition: all .50s ease;
        }
        #upload_container{
            margin: 10%;
            display: flex;
            flex-direction: column;
            width: 50%;
        }
        #upload_container form{
            display: flex;
            flex-direction: column;
        }
        #upload_container form input{
            padding: 8px;
            outline: none;
            border: 1px solid lightblue;
            margin-bottom: 8px;
        }
        #upload_container form button{
            padding: 8px;
            outline: none;
            background-color: lightblue;
            border: none;
            margin-bottom: 8px;
            cursor: pointer;
        }
        #upload_container form input[type="submit"]{
            background-color: lightgray;
            border: none;
        }
        #upload_container form  input[type="submit"]:hover{
            background-color: white;
            cursor: pointer;
            border: 1px solid lightblue;
        }
    </style>
    <script>
        var productname=document.getElementById("productName");
        var price=document.getElementById("price");
        var choose=document.getElementById("choose");
        var image=document.getElementById("image");
        
        function upload() {
            image.click();
        }
        image.addEventListener("change",function () {
            var file=this.files[0];
            if (productname.value="") {
                productname.value=file.name;
            }
            choose.innerHTML = "You can change("+file.name+") picture";
        })
    </script>
</body>
</html>