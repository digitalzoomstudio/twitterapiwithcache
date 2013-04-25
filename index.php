<?php

require_once(dirname(__FILE__).'/twitterapiwrapper/twitterapi.php');


$token = '';
$token_secret = '';
$consumer_key = '';
$consumer_secret = '';

$api1 = new TwitterAPI($token, $token_secret, $consumer_key, $consumer_secret);


$query = array( // query parameters
    'screen_name' => 'twitterapi',
    'count' => '2'
);

$data = $api1->do_query($query);

print_r($data);