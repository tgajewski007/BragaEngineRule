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
	 * @var string|null $succesParam
	 */
	private $succesParam = null;
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * MM: Dumachamy na zimne, sprawdzamy czy typ obiektu bazowego jest zgodny z
	 * typem zdefiniowanym w zdarzeniu.
	 * @var string $typeBaseObject
	 */
	private $typeBaseObject = "";
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @return string|null
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
	 * @param string|null $succesParam
	 */
	public function setSuccesParam($succesParam)
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
	/**
	 * @param string $typeBaseObject
	 */
	public function setTypeBaseObject(string $typeBaseObject)
	{
		$this->typeBaseObject = $typeBaseObject;
	}
	// -----------------------------------------------------------------------------------------------------------------
	public function process($baseObject)
	{
		if(strcmp(get_class($baseObject), $this->typeBaseObject))
		{
			throw new \Exception("ER:20103 Niespodziewany typ obiektu bazowego: [" . get_class($baseObject) . "]");
		}
		if($this->succesObject instanceof RunnableComand && $this->testObject instanceof Testable)
		{
			if($this->testObject->test($baseObject))
			{
				return $this->succesObject->run($baseObject, $this->succesParam);
			}
		}
		else
		{
			throw new \Exception("ER:20101 Bad config");
		}
	}
	// -----------------------------------------------------------------------------------------------------------------
}
