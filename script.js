const btnSearch = document.getElementById("Search");
const Searching = document.getElementById("SearchBar");

btnSearch.onclick = function(){
    if(Searching.value == "snake"){
        window.open('Snake/Snake/index.html', '_top');
    }
}

function ActionListener(Game){
    const SequenceA = ["ArrowUp","ArrowUp","ArrowDown","ArrowDown","ArrowLeft", "ArrowRight", "ArrowLeft", "ArrowRight","A","B"];
    const SequenceB = ["ArrowUp","ArrowUp","ArrowDown","ArrowDown","ArrowLeft", "ArrowRight", "ArrowLeft", "ArrowRight","a","b"];
    let index;
    document.addEventListener("keydown",(event) =>{
        const key = event.key;
        if (key === SequenceA[index] || key === SequenceB[index]) {
            index++;
            if (index === SequenceA.length) {
                window.open('Snake/SnakeHard/index.html', '_top');
                index = 0;
            }
        } else {
            index = 0;
        }

    });
}