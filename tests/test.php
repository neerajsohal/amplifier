<?php 

require_once "bootstrap.php";

if(count($argv) != 3) {
	echo "USAGE: php test.php <app_id> <secret>\n\r";
	return false;
}

$app_id = $argv[1];
$secret = $argv[2];

$a = new Amplifier\Amplifier(array('appId' => $app_id, 'secret' => $secret));
