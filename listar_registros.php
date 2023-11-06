<?php
include_once('conn.php');


 $stmt = "SELECT * FROM usuarios";

 $resultado = mysqli_query($conn, $stmt); 

 if(mysqli_num_rows($resultado)>0){
    //Mostrando o resultado na tela
    while($registro = mysqli_fetch_assoc($resultado)){ 
        echo '<h5>ID</h5><p>'.$registro['id'].'</p><br>';
        echo '<h5>nome</h5><p>'.$registro['nome'].'</p><br>';
        echo '<h5>email</h5><p>'.$registro['email'].'</p><br><hr>';
    }
}

?>