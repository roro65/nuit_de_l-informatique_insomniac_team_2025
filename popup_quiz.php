<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>"Popup Quizz Intro"</title>
    <link rel="stylesheet" href="css/globals.css" />
    <link rel="stylesheet" href="./css/header_style.css">
    
</head>
<body>

<div class="overlay" id="popup">
    <div class="container">
        <h2>Quizz d'introduction</h2>
        <br>

        <div class="nird-section">
            <h3>Objectif</h3>
            <p>L'objectif de ce test est de faire une première évaluation vos connaissances personnels.     ²    </p>
        </div>
        <br>

        <div class="nird-section">
            <h3>Quizz</h3>
            <div class="grid">
                <div class="card"></div>
                <div class="card"></div>
                <div class="card"></div>
                <div class="card"></div>
                <div class="card"></div>
                <div class="card"></div>
            </div>
        </div>
        <br>

        <button class="close-btn" onclick="document.getElementById('popup').style.display='none'">Commencer</button>
    </div>
</div>

</body>
</html>
