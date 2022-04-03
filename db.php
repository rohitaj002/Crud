<?php

//connecting to database

$servername="localhost";
$username="root";
$password="";
$database="dbRohit";

//create a connection
$conn=mysqli_connect($servername, $username, $password);


//die if connection was not successful
if(!$conn){
    die("sorry we failed to connect: ".mysqli_connect_error());
}
else{
    echo "connection was successful<br>";
}


//Create a table in a db
$sql="CREATE TABLE `dbrohit`.`trip1` ( `sno` INT NOT NULL AUTO_INCREMENT ,  `name` VARCHAR(11) NOT NULL ,  `age` INT(6) NOT NULL ,  `dest` VARCHAR(20) NOT NULL ,    PRIMARY KEY  (`sno`)) ENGINE = InnoDB;";

//cheak for the table creation success
$result=mysqli_query($conn, $sql);
if($result){
    echo "The table was created successfully";
}
else{
    echo "The table was not created successfully because of this error---?".mysqli_error($conn);
}
 
?>