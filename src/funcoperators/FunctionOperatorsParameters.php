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
	public function getLeftParamValue()
	{
		if($this->paramLeft instanceof RunnableComand)
		{
			return $this->paramLeft->run();
		}
		else
		{
			return $this->paramLeft;
		}
	}
	// -----------------------------------------------------------------------------------------------------------------
	public function getRightParamValue()
	{
		if($this->paramLeft instanceof RunnableComand)
		{
			return $this->paramRight->run();
		}
		else
		{
			return $this->paramRight;
		}
	}
	// -----------------------------------------------------------------------------------------------------------------
	public function setBaseObject(\stdClass $baseObject)
	{
		if($this->getParamLeft() instanceof RunnableComand)
		{
			$this->getParamLeft()->setObject($baseObject);
		}
		if($this->getParamRight() instanceof RunnableComand)
		{
			$this->getParamRight()->setObject($baseObject);
		}
	}
	// -----------------------------------------------------------------------------------------------------------------
}

