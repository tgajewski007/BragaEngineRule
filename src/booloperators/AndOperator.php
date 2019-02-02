<?php
namespace braga\enginerule\booloperators;
use braga\enginerule\iface\IOperatorInfo;
use braga\enginerule\iface\Testable;
use braga\enginerule\utils\OperatorInfo;
class AndOperator implements Testable, IOperatorInfo
{
	use BooleanOperatorsParameters;
	// -----------------------------------------------------------------------------------------------------------------
	public function test($baseObject): bool
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
		$info->setClassName(__CLASS__);
		$info->name = "Spełnione wszystkie";
		$info->symbol = "AND";
		$info->typeFunction = OperatorInfo::MAIN_FUNCTION;
		return $info;
	}
	// -----------------------------------------------------------------------------------------------------------------
}
