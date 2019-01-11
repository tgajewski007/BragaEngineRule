<?php
namespace braga\enginerule\booloperators;
use braga\enginerule\iface\Testable;
use braga\enginerule\utils\TestListStorage;
class AndOperator implements Testable
{
	use TestListStorage;
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
