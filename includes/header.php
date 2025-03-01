<?php include_once __DIR__ . '/../config.php'; ?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>

<header>
    <div class="header-container">
        <div class="logo">
        <img src="/assets/ada-branca.png" alt="Logo CASI UFPA">

        <div class="texto-casi">
            <h1>CASI UFPA</h1>
            </div>

            
        </div>
        <nav>
            <ul>
                <li><a href="#">CASI</a></li>
                <li><a href="#">Notícias</a></li>
                <li><a href="#">Projetos</a></li>
                <li><a href="#">Publicações</a></li>
                <li><a href="#" class="btn">LOJA</a></li>
            </ul>
        </nav>
    </div>
</header>
