<?php
namespace braga\enginerule\booloperators;
use braga\enginerule\iface\Testable;
class OrOperator implements Testable
{
	use BooleanOperatorsParameters;
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
