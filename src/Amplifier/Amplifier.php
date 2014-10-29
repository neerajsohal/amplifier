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
	 * @author Neeraj Kumar <hello@neerajkumar.name>
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

	/**
	 * uploadImage - uploads an image to user's profile
	 * 
	 * @param $image_path
	 * @param $description
	 * @return String
	 * 
	 */
	public function uploadImage($image_path = null, $description = null) {
		
		if(is_null($image_path)) {
			return false;
		}

		if ($this->getUser()) {
			
			$args = array();
			/* php version check 5.5 dont play well */
			$args['message'] = $description;
			if(PHP_MAJOR_VERSION == 5 && PHP_MINOR_VERSION == 5) {
				$args['source'] = new \CURLFile($image_path);
			} else {
				$args['source'] = '@' . $image_path;
			}


			try {
				$result = $this->api (
					'/me/photos', 
					'POST',
					$args
				);
				return $result;
			} catch (\FacebookApiException $e) {
				error_log($e);
			}
		}
		
		return false; /* failsafe? :/ */
		
	}

	/**
	 * getFriends - returns an array of friends if successful or false if failed
	 * 
	 * @return Mixed
	 * 
	 */
	public function getFriends() {
		if ($this->getUser()) {
			try {
				$friends = $this->api("/me/friends/");
				if( !empty($friends['data']) )
					return $friends['data'];
				else
					return false;
			} catch (\FacebookApiException $e) {
				error_log($e);
				return false;
			}
		}
		
	}
	
}