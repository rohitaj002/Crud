<?php
// include 'dbconnect.php';
// require 'dbconnect.php';

// $a=readfile("myfile.txt");
// echo $a;

// readfile("myfile.txt");


$fptr=fopen("myfile.txt","r");

if(!$fptr){
    die("Unable to open this file. Please enter a valid filename");
}

// $content=fread($fptr,filesize("myfile.txt"));
// echo $content;
// fclose($fptr);




// while($a=fgets($fptr)){
//     echo $a;
// }

// echo fgetc($fptr);

// while($a=fgets($fptr)){
//         echo $a;
// break;
//     }

// echo "End of the file has been reached";



// write a program which reads the content of a file until "." has been encountered.
// while($a=fgetc($fptr)){
//     echo $a;
//     if($a=="."){
//     break;
//     }
// }
// fclose();




//write file

// echo "welcome to write files in php";
// $fptr=fopen("myfiles2.txt","w");
// fwrite($fptr, "This is the firs  line");
// fwrite($fptr,"And this is the second");

// fclose($fptr);


//Aapend file


$fptr=fopen("myfiles2.txt","a");
fwrite($fptr,"This is being appened to the file.");
fclose($fptr);

?>