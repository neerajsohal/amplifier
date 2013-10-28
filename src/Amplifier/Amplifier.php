<?php

namespace Amplifier;

/* 
 * Amplifier - Extension of Facebook PHP SDK
 * @author Neeraj Kumar <hello@neerajkumar.name>
 */

class Amplifier extends \Facebook {

	function __construct($config = array()) {
		parent::__construct($config);
	}

	public function has_liked_page($page_id = null) {
		
		if(is_null($page_id)) {
			return false;
		}
		
		if ($this->getUser()) {
			try {
				$likes = $this->api("/me/likes/".$page_id);
				if( !empty($likes['data']) )
					return true;
				else
					return false;
			} catch (\FacebookApiException $e) {
				error_log($e);
			}
		}
		
	}
	
    public static function index() {

        return "Hello Composer!";

    }

}