<?php

session_start();

session_unset();

session_destroy();

header("location:http://localhost:63342/index.php/login.php");


?>