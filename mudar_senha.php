
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Config</title>
    <link rel="stylesheet" type="text/css" href="css/Paginas do Site/mudar_senha.css"/>
    <link rel="shortcut icon" href="img/ACC.png" type="image/x-icon">

</head>
<body>
    <?php
    include("settings/conexao.php");
     include("header.php");  
        
    if(@$_SESSION['usuario_logado'] == false){
        header ('Location: index.php');
      }

    ?>
    <section>

        <div class="barra_lateral">
            <h1>Configurações</h1>
            <div class="hide">
              <a class="link" href="config_perfil.php"><ion-icon name="color-wand-outline"></ion-icon>Editar Perfil</a>
              <a class="link" href="mudar_senha.php"><ion-icon name="glasses-outline"></ion-icon>Senha e segurança</a>
            </div>
            <div class="container_tri">
                        <ion-icon class="tripoints" name="reorder-three-outline"></ion-icon>

                        <!--menu drop down-->
                          <div class="dropdown hide">
                              <ul>
                                <li><a href="config_perfil.php">Editar Perfil</a></li><hr>
                                <!-- <li><a href=""><ion-icon name="alert-outline"></ion-icon>denunciar</a></li> -->
                                <li><a href="mudar_senha.php">Senha e segurança</a></li>
                              </ul>
                          </div>
                    </div>
        </div>

        <div class="main_area">
            <h1 style="color: green;">Senha e segurança</h1>
          <div class="container">
                    
            <div class="formulario_mudar">
                
                <h3><ion-icon class="keep" name="finger-print-sharp"></ion-icon>Mudar Senha</h3>
                <form class="um" action="settings/mudar_senha_bd.php" method="POST" enctype="multipart/form-data"> <!-- formulario pra envio da foto de perfil -->

                    <label  for="at_pass"><ion-icon name="checkmark-outline"></ion-icon>Senha Atual</label>                               
                    <input class="troca_senha" type="password" name="at_pass" id="at_pass" required>

                    <label for="vr_pass"><ion-icon name="checkmark-done-outline"></ion-icon>Nova senha</label>                               
                    <input class="troca_senha" type="password" name="nv_pass" id="nv_pass" required>

                    <label for="nv_pass"><ion-icon style="color: green;" name="checkmark-done-outline"></ion-icon>Repita a senha</label>                               
                    <input class="troca_senha" type="password" name="vr_pass" id="vr_pass" required>

                    <?php
                    if(@$_GET['msg_erro']){
                      echo '<p class="msg">As senhas não coincidem.</p>';
                    }elseif(@$_GET['msg_s']){
                      echo '<p class="msg2">Senha alterada com sucesso!</p>';
                    }
                    ?>

                    <input type="submit" value="Enviar">
                </form>
            </div>  

            <div class="formulario_mudar">
                <h3><ion-icon class="keep" name="mail-sharp"></ion-icon>Mudar email</h3>
                <form class="dois" action="settings/mudar_email_bd.php" method="POST" enctype="multipart/form-data"> <!-- formulario pra envio da foto de perfil -->

                    <label  for="at_pass"><ion-icon name="checkmark-outline"></ion-icon>Email</label>                               
                    <input class="troca_senha" type="email" name="at_email" id="at_pass1" required>

                    <label for="vr_pass"><ion-icon name="checkmark-done-outline"></ion-icon>Novo email</label>                               
                    <input class="troca_senha" type="email" name="nv_email" id="nv_pass1" required>

                    <label for="nv_pass"><ion-icon style="color: green;" name="checkmark-done-outline"></ion-icon>confiarmar email</label>                               
                    <input class="troca_senha" type="email" name="vr_email" id="vr_pass2" required>

                    
                    <?php
                    if(@$_GET['msg_erro2']){
                      echo '<p class="msg">Os e-mails não Coincidem.</p>';
                    }elseif(@$_GET['msg_s2']){
                      echo '<p class="msg2">E-mail alterada com sucesso!</p>';
                    }
                    ?>


                    <input type="submit" value="Enviar">
                </form>
            </div>
          </div>    
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
  <script src="JavaScript/drop.js"></script>
</html>
