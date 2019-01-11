<?php
namespace braga\project\funcoperators;
use braga\enginerule\iface\Testable;
class GreatOrEqualsOperator implements Testable
{
	use OperatorsParameters;
	// -----------------------------------------------------------------------------------------------------------------
	public function test(): bool
	{
		return $this->getLeftParamValue() >= $this->getRightParamValue();
	}
	// -----------------------------------------------------------------------------------------------------------------
}

