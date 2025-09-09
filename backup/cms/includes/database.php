<?php 
$connect = mysqli_connect('localhost','cms','1234','cms' );

if (mysqli_connect_error()){
    exit('Failed to connect to MySQL tanginamo: ' . mysqli_connect_error());
}
