<?php
namespace braga\enginerule\booloperators;
use braga\enginerule\iface\Testable;
trait BooleanOperatorsParameters
{
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @var Testable
	 */
	protected $testList = array();
	// -----------------------------------------------------------------------------------------------------------------
	function addTest(Testable $test)
	{
		$this->testList[] = $test;
	}
	// -----------------------------------------------------------------------------------------------------------------
}
