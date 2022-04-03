<?php


$servername="localhost";
$username="root";
$password="";
$database="dbRohit";

//create a connection
$conn=mysqli_connect($servername, $username, $password, $database);

//die if connection was not successful
if(!$conn){
    die("sorry we failed to connect: ".mysqli_connect_error());
}
else{
    echo "connection was successful<br>";
}

//sql quey to be executed
$sql="INSERT INTO `trip` (`name`, `age`, `dest`) VALUES ('Shubham', '22', 'chhapra')";

//cheak for the table Insertion success
$result=mysqli_query($conn, $sql);

if($result){
    echo "The table was created successfully";
}
else{
    echo "The table was not created successfully because of this error---?".mysqli_error($conn);
}


?>