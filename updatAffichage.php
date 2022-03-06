<?php


    include "db.php";
    echo $_GET["id"];


    if(isset($_GET["id"]) && !empty($_GET['id'])){

        $nameUp = $_POST['name'];
        $quantityUp = $_POST['quantity'];
        $priceUp = $_POST['price'];
        $typeUp = $_POST['types'];

        $imageName = $_FILES['imageSource']['name'];

        if(!empty($imageName)){

            $imageSource = $_FILES['imageSource']['tmp_name'];
            $newImage=time().$imageName;
            $chemaImage= "images/".$newImage;
            move_uploaded_file($imageSource,$chemaImage);

            $id= $_GET['id'];
            $query = "UPDATE product  SET name='$nameUp' , quantity= $quantityUp , price=$priceUp , image='$newImage' , type='$typeUp'   WHERE id = $id";
            $req= $conn->prepare($query);
            $req -> execute();

        }else{

            $id= $_GET['id'];
            $query = "UPDATE product  SET name='$nameUp' , quantity= $quantityUp , price=$priceUp , type='$typeUp'   WHERE id = $id";
            $req= $conn->prepare($query);
            $req -> execute();
        }


        $url = "http://localhost:63342/index.php/product.php";
        header("Location: $url"); 
        // header("location:http://localhost:63342/PhpstormProjects/ShopNowBrief/product.php?_ijt=n42kn6njifm2ooudu0c07aq5en&_ij_reload=RELOAD_ON_SAVE");

    }



?>