<?php
namespace braga\project\utils;
use braga\project\iface\Runnable;
class RunnableComand implements Runnable
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
	 * {@inheritdoc}
	 * @see \braga\project\iface\Runnable::run()
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

