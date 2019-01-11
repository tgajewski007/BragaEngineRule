<?php
namespace braga\enginerule\funcoperators;
use braga\enginerule\iface\Testable;
class LowerOperator implements Testable
{
	use FunctionOperatorsParameters;
	// -----------------------------------------------------------------------------------------------------------------
	public function test(\stdClass $baseObject): bool
	{
		$this->setBaseObject($baseObject);
		return $this->getLeftParamValue() < $this->getRightParamValue();
	}
	// -----------------------------------------------------------------------------------------------------------------
}

