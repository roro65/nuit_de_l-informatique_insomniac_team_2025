<?php
$questions = [
    [
        "question" => "Pourquoi choisir Windows ou macOS sans se renseigner peut être problématique ?",
        "options" => [
            "Parce qu'ils sont gratuits et trop simples",
            "Parce que leur code est fermé et que les alternatives libres sont peu connues",
            "Parce qu’ils ne fonctionnent pas sur les ordinateurs récents"
        ],
        "answer" => 1
    ],
    [
        "question" => "Quel est l’un des inconvénients de l’obligation d'utiliser des comptes Microsoft, Apple ou Google ?",
        "options" => [
            "Ils donnent accès à trop de stockage gratuit",
            "Ils centralisent et collectent beaucoup de données personnelles",
            "Ils empêchent d’utiliser un ordinateur sans Internet"
        ],
        "answer" => 1
    ],
    [
        "question" => "Quel est le risque majeur si un compte Google, Apple ou Microsoft est suspendu ?",
        "options" => [
            "Plus aucun site Internet ne fonctionnera",
            "L’utilisateur perd l'accès à ses services et à ses fichiers",
            "L’ordinateur cesse de démarrer"
        ],
        "answer" => 1
    ],
    [
        "question" => "Pourquoi Chrome n’est-il pas toujours le meilleur choix de navigateur ?",
        "options" => [
            "Parce qu’il collecte de nombreuses données personnelles",
            "Parce qu’il ne fonctionne pas sur Windows",
            "Parce qu’il ne supporte pas les moteurs de recherche"
        ],
        "answer" => 0
    ],
    [
        "question" => "Quel est l’un des dangers liés à l’acceptation rapide des conditions d'utilisation sur les sites web ?",
        "options" => [
            "Autoriser la collecte de données sensibles sans le savoir",
            "Mettre automatiquement un virus sur l’ordinateur",
            "Bloquer l'affichage des pages"
        ],
        "answer" => 0
    ]
];
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qu'est ce qu'un OS ?</title>
    <link rel="stylesheet" href="css/globals.css" />
    <link rel="stylesheet" href="css/header_style.css" />

</head>

<body>
<header>
    <nav>
        <input type="checkbox" id="burger-toggle">

        <label for="burger-toggle" class="burger-icon">
            <span></span>
            <span></span>
            <span></span>
        </label>

        <ul class="menu list-item">
            <li><a href="#">jdzefhzfiz</a></li>
            <li><a href="#">jdzefhzfiz</a></li>
            <li><a href="#">jdzefhzfiz</a></li>
            <li><a href="#">jdzefhzfiz</a></li>
            <li><a href="#">jdzefhzfiz</a></li>
        </ul>

        <div class="bar-recherche">
            <input type="text" placeholder="Entrez votre recherche">
            <button>Search</button>
        </div>

        <img class="logo-NIRD" src="NIRD" alt="logo NIRD">
    </nav>
</header>
    <div class="container">
        <h2>Qu'est-ce qu'un OS ?</h2>

        <div class="nird-section">
            <h3>Les OS connus : Windows et macOS valent-ils leur prix ?</h3>
            <p>
                Choisir Windows ou macOS sans se renseigner reflète souvent un manque d’information, car la communication autour des alternatives libres est limitée, notamment en raison de la domination des grandes entreprises.<br>
                <br>
                Une personne qui s’intéresse un peu aux systèmes d’exploitation découvrira que :<br>
                Ces OS ont un code source fermé, ce qui rend leur fonctionnement moins transparent.<br>
                Ils peuvent imposer certaines mises à jour automatiques et pousser à une forte dépendance à leurs services.<br>
                <br>
                macOS est parfaitement compatible avec presque tous les produits Apple, mais peut rencontrer des difficultés avec des périphériques tiers, comme des écouteurs sans fil autres que les AirPods.<br>
                Les OS payants peuvent représenter un coût supplémentaire, même si le système est inclus dans le prix d’achat d’un Mac ou d’un PC Windows.<br>
                <br>
                Heureusement, il existe aujourd’hui de nombreuses alternatives open-source, fiables et gratuites, qui offrent une liberté et une flexibilité équivalentes, tout en permettant de réaliser des économies et d’éviter la dépendance aux grands éditeurs<br>
            </p>
        </div>
        <br>
        
        <div class="nird-section">
            <h3>Les comptes Microsoft, Apple et Google : quels risques ?</h3>
            <p>
                Les comptes proposés par Google, Apple et Microsoft sont souvent obligatoires pour profiter pleinement des services de Windows, macOS ou des applications associées. Cependant, leur utilisation comporte plusieurs risques :<br>
                <br>
                Centralisation des données personnelles : vos mails, photos, contacts et fichiers stockés dans le cloud sont concentrés dans ces services.<br>
                <br>
                Collecte et usage des informations : ces données servent à améliorer les services, personnaliser l’expérience utilisateur et, dans certains cas, proposer des publicités ciblées.<br>
                <br>
                Dépendance et blocage potentiel : si votre compte est suspendu, même par erreur, vous perdez immédiatement l’accès à tous vos services et fichiers.<br>
                <br>
                Suivi supplémentaire : l’acceptation des cookies liés à ces comptes permet une collecte continue de données sur votre utilisation.
            </p>
        </div>
        <br>

        <div class="nird-section">
            <h3>Votre moteur de recherche : un choix important</h3>
            <p>Beaucoup d’utilisateurs se tournent automatiquement vers Google sans explorer d’autres alternatives. Or, Google personnalise fortement les résultats en fonction de votre historique et de votre profil utilisateur.<br>
            <br>
            Cette personnalisation peut orienter les informations que vous voyez et créer une forme de dépendance au service.<br>
            <br>
            Vos recherches deviennent traçables, et les données collectées peuvent être utilisées pour le profilage publicitaire.</p>
        </div>
        <br>

        <div class="nird-section">
            <h3>Chrome : un choix par défaut… mais pas toujours le meilleur</h3>
            <p>
                Une grande partie des utilisateurs effectue toutes leurs recherches avec Google Chrome, souvent parce qu’il est préinstallé sur leur ordinateur. Cette présence par défaut peut donner l’illusion qu’il s’agit de la seule option valable. Pourtant, Chrome appartient à Google, une entreprise dont le modèle économique repose largement sur la publicité ciblée, ce qui implique une collecte importante de données.<br>
                <br>
                Comme Chrome est le navigateur le plus répandu, beaucoup de développeurs optimisent leurs sites principalement pour lui, reléguant parfois les autres navigateurs au second plan.<br>
                Cependant, Chrome est également connu pour être l’un des navigateurs les plus intrusifs : il collecte près de 20 types de données différentes, contre seulement 8 pour certains navigateurs plus respectueux de la vie privée. Cette différence en fait l’un des navigateurs les plus gourmands en informations personnelles.
            </p>
        </div>
        <br>

        <div class="nird-section">
            <h3>Données personnelles : la collecte silencieuse</h3>
            <p>Lorsque vous arrivez sur un site, une fenêtre apparaît souvent pour vous demander d’accepter les conditions d’utilisation. En réalité, très peu de personnes prennent le temps de les lire, et il est difficile de savoir exactement ce que l’on autorise. Sans le savoir, vous pourriez fournir vos identifiants ainsi que des fichiers très sensibles de votre ordinateur. De plus, chaque nouvelle recherche sur Internet génère davantage de données, créant un véritable cercle vicieux.</p>
        </div>
        <br>


    </div>
    
<div class="qcm-container">
    <h2>Questionnaire</h2>
<div class="nird-section">
    <form method="post">
        <?php foreach ($questions as $i => $q): ?>
            <div class="question-block">
                <br>
                <p><?php echo ($i+1).". ".$q["question"]; ?></p>

                <?php foreach ($q["options"] as $j => $opt): ?>
                    <label>
                        <br>
                        <input type="radio" name="q<?php echo $i; ?>" value="<?php echo $j; ?>">
                        <?php echo $opt; ?>
                    </label>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>

        <button type="submit" class="submit-btn">Valider</button>
    </form>
</div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "<h3>Résultats :</h3>";
        foreach ($questions as $i => $q) {
            $userAnswer = $_POST["q$i"] ?? -1;
            if ($userAnswer == $q["answer"]) {
                echo "Question ".($i+1).": <span style='color:green'>Correct</span><br>";
            } else {
                echo "Question ".($i+1).": <span style='color:red'>Faux</span><br>";
            }
        }
    }
    ?>
</div>
</div>

</body>
</html>
