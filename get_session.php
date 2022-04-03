<?php

// Session
session_start();
if(isset($_SESSION['username'])){
    echo "Welcome ".$_SESSION['username'];
    echo "<br> your favoriate category is ".$_SESSION['favCat'];
    echo "<br>";
}
else{
    echo "please login to continue";
}


?>