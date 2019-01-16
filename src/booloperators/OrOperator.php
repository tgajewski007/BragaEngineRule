<?php
namespace braga\enginerule\booloperators;
use braga\enginerule\iface\IOperatorInfo;
use braga\enginerule\iface\Testable;
use braga\enginerule\utils\OperatorInfo;
class OrOperator implements Testable, IOperatorInfo
{
	use BooleanOperatorsParameters;
	// -----------------------------------------------------------------------------------------------------------------
	public function test(\stdClass $baseObject): bool
	{
		foreach($this->testList as $test)
		{
			if($test->test($baseObject))
			{
				return true;
			}
		}
		return false;
	}
	// -----------------------------------------------------------------------------------------------------------------
	public function getInfo(): OperatorInfo
	{
		$info = new OperatorInfo();
		$info->className = __CLASS__;
		$info->name = "Spełniony przynajmniej jeden";
		$info->symbol = "OR";
		$info->cntArgsMin = 1; // MM: Jeśli damy jeden argument, to funkcja OR będzie po prostu testowała czy ten jeden argument jest prawdziwy.
		$info->cntArgsMax = 5; // MM: Musi być maksymalna ilość argumentów, bo jak użytkownik pomyli się i wpisze np. 10090, to przeglądarka zbuduje drzewko z tysiącem liści i być może zaswapuje się.
		return $info;
	}
	// -----------------------------------------------------------------------------------------------------------------
}
