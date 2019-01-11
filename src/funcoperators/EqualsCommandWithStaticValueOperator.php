<?php
namespace braga\project\funcoperators;
class EqualsCommandWithStaticValueOperator extends FunctionalOperator
{
	// -----------------------------------------------------------------------------------------------------------------
	public function test(): bool
	{
		return $this->commandString->run() == $this->staticParam;
	}
	// -----------------------------------------------------------------------------------------------------------------
}

