

function showText() {
    var text = document.getElementById("carreBleuText1");
    text.classList.toggle("show");
    }
function showText2() {
    var text2 = document.getElementById("carreBleuText2");
    text2.classList.toggle("show");
    }
function showText3() {
    var text3 = document.getElementById("carreBleuText3");
    text3.classList.toggle("show");
    }
function showText4() {
    var text4 = document.getElementById("carreBleuText4");
    text4.classList.toggle("show");
    }
function showText5() {
    var text5 = document.getElementById("carreBleuText5");
    text5.classList.toggle("show");
    }


    function showText1() {
        var text = document.getElementById("projText");
        text.classList.toggle("show1");

        var title = document.getElementById("title1");
        title.classList.toggle("show1");
        }
    function showText12() {
        var text2 = document.getElementById("projText2");
        text2.classList.toggle("show1");
        var title2 = document.getElementById("title2");
        title2.classList.toggle("show1");
        }
    function showText13() {
        var text3 = document.getElementById("projText3");
        text3.classList.toggle("show1");
        var title3 = document.getElementById("title3");
        title3.classList.toggle("show1");
        }
    function showText14() {
        var text4 = document.getElementById("projText4");
        text4.classList.toggle("show1");
        var title4 = document.getElementById("title4");
        title4.classList.toggle("show1");
        }
    function showText15() {
        var text5 = document.getElementById("projText5");
        text5.classList.toggle("show1");
        var title5 = document.getElementById("title5");
        title5.classList.toggle("show1");
        }
    
    
    

// activ -> pour les div a translate a droite
// activ2 -> pour les div a translate a gauche

function moveDiv1back() {
    var proj1 = document.getElementById("projet1");
    var div = document.getElementById("cont-projet");
     
    proj1.classList.toggle("activ");
    proj1.classList.toggle("activ3"); 
    proj1.classList.toggle("disableBlur"); 
    div.classList.toggle("enableBlur");
}

function moveDiv2back() {
    var proj2 = document.getElementById("projet2");
    var div = document.getElementById("cont-projet");
    
    proj2.classList.toggle("activ2"); 
    proj2.classList.toggle("activ3"); 
    proj2.classList.toggle("disableBlur"); 
    div.classList.toggle("enableBlur"); 
}
function moveDiv3back() {
    var proj3 = document.getElementById("projet3");
    var div = document.getElementById("cont-projet");
   
    proj3.classList.toggle("activ"); 
    proj3.classList.toggle("activ3"); 
    proj3.classList.toggle("disableBlur"); 
    div.classList.toggle("enableBlur");
}
function moveDiv4back() {
    var proj4 = document.getElementById("projet4");
    var div = document.getElementById("cont-projet");

    proj4.classList.toggle("activ2"); 
    proj4.classList.toggle("activ3"); 
    proj4.classList.toggle("disableBlur"); 
    div.classList.toggle("enableBlur"); 

}
function moveDiv5back() {
    var proj5 = document.getElementById("projet5");
    var div = document.getElementById("cont-projet");

    proj5.classList.toggle("activ"); 
    proj5.classList.toggle("activ3"); 
    proj5.classList.toggle("disableBlur"); 
    div.classList.toggle("enableBlur");
}
