<?php
namespace braga\enginerule\utils;
use braga\enginerule\iface\IRunnable;
class RunnableComand implements IRunnable
{
	/**
	 * @var string
	 */
	private $callMethodString;
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @return string
	 */
	public function getCallMethodString()
	{
		return $this->callMethodString;
	}
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @param string $callMethodString
	 */
	public function setCallMethodString(string $callMethodString)
	{
		$this->callMethodString = $callMethodString;
	}
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @return mixed
	 */
	public function run(\stdClass $baseObject)
	{
		$localObject = clone $baseObject;
		$methods = explode(".", trim($this->callMethodString));
		foreach($methods as $call)
		{
			$localObject = $localObject->{$call}();
		}
		return $localObject;
	}
	// -----------------------------------------------------------------------------------------------------------------
}

