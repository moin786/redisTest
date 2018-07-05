<?php
require "vendor/autoload.php";
try {
	$redis = new Predis\Client();

                //Connection local server
	
		$setRedisClient = new Predis\Client(array(
		    "scheme" => "tcp",
		    "host" => "127.0.0.1",
		    "port" => 6379
		));
                
                // sets message for containing 'Hello World'
                $setRedisClient->set('msg', 'Hello World');

                // get the value of msg
                $getMsg = $setRedisClient->get('msg');

                echo ($redis->exists('msg')) ? "Value is ".$getMsg : "please set the msg key";
	
}
catch (Exception $e) {
	die($e->getMessage());
}
