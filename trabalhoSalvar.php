<?php
	include_once "trabalhoCRUD.php";
	$usuario = $_POST['usuario'];
	$autor = $_POST['autor'];
	$orientador = $_POST['orientador'];
	$dataPublicacao = $_POST['dataPublicacao'];
	$instituicao = $_POST['instituicao'];
	$campus = $_POST['campus'];
	$area = $_POST['area'];
	$titulo = $_POST['titulo'];
	$arquivo = $_FILES['arquivo'];

	$nomeArquivo = $arquivo['name'];
	$extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
	$temp = $arquivo['tmp_name'];

	if($extensao != 'pdf'){
		echo  "<script>alert('Apenas Arquivos em PDF');</script>";
		echo  "<script>window.location.replace('usuarioFormulario.php');</script>";
	}else{
		$caminho = "arquivos/".$nomeArquivo;
		move_uploaded_file($temp, $caminho);
		$quantidade = salvar($usuario, $autor, $orientador, $dataPublicacao, $instituicao, $campus, $area, $titulo, $caminho);

		if($quantidade > 0){
			echo  "<script>alert('Registro salvo com sucesso!');</script>";
			echo  "<script>window.location.replace('index.php');</script>";
		}else{
			echo  "<script>alert('Erro ao salvar o registro');</script>";
			echo  "<script>window.location.replace('trabalhoFormulario.php');</script>";		
		}
	}
?>