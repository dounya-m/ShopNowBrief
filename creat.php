<?php
include "db.php";

if(isset($_POST["sub"])){
    if(isset($_POST["name"]) && isset($_POST["quantity"])&& isset($_POST["price"])&& isset($_POST["types"]) && !empty($_FILES["imageSource"]["name"]) && !empty($_POST["name"])&&!empty($_POST["quantity"])&&!empty($_POST["price"])&&!empty($_POST["types"])){

        $name= $_FILES["imageSource"]["name"];
        $src= $_FILES["imageSource"]["tmp_name"];

        $newName=time().$name;
        $fileImage="images/".$newName;
        move_uploaded_file($src,$fileImage);

        
        
        $sql="INSERT INTO product(id,name,quantity,price,image,type) value(NULL,?,?,?,?,?)";
        $req= $conn->prepare($sql);
        $req->execute(array($_POST["name"],$_POST["quantity"],$_POST["price"],$newName,$_POST["types"]));

        $url = "http://localhost:63342/index.php/product.php";
        header("Location: $url"); 
        // header("location:http://localhost:63342/PhpstormProjects/ShopNowBrief/product.php");
    }else{
        header("location:http://localhost:63342/PhpstormProjects/ShopNowBrief/addPage.php");
    }
}
?>