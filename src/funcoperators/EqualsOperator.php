<?php
namespace braga\enginerule\funcoperators;
use braga\enginerule\iface\IOperatorInfo;
use braga\enginerule\iface\Testable;
use braga\enginerule\utils\OperatorInfo;
class EqualsOperator implements Testable, IOperatorInfo
{
	use FunctionOperatorsParameters;
	// -----------------------------------------------------------------------------------------------------------------
	public function test($baseObject): bool
	{
		return $this->getLeftParamValue($baseObject) == $this->getRightParamValue($baseObject);
	}
	// -----------------------------------------------------------------------------------------------------------------
	public function getInfo(): OperatorInfo
	{
		$info = new OperatorInfo();
		$info->setClassName(__CLASS__);
		$info->name = "Porównanie == ";
		$info->symbol = "==";
		$info->typeFunction = OperatorInfo::TWO_ARG_COMPARATOR;
		return $info;
	}
	// -----------------------------------------------------------------------------------------------------------------
}

