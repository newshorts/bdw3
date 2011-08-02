<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Grab tweets and do something useful with the data</title>
		<link rel="stylesheet" href="" type="text/css" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	</head>
	<body>
		<div id="wrap">
			<nav>
    
    <div id="home-nav" role="navigation" class="hidden"><a href="#home"></a></div>
    	
    <ul role="menu">

            <li role="menuitem" class="charlotte left " data-screen-name="charusse">

                <a href="#charlotte" >
                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="fouhy left " data-screen-name="fouhy">
                <a href="#fouhy" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="laura left " data-screen-name="laurahamrick">
                <a href="#laura" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="pedro left " data-screen-name="pedrosorren">
                <a href="#pedro" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="josh left " data-screen-name="kadisco">
                <a href="#josh" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="max left " data-screen-name="MxMnr">
                <a href="#max" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="megan right " data-screen-name="megannewt">
                <a href="#megan" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="patrick right " data-screen-name="pkander">
                <a href="#patrick" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="jon right " data-screen-name="JonisDelicious">
                <a href="#jon" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="lauren right" data-screen-name="loparks">
                <a href="#lauren" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="rj right" data-screen-name="rjduranjr">
                <a href="#rj" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="mike right" data-screen-name="newshorts">
                <a href="#mike" >

                    <div class="hover"></div>
                </a>
            </li>
    </ul>
</nav> <!--#header-->
		</div>
	</body>
	
	<script type="text/javascript">
		$(window).load(function() {
			setTimeout(function() {
				// call server and get tweets
				$.getJSON("get_tweets.php", function(json) {
                                    
                                    if(json === undefined) {
                                        
                                        console.log("json undefined");
                                    }
        
                                    if(json.error_code) {
                                        
                                        console.debug("json error code: " + json.error_code);
                                        
                                    }
                                    
                                    if(json.length != null) {
                                        
                                        $(json).each(function(index, tweet) {
                                            
                                           if(tweet.text === undefined) { 
                                                
                                                console.debug("No tweet text available: " + tweet.text);
                                                
                                           } else {
                                           
                                                $('li').each(function(index, element) {

                                                    elem = $(element);

                                                    if(tweet.user.screen_name == elem.data("screen-name")) {

                                                        console.dir(elem);

                                                        console.dir(tweet);

                                                        elem.html("Tweet: " + tweet.text + " author: " + tweet.user.screen_name);

                                                    }
                                                });

                                                console.debug('Tweet: ' + tweet + " tweet: " + tweet.text + " screen Name: " + tweet.user.screen_name);
                                                
                                           }
                                            
                                        });
                                        
                                    }
				});
			}, 5000);
		});
	</script>
</html>