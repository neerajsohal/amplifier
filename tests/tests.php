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
		$a->setAccessToken($config['access_token']);
		//$this->assertInternalType('boolean', $a->hasLikedPage($config['test_page_id']));
		/* use this when you are sure the users with creds in config have actually like the page */
		$this->assertTrue($a->hasLikedPage($config['test_page_id']));
	}
	
	function testUploadImage() {
		global $config;
		$a = new \Amplifier\Amplifier(array('appId' => $config['app_id'], 'secret' => $config['secret']));
		$a->setAccessToken($config['access_token']);
		$a->setFileUploadSupport(true);
		$this->assertArrayHasKey('id', $a->uploadImage(__DIR__ . '/img/350x150.gif', 'Test Description'));
	}
}
