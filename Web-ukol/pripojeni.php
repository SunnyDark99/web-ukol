<?php
if(!$connection = mysqli_connect('localhost','root', '', 'session_ukol')){
    die("Databazi se nepodařilo připojit!");
}
mysqli_query($connection, "SET CHARACTER SET utf8");
mysqli_query($connection, "SET NAMES utf8");
?>