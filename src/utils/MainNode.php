<?php
namespace braga\enginerule;

/**
 * created on wto, 29 sty 2019, 16:38:49 CET
 * error prefix ER:606
 * @author Mariusz Marszałkowski
 * @package
 */

// MM: Węzeł drzewa wyrażenia
class MainNode
{
	/**
	 * MM: Typ kontenera.
	 * @var string $typeNode
	 */
	public $typeNode;

	/**
	 * MM: IdNode jest przydatne do tworzenia węzła i do tworzenia
	 * identyfikatora tagu.
	 * @var int $idNode
	 */
	public $idNode;

	/**
	 * MM: Przygotowanie pól na lewy i prawy operand w funkcjach
	 * dwu-argumentowych.
	 * @var LRNode $lValue
	 */
	public $lValue;

	/**
	 * @var LRNode $rValue
	 */
	public $rValue;

	/**
	 * MM: Id funkcji porównawczej, logicznej lub testowej...
	 * @var string|null $idHtmlFunction
	 */
	public $idHtmlFunction;

	/**
	 * MM: Nazwa klasy PHP realizującej dany operator.
	 * @var string|null $className
	 */
	public $className;

	/**
	 * MM: ...albo surowa wartość, nigdy oba pola naraz.
	 * @var string|null $rawValue
	 */
	public $rawValue;

	/**
	 * MM: tablica id potomków.
	 * @var int[] $children
	 */
	public $children = [];
}
