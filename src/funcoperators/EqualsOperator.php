<?php
namespace braga\enginerule\funcoperators;
use braga\enginerule\iface\Testable;
class EqualsOperator implements Testable
{
	use FunctionOperatorsParameters;
	// -----------------------------------------------------------------------------------------------------------------
	public function test(): bool
	{
		return $this->getLeftParamValue() == $this->getRightParamValue();
	}
	// -----------------------------------------------------------------------------------------------------------------
}

