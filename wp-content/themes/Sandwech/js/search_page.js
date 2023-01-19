let searchbar = null;
let searchbutton = null;
$( document ).ready(function() {
    console.log( "ready!" );
    searchbar = $document.getElementById("search");
    searchbutton = $document.getElementById("searchbutton");
    searchbutton.addEventListener("click", changePage());
});

function changePage(){
    console.log("Hai cercato la pagina " + searchbar.placeholder);
}