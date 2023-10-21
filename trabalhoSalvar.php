<?php
	include_once "trabalhoCRUD.php";
	$usuario = $_POST['usuario'];
	$autor = $_POST['autor'];
	$orientador = $_POST['orientador'];
	$dataPublicacao = $_POST['publicacao'];
	$instituicao = $_POST['instituicao'];
	$campus = $_POST['campus'];
	$area = $_POST['area'];
	$titulo = $_POST['titulo'];
	$arquivo = $_POST['arquivo'];


	$quantidade = salvar($usuario, $autor, $orientador, $dataPublicacao, $instituicao, $campus, $area, $titulo, $arquivo);

	if($quantidade > 0){
		echo  "<script>alert('Registro salvo com sucesso!');</script>";
		echo  "<script>window.location.replace('index.php');</script>";
	}else{
		echo  "<script>alert('Erro ao salvar o registro');</script>";
		echo  "<script>window.location.replace('trabalhoFormulario.php');</script>";		
	}
?>