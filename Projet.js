function showText() {
    var text = document.getElementById("projText");
    text.classList.toggle("show");
    }
function showText2() {
    var text2 = document.getElementById("projText2");
    text2.classList.toggle("show");
    }
function showText3() {
    var text3 = document.getElementById("projText3");
    text3.classList.toggle("show");
    }
function showText4() {
    var text4 = document.getElementById("projText4");
    text4.classList.toggle("show");
    }
function showText5() {
    var text5 = document.getElementById("projText5");
    text5.classList.toggle("show");
    }




// activ -> pour les div a translate a droite
// activ2 -> pour les div a translate a gauche
// activ2 -> pour les div a translate a gauche
// activ2 -> pour les div a translate a gauche
function moveDiv1back() {
    var proj1 = document.getElementById("projet1");
    var div = document.getElementById("cont-projet")
    div.classList.toggle("enableBlur"); 
    proj1.classList.toggle("activ"); 
    proj1.classList.toggle("activ3"); 
    proj1.classList.toggle("disableBlur"); 

}

function moveDiv2back() {
    var proj2 = document.getElementById("projet2");
    var div = document.getElementById("cont-projet");
    div.classList.toggle("enableBlur"); 
    proj2.classList.toggle("activ2"); 
    proj2.classList.toggle("activ3"); 
    proj2.classList.toggle("disableBlur"); 
    
}
function moveDiv3back() {
    var proj3 = document.getElementById("projet3");
    var div = document.getElementById("cont-projet");
    div.classList.toggle("enableBlur"); 
    proj3.classList.toggle("activ"); 
    proj3.classList.toggle("activ3"); 
    proj3.classList.toggle("disableBlur"); 
    
}
function moveDiv4back() {
    var proj4 = document.getElementById("projet4");
    var div = document.getElementById("cont-projet");

    div.classList.toggle("enableBlur"); 

    proj4.classList.toggle("activ2"); 
    proj4.classList.toggle("activ3"); 
    proj4.classList.toggle("disableBlur"); 
    
}
function moveDiv5back() {
    var proj5 = document.getElementById("projet5");
    var div = document.getElementById("cont-projet");

    div.classList.toggle("enableBlur"); 

    proj5.classList.toggle("activ"); 
    proj5.classList.toggle("activ3"); 
    proj5.classList.toggle("disableBlur"); 
    
}