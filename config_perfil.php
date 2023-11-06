
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Config</title>
    <link rel="stylesheet" type="text/css" href="css/Paginas do Site/config_perfil.css"/>
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
            <h1 style="color: green; margin-left: 45px; margin-top: 10px" >Editar Perfil</h1> 

              <div class="container_all">
    
                  <div class="formulario1">           
                    <?php
                        $stmt = "SELECT * FROM user";

                        $resultado = mysqli_query($conn, $stmt);
            
                        if(mysqli_num_rows($resultado)>0){
                            //Mostrando o resultado na tela
                            while($user = mysqli_fetch_assoc($resultado)){
                                echo '<img src="settings/uploads/' . $user['foto_perfil'] . '" alt="Envie uma imagem">';
                            }
                        }
                 
                        $stmt2 = "SELECT * FROM user";

                        $resultado2 = mysqli_query($conn, $stmt2);
            
                        if(mysqli_num_rows($resultado2)>0){
                            //Mostrando o resultado na tela
                            while($nome = mysqli_fetch_assoc($resultado2)){
                                echo '<h1>'.$nome['nome'].'</h1>';
                            }
                        }
                    ?>

                </div>

                <div class="formulario2">
                  <form action="settings/upload_F_user.php" method="POST" enctype="multipart/form-data"> <!-- formulario pra envio da foto de perfil -->
                      <label for="foto"><ion-icon name="push-outline"></ion-icon>Alterar foto do perfil</label>                               
                      <input class="hide_it" type="file" name="foto" id="foto" required>
                      <input type="submit" value="Salvar">
                  </form>

                  <form  action="settings/nome_user.php" method="POST">
                      <label for="username"><ion-icon name="push-outline"></ion-icon>Alterar nome de usúario</label>
                      <input type="text" name="username" class="username_edit" id="username" autocomplete="off" required>
                      <input type="submit" value="Enviar" class="env_username">
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

<div class="page-menus  foco">

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
