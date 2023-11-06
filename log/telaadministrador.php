<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Tela Administrador</title>
</head>

<body>
    <?php
    include_once("validaradm.php");
    ?>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">ADM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="telaadministrador.php">Ativar Usuários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Desativarusuario.php">Desativar Usuários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Promover Usuário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Rebaixar Administrador</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Sair</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                    </ul>
                </div>
            </div>
        </nav>
        <div>
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">E-mail</th>
      <th scope="col">Nome</th>
      <th scope="col">Tipo</th>
      <th scope="col">Ativo</th>
      <th scope="col">Ativar/Desativar</th>
    </tr>
  </thead>
  <tbody>
    <?php

    //Conexão com o Banco de Dados
    include_once('../settings/conexao.php');


    //Comando SQL para buscar os usuários inativos
    $stmt = "select * from tbusuarios where ativo = 'n';";

    //Executando o comando SQL
    $resultado = mysqli_query($conn, $stmt);

    //Verificando se from encontrado resultados
    if(mysqli_num_rows($resultado) > 0){
        while($usuario = mysqli_fetch_assoc($resultado)){
            echo 
        '<tr>
        <th scope="row">'.$usuario['email'].'</th>
        <td>'.$usuario['nome'].'</td>
        <td>'.$usuario['tipo'].'</td>
        <td>'.$usuario['ativo'].'</td>
        <td>
          <a class="btn btn-primary" href="mudarstatus.php?email='.$usuario['email'].'&ativo=s">Ativar</a>
          <a class="btn btn-danger" href="">Desativar</a>
      </td>
      </tr>';
}

    }else{
        echo "<tr><td colspan = '5'>Nenhum usuários inativo encontrado</td></tr>";
    }

    //Fechando o BD 
    mysqli_Close($conn);

?>
    
  </tbody>
</table>

        </div>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>