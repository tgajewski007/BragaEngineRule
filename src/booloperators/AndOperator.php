<?php
namespace braga\enginerule\booloperators;
use braga\enginerule\iface\IOperatorInfo;
use braga\enginerule\iface\Testable;
use braga\enginerule\utils\OperatorInfo;
class AndOperator implements Testable, IOperatorInfo
{
	use BooleanOperatorsParameters;
	// -----------------------------------------------------------------------------------------------------------------
	public function test(\stdClass $baseObject): bool
	{
		foreach($this->testList as $test)
		{
			if(!$test->test($baseObject))
			{
				return false;
			}
		}
		return true;
	}
	// -----------------------------------------------------------------------------------------------------------------
	public function getInfo(): OperatorInfo
	{
		$info = new OperatorInfo();
		$info->className = __CLASS__;
		$info->name = "Spełnione wszystkie";
		$info->symbol = "AND";
		$info->cntBeginArgs = 1;
		$info->canAddArgs = TRUE;
		$info->displayMethod = OperatorInfo::INF_VERTICAL;
		return $info;
	}
	// -----------------------------------------------------------------------------------------------------------------
}
