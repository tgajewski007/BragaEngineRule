<?php
namespace braga\enginerule\funcoperators;
use braga\enginerule\utils\RunnableComand;
trait FunctionOperatorsParameters
{
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @var RunnableComand|mixed
	 */
	protected $paramLeft;
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @var RunnableComand|mixed
	 */
	protected $paramRight;
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @return RunnableComand|mixed
	 */
	public function getParamLeft()
	{
		return $this->paramLeft;
	}
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @return RunnableComand|mixed
	 */
	public function getParamRight()
	{
		return $this->paramRight;
	}
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @param RunnableComand|mixed
	 */
	public function setParamLeft($paramLeft)
	{
		$this->paramLeft = $paramLeft;
	}
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @param RunnableComand|mixed
	 */
	public function setParamRight($paramRight)
	{
		$this->paramRight = $paramRight;
	}
	// -----------------------------------------------------------------------------------------------------------------
	public function getLeftParamValue($baseObject)
	{
		if($this->paramLeft instanceof RunnableComand)
		{
			return $this->paramLeft->run($baseObject);
		}
		else
		{
			return $this->paramLeft;
		}
	}
	// -----------------------------------------------------------------------------------------------------------------
	public function getRightParamValue($baseObject)
	{
		if($this->paramRight instanceof RunnableComand)
		{
			return $this->paramRight->run($baseObject);
		}
		else
		{
			return $this->paramRight;
		}
	}
	// -----------------------------------------------------------------------------------------------------------------
}

