<?php

namespace Amplifier;

use Amplifier\Providers\Instagram;
use Amplifier\Providers\Twitter;
use Amplifier\Providers\Facebook;

class Amplifier {

	function __construct($config) {
		$this->config = $config;
	}

	public function facebook() {
		return new Facebook($this->config['facebook']);
	}

	public function instagram() {
		return new Instagram($this->config['instagram']);
	}

	public function twitter() {
		return new Twitter($this->config['twitter']);
	}

}