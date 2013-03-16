<?php

/**
 * @package califica-online
 * @subpackage controller
 * @author Michelle Torres <lic.nancy.torres@gmail.com>
 * @version 1.0
 */


abstract class StdCtl{
	
	/**
	 * @param string $value
	 * @return string The sanitized email
	 */
	function sanitize_email($value){
		
	}

	/**
	 * @param string $value
	 * @return string The sanitized text
	 */	
	function sanitize_text($value){
		
	}

	/**
	 * @param string $value
	 * @return string The sanitized number
	 */
	function sanitize_number($value){
		
	}
	
	/**
	 * @param string $value
	 * @return string The sanitized url
	 */
	function sanitize_url($value){
		
	}
	
	/**
	 * @param string $value
	 * @return booelan
	 */
	function validate_email($value){
		
	}
	
	/**
	 * @param string $value
	 * @return booelan
	 */
	function validate_text($value){
		
	}
	
	/**
	 * @param string $value
	 * @return booelan
	 */
	function validate_number($value){
		
	}
	
	/**
	 * @param string $value
	 * @return booelan
	 */
	function validate_url($value){
		
	}
}
