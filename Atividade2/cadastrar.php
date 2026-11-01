<?php
$nome = $_POST['nome'] ?? '';
$autor = $_POST['autor'] ?? '';

$nome = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');
$autor = htmlspecialchars($autor, ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro Cadastrado</title>
</head>
<body>

    <h1>
        O livro <?php echo $nome; ?> escrito por
        <?php echo $autor; ?> foi cadastrado com sucesso!
    </h1>

</body>
</html>
