<?php 
    //Recebe os dados do formulário de login $u= $_POST['usuario'];
    
    $email = $_POST['email'];
    $password = $_POST['senha'];

    //Conecta ao BD
    include_once('../settings/conexao.php');

    //consulta que busca o usuário e senha no BD
    $stmtlogin = "select * from user where email = '$email' and senha = '$password';";

    //Executa a consulta acima
    $resultado = mysqli_query($conn, $stmtlogin); //Verifica se foi encontrado o usuário acima e cria uma sessão

    if(mysqli_num_rows($resultado) > 0) {
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
            $_SESSION['usuario_logado'] = true;
            $_SESSION['email_user'] = $_POST['email'];  
            header("Location: ../index.php"); //Aqui vc pode colocar a página de entrada
        } 
      
    } else {
        header("Location: login.php?erro=true"); //Aqui vc pode colocar a página de entrada
        $_SESSION['usuario_logado'] = false;

        //Fecha a conexão
    }
    mysqli_close($conn);
?>  