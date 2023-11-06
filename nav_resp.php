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

              </div> 
              
              
              ';
  }
?> 
</div>