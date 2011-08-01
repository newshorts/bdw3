<?php

/*
 * http://twitter.com/statuses/user_timeline/newshorts.json?callback=twitterCallback2&count=1
 */

// curl get the data and return it -  simple enough

if(!empty($_GET['user'])) {
    
    // get the contents of the file
    
    $tweet = file_get_contents("http://twitter.com/statuses/user_timeline/newshorts.json?count=1");
    
//    $tweet = json_decode($tweet);
//    
//    $tweet = json_encode($tweet);
    
    header('Content-Type: text/javascript');
    
    echo $tweet;
}
?>
