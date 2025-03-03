<?php include_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/marketplace.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Loja - <?php echo SITE_NAME ?></title>
</head>

<body class="body">
    <!-- Container para fixar o footer no fundo da página independente de quanto conteúdo está sendo exibido (Replique nas páginas) -->
    <div class="content-no-footer">
        <?php include 'includes/header.php'; ?>
        <main class="main-container">
            <!-- Conteúdo principal da página -->
            <!-- <div class="marketplace-header">
                <h2>Produtos</h2>
            </div> -->
            <section class="products-container">
                <div class="marketplace-header">
                    <h2>Produtos</h2>
                    <ul class="order-options">
                        <li class="default-button button-size-small">Padrão</li>
                        <li class="default-button button-size-small">A-Z</li>
                        <li class="default-button button-size-small">Lista</li>
                    </ul>
                </div>

                <div class="item-box">
                    <div class="image-box"></div>
                    <p class="item-name">item name</p>
                    <p class="item-price">item price 200 $</p>
                    <p class="item-description">item description</p>
                </div>

                <div class="item-box">
                    <div class="image-box"></div>
                    <p class="item-name">item name</p>
                    <p class="item-price">item price 200 $</p>
                    <p class="item-description">item description</p>
                </div>

                

            </section>

        </main>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>

</html>