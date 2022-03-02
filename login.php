
<?php 
    require('db.php'); 
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        $admin= $_POST['admin'];
        $password= $_POST['password'];

        if(!empty($admin) && !empty($password)){

            $sqlAdmin=" SELECT * FROM user where admin like '$admin' and password like '$password' ";
            $statement = $conn->prepare($sqlAdmin);
            $statement->execute();
            if($statement->rowCount()>0){

                $url = "http://localhost:63342/index.php/dashboard.php?_ijt=hk7n46p3h8tj81d07lfaru42uo&_ij_reload=RELOAD_ON_SAVE";
                header("Location: $url");  
                // header("location:http://localhost:63342/PhpstormProjects/ShopNowBrief/dashboard.php");
                // header("location:http://localhost:63342/index.php/dashboard.php?_ijt=hk7n46p3h8tj81d07lfaru42uo&_ij_reload=RELOAD_ON_SAVE");
            }
        }



    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">

    <title>Document</title>
</head>
<body>

    <section class="left">
        <div class="flou">
        <img src="logoWhite.png" alt="logo">
        <p>Le Lorem Ipsum est simplement du faux texte 
            employé dans la composition et la mise en 
            page avant impression. Le Lorem Ipsum est 
            le faux texte standard de l'imprimerie depuis 
            les années 1500, quand un imprimeur anonyme 
            assembla ensemble des morceaux de texte pour 
            réaliser un livre spécimen de polices de texte.</p>
            </div>
    </section>
    <section class="right">
        <img src="logo.png" alt="logo">
        <div class="title">
        <h1>Login to your account</h1>
        <h3>See the lastest offers or create one</h3>
        </div>
        <form action="" method="post"> 
                <div class="cases">
                <div class="flex">
                <label for="name">User Name</label>
                <input class="mail" type="text" id="mail" name="admin" require placeholder="admin..">
                </div>
                <div class="flex">
                <label for="passwword">Password</label>
                <input class="mail" type="password" id="password" name="password" require placeholder="*****************">
                <a href="#">Forgot your password?</a>
                </div>
                <div class="flex">
                    <input class="submit" type="submit" name="sub" value="login" >
                </div>
        </form>
    </section>
</body>
</html>