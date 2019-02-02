<?php
namespace braga\enginerule\utils;
class RunnableComand
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
	public function run($baseObject, $param = null)
	{
		$methods = explode(".", trim($this->callMethodString));
		for($i = 0; $i < count($methods); $i++)
		{
			$method = $methods[$i];
			$isLast = $i == count($methods) - 1;
			if($isLast && $param !== null)
			{
				$baseObject = $baseObject->{$method}($param);
			}
			else
			{
				$baseObject = $baseObject->{$method}();
			}
		}
		return $baseObject;
	}
	// -----------------------------------------------------------------------------------------------------------------
}

