<?php
namespace braga\enginerule\funcoperators;
use braga\enginerule\iface\Testable;
class GreatOrEqualsOperator implements Testable
{
	use FunctionOperatorsParameters;
	// -----------------------------------------------------------------------------------------------------------------
	public function test(): bool
	{
		return $this->getLeftParamValue() >= $this->getRightParamValue();
	}
	// -----------------------------------------------------------------------------------------------------------------
}

