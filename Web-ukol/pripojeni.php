<?php
if(!$connection = mysqli_connect('localhost','root', '', 'session_ukol')){
    die("Databazi se nepoda�ilo p�ipojit!");
}
mysqli_query($connection, "SET CHARACTER SET utf8");
mysqli_query($connection, "SET NAMES utf8");
?>