<?php
namespace braga\enginerule\funcoperators;
use braga\enginerule\iface\IOperatorInfo;
use braga\enginerule\iface\Testable;
use braga\enginerule\utils\OperatorInfo;
class LowerOrEqualsOperator implements Testable, IOperatorInfo
{
	use FunctionOperatorsParameters;
	// -----------------------------------------------------------------------------------------------------------------
	public function test(\stdClass $baseObject): bool
	{
		$this->setBaseObject($baseObject);
		return $this->getLeftParamValue() <= $this->getRightParamValue();
	}
	// -----------------------------------------------------------------------------------------------------------------
	public function getInfo(): OperatorInfo
	{
		$info = new OperatorInfo();
		$info->className = __CLASS__;
		$info->name = "Lewy <= Prawy";
		$info->symbol = "<=";
		$info->cntArgsMin = 2;
		$info->cntArgsMax = 2;
		return $info;
	}
	// -----------------------------------------------------------------------------------------------------------------
}

