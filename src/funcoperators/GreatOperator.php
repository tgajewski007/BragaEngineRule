<?php
namespace braga\enginerule\funcoperators;
use braga\enginerule\iface\Testable;
class GreatOperator implements Testable
{
	use FunctionOperatorsParameters;
	// -----------------------------------------------------------------------------------------------------------------
	public function test(): bool
	{
		return $this->getLeftParamValue() > $this->getRightParamValue();
	}
	// -----------------------------------------------------------------------------------------------------------------
}

