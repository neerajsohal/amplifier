<?php

namespace Amplifier;

/** 
 * Amplifier - Extension of Facebook PHP SDK
 * 
 * @author Neeraj Kumar <hello@neerajkumar.name>
 * @package Amplifier
 * 
 */

class Amplifier extends \Facebook {

	function __construct($config = array()) {
		parent::__construct($config);
	}

	/**
	 * hasLikedPage - returns weather a user has like a page or not
	 * 
	 * @param $page_id
	 * @return boolean
	 * 
	 */
	public function hasLikedPage($page_id = null) {
		
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
		
		return false; /* failsafe? :/ */
		
	}
	
}