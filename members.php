<?php
include 'mysql/mydb.php';
include 'functions.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("refresh: 3; index.php");
    echo "Du skal være logget ind for at se denne side";
    exit; // Again, make sure that parsing of the script stops
}

$user = get_user_details(); // Fetches the information from the database

echo "Velkommen " . $user['firstname'] . ", du er nu logget ind på member siden<br>";


// RSS feeden hentes. Gemmes som obejct i $feed
$feed = simplexml_load_file('http://ekstrabladet.dk/rss2/?mode=normal&submode=flash');

for($i = 0; $i < 3; $i++) {
    $item = $feed->channel->item[$i];
    print utf8_decode("<a href='{$item->link}'>{$item->title}</a><br/>");
    print utf8_decode("<i>{$item->pubDate} </i><br/>");
    print utf8_decode("{$item->description} <br/><br/>");

}