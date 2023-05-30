<?php   
    include('conexao.php');
    $nome_foto = "";
    if(file_exists($_FILES['foto']['tmp_name'])){
        $pasta_destino = 'fotos/';
        $extensao = strtolower(substr($_FILES['foto']['name'],-4));
        $nome_foto = $pasta_destino . date("Ymd-His") . $extensao;
        move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
    }
    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

        echo "<h1>Alteração de dados<h1>";
        echo "<p>Usuaário: $nome</p>";
        $sql = "UPDATE usuario SET 
            nome_usuario='$nome',
            email_usuario='$email',
            fone_usuario='$fone',
            senha_usuario='$senha',
            foto='$nome_foto'
            WHERE id_usuario=$id_usuario";
            

    //echo $sql;
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados alterados com sucesso!<br>";
    else
        echo "Erro ao alterar dados: ".mysqli_error($con)."!";
?>

<a href="index.php">Voltar</a> 