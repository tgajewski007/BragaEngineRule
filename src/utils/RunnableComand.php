<?php
namespace braga\project\utils;
class RunnableComand
{
	protected $object;
	protected $callMethodString;
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @param \stdClass $object
	 * @param string $callMethodString
	 */
	public function __construct(\stdClass $object, $callMethodString)
	{
		$this->object = $object;
		$this->callMethodString = $callMethodString;
	}
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @return \\stdClass
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

