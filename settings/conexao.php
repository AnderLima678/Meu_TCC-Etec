
<?php 

//arquivo de conexão com o banco de dados

    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $database = 'etecampacc';

    $conn = new mysqli($host, $usuario, $senha, $database); 

    if($conn->error){
        die("falha ao conectar ao bando de dados: " . $conn->error);
    }//else{
    //     echo('sucesso');
    // }

?>
