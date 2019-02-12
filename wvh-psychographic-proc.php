<?php
/*
    Plugin Name: Wellview Psychographic Processor
    Plugin URI:  https://wellviewhealth.com
    Description: A plugin to display a simple 12 question form and process psychographic results through C2B.
    Version:     0.1
    Author:      Shane Edwards
    Author URI:  https://wellviewhealth.com
*/

/*Use this function to replace a single word*/
function renym_wordpress_typo_fix( $text ) {
    return str_replace( 'wordpress', 'WordPress', $text );
}
//add_filter( 'the_content', 'renym_wordpress_typo_fix' );

/*Or use this function to replace multiple words or phrases at once*/
function renym_content_replace( $content ) {
    $search  = array( 'wordpress', 'goat', 'Easter', '70', 'sensational' );
    $replace = array( 'WordPress', 'coffee', 'Easter holidays', 'seventy', 'extraordinary' );
    return str_replace( $search, $replace, $content );
}
//add_filter( 'the_content', 'renym_content_replace' );

/*Use this function to add a note at the end of your content*/
function renym_content_footer_note( $content ) {
    $content .= '<footer class="renym-content-footer">Thank you for reading this tutorial. Maybe next time I will let you buy me a coffee! For more WordPress tutorials visit our <a href="http://wpexplorer.com/blog" title="WPExplorer Blog">Blog</a></footer>';
    return $content;
}
//add_filter( 'the_content', 'renym_content_footer_note' );


function wvh_shortcodes_init()
{
    function showpsychographic_shortcode($atts = [], $content = null)
    {
        $plugin_dir_path = dirname(__FILE__);

        $content = file_get_contents($plugin_dir_path . "/includes/survey.html");

        return $content;
    }
    add_shortcode('wvh-psychographic-survey', 'showpsychographic_shortcode');
}
add_action('init', 'wvh_shortcodes_init');

add_action( 'wp_enqueue_scripts', 'enqueue_jquery' );

function enqueue_jquery() {
   wp_enqueue_script('jquery-ui-dialog', array(jquery), '1.0.0', true);
}
