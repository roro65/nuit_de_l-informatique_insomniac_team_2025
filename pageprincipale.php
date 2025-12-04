<?php
// page_accueil.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="global.css" />
</head>
<body>

<div class="header">
    <button>Burger</button>
    <input type="text" placeholder="Barre de recherche" />
    <div style="width:50px; height:40px; border:1px solid #555;"></div>
</div>

<div class="container">
    <div class="section">
        <div class="section-title">Statistique de connaissance</div>

        <div class="section">
            <div class="section-title">Stat global</div>
            <div class="graph"></div>
        </div>

        <div class="section">
            <div class="section-title">Evolution des stats perso</div>
            <div class="graph"></div>
        </div>

    </div>
</div>

</body>
</html>
