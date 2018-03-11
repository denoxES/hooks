<?php

use daniellucia\Hooks\Manager as Hooks;

class ManagerTest extends PHPUnit_Framework_TestCase
{
	protected $hooks;

	public function setUp()
	{
		$this->hooks = new Hooks();
	}

	public function testBasic()
	{
		$this->assertInstanceOf('daniellucia\\Hooks\\Action', $this->hooks->action);
		$this->assertInstanceOf('daniellucia\\Hooks\\Filter', $this->hooks->filter);
	}
}