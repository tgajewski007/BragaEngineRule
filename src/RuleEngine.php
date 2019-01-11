<?php
namespace braga\enginerule;
use braga\enginerule\iface\Testable;
use braga\project\utils\RunnableComand;
class RuleEngine
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
	 * @return \braga\project\utils\RunnableComand
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
	 * @param \braga\project\utils\RunnableComand $succesCommand
	 */
	public function setSuccesCommand(RunnableComand $succesCommand)
	{
		$this->succesCommand = $succesCommand;
	}
	// -----------------------------------------------------------------------------------------------------------------
	public function run()
	{
		if($this->succesCommand instanceof RunnableComand && $this->test instanceof Testable)
		{
			if($this->test->test())
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
