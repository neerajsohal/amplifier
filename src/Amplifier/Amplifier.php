<?php

namespace Amplifier;

/* 
 * Amplifier - Extension of Facebook PHP SDK
 * @author Neeraj Kumar <hello@neerajkumar.name>
 */

class Amplifier extends Facebook {

	function __construct($config = array()) {
		parent::__construct($config);
	}

    public static function index() {

        return "Hello Composer!";

    }

}