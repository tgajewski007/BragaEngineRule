<?php
namespace braga\enginerule\utils;
use braga\enginerule\iface\Testable;
trait TestListStorage
{
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @var Testable
	 */
	protected $listaTestow = array();
	// -----------------------------------------------------------------------------------------------------------------
	function addTest(Testable $test)
	{
		$this->listaTestow[] = $test;
	}
	// -----------------------------------------------------------------------------------------------------------------
}
