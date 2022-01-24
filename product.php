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
            <button type='submit'><img src="/icones/search.svg" alt="serach"></button>
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
                <a href="dashboard.php"> <img src="/icones/product-icones/dashboard.svg" alt="icones"></a>
                <p>Dashboard</p>
            </div>
            <div class="icon">
                <a href="product.php"> <img src="/icones/product-icones/products-icones.svg" alt="icones" class='main-icon'></a>
                <p>All Products</p>
            </div>
            <div class="icon">
                <a href="#"> <img src="/icones/Add.svg" alt="icones"></a>
                <p>Add Products</p>
            </div>
            <div class="icon">
                <a href="#"> <img src="/icones/edit.svg" alt="icones"></a>
                <p>Edit Products</p>
            </div>
            <div class="icon">
                <a href="#"> <img src="/icones/delet.svg" alt="icones"></a>
                <p>Delet Products</p>
            </div>
        </div>
        <div class="sign-out">
            <button type='submit'><a href="index.php"> Sign out</a></button>
        </div>
        </div>
    </section>
    <section class="second-part">
    <div class="criesatego">
        <h2>All Products</h2>
        </div>
        <div class="tableau-contain">
        <div class="line">
            <img src="/Products/image01.jpg" alt="img">
            <p class="info">Watch name</p>
            <p class="info">13 pièces</p>
            <p class="info">22/01/2022</p>
            <p class="info">1200MAD</p>
        </div>
        <div class="icon-control">
            <a href="#"><img src="/Products/manage.svg" alt="icone"></a>
            <a href="#"><img src="/Products/delet.svg" alt="icone"></a>
            </div>
            <!-- fin line -->
            <div class="line">
            <img src="/Products/image02.jpg" alt="img">
            <p class="info">Watch name</p>
            <p class="info">13 pièces</p>
            <p class="info">22/01/2022</p>
            <p class="info">1200MAD</p>
        </div>
        <div class="icon-control">
            <a href="#"><img src="/Products/manage.svg" alt="icone"></a>
            <a href="#"><img src="/Products/delet.svg" alt="icone"></a>
            </div>
            <!-- fin line -->
            <div class="line">
            <img src="/Products/image05.jpg" alt="img">
            <p class="info">Watch name</p>
            <p class="info">13 pièces</p>
            <p class="info">22/01/2022</p>
            <p class="info">1200MAD</p>
        </div>
        <div class="icon-control">
            <a href="#"><img src="/Products/manage.svg" alt="icone"></a>
            <a href="#"><img src="/Products/delet.svg" alt="icone"></a>
            </div>
            <div class="line">
            <img src="/Products/image07.jpg" alt="img">
            <p class="info">Watch name</p>
            <p class="info">13 pièces</p>
            <p class="info">22/01/2022</p>
            <p class="info">1200MAD</p>
        </div>
        <div class="icon-control">
            <a href="#"><img src="/Products/manage.svg" alt="icone"></a>
            <a href="#"><img src="/Products/delet.svg" alt="icone"></a>
            </div>
            <div class="line">
            <img src="/Products/image10.jpg" alt="img">
            <p class="info">Watch name</p>
            <p class="info">13 pièces</p>
            <p class="info">22/01/2022</p>
            <p class="info">1200MAD</p>
        </div>
        <div class="icon-control">
            <a href="#"><img src="/Products/manage.svg" alt="icone"></a>
            <a href="#"><img src="/Products/delet.svg" alt="icone"></a>
            </div>
        </div>
    </section>
    </main>
</body>
</html>