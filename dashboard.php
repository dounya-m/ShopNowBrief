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
                <a href="dashboard.php"> <img src="/icones/home.svg" alt="icones" class='main-icon'></a>
                <p>Dashboard</p>
            </div>
            <div class="icon">
                <a href="product.php"> <img src="/icones/all products.svg" alt="icones"></a>
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
    <section class="product">
    <!-- categories div   -->
    <div class="categories">
        <h2>categories</h2>
        </div>
    <div class="all">    
        <div class="watch">
            <img src="/images/manWatch.jpg" alt="manwatch">
            <a href="#"><p>Man Watches</p></a>
        </div>
        <div class="watch">
            <img src="/images/womanWatch.jpg" alt="womenwatch">
            <a href="#"><p>Women Watches</p></a>
        </div>
        <div class="watch">
            <img src="/images/smartwatch.jpg" alt="smartwatch">
            <a href="#"><p>Smartwatch</p></a>
        </div>
    </div>  
    <!-- categories div   -->
        <!-- brand div -->
    <div class="categories">
        <h2>Brand</h2>
        </div>
    <div class="all">    
        <div class="watch" >
            <img src="/images/rolex.jpg" alt="rolex">
            <img class="brandLogo" src="/icones/rolex.png" alt="rolexLogo">
            <a href="#"><p>Rolex</p></a>
        </div>
        <div class="watch">
            <img src="/images/cartier.jpg" alt="Cartier">
            <img class="brandLogo" src="/icones/cartier.png" alt="Carteilogo">
            <a href="#"><p>Cartier</p></a>
        </div>
        <div class="watch" >
            <img src="/images/vachron.jpg" alt="smartwatch">
            <img class="brandLogo" src="/icones/vaschron.png" alt="vachronConstantin">
            <a href="#"><p>Vachron Constantin</p></a>
        </div>
    </div> 
    <!-- brand div -->
    </section>
    <section class="last-activ">
    <div class="categories">
        <div><h2>Last Activity</h2></div>
        <div class="icone-activity">
            <a href="#"><img src="/icones/settings.svg" alt="param"></a>
            <a href="#"><img src="/icones/add2.svg" alt="add"></a>
        </div>
        </div>
        <div class="activity">
            <div class="first-activity">
            <div class="product-img"><img src="/images/stock.jpg" alt="image"></div>
            <div class="categorie">
                <h4>Categorie</h4>
                <p>Watche name</p>
            </div>
            <div class="prix">
                <h4>Prix</h4>
                <p>1400dh</p>
            </div>
            </div>
            <div class="first-activity">
            <div class="product-img"><img src="/images//stock02.jpg" alt="image"></div>
            <div class="categorie">
                <h4>Categorie</h4>
                <p>Watche name</p>
            </div>
            <div class="prix">
                <h4>Prix</h4>
                <p>1200dh</p>
            </div>
            </div>
        </div>
    </section>
    </main>
</body>
</html>