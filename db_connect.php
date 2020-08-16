<?php 

$conn = new mysqli("localhost", "Vishal", "1rn17is118", "flat_management");

if($conn->connect_error) {
    echo "Error : ".$conn->connect_error;
}
