<?php
// Exemple de questions
$questions = [
    [
        "question" => "Pourquoi la distribution Linux utilisée dans la démarche NIRD est-elle particulièrement adaptée aux établissements scolaires ?",
        "options"  => [
            "Parce qu’elle est légère, maintenue par des enseignants et fonctionne même sur des machines anciennes",
            "Parce qu’elle nécessite du matériel très récent et une connexion Internet permanente",
            "Parce qu’elle est uniquement compatible avec les postes Apple"
        ],
        "answer"   => 0
    ],
    [
        "question" => "Quel avantage majeur offre Linux dans la démarche NIRD pour favoriser un numérique durable ?",
        "options"  => [
            "Il impose l’achat de matériel neuf chaque année",
            "Il permet de reconditionner des PC anciens et de prolonger leur durée de vie",
            "Il empêche les élèves de participer à l’installation du système"
        ],
        "answer"   => 1
    ]
];
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctionnement - Démarche NIRD</title>
    <link rel="stylesheet" href="css/globals.css">
    <link rel="stylesheet" href="css/header_style.css">
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
                <li><a href="pageprincipale.php">Page Principale</a></li>
                <li><a href="alternatives.php">Alternatives</a></li>
                <li><a href="collectivitees.php">Collectivité</a></li>
                <li><a href="page_statistique.php">page statistique</a></li>
                <li><a href="Informations.php">Information</a></li>
        </ul>

        <div class="bar-recherche">
            <input type="text" id="SearchBar" placeholder="Entrez votre recherche">
            <button id="Search">Search</button>
        </div>

        <img class="logo-NIRD" src="img/image.png" alt="logo NIRD">
    </nav>
</header>

<body>

<div class="container">

    <!-- TITRE HORS ENCADRÉ -->
    <h2>Fonctionnement de la démarche NIRD</h2>

    <!-- 1er Jalons : Mobilisation -->
    <div class="nird-section">
        <h3>1er Jalons : Mobilisation</h3>
        <p><strong>Objectif :</strong> Initier et sensibiliser l’établissement scolaire à une dynamique collective sur leur démarche.</p>
        <p><strong>Ordre d’action :</strong></p>
        <ul>
            <li>Le professeur volontaire s’identifie et devient le contact NIRD de l’établissement.</li>
            <li>Organisation d’une première réunion d’information expliquant les enjeux d’un numérique inclusif, responsable et durable.</li>
            <li>Le professeur récupère un compte Tchap pour partager ressources et retours d’expérience avec d’autres établissements et participer à des webinaires.</li>
            <li>Don de supports pédagogiques et techniques pour l’établissement.</li>
            <li>Sensibilisation de la direction pour soutenir la démarche.</li>
            <li>Information de la collectivité pour signaler l’initiative et les projets futurs.</li>
        </ul>
    </div>
    <br>

    <!-- 2ème Jalons : Expérimentation -->
    <div class="nird-section">
        <h3>2ème Jalons : Expérimentation</h3>
        <p><strong>Objectif :</strong> Tester des solutions concrètes et évaluer la pertinence pour l’établissement et les usagers.</p>
        <p><strong>Ordre d’action :</strong></p>
        <ul>
            <li>Installation et usage de postes de travail, neufs ou reconditionnés, équipés d’un système Linux.</li>
            <li>Pour collèges et lycées : création d’un club informatique pour le reconditionnement des ordinateurs, encadré par l’enseignant-coordinateur et partenaires extérieurs.</li>
            <li>Pour les écoles : priorité à PrimTux adaptée aux usages pédagogiques, reconditionnement possible en classe par les élèves dans le cadre des APC ou PEDT.</li>
            <li>Organisation de séances d’appropriation et de formation pour enseignants et élèves.</li>
            <li>Suivi des retours d’usage, points d’amélioration, identification d’obstacles techniques, organisationnels ou culturels.</li>
            <li>Le contact initial devient coordinateur NIRD et accompagne ses collègues.</li>
            <li>Suivi régulier par la direction pour mesurer l’impact pédagogique, organisationnel et technique.</li>
            <li>Échanges avec la collectivité pour gérer les aspects logistiques (réseau, compatibilité, intégration).</li>
        </ul>
    </div>

    <br>
    <div class="nird-section">
        <h3>3ème Jalons : Intégration</h3>
        <p><strong>Objectif :</strong> Inscrire durablement la démarche NIRD dans l’établissement et lui donner une portée structurelle.</p>
        <p><strong>Ordre d’action :</strong></p>
        <ul>
            <li>Intégration progressive des postes expérimentés dans le parc informatique et interconnexion avec le réseau de la collectivité.</li>
            <li>Inscription de la démarche dans le projet d’établissement, validée par la direction et présentée au conseil d’administration.</li>
            <li>Valorisation de l’expérience auprès de la communauté éducative, participation aux réseaux académiques.</li>
            <li>Le coordinateur NIRD devient référent NIRD reconnu par la direction, collectivités et ministère.</li>
            <li>La direction devient pilote de la démarche et communique auprès des familles et partenaires.</li>
            <li>Mise en place d’une coopération structurée avec la collectivité pour assurer pérennité, maintenance, sécurité et intégration dans les politiques locales du numérique éducatif.</li>
        </ul>
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
</body>
</html>
