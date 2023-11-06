<?php 
if(!empty($_POST['username'])){
 include_once('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = $_POST['username'];

    $stmt = "UPDATE user SET nome = '$username'";

    mysqli_query($conn, $stmt);
}

header("Location: ../config_perfil.php");
}else{
header("Location: ../index.php");
}
?>