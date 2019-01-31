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
	 * @var \stdClass
	 */
	private $succesParam = null;
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @return \stdClass
	 */
	public function getSuccesParam()
	{
		return $this->succesParam;
	}
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
	 * @param \stdClass $succesParam
	 */
	public function setSuccesParam(\stdClass $succesParam)
	{
		$this->succesParam = $succesParam;
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
		if($this->succesObject instanceof RunnableComand && $this->testObject instanceof Testable)
		{
			if($this->testObject->test($baseObject))
			{
				return $this->succesObject->run($this->succesParam);
			}
		}
		else
		{
			throw new \Exception("ER:20101 Bad config");
		}
	}
	// -----------------------------------------------------------------------------------------------------------------
}
