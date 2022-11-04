<?php $serverName = 'localhost';
    $username = 'root';
    $password = '';
    $conn = mysqli_connect($serverName, $username, $password); //bool

    if (!$conn) {
        die("problem in connection" . mysqli_connect_error());
    } else {
        echo"connect successfully";
    }
    echo "</br>";
?>