<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Popup Quizz Intro</title>
    <link rel="stylesheet" href="css/globals.css" />
    
</head>
<body>

<div class="overlay" id="popup">
    <div class="popup">
        <div class="title-box">Quizz d'intro</div>

        <div class="section">
            <div class="section-title">Objectif</div>
            <p>Texte expliquant que le but de cette page est de tester les connaissances avant de se renseigner</p>
        </div>

        <div class="section">
            <div class="section-title">Quizz</div>
            <div class="grid">
                <div class="card"></div>
                <div class="card"></div>
                <div class="card"></div>
                <div class="card"></div>
                <div class="card"></div>
                <div class="card"></div>
            </div>
        </div>

        <button class="close-btn" onclick="document.getElementById('popup').style.display='none'">Commencer</button>
    </div>
</div>

</body>
</html>
