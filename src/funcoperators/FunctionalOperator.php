<?php
namespace braga\project\funcoperators;
use braga\project\utils\RunnableComand;
use braga\enginerule\iface\Testable;
abstract class FunctionalOperator implements Testable
{
	/**
	 * @var RunnableComand
	 */
	protected $commandString;
	protected $staticParam;
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @return RunnableComand
	 */
	public function getActionParam()
	{
		return $this->commandString;
	}

	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @return mixed
	 */
	public function getStaticParam()
	{
		return $this->staticParam;
	}
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @param RunnableComand $actionParam
	 */
	public function setActionParam(RunnableComand $actionParam)
	{
		$this->commandString = $actionParam;
	}

	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @param mixed $staticParam
	 */
	public function setStaticParam($staticParam)
	{
		$this->staticParam = $staticParam;
	}
	// -----------------------------------------------------------------------------------------------------------------
}

