<?php

    //connecting to the database
    $servername="localhost";
    $username="root";
    $password="";
    $database="dbrohit";

    //create a connection
    $conn=mysqli_connect($servername, $username, $password, $database);

    //die if connection was not successful
    if(!$conn){
        die("sorry we failed to connect: ".mysqli_connect_error());
    }
    else{
            echo "connection was successful<br>";
    }

    $sql = "SELECT * FROM `trip1`";
    $result=mysqli_query($conn, $sql);

    //find the no of records
    $num= mysqli_num_rows($result);
    echo $num;
    echo "<br>";


    // if($num>0){
    //     $row=mysqli_fetch_assoc($result);
    //     echo var_dump($row);
    //     echo "<br>";
    // }
    // if($num>0){
    //     $row=mysqli_fetch_assoc($result);
    //     echo var_dump($row);
    //     echo "<br>";
    // }
    // if($num>0){
    //     $row=mysqli_fetch_assoc($result);
    //     echo var_dump*($row);
    //     echo "<br>";
    // }
    // if($num>0){
    //     $row=mysqli_fetch_assoc($result);
    //     echo var_dump($row);
    //     echo "<br>";
    // }

    while($row=mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['sno'].".hello".$row['name']."Welcome to ".$row['dest'];
        echo "<br>";

    }


?>