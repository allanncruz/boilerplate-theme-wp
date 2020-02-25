<?php
flush_rewrite_rules (false);
// Theme support
require dirname(__FILE__) .  '/functions/theme_setup.php';

// Hide admin_bar
add_filter( 'show_admin_bar' , 'my_function_admin_bar');
    function my_function_admin_bar(){
        return false;
    }


// Custom login logo
require dirname(__FILE__) .  '/functions/custom_login_logo.php';

// Urls scripts
require dirname(__FILE__) .  '/functions/theme_scripts.php';

// Post types
require dirname(__FILE__) .  '/functions/post_types/vitrine_post_type.php';
require dirname(__FILE__) .  '/functions/post_types/testimony_post_type.php';
require dirname(__FILE__) .  '/functions/post_types/blog_post_type.php';

// ACF 
require dirname(__FILE__) .  '/functions/acf_fields.php';

// Settings
require dirname(__FILE__) . '/functions/settings/contact_informations_settings.php';
