<?php
$mysqli = new mysqli("localhost" , "root" , "123456" , "project101");
if($mysqli == false) {

    die("ERROR: could not connect. " . $mysqli->connect_error);
}