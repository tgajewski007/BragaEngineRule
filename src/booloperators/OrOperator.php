<?php
namespace braga\enginerule\booloperators;
use braga\enginerule\iface\IOperatorInfo;
use braga\enginerule\iface\Testable;
use braga\enginerule\utils\OperatorInfo;
class OrOperator implements Testable, IOperatorInfo
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
	public function getInfo(): OperatorInfo
	{
		$info = new OperatorInfo();
		$info->className = __CLASS__;
		$info->name = "Spełniony przynajmniej jeden";
		$info->symbol = "OR";
		$info->typeNode = OperatorInfo::VERTICAL_NODE;
		return $info;
	}
	// -----------------------------------------------------------------------------------------------------------------
}
