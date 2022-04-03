<?php

//connecting to database

$servername="localhost";
$username="root";
$password="";
$database="dbRohit";

//create a connection
$conn=mysqli_connect($servername, $username, $password,$database);


//die if connection was not successful
if(!$conn){
    die("sorry we failed to connect: ".mysqli_connect_error());
}
else{
    echo "connection was successful<br>";
}