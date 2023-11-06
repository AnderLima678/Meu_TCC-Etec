<?php 

if(!empty($_FILES['arquivo'])){
include_once('conexao.php');
$postagem = $_POST['postagem'];


 
$id;


    $stmt3 = "select * from arquivos where postagem = '$postagem'";

    //Executa a consulta SQL
    $resultado3 = mysqli_query($conn, $stmt3);

    $stmt = "insert into arquivos values ('', '.', '.', '.', '$postagem');";

    mysqli_query($conn, $stmt);

    $stmt5 = "select id from arquivos where postagem = '$postagem'";
    $resultado4 = mysqli_query($conn, $stmt5);

    if(mysqli_num_rows($resultado4)>0){
      //Mostrando o resultado na tela
      while($identificacao = mysqli_fetch_assoc($resultado4)){
          $id = $identificacao['id'];
      }
    }

    



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Verifica se um arquivo de imagem foi enviado
  if (isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] === UPLOAD_ERR_OK) {
      // Diretório onde a imagem será salva
      $diretorio = 'uploads/'; // Insira o caminho desejado
      
      // Obtém a extensão do arquivo
      $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
      
      // Gera um nome único para o arquivo
      $nomeArquivo = 'arquivo' . $id . '.' . $extensao;
      
      // Move o arquivo temporário para o diretório desejado com o novo nome
      if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $nomeArquivo)) {
          echo 'arquivo enviada e salva com sucesso!';
      } else {
          echo 'Ocorreu um erro ao salvar a arquivo.';
      }
  } else {
      echo 'Nenhuma arquivo foi enviada.';
  }
}

$stmt4 = "UPDATE arquivos SET nome= '$nomeArquivo' where id = '$id';";
$stmt6 = "UPDATE arquivos SET paht= '$diretorio' where id = '$id';";
mysqli_query($conn, $stmt6);
mysqli_query($conn, $stmt4);

mysqli_close($conn);

header("Location: ../campanhas.php");
}else{
    header("Location: ../campanhas.php");
}
?>