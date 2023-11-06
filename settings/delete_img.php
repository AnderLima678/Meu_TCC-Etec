<?php 
    if(@$_SESSION['usuario_logado'] == false){

$id = $_GET['id'];

include_once("conexao.php");
$stmt = "delete from arquivos where id = '$id';";
$stmt2 = "select * from arquivos where id = '$id';";

    $resultado = mysqli_query($conn, $stmt2);

    if(mysqli_num_rows($resultado)>0){
        //Mostrando o resultado na tela
        while($users = mysqli_fetch_assoc($resultado)){
            $imagemname = $users['nome'];
        }
    }


$caminhoImagem = 'uploads/'.$imagemname;

    // Verifica se o arquivo existe antes de tentar apagar
    if (file_exists($caminhoImagem)) {
        // Tenta apagar o arquivo
        if (unlink($caminhoImagem)) {
            echo 'Imagem apagada com sucesso.';
        } else {
            echo 'Ocorreu um erro ao apagar a imagem.';
        }
    } else {
        echo 'O arquivo da imagem não existe.';
    }
    mysqli_query($conn, $stmt);
header("Location: ../perfil.php");

}else{
    header("Location: ../index.php");
}           
?>