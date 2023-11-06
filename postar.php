<?php 
 if(@$_SESSION['usuario_logado'] == false){
    header ('Location: index.php');
  }
?>

<div class="write-post-container">  <!-- some quando o user nao está logado --> 

<!--INICIO foto post user-->
<div class="user-profile">
  <?php
          $stmt1 = "SELECT * FROM user";

          $resultado1 = mysqli_query($conn, $stmt1);

          if(mysqli_num_rows($resultado1)>0){
              //Mostrando o resultado na tela
              while($user = mysqli_fetch_assoc($resultado1)){
                  echo '<img class="foto_perfil" src="settings/uploads/'. $user['foto_perfil'] .'" alt="">'; 
              }
        }
  ?>
  <div>
       <?php
            $stmt2 = "SELECT * FROM user";

            $resultado2 = mysqli_query($conn, $stmt2);

            if(mysqli_num_rows($resultado2)>0){
                //Mostrando o resultado na tela
                while($nome = mysqli_fetch_assoc($resultado2)){

                    echo '<p>'.$nome['nome'].'</p>
    
                    ';
                    
                }
            }
       ?>
    </div>
</div>
 <!--FIM foto post user-->
   <div class="container_form">
      <form action="settings/upload_F_Arquivos.php" method="POST" enctype="multipart/form-data">
          <textarea name="postagem" id="" placeholder="Descrição da postagem" required></textarea>

          <div class="file_post">
            <label  class="btn_foto" for="arquivo"><ion-icon name="camera"></ion-icon>Selecionar</label>
            <input type="file" name="arquivo" id="arquivo" required>
            <button class="btn_file" type="submit">Enviar</button>
          </div>
       </form>
   </div>

</div>