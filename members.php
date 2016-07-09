<?php
session_start();
    if (isset($_SESSION['user']) && $_SESSION['user']) {
        echo "Velkommen " . $_SESSION['user'] . ", du er nu logget ind på member siden<br>";

		
  // RSS feeden hentes. Gemmes som obejct i $feed
  $feed = simplexml_load_file('http://ekstrabladet.dk/rss2/?mode=normal&submode=flash');
			
  //Taeller til at begrænse antallet af nyheder
  $taeller  = 0;
  $antal = 3;

  //alt køres igennem utf8_decode() Der returner  ISO-8859-1
  foreach($feed->channel->item as $item){
      while($taeller<$antal){
         print utf8_decode("<a href='{$item->link}'>{$item->title}</a><br/>");
         print utf8_decode("<i>{$item->pubDate} </i><br/>");
         print utf8_decode("{$item->description} <br/><br/>");
         break;
         }
      $taeller ++;
      }  

    } else {
        header("refresh: 3; index.php");
        echo "Du skal være logget ind for at se denne side";
    }

?>