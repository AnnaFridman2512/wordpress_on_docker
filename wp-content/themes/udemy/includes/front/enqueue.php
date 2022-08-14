<?php

function u_enqueue(){
    wp_register_style(
        'u_font_rubik_and_pacifico',
        'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap',
        [],
        null//added to tell wordpress not to add the version of it to the url link, so the font wwill load correctly
    );
    wp_register_style(
        'u_bootstrap_icons',
        //This function will return valid url
        get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css')
    );
    wp_register_style(
        'u_theme',
        get_theme_file_uri('assets/public/index.css')
    );

    wp_enqueue_style('u_font_rubik_and_pacifico');
    wp_enqueue_style('u_bootstrap_icons');
    wp_enqueue_style('u_theme');
}