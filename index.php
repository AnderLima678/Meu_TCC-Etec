
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/ACC.png" type="image/x-icon">
    <title>Etecamp - ACC</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="css/Paginas do Site/Page.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="css/Paginas do Site/slide.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="css/Paginas do Site/nav.css"
    />
  </head>
  <body>
    <?php 
      include("header.php")  // incluindo o html do header.php em todas as paginas
    ?>
    <div class="container">

      <!--header da pagina fim-->
      <!-- <h1>Campanhas</h1> -->
      <main>
        <!--conteudo principal da pagina inicio-->

        <!-- ------- INICIO SLIDE -------- -->
        <section class="slider" >
          <div class="slider-content" id="verifica">
            <input type="radio" name="btn-radio" id="radio1" />
            <input type="radio" name="btn-radio" id="radio2" />
            <input type="radio" name="btn-radio" id="radio3" />

            <div class="slide-box primeiro">
              <img
                class="img-desktop"
                src="img/Fotos Etec/bli.jpeg"
                alt="slide 1"
              />
             
            </div>

            <div class="slide-box">
              <img
                class="img-desktop"
                src="img/Fotos Etec/f13.jpeg"
                alt="slide 1"
              />
        
            </div>

            <div class="slide-box">
              <img
                class="img-desktop"
                src="img/Fotos Etec/f4.jpeg"
                alt="slide 1"
              />
             
            </div>

            <div class="nav-auto">
              <div class="auto-btn1"></div>
              <div class="auto-btn2"></div>
              <div class="auto-btn3"></div>
            </div>

            <div class="nav-manual">
              <label for="radio1" class="manual-btn"></label>
              <label for="radio2" class="manual-btn"></label>
              <label for="radio3" class="manual-btn"></label>
            </div>
          </div>

          <div class="letras">
            <h1>Bem vindo!</h1>
            
            <?php 
               if(@$_SESSION['usuario_logado'] == false){
                  echo '<a href="log/login.php">Entre</a>';
               }
            ?>
            <!-- <a href="log/registro.php">Registre-se</a> -->
          </div>
        </section>

        <img src="img/Fotos Etec/f13.jpeg" class="img_responsive" alt="">
        <!-- <div class="menu-mobile-principal"></div> -->
        <!-- ------- FIM SLIDE -------- -->

  
        <div class="atalho-campanhas">

          <!-- ---- TITULO ---- -->
            <!-- <h1>Sobre nós</h1> -->

          <!-- --- INICIO CARDS LINHAS 1 --- -->
          <div class="cards">
            <section>
              <div class="quemsomos">
              <h2>Quem nós somos</h2>
                  <p>Este site tem como objetivo facilitar a vida das pessoas as quais estão relacionadas com ETEC de matão visto que, é de suma impotancia que haja organização quando se trata de manter os alunos e os responsaveis bem informados sobre os eventos escolares.</p>

                  <p>Você é aluno? Aqui você tem a oportunidade de manter-se por dentro dos principais eventos escolares</p>

                  <a href="campanhas.php">Vamos Explorar!</a>
              </div>

              <!-- foto  -->
              <div class="info1">
                <img src="img/Fotos Etec/f15.jpeg" alt="">
              </div>
            </section>
                <!-- --- fim CARDS  --- -->
          </div>

          <!-- <div class="sla">
         ------------------------
          </div> -->
          <!-- --- FIM CARDS LINHAS 1 --- -->  
  
          </div>  
        </div>
      </main>

      <div class="responsive-nav">

        <div class="page-menus foco">

        <a href="index.php">
          <ion-icon name="home-outline"></ion-icon>
         <h1>Home</h1>

        </a>
      </div>

      <div class="page-menus ">

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
      <!--conteudo principal da pagina fim-->
      <footer><!--inicio rodapé do site--></footer>
    </div>
    
    
  </body>
  <script src="JavaScript/slide.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</html>
