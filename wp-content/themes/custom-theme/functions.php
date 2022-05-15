<?php 

function enqueue_app() {
    wp_enqueue_style("app", get_stylesheet_directory_uri() . "/dist/app.css");
    wp_enqueue_script("app", get_stylesheet_directory_uri() . "/dist/app.js");
}

add_action("wp_enqueue_scripts", "enqueue_app");

?>