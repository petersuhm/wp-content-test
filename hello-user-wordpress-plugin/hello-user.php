<?php

/**
 * Plugin Name: Hello User
 * Author: WP Pusher
 * Version: 1.0.21
 */

add_filter( "wp_loaded", "checkForGreeting" );

function checkForGreeting()
{
    if (isset($_GET['hello'])) {

        echo "Hello " . $_GET['hello'] . "!";
        die();

    }
}
