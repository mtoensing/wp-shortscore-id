<?php

/*
  Plugin Name: SHORTSCORE Show ID
  Plugin URI: http://www.shortscore.org
  Description: Display shortscore ID in comment section
  Version: 0.9
  Author: MarcDK
  Author URI: http://www.marc.tv
  GitHub Plugin URI: mtoensing/wp-shortscore-id
  License: GPL2
 */

function add_shortscore_id_scripts()
{
    if (is_user_logged_in()) {
        wp_enqueue_script(
            "jquery.shortscoreid.js", WP_PLUGIN_URL . "/wp-shortscore-id/jquery.shortscore_id.js", array("jquery"), "0.9", true);
    }
}

add_action('wp_print_styles', 'add_shortscore_id_scripts');

?>
