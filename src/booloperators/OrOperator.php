<?php
use braga\enginerule\iface\Testable;
use braga\enginerule\utils\TestListStorage;
class OrOperator implements Testable
{
	use TestListStorage;
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
