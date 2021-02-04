<?php

namespace App;

class Log {
	public static function p($args)
	{
		print_r($args);
		exit("\n");
	}
}
