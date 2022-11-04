<?php
    include("dbconnexion.php");
?>
<?php
$sql="CREATE DATABASE IF NOT EXISTS slah;";
$res=mysqli_query($conn,$sql);
if(!$res){
    echo"Database not created ".mysqli_error($conn);
}else {
    echo"Database created successfully";
    $ct="CREATE TABLE comptes (id AUTOINCREMENT PRIMARY KEY, name varchar[50], lastname varchar[50], email varchar[50], pwd varchar[50]);";
    $q1=mysqli_query($con,$ct);
    if(!$q1){
        echo"Table comptes not created ".mysqli_error($conn);
    }
    else {
        echo"Table comptes created successfully";
    }
}
?>