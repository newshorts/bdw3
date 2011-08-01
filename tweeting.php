<?php

/*
 * To test the tweeting capabilities of twittering people on the site
 */


?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>tweeting</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	</head>
	<body>
		<div id="wrap">
			
		</div>
	</body>
        <script type="text/javascript">
            /*
             * http://twitter.com/statuses/user_timeline/newshorts.json?callback=twitterCallback2&count=1
             */
            
            (function($) {
                var tweets = function () {
                    
                    var url = "http://twitter.com/statuses/user_timeline/newshorts.json?callback=twitterCallback2&count=1";
                    
                    $.get(url,function (response) {
                        condole.dir(response);
                    });
                    
                };
                
                setInterval("tweets()", 10000);
            })(jQuery)
        </script>
</html>