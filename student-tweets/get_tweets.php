<?php

/*
 * Grab tweets from tweets/ and get the last six seconds - if there's a file,
 * the hop in and return the json, just as it it...The rest I can do once its
 * safely in javsacript
 */
header("Content-type:application/json");

$current_time = time();

$path = 'tweets/';




if ($handle = opendir($path)) {
    
    $output_files = array();
    $file_arr = array();

    /* This is the correct way to loop over the directory. */
    while (false !== ($file = readdir($handle))) {
        
        if($file == "." || $file == "..") {
            continue;
        }
        
        if(strpos($file, "tweeted") != false) {
            continue;
        }
        
        $file_arr[] = $file;
        
    } // end while

    closedir($handle);
    unset($handle);
    unset($file);
    
    if(!empty($file_arr)) {
        foreach($file_arr as $file) {
        
            $content = file_get_contents($path . $file);

            $file_time = preg_replace('#_[0-9]\.tweet#', '', $file);

            $output_files[] = array('file_name' => $file, 
                                    'content' => json_decode($content, true), 
                                    'current_time' => $current_time, 
                                    'file_time' => $file_time);

            rename($path . $file, $path . $file . ".tweeted");

        } // end foreach

        print (!empty($output_files)) ? json_encode($output_files) : json_encode("No Files");
    } else {
        die("No new tweets");
    }
    
} else {
    die("Unable to find directory listing.");
}

?>