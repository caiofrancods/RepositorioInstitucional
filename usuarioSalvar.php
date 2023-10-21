<?php
    include_once "usuarioCRUD.php";

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $linkedin = $_POST['linkedin'];
    $lattes = $_POST['lattes'];
    $senha = $_POST['senha'];
    $avatar = $_POST['avatar'];

    $quantidade = inserirUsuario($nome, $cpf, $email, $lattes, $linkedin, $senha, $avatar);

    if($quantidade > 0){
		echo  "<script>alert('Registro salvo com sucesso!');</script>";
		echo  "<script>window.location.replace('minhaConta.php');</script>";
	}else{
		echo  "<script>alert('Erro ao salvar o registro');</script>";
		echo  "<script>window.location.replace('usuarioFormulario.php');</script>";		
	}
?>