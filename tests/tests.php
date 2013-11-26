<?php 

namespace AmplifierTests;

require_once "bootstrap.php";

class AmplifierTestCase extends \PHPUnit_Framework_TestCase
{
	function testRequirements() {
		global $config;
		$this->assertCount(4, $config);
		return $config;
	}
	
	function testInit() {
		global $config;
		$a = new \Amplifier\Amplifier(array('appId' => $config['app_id'], 'secret' => $config['secret']));
		$this->assertObjectHasAttribute('appId', $a);
		$this->assertObjectHasAttribute('appSecret', $a);
	}
	
	function testHasLikePage() {
		global $config;
		$a = new \Amplifier\Amplifier(array('appId' => $config['app_id'], 'secret' => $config['secret']));
		$this->assertInternalType('boolean', $a->hasLikedPage($config['test_page_id']));
	}
}
