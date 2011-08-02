<?php

/*
 * Grab tweets from tweets/ and get the last six seconds - if there's a file,
 * the hop in and return the json, just as it it...The rest I can do once its
 * safely in javsacript
 */
header("Content-type:application/json");

$current_time = time();

//echo $current_time;

$path = 'tweets/';

if ($handle = opendir($path)) {
    
    $file_arr = array();
    $output_files = array();
    $output_content = array();
    
    /* This is the correct way to loop over the directory. */
    while (false !== ($file = readdir($handle))) {
//        echo "$file\n";
        // place all files in an array
        
        $file_arr[] = $file;
    }

    closedir($handle);
    
    if(!empty($file_arr)) {
        
        // loop through file list and return past files within a certain time
        foreach($file_arr as $file_name) {
            
            $file_time = stristr($file_name, '_', true);
            
            if($file_time > ($current_time - 9999)) {
                
                if(strpos($file_name, "tweeted") === false){
                    
                    $output_files[] = $file_name;
                    
                }
                
            }
            
        }
        
    }
    
    if(!empty($output_files)) {
        
        foreach($output_files as $output_file) {
            
            $contents = file_get_contents($path . $output_file);
            
//            unlink($path . $output_file);
            
            rename($path . $output_file, $path . $output_file . ".tweeted");
            
            $contents = json_decode($contents);
            
            array_push($output_content, $contents);
            
        }
        
        print json_encode($output_content);
        
    }
        
}

?>