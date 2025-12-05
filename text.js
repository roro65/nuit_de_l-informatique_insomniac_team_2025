const btnSearch = document.getElementById("Search");
const Searching = document.getElementById("SearchBar");

btnSearch.onclick = function(){
    if(Searching.value == "snake"){
        window.open('Snake/index.html', '_top');
    }
}