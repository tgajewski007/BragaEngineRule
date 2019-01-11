<?php
use braga\enginerule\booloperators\BooleanOperatorsParam;
use braga\enginerule\iface\Testable;
class OrOperator implements Testable
{
	use BooleanOperatorsParam;
	// -----------------------------------------------------------------------------------------------------------------
	public function test(): bool
	{
		foreach($this->listaTestow as $test)
		{
			if($test->test())
			{
				return true;
			}
		}
		return false;
	}
	// -----------------------------------------------------------------------------------------------------------------
}
