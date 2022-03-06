<?php


    include "db.php";


    if(isset($_GET["id"]) && !empty($_GET['id'])){

        $id= $_GET['id'];
        $query = "DELETE FROM product WHERE id = $id";
        $req= $conn->prepare($query);
        $req -> execute();
        
        $url = "http://localhost:63342/index.php/product.php";
                header("Location: $url"); 
        // header("location:http://localhost:63342/PhpstormProjects/ShopNowBrief/product.php?_ijt=n42kn6njifm2ooudu0c07aq5en&_ij_reload=RELOAD_ON_SAVE");

    }



?>