<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Historique - Star</title>
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
        <section id="history" class="screen">
            <h1>Historique</h1>
        </section>
        <section id="historique" class="screen">
            <div class="historique-content">
                <h2>Notre parcours</h2>
                <p>L'agence de modélisme imaginaire a été fondée en 2005 par John Smith, un passionné de mode et de créativité. Depuis sa création, notre agence s'est imposée comme l'une des références incontournables dans le domaine du mannequinat.</p>
                <p>Nous avons commencé modestement avec quelques mannequins locaux, mais grâce à notre dévouement et à notre professionnalisme, nous avons rapidement attiré l'attention des grandes marques de mode. Notre portfolio s'est élargi pour inclure des collaborations avec des designers renommés, des défilés de mode prestigieux et des campagnes publicitaires internationales.</p>
                <p>Notre équipe de professionnels talentueux, composée de mannequins, de stylistes, de maquilleurs et de photographes, travaille en étroite collaboration pour créer des images et des expériences uniques. Nous sommes fiers de représenter la diversité et l'inclusion dans l'industrie de la mode, en mettant en avant des modèles de toutes origines, tailles et âges.</p>
                <p>Au fil des années, nous avons élargi nos activités pour inclure des services de conseil en image, des formations pour les mannequins en herbe et des événements spéciaux. Nous organisons également des castings réguliers pour découvrir de nouveaux talents et offrir des opportunités à ceux qui aspirent à une carrière dans le mannequinat.</p>
                <p>Notre agence est fière d'avoir contribué au succès de nombreux mannequins qui ont ensuite fait carrière sur les podiums du monde entier. Nous continuons à repousser les limites de la créativité et de l'innovation, en restant à l'affût des dernières tendances et en adaptant notre approche pour répondre aux besoins changeants de l'industrie.</p>
                <p>Que vous soyez une marque à la recherche de mannequins talentueux ou un modèle en quête d'opportunités, nous sommes là pour vous accompagner dans votre parcours. Rejoignez-nous et ensemble, créons l'avenir de la mode.</p>
            </div>
        </section>
        <section id="tab" class="screen">
            <table>
                <tr>
                    <td colspan="5" class="center">Liste des membres</td>
                </tr>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Fonction</th>
                    <th>Date d'inscription</th>
                    <th>Total des cotisations</th>
                </tr>
                <tr>
                    <td>Lary</td>
                    <td>Bambel</td>
                    <td>Président</td>
                    <td>01/01/2022</td>
                    <td>40€</td>
                </tr>
                <tr>
                    <td>Alain</td>
                    <td>Posteur</td>
                    <td>Secrétaire</td>
                    <td>01/01/2022</td>
                    <td>30€</td>
                </tr>
                <tr>
                    <td>Guy</td>
                    <td>Tarehéro</td>
                    <td>Trésorier</td>
                    <td>01/01/2022</td>
                    <td>30€</td>
                </tr>
            </table>
        </section>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>