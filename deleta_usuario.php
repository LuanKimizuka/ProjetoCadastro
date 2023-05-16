<?php 
    include('conexao.php');
    $id_usuario = $_GET['id_usuario'];
    $sql = "DELETE FROM usuario where id_usuario=$id_usuario";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "Usuário Deletado!";
    }else{
        echo "Erro ao deletar usuário";}
?>