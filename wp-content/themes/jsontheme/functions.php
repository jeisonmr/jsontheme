<?php
function enqueue_vite_assets() {
    // Cambia el puerto si tu servidor de Vite usa otro (por defecto es 5173)
    $vite_server = 'http://localhost:5173';
    $theme_dir = get_template_directory_uri();

    if (defined('WP_DEBUG') && WP_DEBUG) {
        // En desarrollo, usa el servidor de Vite
        wp_enqueue_script('vite-main-js', $vite_server . '/js/main.js', [], null, true);
        wp_enqueue_style('vite-main-css', $vite_server . '/css/style.css', [], null);
    } else {
        // En producción, usa los archivos generados en /dist
        wp_enqueue_script('vite-main-js', $theme_dir . '/dist/js/main.js', [], null, true);
        wp_enqueue_style('vite-main-css', $theme_dir . '/dist/css/style.css', [], null);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_vite_assets');
