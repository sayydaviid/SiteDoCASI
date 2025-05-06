<?php
// Captura e ignora pedidos de favicon para evitar 404
if (parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) === '/favicon.ico') {
    header('HTTP/1.1 204 No Content');
    exit;
}

include_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Icone do site (favicon) -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <!-- Ordem de carregamento de CSS -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Index – <?php echo SITE_NAME; ?></title>
</head>
<body class="body">
    <!-- Container para fixar o footer no fundo da página -->
    <div class="content-no-footer">
        <!-- Cabeçalho -->
        <?php include 'includes/header.php'; ?>
        <!-- Conteúdo principal -->
        <main class="main-container">
            <h2 class="welcome-msg">
                Bem-vindo ao site do Centro Acadêmico de Sistemas de Informação da UFPA
            </h2>
            <p>Conteúdo principal do site.</p>
        </main>
    </div>
    <!-- Rodapé -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
