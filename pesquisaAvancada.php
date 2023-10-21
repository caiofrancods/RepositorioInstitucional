<?php
$autor = $_GET['autor'];
$orientador = $_GET['orientador'];
	$dataPublicacao = $_GET['dataPublicacao'];
	$campus = $_GET['campus'];
	$area = $_GET['area'];
$instituicao = $_GET['instituicao'];
$titulo = $_GET['titulo'];
$arquivo = $_GET['arquivo'];


$host = "localhost";
$username = "";
$password = "";
$database = "";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$sql = "SELECT * FROM tabela WHERE 1";

if (!empty($autor)) {
    $sql .= " AND autor = '$autor'";
}
if (!empty($orientador)) {
    $sql .= " AND orientador = '$orientador'";
}

if (!empty($dataPublicacao)) {
    $sql .= " AND dataPublicacao = '$dataPublicacao'";
}

if (!empty($area)) {
    $sql .= " AND area = '$area'";
}
if (!empty($campus)) {
    $sql .= " AND campus = '$campus'";
}
if (!empty($instituicao)) {
    $sql .= " AND instituicao = '$instituicao'";
}
if (!empty($titulo)) {
    $sql .= " AND titulo = '$titulo'";
}
if (!empty($arquivo)) {
    $sql .= " AND arquivo = 'arquivo'";
}

// Executar a consulta SQL
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        
    }
} else {
    echo "Nenhum resultado encontrado.";
}


$conn->close();
?>
