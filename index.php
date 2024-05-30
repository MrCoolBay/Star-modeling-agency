<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil - Star</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="img/star.png" type="image/x-icon">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
    <header>
        <nav class="navbar">
            <?php include 'menu.php'; ?>
        </nav>
    </header>
    <main>
        <section id="accueil" class="screen">
            <h1>Accueil</h1>
        </section>
        <section id="photos" class="screen">
            <h2>Galerie photos</h2>
            <div class="galerie">
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    echo '<img src="img/galerie/photo' . $i . '.jpeg" alt="Photo ' . $i . '" />';
                    if ($i % 4 == 0) {
                        echo '<br>';
                    }
                }
                ?>
            </div>
        </section>

    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>