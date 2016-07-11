<?php


// Wrapping database connection into a simple helper function
function dbcon()
{
    static $conn; // Makes sure that the function can be used in a static way without reconnecting for every use

    if (is_null($conn)) {
        $conn = new mysqli("kuppet.dk.mysql", "kuppet_dk", "jensen11", "kuppet_dk");

        if ($mysqli->connect_error) {
            echo $mysqli->connect_error;
            exit;
        }
    }

    return $conn;
}