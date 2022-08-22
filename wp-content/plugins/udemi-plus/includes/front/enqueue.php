

<?php

function up_enqueue_scripts(){
    $authURLs = json_encode([
        'signup' => esc_url_raw(rest_url('up/v1/signup')),
        'signin' => esc_url_raw(rest_url('up/v1/sigin'))
    ]);

    wp_add_inline_script(
        'udemi-plus-auth-modal-script', +
        "const up_auth_rest = {$authURLs}",
        'before' 
    );
}