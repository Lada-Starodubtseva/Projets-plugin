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


                    <div class="premier-container-projet" id="scroller">

                        <div class="cont-projet  disbaleZindex" id="cont-projet">
                            <div id="projet1" class="projet" onclick="showText() , moveDiv1back()" >
                        

                                <h3 class="title">projet 1</h3>
                                <img src="http://localhost:8080/5w5/wp-content/uploads/2023/10/LogoTIM-1.png" alt="">

                                <p id="projText" class="texteProjet ">
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

                            <div id="projet2" class="projet" onclick="showText2() , moveDiv2back()" >
                                <h3 class="title">projet 2</h3>
                                <img src="http://localhost:8080/5w5/wp-content/uploads/2023/10/LogoTIM-1.png" alt="">

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

                            <div id="projet3"  class="projet" onclick="showText3() ,moveDiv3back()" >
                                <h3 class="title">projet 3</h3>
                                <img src="http://localhost:8080/5w5/wp-content/uploads/2023/10/LogoTIM-1.png" alt="">

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

                            <div id="projet4" class="projet" onclick="showText4() , moveDiv4back()" >
                                <h3 class="title">projet 4</h3>
                                <img src="http://localhost:8080/5w5/wp-content/uploads/2023/10/LogoTIM-1.png" alt="">

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
                            <div id="projet5" class="projet" onclick="showText5() , moveDiv5back()" >
                                <h3 class="title">projet 5</h3>
                                <img src="http://localhost:8080/5w5/wp-content/uploads/2023/10/LogoTIM-1.png" alt="">

                                <p id="projText5" class="texteProjet5 ">
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