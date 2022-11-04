<?php
    include("dbconnexion.php");
?>
<?php
    session_start();
    $name = $_POST['name'];
    $lastname = $_POST['lastname']; 
    $email = $_POST['email']; 
    $pwd = $_POST['pwd']; 
    $req = "insert into comptes values ('$name', '$lastname', '$email', '$pwd')";
    $ok = mysqli_query ($conn, $req);
    if ($ok ==FALSE)
        { echo "probléme d'inscription <br/>";}
    else
        { echo "inscription effectuée avec succés <br/>";}
?>