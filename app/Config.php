<?php
namespace App;

class Config
{
	private $settings = [];

	public function __construct()
	{
		$this->settins = require dirname(__DIR__) . '/config/config.php';
	}
}