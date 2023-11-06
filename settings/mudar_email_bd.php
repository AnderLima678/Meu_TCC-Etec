<?php
if(!empty($_POST['at_email'])){
 include_once('conexao.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $email_atual = $_POST['at_email'];
        $email_nova = $_POST['nv_email'];
        $email_verifica = $_POST['vr_email'];

        $stmt1 = "SELECT * FROM user";

        $resultado = mysqli_query($conn, $stmt1); 

        $info_bd = mysqli_fetch_assoc($resultado);

        if($email_atual == $info_bd['email'] && $email_nova == $email_verifica){
            $stmt2 = "UPDATE user SET email = '$email_nova'";

            mysqli_query($conn, $stmt2);

            mysqli_close($conn);

            header("Location: ../mudar_senha.php?msg_s2=true");
        }else{
            header("Location: ../mudar_senha.php?msg_erro2=true");
        }
      
    }

}else{
header("Location: ../mudar_senha.php");
}


?>