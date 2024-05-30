<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact - Star</title>
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
        <section id="contact" class="screen">
            <h1>Contact</h1>
        </section>
        <section id="formcontact" class="screen">
            <form action="form.php" method="post">
                <input type="text" placeholder="Objet du message" id="objet" name="objet" required />
                <input type="email" placeholder="Adresse email" id="email" name="email" required />
                <textarea type="text" placeholder="Message" id="message" name="message" required></textarea>
                <div class="button">
                    <input type="submit" value="Envoyez">
                </div>
            </form>
        </section>

    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>