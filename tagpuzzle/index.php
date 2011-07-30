<?php

require('functions.php');

$scan = new Scan;
$conn = $scan->record_scan($_GET['t'], $_GET['d']);

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="" media="all" />
	</head>
	<body>
		<?php show_stats($conn); ?>

	</body>
</html>
