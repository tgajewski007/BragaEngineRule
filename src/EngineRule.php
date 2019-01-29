<?php
namespace braga\enginerule;
use braga\enginerule\iface\Testable;
use braga\enginerule\utils\RunnableComand;
class EngineRule
{
	/**
	 * @var Testable
	 */
	protected $test = null;
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @var RunnableComand
	 */
	protected $succesCommand = null;
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @return \braga\enginerule\iface\Testable
	 */
	public function getTest()
	{
		return $this->test;
	}
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @return RunnableComand
	 */
	public function getSuccesCommand()
	{
		return $this->succesCommand;
	}
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @param \braga\enginerule\iface\Testable $test
	 */
	public function setTest(Testable $test)
	{
		$this->test = $test;
	}
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @param RunnableComand $succesCommand
	 */
	public function setSuccesCommand(RunnableComand $succesCommand)
	{
		$this->succesCommand = $succesCommand;
	}
	// -----------------------------------------------------------------------------------------------------------------
	public function process()
	{
		if($this->succesCommand instanceof RunnableComand && $this->test instanceof Testable)
		{
			if($this->test->test($this->getSuccesCommand()->getObject()))
			{
				return $this->succesCommand->run();
			}
		}
		else
		{
			throw new \Exception("RE:20101 Bad config");
		}
	}
	// -----------------------------------------------------------------------------------------------------------------
}
