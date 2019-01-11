<?php
namespace braga\project\funcoperators;
use braga\project\utils\RunnableComand;
trait FuncionOperatorsParameters
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
	 * @return \braga\project\utils\RunnableComand|mixed
	 */
	public function getParamLeft()
	{
		return $this->paramLeft;
	}
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @return \braga\project\utils\RunnableComand|mixed
	 */
	public function getParamRight()
	{
		return $this->paramRight;
	}
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @param \braga\project\utils\RunnableComand|mixed
	 */
	public function setParamLeft($paramLeft)
	{
		$this->paramLeft = $paramLeft;
	}
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @param \braga\project\utils\RunnableComand|mixed
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
}

