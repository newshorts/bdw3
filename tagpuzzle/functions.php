<?php
	
class Scan {

	/****
	* Records scan and updates tag total scans if new tag-device combo
	****/
	function record_scan ($tag, $device, $test=false) {
		
		//connect to database with PDO
		try {
		$dbh = new PDO('mysql:dbname=bdw3_tagpuzzle;host=localhost', 'bdw3_josh', 'popcorn');
		} catch (PDOException $e) {
		echo 'Connection failed: ' . $e->getMessage();
		}
		
		//if there is no tag or no device, just return the connection
		if (!$tag or !$device) {
			return $dbh;
		}
		
		//check if new tag-device combo
		$check = $dbh->prepare("SELECT tag_id, device_id FROM scans WHERE tag_id = ? AND device_id = ?");
		$check->execute(array($tag, $device));
		$check_result = $check->fetchAll();
		
		//if new tag-device combo, update scans
		if (!$check_result) {
			$update = $dbh->prepare("UPDATE tags SET scans = scans + 1 WHERE id = ?");
			$update->execute(array($tag));
		}
		
		//insert scan into database
		$record = $dbh->prepare("INSERT INTO scans (tag_id, device_id) VALUES (?, ?)");
		$record->execute(array($tag, $device));
		
		//display results if $test is TRUE
		if ($test) {
			?>
			Tag ID = <?php echo $tag; ?><br>
			Device ID = <?php echo $device; ?><br>
			Connection: <?php print_r($dbh); ?><br>
			SELECT result: <?php print_r($check_result); ?>
		<?php
			
			
		}//end test
	
		return $dbh;
	}//end record_scan

}

function show_stats ($dbh) {
	$stats = $dbh->prepare("SELECT name, scans FROM tags");
	$stats->execute();
	$tags = $stats->fetchAll();

	foreach ($tags as $tag) {
		?>
		<p><?php echo $tag['name'];?>: <?php echo $tag['scans']; ?></p>
		<?php
	}
}