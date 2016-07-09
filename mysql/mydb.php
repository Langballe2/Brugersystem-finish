<?php
$conn = new mysqli("kuppet.dk.mysql", "kuppet_dk", "jensen11", "kuppet_dk");

if( $mysqli->connect_error )
{
    echo $mysqli->connect_error;
    exit;
}
?>