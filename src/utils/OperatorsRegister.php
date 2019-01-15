<?php
namespace braga\enginerule\utils;
use braga\enginerule\booloperators\AndOperator;
use braga\enginerule\booloperators\OrOperator;
use braga\enginerule\funcoperators\EqualsOperator;
use braga\enginerule\funcoperators\GreatOperator;
use braga\enginerule\funcoperators\GreatOrEqualsOperator;
use braga\enginerule\funcoperators\LowerOperator;
use braga\enginerule\funcoperators\LowerOrEqualsOperator;

/**
 * created on pon, 14 sty 2019, 18:19:52 CET
 * error prefix CB:585
 * @author Mariusz Marszałkowski
 * @package
 */

// MM Rejest wszystkich dostępnych operatorów.
class OperatorsRegister
{
	// MM: Rejestr odstępnych operatorów
	private $rejestr = [];
	// ---------------------------------------------------------------------------
	public function __construct()
	{
		$this->rejestr[] = new AndOperator();
		$this->rejestr[] = new OrOperator();
		$this->rejestr[] = new EqualsOperator();
		$this->rejestr[] = new GreatOperator();
		$this->rejestr[] = new GreatOrEqualsOperator();
		$this->rejestr[] = new LowerOperator();
		$this->rejestr[] = new LowerOrEqualsOperator();
	}
	// ---------------------------------------------------------------------------
	public function count()
	{
		return count($this->rejestr);
	}
	// ---------------------------------------------------------------------------
	public function getOperator(int $nr)
	{
		return $this->rejestr[$nr];
	}
	// ---------------------------------------------------------------------------
	public function getTableOperatorsInfo(): array
	{
		$tableOperatorsInfo = [];
		foreach($this->rejestr as $operator)
		{
			$tableOperatorsInfo[] = $operator->getInfo();
		}
		return $tableOperatorsInfo;
	}
	// ---------------------------------------------------------------------------
	private function empty()
	{
	}
	// ---------------------------------------------------------------------------
}

