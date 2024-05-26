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
    

    <section>
        <form action="AddYours.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="productName" id="productName" placeholder="Product Name" required>
            <input type="number" name="price" id="price" placeholder="Product Price" required>
            <input type="file" name="image" id="image" required>
            <button id="choose">Choose Image</button>
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
            background-color: var(--other-color);
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
    </style>
</body>
</html>