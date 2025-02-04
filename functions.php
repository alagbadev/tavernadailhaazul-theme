 <?php 
 function tavernailhaazul_enqueue_assets(){
    wp_enqueue_style(
        'tavernailhaazul-style',
        get_stylesheet_directory_uri() . '/assets/css/style.css',
        array(),
        null,
        'all'
    );


    wp_enqueue_script(
        'tavernailhaazul-script',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array('jquery'),
        null,
        true
    );





 }