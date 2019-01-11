<?php
namespace braga\project\funcoperators;
use braga\enginerule\iface\Testable;
class GreatOperator implements Testable
{
	use FuncionOperatorsParameters;
	// -----------------------------------------------------------------------------------------------------------------
	public function test(): bool
	{
		return $this->getLeftParamValue() > $this->getRightParamValue();
	}
	// -----------------------------------------------------------------------------------------------------------------
}

