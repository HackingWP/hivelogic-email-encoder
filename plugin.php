<?php
/**
 * Plugin Name: Hivelogic Email Encoder
 * Plugin URI:  http://github.com/HackingWP/hivelogic-email-encoder
 * Description: Encodes every email
 * Version:     v.0.1.0
 * Author:      Martin Adamko
 * Author URI:  http://twitter.com/martin_adamko
 * License:     MIT
 */

if (! class_exists('StandalonePHPEnkoder')) {
    require_once 'vendor/jnicol/standalone-phpenkoder/StandalonePHPEnkoder.php';
}

function str_hivelogic_email_encoder($the_content) {
    static $hivelogic_encoder = null;

    if ($hivelogic_encoder===null) {
        $hivelogic_encoder = new StandalonePHPEnkoder();
    }

    return $hivelogic_encoder->enkodeAllEmails($the_content);
}

add_filter('the_content', 'str_hivelogic_email_encoder', 10, 1);
