const Colonne = 10;
const Ligne = 10;
const Win = Colonne*Ligne;

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
    Snake:{x:2, y:1},
    Tail: [],
    Apple: {x:3, y:3},
    Alive: true,
    Score: 0
}

let angleHead = {
    "UP": 0,
    "RIGHT": 90,
    "DOWN": 180,
    "LEFT": 270
}[Game.Direction];

//////////////////////////////////////////////////////
////////////////
////// SYS ///// 
////////////////
function init(Game){

    for(let i=0;i<Ligne;i++){
        const row = [];
        for(let j=0;j<Colonne;j++){
            row.push(0);
        }
    Game.GameBoard.push(row);
    }

    let Seg1 = {x:1,y:1,dir:"RIGHT"};
    let Seg2 = {x:2,y:1,dir:"RIGHT"};

    Game.Tail.push(Seg1);
    Game.Tail.push(Seg2);

    Game.GameBoard[Game.Snake.y][Game.Snake.x] = 1;
    Game.GameBoard[Game.Apple.y][Game.Apple.x] = 2;
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
        Game.Tail[0] = {x: Game.Snake.x, y: Game.Snake.y,dir:Game.Direction};
    }

    // Collision avec la pomme
    if(newX == Game.Apple.x && newY == Game.Apple.y){
        Game.Score += 100;
        generatePomm(Game);
        let lastSeg = Game.Tail[Game.Tail.length - 1];
        Game.Tail.push({ x: lastSeg.x, y: lastSeg.y, dir: lastSeg.dir });
        if(Win == Game.Tail.length + 1){
            clearInterval(loop);
            win(Game)
        }
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

    const last = Game.Tail[Game.Tail.length-1];
    Game.GameBoard[last.y][last.x] = 4;
}

function ActionListener(Game){
    document.addEventListener("keydown",(event) =>{
        switch(event.key){
            case "d":
            case "D":
            case "ArrowRight":
                if(Game.Direction !== "LEFT"){
                    Game.Direction = "RIGHT";
                }
            break;
            case "q":
            case "Q":
            case "ArrowLeft":
                if(Game.Direction !== "RIGHT"){
                    Game.Direction = "LEFT";
                }
            break;
            case "z":
            case "Z":
            case "ArrowUp":
                if(Game.Direction !== "DOWN"){
                    Game.Direction = "UP";
                }
            break;
            case "s":
            case "S":
            case "ArrowDown":
                if(Game.Direction !== "UP"){
                    Game.Direction = "DOWN";
                }
            break;
        }
    });
}

function cleanUp(Game){
    for(let i=0;i<Ligne;i++){
        for(let j=0;j<Colonne;j++){
            Game.GameBoard[i][j] = 0;
        }
    }
}

function generatePomm(Game){
    while(true){
        pommeX = Math.floor(Math.random() * Colonne);
        pommeY = Math.floor(Math.random() * Ligne);

        let isOnTail = false;
        for(let i=0;i<Game.Tail.length-1;i++){
            if(Game.Tail[i].x == pommeX && Game.Tail[i].y == pommeY){
                isOnTail = true;
                break;
            }
        }

        if(isOnTail){
            continue;
        }

        if(pommeX == Game.Snake.x && pommeY == Game.Snake.y){
            continue;
        }
        
        Game.Apple.x = pommeX;
        Game.Apple.y = pommeY;

        return;
    }
}
//////////////////////////////////////////////////////


//////////////////////////////////////////////////////
////////////////
////// AFI ///// 
////////////////
function DisplayConsole(Game){
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
                case 4: 
                    rowStr += "[$]"; 
                break;
            }
        }
        console.log(rowStr); // affiche toute la ligne d'un coup
    }
    console.log(`Score = ${Game.Score} | X = ${Game.Snake.x} | Y = ${Game.Snake.y}`);
}

function DisplayScreen(Game){
    DisplayCleanUp(Game);

    // Affichage de la tête
    let cooSnake = `${Game.Snake.x}:${Game.Snake.y}`;
    let cellHead = document.getElementById(cooSnake);
    let angleHead = 0;
    switch(Game.Direction){
        case "RIGHT": angleHead = 90; break;
        case "LEFT": angleHead = 270; break;
        case "UP": angleHead = 0; break;
        case "DOWN": angleHead = 180; break;
    }
    cellHead.innerHTML = `<img src="Tete.png" style="width:100%;height:100%; transform: rotate(${angleHead}deg);">`;

    // Affichage de la pomme
    let cooApple = `${Game.Apple.x}:${Game.Apple.y}`;
    let cellApple = document.getElementById(cooApple);
    cellApple.innerHTML = '<img src="Apple.png" style="width:100%;height:100%;">';

    // Affichage du corps (sauf la queue)
    for(let i = 0; i < Game.Tail.length - 1; i++){
        let seg = Game.Tail[i];
        let prevSeg = i > 0 ? Game.Tail[i-1] : {x: Game.Snake.x, y: Game.Snake.y, dir: Game.Direction};
        let nextSeg = Game.Tail[i+1];

        let cooTail = `${seg.x}:${seg.y}`;
        let cellTail = document.getElementById(cooTail);

        // Détermination du type et de l'angle
        if(prevSeg.x === nextSeg.x || prevSeg.y === nextSeg.y){
            // Segment droit
            let angleTail = (prevSeg.x !== nextSeg.x) ? 90 : 0; // horizontal = 90, vertical = 0
            cellTail.innerHTML = `<img src="Corps.png" style="width:100%;height:100%; transform: rotate(${angleTail}deg);">`;
        } else {
            // Segment virage
            let prevDir = getDirection(prevSeg, seg);
            let nextDir = getDirection(seg, nextSeg);
            let angleCorner = getCornerAngle(prevDir, nextDir);
            cellTail.innerHTML = `<img src="Virage.png" style="width:100%;height:100%; transform: rotate(${angleCorner}deg);">`;
        }
    }

    // Affichage de la queue
    let End = Game.Tail[Game.Tail.length-1];
    let cooEnd = `${End.x}:${End.y}`;
    let cellEnd = document.getElementById(cooEnd);
    let angleEnd = 0;
    switch(End.dir){
        case "RIGHT": angleEnd = 90; break;
        case "LEFT": angleEnd = 270; break;
        case "UP": angleEnd = 0; break;
        case "DOWN": angleEnd = 180; break;
    }
    cellEnd.innerHTML = `<img src="Queue.png" style="width:100%;height:100%; transform: rotate(${angleEnd}deg);">`;
}

// Calcule la direction entre deux segments
function getDirection(from, to){
    if(to.x > from.x) return "RIGHT";
    if(to.x < from.x) return "LEFT";
    if(to.y > from.y) return "DOWN";
    if(to.y < from.y) return "UP";
}

// Retourne l’angle correct pour le coin selon les directions précédentes et suivantes
function getCornerAngle(prevDir, nextDir){
    if((prevDir === "UP" && nextDir === "RIGHT") || (prevDir === "LEFT" && nextDir === "DOWN")) return 180;
    if((prevDir === "UP" && nextDir === "LEFT") || (prevDir === "RIGHT" && nextDir === "DOWN")) return 270;
    if((prevDir === "DOWN" && nextDir === "LEFT") || (prevDir === "RIGHT" && nextDir === "UP")) return 0;
    if((prevDir === "DOWN" && nextDir === "RIGHT") || (prevDir === "LEFT" && nextDir === "UP")) return 90;
}

 

function DisplayCleanUp(Game){
    for(let i=0;i<Ligne;i++){
        for(let j=0;j<Colonne;j++){
            let strCell = `${j}:${i}`;
            let CleanCell = document.getElementById(strCell);
            CleanCell.innerHTML = '<img src="Case.png" alt="Apple" style="width:100%;height:100%;">';
        }
    }
}

function getSegmentType(prevSeg, currSeg, nextSeg) {
    // Si le segment est la tête ou la queue, c'est droit
    if (!prevSeg || !nextSeg) return "straight";

    // Horizontal -> horizontal
    if ((prevSeg.dir === "LEFT" || prevSeg.dir === "RIGHT") &&
        (nextSeg.dir === "LEFT" || nextSeg.dir === "RIGHT")) return "straight";
    
    // Vertical -> vertical
    if ((prevSeg.dir === "UP" || prevSeg.dir === "DOWN") &&
        (nextSeg.dir === "UP" || nextSeg.dir === "DOWN")) return "straight";

    // Sinon, c'est un virage
    return "corner";
}
//////////////////////////////////////////////////////
// Initialisation de la partie
init(Game);
// Initialisation de l'ActionListener
ActionListener(Game);

function mainLoop(){
    updateGame(Game);
    if(!Game.Alive){
        console.clear();
         window.open("https://www.youtube.com/watch?v=dQw4w9WgXcQ", "_blank");
        clearInterval(loop);
        return;
    }
    DisplayScreen(Game);
    document.getElementById("Score").textContent = Game.Score;
}
const loop = setInterval(mainLoop, 300);


function win(Game){
    console.clear();
    window.alert("Win ! Score:", Game.Score);
    clearInterval(loop);
}



