<?php

use DanielLucia\Hooks\Manager as Hooks;

class ManagerTest extends PHPUnit_Framework_TestCase
{
	protected $hooks;

	public function setUp()
	{
		$this->hooks = new Hooks();
	}

	public function testBasic()
	{
		$this->assertInstanceOf('DanielLucia\\Hooks\\Action', $this->hooks->action);
		$this->assertInstanceOf('DanielLucia\\Hooks\\Filter', $this->hooks->filter);
	}
}