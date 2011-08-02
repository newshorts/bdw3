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

            <li role="menuitem" class="charlotte left " data-charusse="charusse">

                <a href="#charlotte" >
                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="fouhy left " data-fouhy="fouhy">
                <a href="#fouhy" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="laura left " data-laurahamrick="laurahamrick">
                <a href="#laura" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="pedro left " data-pedrosorren="pedrosorren">
                <a href="#pedro" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="josh left " data-kadisco="kadisco">
                <a href="#josh" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="max left " data-MxMnr="MxMnr">
                <a href="#max" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="megan right " data-megannewt="megannewt">
                <a href="#megan" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="patrick right " data-pkander="pkander">
                <a href="#patrick" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="jon right " data-JonisDelicious="JonisDelicious">
                <a href="#jon" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="lauren right" data-loparks="loparks">
                <a href="#lauren" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="rj right" data-rjduranjr="rjduranjr">
                <a href="#rj" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="mike right" data-newshorts="newshorts">
                <a href="#mike" >

                    <div class="hover"></div>
                </a>
            </li>
    </ul>
</nav> <!--#header-->

		</div>
	</body>
	<script type="text/javascript" src="../scripts/app.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
                    
//                    Tweet = function (username, text) {
//                        console.debug(username + " text: " + text);
//                        var elems = $('nav li');
//                        var posLeft;
//                        
//                        console.dir(elems);
//                        
//                        elems.each(function(index, val) {
//                            console.dir(val);
//                            if($(val).data(username)) {
//                                posLeft = val.offsetLeft;
//                            }
//                        });
//                        
//                        $('nav').append('<div style="position: absolute; left: '+posLeft+';"><a>'+text+'</a></div>');
//                    };
                    
                    setTimeout(function () {
                        
                        $.getJSON("get_tweets.php", function(json) {
                            if(json === undefined) {
                                        
                                console.log("json undefined: " + json);
                            }
                            
                            $(json).each(function(index, tweet) {
                                if(tweet.content.text != undefined && tweet.content.user.screen_name != undefined) {
//                                    console.debug(tweet.content.user.screen_name + " " + tweet.content.text);
                                    new Tweet(tweet.content.user.screen_name, tweet.content.text);
                                } else {
//                                    console.dir(json);
                                }
                            });
                        })
                        
                    }, 5000);
		}); // window
	</script>
</html>