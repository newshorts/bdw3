<?php
require_once('../lib/Phirehose.php');
/**
 * NOTE: THIS WORKS.
 * 
 * newshorts - 189069893
 * kadisco - 14923310
 * charusse - 298717298
 * laurahamrick - 63525170
 * megannewt - 191618689
 * loparks - 27108506
 * pedrosorren - 15085420
 * JonisDelicious - 14859090
 * MxMnr - 148559999
 * pkander - 19356301
 * fouhy - 21313187
 * rjduranjr - 238438353
 * 
 * INSTRUCTIONS:
 * 
 * Enqueue is only for spitting data, each tweet gets written to a new file.
 * When a user enters the site, the javascript calls another process.php file.
 * It searches through the direcory looking for tweets in the last 5 seconds. If
 * it can't find any it returns null, otherwise it returns the tweet text and 
 * screen_name. If there is more than one it returns a json encoded array of 
 * both. Then there is a cron job running every minute that cleans out the 
 * directory for everything more than 10 seconds ago. This keeps the directory
 * small.
 * 
 */
class SampleConsumer extends Phirehose
{
    
    public $tweetCounter;
    
  /**
   * Enqueue each status
   *
   * @param string $status
   */
  public function enqueueStatus($status)
  {
    /*
     * In this simple example, we will just display to STDOUT rather than enqueue.
     * NOTE: You should NOT be processing tweets at this point in a real application, instead they should be being
     *       enqueued and processed asyncronously from the collection process. 
     */
//    $data = json_decode($status, true);

//    print_r($data);
      
      $this->tweetCounter ++;
      $filePath = 'tweets/' . time() . '_' . $this->tweetCounter . '.tweet';
      file_put_contents($filePath, $status);
  }
}

// Start streaming
$sc = new SampleConsumer('username', 'password', Phirehose::METHOD_FILTER);

/*
 * find out here: http://www.idfromuser.com/
 * 
 * example 1: 302605902 nyandarguard, 284899423 Eidsin, 189069893 newshorts
 */

// miketoilet - 30545501

// newshorts - 189069893

$users = array("30545501", "14923310", "298717298", "63525170", "191618689", "27108506", "15085420", "14859090", "148559999", "19356301", "21313187", "238438353");

$sc->setFollow($users);

$sc->consume();