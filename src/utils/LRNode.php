<?php
namespace braga\enginerule;

/**
 * created on wto, 29 sty 2019, 18:04:50 CET
 * error prefix ER:707
 * @author Mariusz Marszałkowski
 * @package
 */

// MM: Węzeł drzewa wyrażenia na lewy lub prawy operand operatora porównawczego
class LRNode
{
	/**
	 * @var string|null $rawValue
	 */
	public $rawValue;

	/**
	 * @var string|null $idTestFunction
	 */
	public $idTestFunction;
}
