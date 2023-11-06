<?php 



?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tela de Login - ACC</title>
    <link rel="stylesheet" href="../css/Login e Registro/Login.css" />
    <link rel="stylesheet" type="text/css" href="../css/Paginas do Site/nav.css"/>
  </head>
  <body>
  <header>
        <!--header da pagina inicio-->
        <nav>
        <a class="home_link" href="../index.php"><img class="logo" src="../img/etecamp.png" /></a>

          <ul class="nav-list">
            <!--links de navegação da pagina-->
            <li><a href="../index.php">Home</a></li>
            <li><a href="../campanhas.php">Campanhas</a></li>
            <li><a href="../contato.php">Contato</a></li>
          </ul>
        </nav>
    </header>
    <!-- fim do header -->

    <section>
      <div class="mainbox">

        <div class="benvenido">
          <h1>BEM VINDO!!</h1>
          <img src="../img/cadeadocortado.png" alt="">
        </div>
        
        <div class="form-box">
          <div class="form-value">
            <form action="testLogin.php" method="POST" autocomplete="off">
              <h2 style="margin: 10px;">Login</h2>

              <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <label for="">Email</label>
                <input type="email" required name="email" />
              </div>

              <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <label for="">Senha</label>
                <input type="password" required name="senha"/> 
              </div>  
              <div class="forget_error">
              <?php
              
              if(@$_GET['erro']){
                echo '<p class="msg_erro" style="

                  text-align: center; 
                  color: #bb0000;
                  margin: 20px;
                  font-size: 17px;
                  
                  ">Email ou senha inválido !</p>';

              }
              
              ?>
              </div>
              <input class="sub" type="submit" value="Entrar" />
              <div class="registrar">
                <p>
                  Olá<br/>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

      <div class="responsive-nav">

         <div class="page-menus">
                
            <a href="../index.php">
                  <ion-icon name="home-outline"></ion-icon>
                <h1>Home</h1>

                </a>
              </div>

         <div class="page-menus">

                <a href="../campanhas.php">
                  <ion-icon name="newspaper-outline"></ion-icon>
                  <h1>Feed</h1>
                </a>

           </div>

          <div class="page-menus">
                
                <a href="../contato.php">
                  <ion-icon name="call-outline"></ion-icon>
                <h1>Contat.</h1>
                </a>

          </div>
              <?php 
              if(@$_SESSION['usuario_logado'] == true){

                    echo '<div class="page-menus foco">
                      
                      <a href="../perfil.php">
                        <ion-icon name="person-outline"></ion-icon>
                      <h1>Eu</h1>
                      </a>

                    </div>';
                    
              }else{
                  echo '<div class="page-menus foco">
                                
                                <a href="login.php">
                                  <ion-icon name="person-outline"></ion-icon>
                                <h1>Eu</h1>
                                </a>

                            </div>';
                }
              ?> 
      </div>

    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    <script src="../JavaScript/contadrop.js"></script>

  </body>
</html>


