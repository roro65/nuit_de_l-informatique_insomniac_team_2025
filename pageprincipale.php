<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="css/globals.css" />
    <link rel="stylesheet" href="css/header_style.css" />

</head>
<header>
    <nav>
        <input type="checkbox" id="burger-toggle">

        <label for="burger-toggle" class="burger-icon">
            <span></span>
            <span></span>
            <span></span>
        </label>

        <ul class="menu list-item">
        <input type="checkbox" id="burger-toggle">
        <label for="burger-toggle" class="burger-icon">
            <span></span>
            <span></span>
            <span></span>
        </label>
                <li><a href="pageprincipale.php">Page Principale</a></li>
                <li><a href="alternatives.php">Alternatives</a></li>
                <li><a href="collectivitees.php">Collectivité</a></li>
                <li><a href="page_statistique.php">page statistique</a></li>
                <li><a href="Informations.php">Information</a></li>
        </ul>

        <div class="bar-recherche">
            <input type="text" placeholder="Entrez votre recherche">
            <button>Search</button>
        </div>

        <img class="logo-NIRD" src="img/image.png" alt="logo NIRD">
    </nav>
</header>

<body>

<div for="burger-toggle" class="container">

    <!-- TITRE HORS ENCADRÉ -->
    <h2>Qu’est-ce que le NIRD ?</h2>

    <div class="nird-section">
        <p>
            NIRD est un programme communautaire qui invite les établissements scolaires et les collectivités
            qui les accompagnent à s’engager progressivement vers un numérique davantage inclusif, responsable
            et durable, en rejoignant la “démarche NIRD”.
        </p>

        <p>Il vise à :</p>
        <ul>
            <li>Inclure tous les élèves en s’attaquant à la fracture numérique.</li>
            <li>Renforcer la diversité des usages et assurer la continuité pédagogique.</li>
            <li>Maîtriser l’outil informatique, former des citoyens conscients des enjeux.</li>
            <li>Favoriser le développement durable dans une logique de sobriété.</li>
            <li>Faire de notre établissement un exemple innovant et inspirant.</li>
        </ul>
    </div>
    <br>
    <h2>Les trois piliers de la démarche NIRD</h2>

    <div class="nird-section">
        <p>Au carrefour du double objectif de transformation numérique et de transition écologique, la démarche NIRD repose sur trois piliers :</p>

        <h3>1. Inclusion</h3>
        <p>Accès équitable au numérique, réduction de la fracture numérique, pour que tous les élèves bénéficient des mêmes opportunités.</p>

        <h3>2. Responsabilité</h3>
        <p>Usage raisonné et réfléchi de technologies souveraines et respectueuses des données personnelles, pour un numérique éthique et sûr.</p>

        <h3>3. Durabilité</h3>
        <p>Lutte contre l’obsolescence programmée, notamment par le choix de Linux pour l’équipement, maîtrise des coûts et promotion d’un usage durable des ressources.</p>
    </div>

</div>
<script src="script.js"></script>
</body>
</html>
