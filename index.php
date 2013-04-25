<?php

require_once(dirname(__FILE__).'/twitterapiwrapper/twitterapi.php');


$token = '';
$token_secret = '';
$consumer_key = '';
$consumer_secret = '';

$api1 = new TwitterAPI($token, $token_secret, $consumer_key, $consumer_secret);


//=use twitter 1.0 api ( 1.1 with oauth is default )
$api1->set_path('/1.1/statuses/user_timeline.json');
$query = array( // query parameters
    'screen_name' => 'twitterapi',
    'count' => '1'
);
$data = $api1->do_query($query);

print_r($data);