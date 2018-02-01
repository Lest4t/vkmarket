<?php
/**
 * Date: 2/1/18
 * Time: 3:30 PM
 */

namespace lest4t\VkMarket\Exception;

use Exception;

class VkException extends Exception
{
	public function __construct($message = "", $code = 0)
	{
		$this->message = $message;
		$this->code = $code;
	}

}