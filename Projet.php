<?php

/*
    Plugin name: Afficher-Projet
    Author: Lada Starodubtseva
    Plugin url:
    Version: 1.0.0
    Description: Permet d'afficher les Projet des etudiants
*/
 
 
 
function Projet_enqueue()
{
// filemtime // retourne en milliseconde le temps de la dernière
// plugin_dir_path // retourne le chemin du répertoire du plugin
// __FILE__ // le fichier en train de s'exécuter
// wp_enqueue_style() // Intègre le link:css dans la page
// wp_enqueue_script() // intègre le script dans la page
// wp_enqueue_scripts // le hook
 
 
$version_css = filemtime(plugin_dir_path( __FILE__ ) . "Projet.css");
$version_js = filemtime(plugin_dir_path(__FILE__) . "Projet.js");
 
    wp_enqueue_style(   'em_plugin_Projet_scss',
                     plugin_dir_url(__FILE__) . "Projet.css",
                     array(),
                     $version_css);
 
    wp_enqueue_script(  'em_plugin_Projet_js',
                    plugin_dir_url(__FILE__) ."Projet.js",
                    array(),
                    $version_js,
                    true);
}
add_action('wp_enqueue_scripts', 'Projet_enqueue');
 
 
 
function creation_Projet(){
    $contenu = '

    <section class="site__projets">
    <h1 class="titleProjets">PROJETS DES ÉLÈVES</h1>
                <div class="cont-proj">


                    <div class="premier-container-projet">

                        <div class="cont-projet  disbaleZindex" id="cont-projet">
                            <div id="projet1" class="projet" onclick="showText(), showText1()  , moveDiv1back()" >
                        

                                <h3 class="titleProjetDroite" id="title1">Les Chroniques Dystopiques</h3>
                                <p class="plus">Plus...</p>

                                <div id="carreBleuText1" class="carreBleu"></div>
                               
                             
                                <p id="projText" class="texteProjet ">
                                    Les Chroniques Dystopiques
                                    <br> Projet réalisé au cours de jeux en équipe 
                                    <br> Par Nicolas Carrière, Vincent Lagarde  
                                    <br> Antoine Chambelant et ... 
                                    
                                </p>
                            </div>

                            <div id="projet2" class="projet" onclick="showText2(), showText12(), moveDiv2back()" >
                            <h3 class="titleProjetGauche" id="title2">Machine</h3>
                            <p class="plus2">Plus...</p>
                            <div id="carreBleuText2" class="carreBleu2"></div>
                           

                                <p id="projText2" class="texteProjet2 ">
                                    Lorem, ipsum dolor sit 
                                    amet consectetur adipisicing 
                                    elit. Nobis enim blanditiis 
                                    est quam, porro, animi repellendus 
                                    veniam libero, quas officia 
                                    architecto similique! Ab voluptates 
                                    laboriosam quibusdam tenetur aut dolor 
                                    pariatur?
                                </p>
                            </div>

                            <div id="projet3"  class="projet" onclick="showText3(), showText13() ,moveDiv3back()" >
                                <h3 class="titleProjetDroite" id="title3">Personnage fantastique</h3>
                                <p class="plus">Plus...</p>
                                <div id="carreBleuText3" class="carreBleu"></div>
                                <img src=""alt="">

                                <p id="projText3" class="texteProjet3 ">
                                    Lorem, ipsum dolor sit 
                                    amet consectetur adipisicing 
                                    elit. Nobis enim blanditiis 
                                    est quam, porro, animi repellendus 
                                    veniam libero, quas officia 
                                    architecto similique! Ab voluptates 
                                    laboriosam quibusdam tenetur aut dolor 
                                    pariatur?
                                </p>
                            </div>

                            <div id="projet4" class="projet" onclick="showText4(), showText14() , moveDiv4back()" >
                                <h3 class="titleProjetGauche" id="title4">Somnuim</h3>
                                <p class="plus2">Plus...</p>
                                <div id="carreBleuText4" class="carreBleu2"></div>
                               

                                <p id="projText4" class="texteProjet4 ">
                                    Lorem, ipsum dolor sit 
                                    amet consectetur adipisicing 
                                    elit. Nobis enim blanditiis 
                                    est quam, porro, animi repellendus 
                                    veniam libero, quas officia 
                                    architecto similique! Ab voluptates 
                                    laboriosam quibusdam tenetur aut dolor 
                                    pariatur?
                                </p>
                            </div>
                            <div id="projet5" class="projet" onclick="showText5() ,showText15(), moveDiv5back()" >
                            <h3 class="titleProjetDroite" id="title5">Drame en noir et blanc</h3>
                            <p class="plus">Plus...</p>
                                <div id="carreBleuText5" class="carreBleu"></div>
                               

                                <p id="projText5" class="texteProjet5">
                                    Lorem, ipsum dolor sit 
                                    amet consectetur adipisicing 
                                    elit. Nobis enim blanditiis 
                                    est quam, porro, animi repellendus 
                                    veniam libero, quas officia 
                                    architecto similique! Ab voluptates 
                                    laboriosam quibusdam tenetur aut dolor 
                                    pariatur?
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

          
    </section>';
    return $contenu;
}
 
add_shortcode('em_Projet', 'creation_Projet');

?>
