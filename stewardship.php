<?php include_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stewardship – <?php echo SITE_NAME ?></title>
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/stewardship.css">
</head>
<body class="body">
  <div class="content-no-footer">
    <?php include 'includes/header.php'; ?>

    <main class="main-container">
      <section class="stewardship">

        <!-- Presidente -->
        <div class="profile">
          <div class="photo" style="background-image: url('assets/guilherme.jpeg')"></div>
          <div class="info">
            <h3>Guilherme Sandim</h3>
            <p class="role">Presidente</p>
            <p class="description">
              Presidente desde 2023, com mais de 10 anos de experiência em gestão acadêmica e projetos de pesquisa.
            </p>
          </div>
        </div>

        <!-- Vice-Presidente -->
        <div class="profile">
          <div class="photo" style="background-image: url('assets/david.jpg')"></div>
          <div class="info">
            <h3>David Tavares</h3>
            <p class="role">Vice-Presidente</p>
            <p class="description">
              Vice-Presidente focada em inovação e integração entre cursos de Exatas e Naturais.
            </p>
          </div>
        </div>

        <!-- Tesoureiro -->
        <div class="profile">
          <div class="photo" style="background-image: url('assets/polyana.png')"></div>
          <div class="info">
            <h3>Polyana Moraes</h3>
            <p class="role">Tesoureiro</p>
            <p class="description">
              Responsável pela gestão financeira e prestação de contas do CASI UFPA.
            </p>
          </div>
        </div>

      </section>
    </main>

  </div>
  <?php include 'includes/footer.php'; ?>

  <script src="js/stewardship.js"></script>
</body>
</html>
