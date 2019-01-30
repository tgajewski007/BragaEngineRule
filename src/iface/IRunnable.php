<?php
namespace braga\enginerule\iface;

/**
 * created on śro, 30 sty 2019, 05:51:13 CET
 * error prefix ER:428
 * @author Mariusz Marszałkowski
 * @package
 */
interface IRunnable
{
	// -----------------------------------------------------------------------------------------------------------------
	/**
	 * @return mixed
	 */
	public function run(\stdClass $baseObject);
}
