<?php


$mysqli =new mysqli( "localhost","root","","bechalor_accomodation");
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;