<?php
if(!empty($_POST['at_pass'])){
 include_once('conexao.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $senha_atual = $_POST['at_pass'];
        $senha_nova = $_POST['nv_pass'];
        $senha_verifica = $_POST['vr_pass'];

        $stmt1 = "SELECT * FROM user";

        $resultado = mysqli_query($conn, $stmt1); 

        $info_bd = mysqli_fetch_assoc($resultado);

        if($senha_atual == $info_bd['senha'] && $senha_nova == $senha_verifica){
            $stmt2 = "UPDATE user SET senha = '$senha_nova'";

            mysqli_query($conn, $stmt2);

            mysqli_close($conn);

            header("Location: ../mudar_senha.php?msg_s=true");
        }else{
            header("Location: ../mudar_senha.php?msg_erro=true");
        }
      
    }

}else{
header("Location: ../mudar_senha.php");
}


?>