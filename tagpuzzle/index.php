<?php

require('functions.php');

$scan = new Scan;
$conn = $scan->record_scan($_GET['t'], $_GET['d']);

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tag Puzzles</title>
		<meta name = ÒviewportÓ content = Òuser-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-widthÓ>
		<link rel="stylesheet" type="text/css" href="style.css" media="all" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script type="text/javascript">
			(function(){
				
				function Puzzles () {
					
					//setup constants
					var targetScore = 6;
					
					
					//setup variables for puzzle column
					var puzzleBase = $(".puzzle");
					var puzzleWidth = puzzleBase.width();
					var progressHeight = puzzleBase.height() - puzzleWidth;
					var progress = $("div.progress");
					targetScore = targetScore + 1; //IMPORTANT - see below
					
					
					//set font size
					$("section.puzzle p").css("font-size", (puzzleWidth*.5)+"px");
					
					//set progress border radius
					$(progress).css("border-top-left-radius",puzzleWidth/2).css("border-top-right-radius",puzzleWidth/2);
					
					//set result heights
					$("div.result").css("height",puzzleWidth+"px");
					
					//set progress heights
					progress.each(function(){
						
						//get score for each column
						var score = $(this).data("score")
						tagId = this.firstElementChild.innerHTML;
						
						//set alt styles
						var altArray = new Array("1", "3", "5", "7", "9");
						if (altArray.indexOf(tagId) != -1) {
							$(this).parent().addClass("alt")
						}

						
						
						//make sure column is visible when score is 0
						//by having the scale as 1->(targetScore+1)
						//instead of 0->targetScore
						score = score + 1;
						
						//when a tag reaches the targetScore
						if (score >= targetScore) {
							$(this).children(":first").hide();
							this.previousElementSibling.firstElementChild.innerHTML = tagId;
							$(this).css("border-top-left-radius",0).css("border-top-right-radius",0);						
							score = targetScore
						};
						
						//set as % of targetScore
						score = score/targetScore;
						
						//setup relative height of column
						var columnHeight = Math.floor(score * progressHeight);
						var	columnMarginTop = progressHeight - columnHeight;
						
						$(this).css("height", columnHeight).css("margin-top",columnMarginTop);
					}); // end set progress heights
				}; //end Puzzles()
				

				window.onload = Puzzles;
				window.onresize = Puzzles;
			
			})()
		</script>
	</head>
	<body>
		<?php show_stats($conn); ?>		
	</body>
</html>
