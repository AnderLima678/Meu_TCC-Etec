<?php
session_start();
// echo session_status();
// print_r($_SESSION)
// print_r ($_SESSION['usuario_logado']);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/ACC.png" type="image/x-icon">
    <title>Document</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="css/Paginas do Site/nav.css"
    />
  
    <link
    rel="stylesheet"
    type="text/css"
    href="css/Paginas do Site/nav.css"
    />
</head>
<body>
    <header>
        <!--header da pagina inicio-->
        <nav>
        <a class="home_link" href="index.php"><img class="logo" src="img/etecamp.png" /></a>

          <ul class="nav-list">
            <!--links de navegação da pagina-->
            <li><a href="index.php">Home</a></li>
            <li><a href="campanhas.php">Campanhas</a></li>
            <li><a href="contato.php">Contato</a></li>
          </ul>

          <!-- foto do perfil -->
          <?php 
          
          if(@$_SESSION['usuario_logado'] == true){
            echo '<div class="container_contadrop">
            <div class="container_conta">';

             

                      include_once("settings/conexao.php");
                      $stmt = "SELECT * FROM user";

                      $resultado = mysqli_query($conn, $stmt);
          
                      if(mysqli_num_rows($resultado)>0){
                          //Mostrando o resultado na tela
                          while($user = mysqli_fetch_assoc($resultado)){
                              echo '<img class="foto_perfil" src="settings/uploads/'. $user['foto_perfil'] .'" alt="">';
                          }
                      }
          }
          
            
                  
            ?>

              </div>

              <div class="infodrop"> <!-- elemento que vai ser oculto por nao exitir session -->
                <ul>
                  <li><a href="perfil.php"><ion-icon name="person-outline"></ion-icon>Meu Perfil</a></li>
                  <!-- <li><a href=""><ion-icon name="grid-outline"></ion-icon>Minha conta</a></li> -->
                  <li><a href="config_perfil.php"><ion-icon name="settings-outline"></ion-icon>Config</a></li>
                  <li><a href="log/logout.php"><ion-icon name="log-out-outline"></ion-icon>Sair</a></li>
                </ul>
              </div>
          </div>
        </nav>
    </header>
     <script src="JavaScript/contadrop.js"></script>
</body>
</html>