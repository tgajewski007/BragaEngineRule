<?php
namespace braga\enginerule;
use braga\enginerule\iface\Testable;
use braga\enginerule\utils\RunnableComand;
class EngineRule
{
	/**
	 * @var \stdClass
	 */
	private $baseObject = null;
	// -----------------------------------------------------------------------------------------------------------------
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
	 * @return \stdClass
	 */
	public function getBaseObject(): \stdClass
	{
		return $this->baseObject;
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
	/**
	 * @param \stdClass $obiect
	 */
	public function setBaseObiect(\stdClass $baseObject)
	{
		$this->baseObject = $baseObject;
	}
	// -----------------------------------------------------------------------------------------------------------------
	public function process()
	{
		if($this->succesCommand instanceof RunnableComand && $this->test instanceof Testable)
		{
			if($this->test->test($this->getBaseObject()))
			{
				return $this->succesCommand->run($this->getBaseObject());
			}
		}
		else
		{
			throw new \Exception("ER:20101 Bad config");
		}
	}
	// -----------------------------------------------------------------------------------------------------------------
}
