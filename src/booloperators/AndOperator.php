<?php
namespace braga\enginerule\booloperators;
use braga\enginerule\iface\Testable;
class AndOperator implements Testable
{
	use BooleanOperatorsParameters;
	// -----------------------------------------------------------------------------------------------------------------
	public function test(): bool
	{
		foreach($this->listaTestow as $test)
		{
			if(!$test->test())
			{
				return false;
			}
		}
		return true;
	}
	// -----------------------------------------------------------------------------------------------------------------
}
