<?php
$servername = "sql308.infinityfree.com";
$username = "if0_34440778";
$password = "QmIgS7QER2";
$dbname="if0_34440778_formphp";

$mysqli =mysqli_connect($servername,$username,$password,$dbname);
if(!$mysqli){
    die("Connection Failed!");
}
?>