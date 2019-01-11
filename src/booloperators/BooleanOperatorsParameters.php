<?php
namespace braga\enginerule\booloperators;
use braga\enginerule\iface\Testable;
trait BooleanOperatorsParameters
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
