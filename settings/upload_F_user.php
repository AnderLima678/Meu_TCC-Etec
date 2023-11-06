<?php 
if(!empty($_FILES['foto'])){
 include_once('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $stmt2 = "SELECT * from user;";


        $resultado = mysqli_query($conn, $stmt2);
        $imagemname = mysqli_fetch_assoc($resultado); 
        $caminhoImagem = 'uploads/'.$imagemname['foto_perfil'];
        
        
                if (file_exists($caminhoImagem)) {
                    // Tenta apagar o arquivo
                    if (unlink($caminhoImagem)) {
                        echo 'Imagem apagada com sucesso. <br><br>';
                    } else {
                        echo 'Ocorreu um erro ao apagar a imagem.';
                    }
                } else {
                    echo 'O arquivo da imagem não existe.';
                }

        mysqli_query($conn, $stmt2);


        // Verifica se um arquivo de imagem foi enviado
        if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
            // Diretório onde a imagem será salva
            $diretorio = 'uploads/'; // Insira o caminho desejado
            
            // Obtém a extensão do arquivo
            $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
            
            // Gera um nome único para o arquivo
            $nomeArquivo = 'foto'. '.' . $extensao;
            
            // Move o arquivo temporário para o diretório desejado com o novo nome
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio . $nomeArquivo)) {
                echo 'foto enviada e salva com sucesso!<br>';
            } else {
                echo 'Ocorreu um erro ao salvar a foto. ';
            }
        } else {
            echo 'Nenhuma foto foi enviada.<br><br>';
        }
    }

$stmt = "UPDATE user SET foto_perfil = '$nomeArquivo'";


mysqli_query($conn, $stmt);

mysqli_close($conn);

header("Location: ../config_perfil.php");
}else{
header("Location: ../index.php");
}


?>