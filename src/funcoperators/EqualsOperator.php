<?php
namespace braga\project\funcoperators;
use braga\enginerule\iface\Testable;
class EqualsOperator implements Testable
{
	use OperatorsParameters;
	// -----------------------------------------------------------------------------------------------------------------
	public function test(): bool
	{
		return $this->getLeftParamValue() == $this->getRightParamValue();
	}
	// -----------------------------------------------------------------------------------------------------------------
}

