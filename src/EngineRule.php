<?php
namespace braga\enginerule;
use braga\enginerule\iface\Testable;
use braga\enginerule\utils\RunnableComand;

// MM: Główna klasa silnika regułowego.
class EngineRule
{
	/**
	 * @var Testable
	 */
	private $testObject = null;
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @var RunnableComand
	 */
	private $succesObject = null;
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @return \braga\enginerule\iface\Testable
	 */
	public function getTestObject()
	{
		return $this->testObject;
	}
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @return RunnableComand
	 */
	public function getSuccesObject()
	{
		return $this->succesObject;
	}
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @param \braga\enginerule\iface\Testable $test
	 */
	public function setTestObject(Testable $testObject)
	{
		$this->testObject = $testObject;
	}
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @param RunnableComand $succesCommand
	 */
	public function setSuccesObject(RunnableComand $succesObject)
	{
		$this->succesObject = $succesObject;
	}
	// -----------------------------------------------------------------------------------------------------------------
	public function process(\stdClass $baseObject)
	{
		if($this->succesCommand instanceof RunnableComand && $this->test instanceof Testable)
		{
			if($this->test->test($baseObject))
			{
				return $this->succesCommand->run($baseObject);
			}
		}
		else
		{
			throw new \Exception("ER:20101 Bad config");
		}
	}
	// -----------------------------------------------------------------------------------------------------------------
}
