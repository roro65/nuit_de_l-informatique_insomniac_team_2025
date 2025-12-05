<?php
$questions = [
    [
        "question" => "Pourquoi Linux est-il souvent plus performant que Windows ou macOS sur des ordinateurs anciens ?",
        "options" => [
            "Parce qu'il nécessite un matériel récent et puissant",
            "Parce qu'il consomme moins de ressources et fonctionne sur des machines peu puissantes",
            "Parce qu’il est fourni uniquement sur les ordinateurs Apple"
        ],
        "answer" => 1
    ],
    [
        "question" => "Quel avantage majeur des systèmes open-source comme Linux ou BSD les distingue de Windows et macOS ?",
        "options" => [
            "Ils sont payants et verrouillés",
            "Ils collectent beaucoup plus de données personnelles",
            "Ils sont libres, modifiables et souvent plus respectueux de la vie privée"
        ],
        "answer" => 2
    ],
    [
        "question" => "Quelle alternative open-source permet de remplacer les services de messagerie comme Gmail ou Outlook avec un haut niveau de confidentialité ?",
        "options" => [
            "ProtonMail",
            "Hotmail",
            "Yahoo Mail"
        ],
        "answer" => 0
    ],
    [
        "question" => "Quel navigateur est une alternative plus respectueuse de la vie privée et moins gourmande que Google Chrome ?",
        "options" => [
            "Firefox",
            "Internet Explorer",
            "Chrome Beta"
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
    <title>Habitude sur les OS</title>
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
        <h2>Pourquoi ne pas utiliser systématique Windows ou macOS ?</h2>

        <div class="nird-section">
            <h3>Pourquoi ne pas utilisé systématique Windows ou macOS</h3>
            <p>Lorsqu’on achète un ordinateur, trois éléments principaux doivent guider le choix : Les qualités techniques de l’ordinateur</p>
            <ol>
                <li>Les qualités techniques de l’ordinateur</li>
                <ul>
                    <li>Processeur, mémoire, stockage, carte graphique, connectivité… Ces composants déterminent la performance et la durabilité de la machine. </li>
                </ul>
                <br>
                <li>Le système d’exploitation (OS) fourni</li>
                <ul>
                    <li>La plupart des ordinateurs sont vendus avec un OS préinstallé.</li>
                    <li>Pour les Mac, il est impossible d’acheter l’ordinateur sans macOS. Cependant, comparé aux composants techniques, les Mac sont souvent dans la moyenne. De plus, il existe des alternatives open-source performantes qui peuvent remplacer macOS gratuitement.</li>
                    <li>Pour les ordinateurs non-Apple, il est généralement possible de les acheter sans Windows, ce qui permet une économie de 100 à 150 €. Les solutions open-source (Linux et ses distributions) offrent alors des performances équivalentes, voire supérieures, aux OS payants</li>
                </ul>
                <br>
                <li>La marque de l’ordinateur</li>
                <ul>
                    <li>La notoriété de la marque peut influencer le prix et le support technique, mais les composants et le système d’exploitation restent déterminants pour le rapport qualité-prix. En résumé : il est possible de faire des économies et de choisir un OS adapté à ses besoins en privilégiant des solutions open-source. Plusieurs distributions Linux ou OS alternatifs gratuits offrent aujourd’hui des performances comparables aux systèmes payants. Voici quelques exemples</li>
                </ul>
                <br>
            </ol>
            <ol>
                <li>Linux – avantages face à Windows et macOS
                    <ul>
                        <li>Libre et gratuit. Son code est ouvert, ce qui signifie que tout le monde peut l’examiner, l’améliorer, le modifier. À l’inverse, Windows et macOS sont fermés et payants.</li>
                        <li>Peu gourmand en ressources. Linux peut fonctionner sur des ordinateurs anciens ou peu puissants, car il consomme moins de mémoire et de puissance. Windows et macOS demandent du matériel plus récent.</li>
                        <li>Respect de la vie privée. Linux ne collecte quasiment pas de données d’utilisation, contrairement à Windows (très surveillant) et macOS (modérément).</li>
                        <li>Très sécurisé. Grâce à son modèle de droits strict (un utilisateur ne peut pas tout faire sans autorisation), les virus sont rares et moins dangereux.</li>
                        <li>Extrêmement personnalisable. On peut choisir l’apparence, les programmes, ou même remplacer des parties du système, contrairement à Windows et surtout macOS.</li>
                    </ul>
                    <br>
                </li>
                <li> BSD (FreeBSD, OpenBSD…) – avantages face à Windows et macOS (Utilisé par Netflix à vérif)
                    <ul>Sécurité renforcée dès la conception. Par exemple, OpenBSD est créé autour de l’idée de sécurité maximale, pas ajoutée après coup.. Windows et macOS ajoutent des protections, mais leur architecture n’a pas été pensée à 100% pour ça.</li>
                        <li>Stabilité très élevée. BSD est très utilisé sur des serveurs (sites, services web) parce qu’il reste fonctionnel très longtemps sans redémarrage ni plantage.</li>
                        <li>Licence très permissive. On peut réutiliser le code BSD librement dans des produits, même commerciaux. macOS utilise d’ailleurs une base BSD mais en version fermée.</li>
                        <li>Excellentes performances réseau. Gestion très efficace d’internet, des connexions, du trafic → mieux optimisée que sur Windows/macOS. macOS découle de BSD mais en est la version fermée à vérifier. Message final clair</li>
                        <li>Windows et macOS sont fermés, commerciaux et exigeants en matériel.</li>
                        <li>Les OS open source sont libres, adaptables, et plus respectueux de la vie privée.</li>
                        <li>Certains comme BSD et Illumos sont excellents pour la sécurité et les serveurs.</li>
                        <li>D’autres comme Linux redonnent vie aux ordinateurs ou offrent plus de contrôle.</li>
                    </ul>
                    <br>
                </li>
            </ol>   

        </div>
        <br>
        
        <div class="nird-section">
            <h3>Alternatives sécurisées et open-source</h3>
            <p>Pour réduire la centralisation et protéger votre vie privée, plusieurs solutions existent pour remplacer les services de messagerie et de stockage :<br>
            Remplacer les mails (Outlook, Gmail) :<br>
            Proton Mail : forte confidentialité, chiffrement automatique.<br>
            Tutanota : open-source et très sécurisé.<br>
            Mailfence : transparent et anti-tracking.<br>
            Posteo : pas de publicité et respect total de la vie privée.<br>
            Remplacer les clouds (Drive, iCloud, OneDrive) :<br>
            Proton Drive : chiffrement complet, applications mobiles disponibles.<br>
            Nextcloud : vous contrôlez tout, calendrier, fichiers, chat intégrés.<br>
            Sync.com : chiffrement robuste et interface facile à utiliser.<br>
            Ces alternatives permettent de conserver un contrôle total sur vos données et de limiter la dépendance aux grandes entreprises, tout en offrant des fonctionnalités équivalentes pour la messagerie et le stockage.</p>
        </div>
        <br>

        <div class="nird-section">
            <h3>Alternatives respectueuses de votre vie privée et de vos valeurs</h3>
            <p>Le choix de votre moteur de recherche peut refléter vos préoccupations personnelles, qu’elles soient liées à la vie privée ou à l’écologie :<br>
            Pour protéger votre vie privée :<br>
            DuckDuckGo : ne stocke pas vos recherches et n’affiche pas de publicités ciblées.<br>
            Qwant : moteur européen, conforme au RGPD, ne crée pas de profil utilisateur.<br>
            Pour soutenir l’écologie et les projets sociaux :<br>
            Ecosia : finance la plantation d’arbres à partir des recherches.<br>
            Lilo : soutient des projets sociaux et environnementaux grâce aux revenus publicitaires.<br>
            Choisir un moteur de recherche adapté à vos valeurs vous permet de maîtriser vos données, tout en ayant un impact positif sur la société et l’environnement</p>
        </div>
        <br>

        <div class="nird-section">
            <h3>Remplacer Chrome : des options plus légères et sécurisées</h3>
            <br>
            <p>Quant à notre amis Chrome a une fâcheuse tendance à nous traquer ce qui pour notre vie privée n’est pas génial et le rend en plus très gourmand en énergie et plus lourd. Voici par quoi vous pouvez le remplacer :</p>
            <br>
            <ul>
                <li>Mozilla Firefox (sécurité) :</li>
                <ul>
                    <li>Open-source</li>
                    <li>Respect de la vie privée</li>
                    <li>Extensions nombreuses</li>
                    <li>Synchronisation multi-appareils</li>
                    <li>Très personnalisable (thèmes, modules, configuration avancée)</li>
                    <li>Un bon compromis entre performances et consommation mémoire — souvent plus léger que Chrome.</li>
                </ul>
                <br>

                <li>Brave (sécurité) :</li>
                <ul>
                    <li>Bloqueur de pubs et traqueurs intégré</li>
                    <li>Basé sur Chromium (tu gardes l’écosystème Chrome tout en ayant plus de privacy)</li>
                    <li>Très rapide</li>
                    <li>Mode de navigation privé avec Tor</li>
                    <li>Bonne efficacité mémoire et batterie — moins gourmand que Chrome sur plusieurs onglets, ce qui peut allonger l’autonomie sur portable.</li>
                </ul>
                <br>

                <li>Opera (tout-en-un) :</li>
                <ul>
                    <li>VPN gratuit intégré</li>
                    <li>Bloqueur de pubs intégré</li>
                    <li>Messageries intégrées dans la barre latérale </li>
                    <li>Mode économie d’énergie</li>
                    <li>Bon compromis pour les machines moins puissantes souvent plus léger que Chrome</li>
                </ul>

        </div>
        <br>

        <div class="nird-section">
            <h3>>Deux actions essentielles pour votre cybersécurité</h3>
            <p>Pour limiter cela, il n’existe que deux solutions principales. Premièrement, désactivez la localisation, le micro et la caméra. Ensuite, prenez le temps de lire au moins le résumé des données collectées.</p>
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
