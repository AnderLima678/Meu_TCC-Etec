<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/ACC.png" type="image/x-icon">
    <title>Etecamp - ACC contato</title>
    <!-- <link
      rel="stylesheet"
      type="text/css"
      href="css/Paginas do Site/Page.css"
    /> -->
    <link
      rel="stylesheet"
      type="text/css"
      href="css/Paginas do Site/contato.css"
    />

    <link
    rel="stylesheet"
    type="text/css"
    href="css/Paginas do Site/nav.css"
  />
  </head>
  <body>
    <?php 
      include("header.php") // incluindo o html do header.php em todas as paginas
    ?>
    <main>
        <!-- ----- INICO Contato ----- -->
      <div class="container">
        <div class="img-contato">
          <h1>CONTATO</h1>
          <!-- <img src="img/Contato.jpg" alt="mulher em flores"> -->
        </div> 


        <!--INICIO Titúlo do contato -->
        <div class="title-contato">
          <h1>Fale Conosco</h1>
        </div>
        <!-- FIM Titúlo do contato -->

        <!-- --- INICIO Cards do contato --- -->
        
         <!-- --- INICIO CARDS LINHAS 1 --- -->
         <div class="cards-row">
                
          <!-- --- INICIO CARDS  --- -->
          <div class="cards">
            <h1> <ion-icon name="call"></ion-icon> TELEFONE: </h1> 
          
            <h1>(16) 5555-5555</h1>
            <h1>(16) 5555-5555</h1>

        </div>
            <!-- --- fim CARDS  --- -->

          <!-- --- INICIO CARDS  --- -->
          <div class="cards">
            <h1> <ion-icon name="mail"></ion-icon> EMAIL: </h1> 
            
            <h1>jaozin03@gmail.com</h1>
        </div>
            <!-- --- fim CARDS  --- -->

         <!-- --- INICIO CARDS  --- -->
          <div class="cards">
            <h1> <ion-icon name="phone-portrait-sharp"></ion-icon> WHATSAPP: </h1> 
          
            <h1>(16) 5555-5555</h1>
            <h1>(16) 5555-5555</h1>

        </div>
            <!-- --- fim CARDS  --- -->

         <!-- --- INICIO CARDS  --- -->
          <div class="cards">
            <h1> <ion-icon name="megaphone"></ion-icon> RECLAME: </h1> 
          
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSe4uvYRBvVIvzUh_ZhthLtaAYwFpjgGuiljEER_Uglf3itW-w/viewform?usp=sf_link">Formulario de reclamação</a>

        </div>
            <!-- --- fim CARDS  --- -->
      </div>
      <!-- --- FIM CARDS LINHAS 1 --- -->  
        
      </div> 

        </div>

        <!-- <div class="input-contato">
              <div class="container-input">
                  <label for="">Fale com a gente por aqui!</label>
                  <textarea id="w3review" name="w3review" rows="4" cols="50" placeholder="digite aqui!">
                  </textarea>
              </div>
          </div> -->
      </div>
    </main>
    <!--conteudo principal da pagina fim-->

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

      <div class="page-menus foco">
        
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

    <footer><!--inicio rodapé do site--></footer>
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
