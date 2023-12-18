<?php

/*
    Plugin name: Afficher-Projet
    Author: Lada Starodubtseva
    Plugin url:https://github.com/Lada-Starodubtseva/Projets-plugin
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
 
    wp_enqueue_style(   'em_plugin_Projet_css',
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
    
    <section class="site_projets" id="site_avec_projets">
        <h2 class="titleProjets">PROJETS DES ÉLÈVES</h2>
        <div class="cont-proj">
            <div class="premier-container-projet">
                <div class="cont-projet"  disbaleZindex" id="cont-projet"></div>
            </div>

        </div>
    </section>
    ';
    return $contenu;
}
 
add_shortcode('em_Projet', 'creation_Projet');

?>
