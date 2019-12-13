//Gestion du Carroussel
var image1=document.getElementById("i1");
var texte1=document.getElementById("t1");
var tabi1 = ["ressources/halloween.jpg","ressources/manoir.jpg","ressources/jeu.jpg"];
var posi1 = 0;
var tabt1 = [
"La soirée halloween approche ! Le 31 Octobre 50% sur les tarifs des salles!",
"Voici le manoir dans lequel vous aurez les frissons de votre vie ! Osez venir dans l'antre du donjonneur si vous en avez le courage...",
"Réservez vos tables dés maintenant dans la section Réservation !"];
var post1 = 0;
var image2=document.getElementById("i2");
var texte2=document.getElementById("t2");
var tabi2 = ["ressources/figurines.jpg","ressources/cthulhu.jpeg","ressources/detd.jpg"];
var posi2 = 0;
var tabt2 = [
"Les nouvelles figurines ont été reçues!",
"Vendredi 20 Septembre Initiation à l'Appel de Cthulhu",
"Initiation Donjons et Dragons le Samedi 21 Septembre"];
var post2 = 0;
function load(){
    image1.src=tabi1[posi1];
    texte1.innerHTML=tabt1[post1];
    image2.src=tabi2[posi2];
    texte2.innerHTML=tabt2[post2];
}
function g1(){
  posi1=(posi1+1)%tabi1.length;
  post1=(post1+1)%tabt1.length;
  image1.src=tabi1[posi1];
  texte1.innerHTML=tabt1[post1];
}
function d1(){
  posi1--;
  if(posi1<0)
  posi1=tabi1.length-1;
  post1--;
  if(post1<0)
  post1=tabt1.length-1;
  image1.src=tabi1[posi1];
  texte1.innerHTML=tabt1[post1];
}
function g2(){
  posi2=(posi2+1)%tabi2.length;
  post2=(post2+1)%tabt2.length;
  image2.src=tabi2[posi2];
  texte2.innerHTML=tabt2[post2];
}
function d2(){
  posi2--;
  if(posi2<0)
  posi2=tabi2.length-1;
  post2--;
  if(post2<0)
  post2=tabt2.length-1;
  image2.src=tabi2[posi2];
  texte2.innerHTML=tabt2[post2];
}
