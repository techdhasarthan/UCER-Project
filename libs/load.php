<?php

include_once "includes/Database.class.php";

global $__site_config;
$__site_config = "../ucerconfig.json";

function load_template($filename){
    include $_SERVER['DOCUMENT_ROOT'] . "/first/ucer/_templates/$filename.php";
}

function get_config($key, $default = null)
{
    global $__site_config;
    // Read the content of the file
    $json_content = file_get_contents($__site_config);

    // Decode the JSON data
    $array = json_decode($json_content, true);

    if (isset($array[$key])) {
        return $array[$key];
    } else {
        // Debugging: Print the key that was not found
        echo "Key '$key' not found in config.\n";

        return $default;
    }
}

