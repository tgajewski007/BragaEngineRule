<?php
namespace braga\enginerule\iface;
use braga\enginerule\utils\OperatorInfo;

/**
 * created on pon, 14 sty 2019, 18:11:58 CET
 * error prefix CB:434
 * @author Mariusz Marszałkowski
 * @package
 */
interface IOperatorInfo
{
	public function getInfo(): OperatorInfo;
}
