<?php
if(!$connection = mysqli_connect('localhost','root', '', 'session_ukol')){
    die("Databazi se nepodaøilo pøipojit!");
}
mysqli_query($connection, "SET CHARACTER SET utf8");
mysqli_query($connection, "SET NAMES utf8");
?>