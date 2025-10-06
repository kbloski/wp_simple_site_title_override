<?php
/**
 * Plugin Name: Simple Site Title Override
 * Plugin URI:  https://example.com/
 * Description: Nadpisuje tytuł dokumentu w WordPressie tak, aby zawsze wyświetlała się tylko nazwa witryny.
 * Version:     1.0.0
 * Author:      Twoje Imię
 * Author URI:  https://example.com/
 * License:     GPL2
 * Text Domain: simple-site-title-override
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Zapobiega bezpośredniemu uruchomieniu
}

add_filter( 'pre_get_document_title', function( $title ) {
    $site_name = get_bloginfo( 'name' );
    return $site_name;
}, 100 );
