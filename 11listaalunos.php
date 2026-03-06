<h1 style="color:brown">Lista de alunos</h1>



<?php



    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'escola_diego';

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexao->connect_error) {
    die('Erro na conexao');

    }

    // echo 'Conexão estabelecida com sucesso!';
    $sql = "SELECT id, nome,idade, uf, cidade FROM alunos";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows >0){
        while ($linha = $resultado->fetch_assoc()) {
        
        
        echo "<p> <hr style= 'background-color: brown; border: none; height: 2px; '> Código: $linha[id]<br> -Aluno: $linha[nome]<br> -Idade: $linha[idade]<br> -UF: $linha[uf]<br> -Cidade: $linha[cidade]<br> ";


        }

    }
?>





