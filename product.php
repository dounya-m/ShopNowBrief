<?php
include "db.php";

    $sql="SELECT * FROM product";
    $req= $conn->prepare($sql);
    $req->execute();
    $products = $req->fetchAll();
    
?>

<?php
include "db.php";

if (isset($_POST['find'])){

    $str = $_POST["search"];
    $query= " SELECT * FROM product WHERE name = $str ";
    $sth = $conn-> prepare($query);
    $sth-> execute();
    $sth-> fetchAll();


    if($row = $sth->fetch()){

        echo "run";
    }
}
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
                <form action="" method="post">
            <button type='submit' name= 'find'><img src="icones/search.svg" alt="serach"></button>
            <input type="search" id='search' name='search' placeholder='Search Files...'>
            </form>
            </div>
            <div class="filtre">
                <form action="">
                <select name="types" id="types">
                    <option value="filter">Filter</option>
                    <option value="man">Man Watches</option>
                    <option value="women">Women Watches</option>
                    <option value="smart">Smartwatch</option>
                    <option value="bran">Brands</option>
                </select>
                </form>
            </div>
        </section>
        <section class="user">
            <div class="notif">
            <a href="#" class="notification">
            <img src="icones/notification.svg" alt="serch">
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
                <a href="product.php"> <img src="icones/product-icones/products-icones.svg" alt="icones" class='main-icon'></a>
                <p>All Products</p>
            </div>
            <div class="icon">
                <a href="addPage.php"> <img src="icones/Add.svg" alt="icones"></a>
                <p>Add Products</p>
            </div>
            <div class="icon">
                <a href="#"> <img src="icones/edit.svg" alt="icones"></a>
                <p>Edit Products</p>
            </div>
            <div class="icon">
                <a href="#"> <img src="icones/delet.svg" alt="icones"></a>
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

        <table class="tableau-contain">
            <?php
            foreach ($products as $product) {
            ?>
            
                <tr class="line">
                    <td class="info"> <img  class="img" src="./images/<?php echo $product['image'] ?>" alt="img"></td>
                    <td class="info"><?php echo $product['name']?></td>
                    <td class="info"><?php echo $product['quantity']?> pièces</td>
                    <td class="info"><?php echo $product['date']?></td>
                    <td class="info"><?php echo $product['price']?>MAD</td>
                    <td class="icon"><a href="edit.php?id=<?php echo $product['id']?> "> <img src="Products/manage.svg" alt="icone"></a></td>
                    <td class="icon"><a href="proDb.php?id=<?php echo $product['id']?> "> <img src="Products/delet.svg" alt="icone"></a></td>
                </tr>
        
            <?php } ?>
            
        </table>

    </section>
    </main>
</body> 
</html>