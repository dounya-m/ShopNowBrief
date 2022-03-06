<?php
    require('db.php');


    // $_SESSION['admin'] = $_POST['admin'];
    // $_SESSION['password'] = $_POST['password'];

    // $url = "http://localhost:63342/index.php/dashboard.php?_ijt=hk7n46p3h8tj81d07lfaru42uo&_ij_reload=RELOAD_ON_SAVE";
    // header("Location: $url"); 

    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        $admin= $_POST['admin'];
        $password= $_POST['password'];

        if(!empty($admin) && !empty($password)){

            $sqlAdmin=" SELECT * FROM user where admin like '$admin' and password like '$password' ";
            $statement = $conn->prepare($sqlAdmin);
            $statement->execute();

            if($statement->rowCount()>0){
                    session_start();

                    $_SESSION['admin'] = $_POST['admin'];
                    $_SESSION['password'] = $_POST['password'];

                $url = "http://localhost:63342/index.php/dashboard.php?_ijt=hk7n46p3h8tj81d07lfaru42uo&_ij_reload=RELOAD_ON_SAVE";
                header("Location: $url");  
            }else{
                $url = "http://localhost:63342/index.php/login.php?_ijt=hk7n46p3h8tj81d07lfaru42uo&_ij_reload=RELOAD_ON_SAVE";
                header("Location: $url"); 
            }
        }



    }

?>