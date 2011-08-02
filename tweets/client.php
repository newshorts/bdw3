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
			
		</div>
	</body>
	
	<script type="text/javascript">
		$(window).load(function() {
			setInterval(function() {
				// call server and get tweets
				$.getJSON("get_tweets.php", function(json) {
        
                                        console.dir(json);
				
				});
			}, 5000);
		});
	</script>
</html>