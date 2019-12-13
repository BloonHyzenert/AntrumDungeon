
function menuDeroulant(){
    document.getElementById("affichage").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.menuBtn')) {
    var dropdowns = document.getElementsByClassName("menuDeroulant-contenu");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
