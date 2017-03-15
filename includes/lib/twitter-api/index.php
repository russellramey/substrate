<?php
$baseURL = $_SERVER["DOCUMENT_ROOT"] . '/path/to/twitter-api';
$twitter_cache = $baseURL . 'twitter_result.json';
$twitter_expire = time() - 10 * 60;
if (file_exists($twitter_cache) && filemtime($twitter_cache) > $twitter_expire) {

    $string = unserialize(file_get_contents($twitter_cache));

} else {
    $using_cache = '';
    // Include API
    require_once('TwitterAPIExchange.php');

    // Access tokens / OAuth
    $settings = array(
        'oauth_access_token' => "ACCESS-TOKEN-HERE",
        'oauth_access_token_secret' => "ACCESS-TOKEN-SECRET-HERE",
        'consumer_key' => "CUSTOMER-KEY-HERE",
        'consumer_secret' => "CUSTOMER-SECRET-HERE"
    );

    // Build API Call
    $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
    $requestMethod = "GET";
    $getfield = '?screen_name=USERNAMEHERE&count=1&include_rts=false&exclude_replies=true';
    $twitter = new TwitterAPIExchange($settings);
    $string = json_decode($twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest(),$assoc = TRUE);

    // Show errors in API
    //if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}

    // Save/Create cache file
    file_put_contents($twitter_cache, serialize($string));
}


// Build tweet from json
foreach($string as $items) {
    $tweet = $items['text'];
    //$tweet_id = $items['id'];
    $tweet_url = $items['entities']['urls'][0]['url'];
    $tweet = substr($tweet, 0, strpos($tweet, "https://"));
    $tweet = preg_replace("/#(\w+)/i", " <a href=\"http://twitter.com/hashtag/$1\" target=\"_blank\">$0</a>", $tweet);
    $tweet = preg_replace("/@(\w+)/i", " <a href=\"http://twitter.com/$1\" target=\"_blank\">$0</a>", $tweet);
    echo $tweet;
    if($tweet_url){
        echo ' <a href="' . $tweet_url . '" target="_blank">' . $tweet_url . '</a>';
    }
}

// Print full response
//echo "<pre>";
//print_r($string);
//echo "</pre>";
?>
