<?php
if(@$_SESSION['usuario_logado'] == false){

        $id = $_GET['id'];
        

        include_once("conexao.php"); 
 
        $stmt = "DELETE FROM eventos WHERE id='$id';";

        mysqli_query($conn, $stmt);
        mysqli_close($conn);
    header("Location: ../campanhas.php");

}else{
    header("Location: ../index.php");
}
?>