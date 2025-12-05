const btnSearch = document.getElementById("Search");
const Searching = document.getElementById("SearchBar");

btnSearch.onclick = function(){
    if(Searching.value == "snake"){
        window.open('Snake/Snake/index.html', '_top');
    }
}

function ActionListener(){
    const SequenceA = ["ArrowUp","ArrowUp","ArrowDown","ArrowDown","ArrowLeft", "ArrowRight", "ArrowLeft", "ArrowRight","A","B"];
    const SequenceB = ["ArrowUp","ArrowUp","ArrowDown","ArrowDown","ArrowLeft", "ArrowRight", "ArrowLeft", "ArrowRight","a","b"];
    
    let index = 0;

    document.addEventListener("keydown",(event) =>{
        const key = event.key;

        // si la touche correspond
        if (key === SequenceA[index] || key === SequenceB[index]) {
            index++;
            console.log("OK:", key);

            if (index === SequenceA.length) {
                window.open('Snake/SnakeHard/index.html', '_top');
                index = 0;
            }
        } else {
            index = 0;
        }
    });
}
