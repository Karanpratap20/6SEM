<?php

define("HOST", "localhost");
define("USER","root");
define("PASS","");
define("DB","crud");

$conn = mysqli_connect(HOST,USER, PASS, DB);

if(!$conn){
    die("Connection error");
}


?>