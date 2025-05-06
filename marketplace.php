<?php
include_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/marketplace.css">
  <link rel="stylesheet" href="css/footer.css">
  <title>Loja – <?php echo SITE_NAME; ?></title>
</head>
<body class="body">
  <div class="content-no-footer">
    <?php include 'includes/header.php'; ?>
    <main class="main-container">
      <section id="products-container" class="products-container">

        <div class="marketplace-header">
          <h2>Produtos</h2>
          <ul id="order-options" class="order-options">
            <li class="default-button button-size-small" data-action="default">Padrão</li>
            <li class="default-button button-size-small" data-action="az">A-Z</li>
            <li class="default-button button-size-small" data-action="list">Lista</li>
          </ul>
        </div>

        <!-- Produto: Camisas Ada CBSI -->
        <div class="item-box" data-product-id="camisa-ada-cbsi">
          <div class="image-box"
               style="background-image:url('assets/camisas/pretafrente.png')">
            <button class="nav-btn prev-btn" aria-label="Imagem anterior">‹</button>
            <button class="nav-btn next-btn" aria-label="Próxima imagem">›</button>
          </div>
          <div class="item-content">
            <p class="item-name">Camisas Ada CBSI</p>
            <div class="price-and-swatches">
              <p class="item-price">55 R$</p>
              <div class="swatches">
                <span class="swatch active"
                      data-front="assets/camisas/pretafrente.png"
                      data-back="assets/camisas/pretatras.png"
                      style="background-color:#000"></span>
                <span class="swatch"
                      data-front="assets/camisas/frentebranca.png"
                      data-back="assets/camisas/costabranca.png"
                      style="background-color:#fff; border:2px solid #250;"></span>
                <span class="swatch"
                      data-front="https://via.placeholder.com/395x300/0000ff/ffffff?text=Frente+Azul"
                      data-back="https://via.placeholder.com/395x300/0000aa/ffffff?text=Costas+Azul"
                      style="background-color:#00f"></span>
              </div>
            </div>
            <p class="item-description">Camisa feita em polietileno glicol</p>
          </div>
        </div>

        <!-- Produto: Bottons -->
        <div class="item-box" data-product-id="bottons">
          <div class="image-box"
               style="background-image:url('https://via.placeholder.com/395x300/ffff00/000000?text=Amarelo')">
            <button class="nav-btn prev-btn" aria-label="Imagem anterior">‹</button>
            <button class="nav-btn next-btn" aria-label="Próxima imagem">›</button>
          </div>
          <div class="item-content">
            <p class="item-name">Bottons</p>
            <div class="price-and-swatches">
              <p class="item-price">5 R$</p>
              <div class="swatches">
                <span class="swatch active"
                      data-front="https://via.placeholder.com/395x300/ffff00/000000?text=Amarelo"
                      data-back="https://via.placeholder.com/395x300/cccc00/000000?text=Costas+Amarelo"
                      style="background-color:#ff0"></span>
                <span class="swatch"
                      data-front="https://via.placeholder.com/395x300/ff00ff/ffffff?text=Roxo"
                      data-back="https://via.placeholder.com/395x300/aa00aa/ffffff?text=Costas+Roxo"
                      style="background-color:#f0f"></span>
              </div>
            </div>
            <p class="item-description">Botton com 3,5cm</p>
          </div>
        </div>

      </section>
      <script src="js/marketplace.js"></script>
    </main>
  </div>
  <?php include 'includes/footer.php'; ?>
</body>
</html>
