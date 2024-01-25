<?php

$servername = 'localhost';

$username = 'root'; 

$password = ''; 

$database = 'justicevoice'; 

$conn = mysqli_connect($servername,$username,$password,$database);
 if($conn){ echo "connection succesful";
    }else{
die("Connection failed:".mysqli_connect_error());
 }
?> 