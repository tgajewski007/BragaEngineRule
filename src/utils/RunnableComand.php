<?php
namespace braga\enginerule\utils;
class RunnableComand
{
	/**
	 * @var \stdClass
	 */
	protected $object;
	/**
	 * @var string
	 */
	protected $callMethodString;
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @return \stdClass
	 */
	public function getObject()
	{
		return $this->object;
	}
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
	 * @param \stdClass $object
	 */
	public function setObject(\stdClass $object)
	{
		$this->object = $object;
	}
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @param string $callMethodString
	 */
	public function setCallMethodString($callMethodString)
	{
		$this->callMethodString = $callMethodString;
	}
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @return mixed
	 */
	public function run()
	{
		$object = $this->object;
		$methods = explode(".", trim($this->callMethodString));
		foreach($methods as $call)
		{
			$object = $object->{$call}();
		}
		return $object;
	}
	// -----------------------------------------------------------------------------------------------------------------
}

