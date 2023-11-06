
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/ACC.png" type="image/x-icon">

    <title>Etecamp - ACC Campanhas</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="css/Paginas do Site/campanhas.css"
    />

    <link
    rel="stylesheet"
    type="text/css"
    href="css/Paginas do Site/nav.css"
  />
  </head>

  <body>
    <?php 
    include_once("settings/conexao.php");
    include("header.php")  // incluindo o html do header.php em todas as paginas
    ?>
    <main>


      <div class="container">

       
        <!--INICIO conteudo principal do site-->
        <div class="main-content">

           <!--INICIO post user perfil-->
            <?php 
              if(@$_SESSION['usuario_logado'] == true){
                include('postar.php');
              }
            ?>

          <?php

            $stmt = "SELECT * FROM arquivos ORDER BY id DESC";

            $resultado3 = mysqli_query($conn, $stmt);

            // Consulta SQL que será executada


              if(mysqli_num_rows($resultado3)>0){
                //Mostrando o resultado na tela
                while($postagem = mysqli_fetch_assoc($resultado3)){

                  echo '<div class="post-container">
                    <!--INICIO post foto e perfil-->
                    <div class="post-row">
                      <!--INICIO foto post user-->
                      <div class="user-profile">';

                      $stmt3 = "SELECT * FROM user";

                      $resultado = mysqli_query($conn, $stmt3);
          
                      if(mysqli_num_rows($resultado)>0){
                          //Mostrando o resultado na tela
                          while($user = mysqli_fetch_assoc($resultado)){                            
                              echo '<img class="foto_perfil" src="settings/uploads/'. $user['foto_perfil'] .'" alt="">
                              ';
                          }
                      }

                    echo '<div>';
                    $stmt4 = "SELECT * FROM user";

                    $resultado2 = mysqli_query($conn, $stmt4);
        
                    if(mysqli_num_rows($resultado2)>0){
                        //Mostrando o resultado na tela
                        while($nome = mysqli_fetch_assoc($resultado2)){
                            echo '<p>'.$nome['nome'].'</p>';
                        }
                    }
                    echo  '</div>
                      </div>
                      <!--FIM foto post user-->
                    <div class="container_tri">
                        <ion-icon class="tripoints" name="ellipsis-vertical-sharp"></ion-icon>

                        <!--menu drop down-->
                          <div class="dropdown">
                              <ul>
                                <li><a href=""><ion-icon name="share-social-outline"></ion-icon>Compartilhar</a></li>
                                <!-- <li><a href=""><ion-icon name="alert-outline"></ion-icon>denunciar</a></li> -->
                                <li><a href=""><ion-icon name="cube-outline"></ion-icon>ocultar</a></li>
                              </ul>
                          </div>
                    </div>
                  </div>
                    <!--FIM post foto e perfil-->

                    <p class="post-text">';


                      echo $postagem['postagem'];

                      
                      echo '<br>
                      
                    </p>

                    <img  
                      class="foto-da-postagem"';
                      echo 'src="settings/uploads/'. $postagem['nome'] . '"
                      alt="tipo de arquivo nao suportado"
                      class="post-img"';
                    echo '/>
                  </div>';
                }
                
  
                

              }
          ?>
          <!--  -----------------------FIM post feed  1------------------------------ -->
          <!--  -----------------------INICIO post feed 2 ------------------------------ -->
          <!-- ---- BOTÃO ---- -->
        </div>
            <!--FIM conteudo principal do site-->

                                    
        <div class="right-sidebar"><!-- ------- INICIO Barra Lateral Direita Site ---------------- -->

          <!--INICIO Titulo lateral direita -->
          <div class="sidebar-title">
              <h4>Eventos proximos</h4>                
          </div>
          <!--FIM Titulo lateral direita -->


          <?php 

           
          $stmt_evento = "SELECT * FROM eventos ORDER BY id DESC";

          $resultado_evento = mysqli_query($conn, $stmt_evento);

          if(mysqli_num_rows($resultado_evento)>0){
            //Mostrando o resultado na tela
            while($evento = mysqli_fetch_assoc($resultado_evento)){

              setlocale(LC_ALL,  'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
              $data_evento = $evento['data_evento'];
              $dia = strftime('%d', strtotime($data_evento));
              $mes = strftime('%b', strtotime($data_evento));
                echo '
                
                <!--INICIO evento-->
                <div class="event">
                    <div class="left-event">
                        <h3>'.$dia.'</h3>
                        <sapan>'.$mes.'</sapan>
                    </div>
      
                    <div class="right-event">
                        <h4>'.$evento['titulo'].'</h4>
                        <p>'.$evento['desc'].'</p>';
                      if(@$_SESSION['usuario_logado'] == true){
                       echo '<a href="settings/excluir_evento.php?id='.$evento['id'].'"><ion-icon name="trash-outline"></ion-icon></a>';
                        }
                    echo '</div>
                    
                </div>
                <!--FIM evento-->';
            }
        }

       
          ?>
            
            <!--INICIO Titulo lateral direita -->
                   
            
          <!--FIM Titulo lateral direita -->

            <?php       
          if(@$_SESSION['usuario_logado'] == true){
              echo ' <hr><br> 
              <form class="form_event" action="settings/enviar_evento.php" method="POST">
                    <h3>Criar novo evento</h3><br>
                    <br>
                    <input type="text" name="titulo"required placeholder="Titúlo" autocomplete="off"><br>
                    <br>
                    <input type="text" name="dec" required placeholder="Descrição"  maxlength="35" autocomplete="off"><br>
                    <br>
                    <input type="date" name="data" required placeholder="Data do evento" autocomplete="off"><br><br>
                    <button class="btn_file" type="submit">Enviar</button>      
              </form>';
          }
            ?>    
        </div>
      </div>
                
    <?php
      include('nav_resp.php');
    ?>
    </main>
    <!--conteudo principal da pagina fim-->
 

    <!-- <footer>inicio rodapé do site</footer> -->
  </body>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js">
  </script>

  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js">
  </script>
  <script src="JavaScript/drop.js"></script>
