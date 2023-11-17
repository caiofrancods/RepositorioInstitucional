<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }
    </style>
</head>
<body>

    <?php
    $pasta_trabalhos = "arquivos/";

    // Verifica se o parâmetro 'arquivo' está presente na URL
    if (isset($_GET['arquivo'])) {
        $arquivo = $pasta_trabalhos . $_GET['arquivo'];

        // Verifica se o arquivo existe
        if (file_exists($arquivo)) {
            // Exibe o título e o link para o arquivo PDF
            echo '<embed src="' . $arquivo . '" width="100%" height="100%" type="application/pdf">';
        } else {
            echo '<p class="text-center bold">Arquivo não encontrado.</p>';
        }
    } else {
        echo '<p>Parâmetro de arquivo ausente.</p>';
    }
    ?>

</body>
</html>
