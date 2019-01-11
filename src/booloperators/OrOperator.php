<?php
namespace braga\enginerule\booloperators;
use braga\enginerule\iface\Testable;
class OrOperator implements Testable
{
	use BooleanOperatorsParameters;
	// -----------------------------------------------------------------------------------------------------------------
	public function test(\stdClass $baseObject): bool
	{
		foreach($this->testList as $test)
		{
			if($test->test($baseObject))
			{
				return true;
			}
		}
		return false;
	}
	// -----------------------------------------------------------------------------------------------------------------
}
