const Colonne = 9;
const Ligne = 9;

/* Création de la structure du jeu :
 * - Colonne et ligne = 9
 * - GameBoard est un tableau de tableau contenantl les coo des différent item
 * - Snake est LA TETE du serpent (Coo de sa tête)
 * - Tail est l'enseble des coordonnée du serpent
 * - Apple est la coordonnée de la pomme
 * 
*/
const Game = {
    GameBoard: [],
    Direction: "RIGHT",
    Snake:{x:0, y:0},
    Tail: [],
    Apple: {x:5, y:5},
    Alive: true,
    Score: 0
}

/* Fonction init de la structure de jeux 
 * - Initialise le GameBoard
 * - Initialise les coo de tout les élements
*/
function init(Game){

    for(let i=0;i<Ligne;i++){
        const row = [];
        for(let j=0;j<Colonne;j++){
            row.push(0);
        }
    Game.GameBoard.push(row);
    }

    Game.GameBoard[Game.Snake.y][Game.Snake.x] = 1;
    Game.GameBoard[Game.Apple.y][Game.Apple.x] = 2;
}

// Affiche la grille de coordonnée des différent élement
function Display(Game){
    console.clear()
    let LigneVue = 0;
    for (let i = 0; i < Ligne; i++) {
        let rowStr = ""; // chaîne pour la ligne
        rowStr += LigneVue;
        LigneVue++
        for (let j = 0; j < Colonne; j++) {
            switch (Game.GameBoard[i][j]) {
                case 0: 
                    rowStr += "[ ]";
                break;
                case 1: 
                    rowStr += "[#]"; 
                break;
                case 2: 
                    rowStr += "[~]"; 
                break;
                case 3: 
                    rowStr += "[@]"; 
                break;
            }
        }
        console.log(rowStr); // affiche toute la ligne d'un coup
    }
    console.log(`Score = ${Game.Score} | X = ${Game.Snake.x} | Y = ${Game.Snake.y}`);
}

// Fonction qui écoute les input utilisateur
function ActionListener(Game){
    document.addEventListener("keydown",(event) =>{
        switch(event.key){
            case "d":
            case "D":
                if(Game.Direction !== "LEFT"){
                    Game.Direction = "RIGHT";
                }
            break;
            case "q":
            case "Q":
                if(Game.Direction !== "RIGHT"){
                    Game.Direction = "LEFT";
                }
            break;
            case "z":
            case "Z":
                if(Game.Direction !== "DOWN"){
                    Game.Direction = "UP";
                }
            break;
            case "s":
            case "S":
                if(Game.Direction !== "UP"){
                    Game.Direction = "DOWN";
                }
            break;
        }
    });
}

// Function pour remettre a 0 tout la GameBoard
function cleanUp(Game){
    for(let i=0;i<Ligne;i++){
        for(let j=0;j<Colonne;j++){
            Game.GameBoard[i][j] = 0;
        }
    }
}

function updateGame(Game){

    let newX = Game.Snake.x;
    let newY = Game.Snake.y;

    switch(Game.Direction){
        case "RIGHT":
            newX++;
        break;
        case "LEFT":
            newX--;
        break;
        case "UP":
            newY--;
        break;
        case "DOWN":
            newY++;
        break;
    }

    // Collision avec les limite
    if(newX < 0 || newX >= Colonne || newY < 0 || newY >= Ligne){
        Game.Alive = false; 
        return; 
    }

    for(let i=0;i<Game.Tail.length;i++){
        if(Game.Tail[i].x == newX && Game.Tail[i].y == newY){
            Game.Alive = false; 
            return; 
        }
    }

    // Déplacer la queue
    if(Game.Tail.length > 0){
        // Chaque segment prend la position du segment précédent
        for (let i = Game.Tail.length - 1; i > 0; i--) {
            Game.Tail[i] = { ...Game.Tail[i-1] };
        }
        // Premier segment = position actuelle de la tête
        Game.Tail[0] = {x: Game.Snake.x, y: Game.Snake.y};
    }

    // Collision avec la pomme
    if(newX == Game.Apple.x && newY == Game.Apple.y){
        Game.Score += 100;
        Game.Apple.x = Math.floor(Math.random() * Colonne);
        Game.Apple.y = Math.floor(Math.random() * Ligne);

        // Création de la nouvelle longeure de queu
        Game.Tail.push({x: Game.Snake.x, y: Game.Snake.y});
    }

        Game.Snake.x = newX;
        Game.Snake.y = newY;

    // Clean up de la grille
    cleanUp(Game);

    Game.GameBoard[Game.Snake.y][Game.Snake.x] = 1;
    Game.GameBoard[Game.Apple.y][Game.Apple.x] = 3;

    for(let i=0;i<Game.Tail.length;i++){
        Game.GameBoard[Game.Tail[i].y][Game.Tail[i].x] = 2
    }
}


// Initialisation de la partie
init(Game);
// Initialisation de l'ActionListener
ActionListener(Game);

function mainLoop(){
    updateGame(Game);
    if(!Game.Alive){
        console.clear();
        console.log("Game Over ! Score:", Game.Score);
        clearInterval(loop);
        return;
    }
    Display(Game);
}
const loop = setInterval(mainLoop, 350);




