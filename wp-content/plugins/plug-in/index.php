<?php
/*
* Plugin Name: Welcoming Plugin
* Plugin URI: http://localhost/scoryscaping
* Description: This is a greeting message plugin for the firm repot. The plugin is based on HTML5, CSS, JS and PHP
* Version: 0.1.7
* Author: Sisse Hauskov, Emma Weilling, Christian Sander & Jacob Tang
* Author URI: http://localhost/scoryscaping
* License: GPL2
*/

function greetings_form()
{
    $content = '';
    $content .= '<div class="container">';
    $content .= '<img class="close-button" src="img/times-solid.svg" alt="close button">';
    $content .= '<section>';
    $content .= '<h3 id="plugin-overskrift">Sammen kan vi mere!</h3>';
    $content .= '<img id="plugin-repot" src=" '.plugins_url("plug-in/img/forside-plante.gif").' " ';
    $content .= 'alt="Det her er en gif af repot planten.">';
  	$content .= '<h5 id="plugin-underskrift">Tak fordi du bidrager til en grønnere fremtid. </h5>';
  	$content .= '</section>';
    
  	$content .= '<div>';
 	$content .= '<button class="laes-mere-button">Læs om pottens rejse!</button>';
    $content .= '</div>';
  	$content .= '</div>';
    return $content;
}
    
    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:400,500,800&display=swap');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('plug-in/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('plug-in/js/script.js'), array('jquery'), null, true);
    }
    
    
    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('welcoming_plugin','greetings_form');
    
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');