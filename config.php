<?php

    $conn = mysqli_connect("localhost", "root", "", "nav-yuvan");

    if (mysqli_connect_error()) {
        echo "Fail to connect: " . mysqli_connect_error();
    }
    
?>