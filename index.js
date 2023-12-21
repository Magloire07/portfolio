document.addEventListener("click", function(event) {
    var optionsDeroulante = document.querySelector(".options-deroulante");
    var boutonGitHub = document.getElementById("github_et_reseaux");

    // si l'élément cliqué n'est pas l'option déroulante et n'est pas le bouton GitHub alors on masque 
    try{
    if (!optionsDeroulante.contains(event.target) && event.target !== boutonGitHub) {
        optionsDeroulante.style.display = "none";
    }
}catch{

}
});

try{


document.getElementById("github_et_reseaux").addEventListener("click", function(event) {
    var optionsDeroulante = document.querySelector(".options-deroulante");
    optionsDeroulante.style.display = (optionsDeroulante.style.display === "none" || optionsDeroulante.style.display === "") ? "block" : "none";

    // Empêcher la propagation de l'événement pour éviter que le document ne réagisse également au clic
    event.stopPropagation();
});
}catch{}
document.getElementById("menu").addEventListener("click", function(event) {
    var overlay = document.querySelector(".overlay");
    overlay.style.display = (overlay.style.display === "none" ||overlay.style.display === "") ? "block" : "none";
    event.stopPropagation();

 
});

