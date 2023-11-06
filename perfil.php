<!DOCTYPE html> 
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perfil.php</title>
    <link
    rel="stylesheet"
    type="text/css"
    href="css/Paginas do Site/perfil.css"
    />
    <link rel="shortcut icon" href="img/ACC.png" type="image/x-icon">

</head>
<body>
    <?php 
      include("header.php");  // incluindo o html do header.php em todas as paginas
      if(@$_SESSION['usuario_logado'] == false){
        header ('Location: index.php');
      }
    ?>
    <section class="user_atalhos">
        <div class="config">
            <?php

                include_once("settings/conexao.php");
                $stmt = "SELECT * FROM user";

                $resultado = mysqli_query($conn, $stmt);

                if(mysqli_num_rows($resultado)>0){
                    //Mostrando o resultado na tela
                    while($user = mysqli_fetch_assoc($resultado)){
                        echo '<img src="settings/uploads/'. $user['foto_perfil'] .'" alt="tipo de arquivo nao suportado">';
                    }
                }
            ?>
             <?php
                        $stmt2 = "SELECT * FROM user";

                        $resultado2 = mysqli_query($conn, $stmt2);
            
                        if(mysqli_num_rows($resultado2)>0){
                            //Mostrando o resultado na tela
                            while($nome = mysqli_fetch_assoc($resultado2)){
                                echo '<h1>'.$nome['nome'].'</h1>';
                            }
                        }
                   ?>

            <a href="excluir_postagem.php" class="show tira"><ion-icon name="trash-outline"></ion-icon>Excluir Postagem</a>
            <a href="config_perfil.php" class="show"><ion-icon name="settings"></ion-icon>config</a>


            <a href="excluir_postagem.php" class="escond tira"><ion-icon name="trash-outline"></ion-icon></a>
            <a href="config_perfil.php" class="escond"><ion-icon name="settings"></ion-icon></a>
        </div>
    </section>
    <section class="im">
        <div class="post_users">
    <?php
        
            include_once("settings/conexao.php");
            $stmt2 = "SELECT * FROM arquivos  ORDER BY id DESC";

            $resultado = mysqli_query($conn, $stmt2);

            if(mysqli_num_rows($resultado)>0){
                //Mostrando o resultado na tela
                while($postagem = mysqli_fetch_assoc($resultado)){
                   echo '<div class="postbox"> 
                          <img src="settings/uploads/'. $postagem['nome']  .'" alt="tipo de arquivo nao suportado">
                          <div class="ti_post">
                              <h4>'. $postagem['postagem'] . '</h4> 
                              <a href="settings/delete_img.php?id='.$postagem['id'].'" value="'.$postagem['id'].'"><ion-icon name="trash-outline"></ion-icon></a>
                          </div>
                        </div>';
                }
            }
    ?>
    

        </div>
    </section>

    <div class="responsive-nav">

      <div class="page-menus">
        
        <a href="index.php">
          <ion-icon name="home-outline"></ion-icon>
         <h1>Home</h1>

        </a>
      </div>

      <div class="page-menus  ">

        <a href="campanhas.php">
          <ion-icon name="newspaper-outline"></ion-icon>
          <h1>Feed</h1>
        </a>

      </div>

      <div class="page-menus">
        
        <a href="contato.php">
          <ion-icon name="call-outline"></ion-icon>
         <h1>Contat.</h1>
        </a>

      </div>
      <?php 

          if(@$_SESSION['usuario_logado'] == true){

            echo '<div class="page-menus">
                      
                      <a href="perfil.php">
                        <ion-icon name="person-outline"></ion-icon>
                      <h1>Eu</h1>
                      </a>

                  </div> 
                  
                  <div class="page-menus">
                      
                      <a href="log/logout.php">
                        <ion-icon name="log-out-outline"></ion-icon>
                      <h1>Sair</h1>
                      </a>

                  </div>';

            
          }else{
          echo '<div class="page-menus">
                      
                      <a href="log/login.php">
                        <ion-icon name="person-outline"></ion-icon>
                      <h1>Eu</h1>
                      </a>

                  </div>';
          }
       ?> 

    </div>

</body>
<script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
  ></script>
  <script
    nomodule
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
  ></script>
</html>
<?php
?>
