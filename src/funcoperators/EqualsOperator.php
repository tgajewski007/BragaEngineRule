<?php
namespace braga\enginerule\funcoperators;
use braga\enginerule\iface\IOperatorInfo;
use braga\enginerule\iface\Testable;
use braga\enginerule\utils\OperatorInfo;
class EqualsOperator implements Testable, IOperatorInfo
{
	use FunctionOperatorsParameters;
	// -----------------------------------------------------------------------------------------------------------------
	public function test(\stdClass $baseObject): bool
	{
		$this->setBaseObject($baseObject);
		return $this->getLeftParamValue() == $this->getRightParamValue();
	}
	// -----------------------------------------------------------------------------------------------------------------
	public function getInfo(): OperatorInfo
	{
		$info = new OperatorInfo();
		$info->className = __CLASS__;
		$info->name = "Porównanie";
		$info->symbol = "==";
		$info->cntBeginArgs = 2;
		$info->canAddArgs = FALSE;
		$info->displayMethod = OperatorInfo::HORZ_LAST_TWO;
		return $info;
	}
	// -----------------------------------------------------------------------------------------------------------------
}

