<?php
namespace braga\enginerule\funcoperators;
use braga\enginerule\iface\Testable;
class LowerOperator implements Testable
{
	use FunctionOperatorsParameters;
	// -----------------------------------------------------------------------------------------------------------------
	public function test(): bool
	{
		return $this->getLeftParamValue() < $this->getRightParamValue();
	}
	// -----------------------------------------------------------------------------------------------------------------
}

