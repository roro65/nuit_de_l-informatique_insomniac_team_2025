<?php
$questions = [
    [
        "question" => "Pourquoi la distribution Linux choisie dans la démarche NIRD est-elle particulièrement adaptée aux anciennes machines ?",
        "options"  => [
            "Parce qu'elle nécessite une connexion Internet permanente",
            "Parce qu’elle est légère et utilise Xfce, un environnement peu gourmand en ressources",
            "Parce qu’elle impose du matériel récent pour fonctionner correctement"
        ],
        "answer"   => 1
    ],
    [
        "question" => "Quel avantage de Linux NIRD permet aux élèves de participer activement à la transformation numérique ?",
        "options"  => [
            "La distribution peut être reconditionnée sur des PC dormants par les élèves",
            "Elle nécessite l’achat obligatoire de nouveau matériel",
            "Elle est incompatible avec les clubs informatiques scolaires"
        ],
        "answer"   => 0
    ],
    [
        "question" => "Quel est l’un des atouts majeurs de Linux pour garantir un usage fiable en cas de coupure Internet ?",
        "options"  => [
            "Elle utilise uniquement des services en ligne",
            "Elle fonctionne entièrement hors connexion",
            "Elle bloque l’accès aux logiciels éducatifs"
        ],
        "answer"   => 1
    ],
    [
        "question" => "Quel type d'alternative permet de tester plusieurs systèmes sur un même ordinateur dans le cadre éducatif ?",
        "options"  => [
            "La virtualisation et les containers",
            "Le remplacement complet du disque dur",
            "Le formatage obligatoire de Windows"
        ],
        "answer"   => 0
    ]
];
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le choix de Linux - Démarche NIRD</title>
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
                <input type="checkbox" id="burger-toggle">
                <label for="burger-toggle" class="burger-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <li><a href="index.php">Page Principale</a></li>
                <li><a href="alternatives.php">Alternatives</a></li>
                <li><a href="collectivitees.php">Collectivité</a></li>
                <li><a href="fonctionnement.php">Fonctionnement</a></li>
                <li><a href="page_statistique.php">page statistique</a></li>
                <li><a href="Informations.php">Information</a></li>
                <li><a href="habitude_OS.php">Les alternatives</a></li>
                <li><a href="Page_OS.php">Habitudes OS</a></li>
            </ul>

            <div class="bar-recherche">
                <input type="text" id="SearchBar" placeholder="Entrez votre recherche">
                <button id="Search">Search</button>
            </div>

            <img class="logo-NIRD" src="img/image.png" alt="logo NIRD">
        </nav>
    </header>

<div class="container">

    <!-- TITRE HORS ENCADRÉ -->
    <h2>Le choix de Linux dans la démarche NIRD</h2>

    <div class="nird-section">
        <p>Pour aider le secteur secondaire, ils ont fait le choix de prendre une distribution Linux. Les avantages de cette distribution sont :</p>
        <ul>
            <li>Créée, testée et maintenue par des enseignants et acteurs de l’éducation.</li>
            <li>Forum Tchap dédié pour accompagner les utilisateurs, notamment les débutants.</li>
            <li>Légère (Linux Mint + Xfce + dock Plank), adaptée aux machines anciennes.</li>
            <li>Possibilité de reconditionnement sur des PC dormants, pouvant être réalisé par les élèves dans un club informatique.</li>
            <li>Fonctionne sans connexion Internet, utile en cas de coupure ou de crise.</li>
            <li>Suite complète de logiciels libres optimisée pour l’enseignement en collège et lycée, y compris NSI.</li>
            <li>Bootable sur clé USB sans toucher au système existant.</li>
            <li>Distribution clé en main pour migrer des PC personnels de Windows vers Linux.</li>
            <li>Utile aux collectivités souhaitant intégrer Linux dans leur parc informatique, avec support via Tchap et ressources libres.</li>
        </ul>
        <p>Le choix de Linux soutient pleinement les trois piliers de la démarche NIRD : inclusion, responsabilité et durabilité.</p>
    </div>

    <br>

    <h2>Exploration des alternatives</h2>

    <div class="nird-section">
        <p>Bien que Linux offre de nombreux avantages, il existe d’autres alternatives pour le secteur éducatif :</p>
        <ul>
            <li><strong>Chromebooks / Chrome OS :</strong> Matériel léger et sécurisé, avec des outils cloud intégrés, facile à déployer mais dépend fortement d’une connexion Internet.</li>
            <li><strong>Windows Education :</strong> Compatible avec de nombreux logiciels commerciaux, mais nécessite plus de ressources matérielles et peut générer des coûts de licences.</li>
            <li><strong>MacOS / Apple :</strong> Fiable et stable, mais très coûteux et moins flexible pour les projets éducatifs collaboratifs.</li>
            <li><strong>Autres distributions Linux :</strong> Ubuntu, Fedora, Edubuntu, chacune avec ses spécificités et son support communautaire.</li>
            <li><strong>Virtualisation et containers :</strong> Permet de tester plusieurs systèmes d’exploitation sur le même matériel, idéal pour l’enseignement informatique.</li>
        </ul>
        <p>Chaque alternative doit être évaluée selon :</p>
        <ul>
            <li>Accessibilité et coût</li>
            <li>Compatibilité logicielle</li>
            <li>Facilité d’utilisation pour enseignants et élèves</li>
            <li>Support et communauté</li>
            <li>Durabilité et impact environnemental</li>
        </ul>
        <p>L’objectif est de promouvoir un numérique inclusif, responsable et durable, tout en restant adapté aux contraintes matérielles et pédagogiques des établissements scolaires.</p>
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
<script src="script.js"></script>
    <script>
        // Appelle la fonction une fois le fichier chargé
        ActionListener();
    </script>
    <footer>
        <h4>insomniac team</h4>
    </footer>
</body>
</html>
