<?php include_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Loja - <?php echo SITE_NAME ?></title>
</head>

<body class="body">
    <!-- Container para fixar o footer no fundo da página independente de quanto conteúdo está sendo exibido (Replique nas páginas) -->
    <div class="content-no-footer">
        <?php include 'includes/header.php'; ?>
        <main class="main-container">
            <!-- Conteúdo principal da página -->

        </main>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>

</html>