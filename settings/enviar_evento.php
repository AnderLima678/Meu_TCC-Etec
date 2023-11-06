<?php

    if(!empty($_POST['titulo'])){
        include_once('conexao.php');
       
       if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
          
            $titulo = $_POST['titulo'];
            $desc = $_POST['dec'];
            $data_evento = $_POST['data'];

       
            $stmt = "INSERT INTO eventos VALUES ('', '$titulo', '$desc', '$data_evento ');";
       
           mysqli_query($conn, $stmt);
       }
       
       header("Location: ../campanhas.php");
       }else{
       header("Location: ../index.php");
       }
?>