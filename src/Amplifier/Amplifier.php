<?php

namespace Amplifier;

use Facebook;

class Amplifier extends Facebook {

	function __construct($config = array()) {
		parent::__construct($config);
	}

    public static function index() {

        return "Hello Composer!";

    }

}