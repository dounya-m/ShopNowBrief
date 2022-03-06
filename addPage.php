<?php
require('db.php');

?>
<?php
session_start();

require_once "check.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
<nav class="nav">
        <section class="logo">
            <img src="logo.png" alt="logo">
        </section>
        <section class="search">
            <div class="searchBar">
            <button type='submit'><img src="icones/search.svg" alt="serach"></button>
            <input type="search" id='search' name='search' placeholder='Search Files...'>
            </div>
            <div class="filtre">
                <select name="types" id="types">
                    <option value="filter">Filter</option>
                    <option value="man">Man Watches</option>
                    <option value="women">Women Watches</option>
                    <option value="smart">Smartwatch</option>
                    <option value="bran">Brands</option>
                </select>
            </div>
        </section>
        <section class="user">
            <div class="notif">
            <a href="#" class="notification">
            <img src="/icones/notification.svg" alt="serch">
        </a>
        </div>
        <div class="profil">
            <img src="profil.jpg" alt="photo">
            <div class="information">
                <h4>John Doe</h4>
                <p>john.doe@gmail.com</p>
            </div>
        </div>
        </section>
    </nav>
    <main class="content">
    <section class="first-part">
        <div class="fix">
        <div class="icones">
            <div class="icon">
                <a href="dashboard.php"> <img src="icones/product-icones/dashboard.svg" alt="icones"></a>
                <p>Dashboard</p>
            </div>
            <div class="icon">
                <a href="product.php"> <img src="icones/all products.svg" alt="icones" ></a>
                <p>All Products</p>
            </div>
            <div class="icon">
                <a href="addPage.php"> <img src="icones/Add-style.svg" alt="icones" class='main-icon'></a>
                <p>Add Products</p>
            </div>
            <div class="icon">
                <a href="edit.php"> <img src="icones/edit.svg" alt="icones"></a>
                <p>Edit Products</p>
            </div>
            <div class="icon">
                <a href="#"> <img src="icones/delet.svg" alt="icones"></a>
                <p>Delet Products</p>
            </div>
        </div>
        <div class="sign-out">
        <button type='submit'><a href="dexonexion.php"> Sign out</a></button>
        </div>
        </div>
    </section>
    <section class="tableau">
    <div><h2>All Products</h2></div>
    <form action="creat.php" method="POST" enctype="multipart/form-data">
        <div class="all-input">
        <div class="top">
            <div class="labeles">
                <h5>Product name</h5>
                <input type="text" name="name" placeholder="product name..">
            </div>
            <div class="labeles">
                <h5>Quantity</h5>
                <input type="number" name="quantity" placeholder="product quantity..">
            </div>
        </div>
        <div class="bottom">
            <div class="labeles">
                <h5>Price</h5>
                <input type="number" name="price" placeholder="product price..">
            </div>
            <div class="labeles">
                <h5>Image</h5>
                <input type="file" name="imageSource"  id="file">
            </div>
        </div>
            </div>
            <div class="fil-option">
            <h5>Type</h5>
                <select name="types" id="types">
                    <option value="filter">Filter</option>
                    <option value="man">Man Watches</option>
                    <option value="women">Women Watches</option>
                    <option value="smart">Smartwatch</option>
                    <option value="bran">Brands</option>
                </select>
            </div>
            <div class="submit">
            <button type='submit' name='sub'> Submit</button>
        </div>
        </form>
    </section>
</main>
</body>
</html>