<?php
$busca = $_GET['busca'] ?? '';

$busca = htmlspecialchars($busca, ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Busca</title>
</head>
<body>

    <h1>Você buscou pelo livro: <?php echo $busca; ?></h1>

</body>
</html>
