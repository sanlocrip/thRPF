<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
header('X-Frame-Options: ALLOW-FROM https://toshihaku.jcink.net/');

$link = mysqli_connect("remotemysql.com", "Iqgq6u0w7N", "Dwpr5gYLlQ", "Iqgq6u0w7N");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$PM = mysqli_real_escape_string($link, $_REQUEST['PM']);
$charName = mysqli_real_escape_string($link, $_REQUEST['charName']);
$imgurl = mysqli_real_escape_string($link, $_REQUEST['imgurl']);
 
// Attempt insert query execution
$sql = "INSERT INTO persons (PM, charName, imgurl) VALUES ('$PM','$charName','$imgurl')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
