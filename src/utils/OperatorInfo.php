<?php
namespace braga\enginerule\utils;

/**
 * created on pon, 14 sty 2019, 18:21:01 CET
 * error prefix CB:431
 * @author Mariusz Marszałkowski
 * @package
 */
class OperatorInfo
{

	/**
	 * MM: Nazwa klasy która realizuje funkcjonalność danego operatora, wykorzystywana
	 * jest do rozpoznania operatora, więc powinna być unikalna.
	 * @var string
	 */
	public $className;

	/**
	 * MM: Dowolna nazwa operatora (funkcji operatorowej)
	 * @var string
	 */
	public $name;

	/**
	 * MM: Unikalny symbol, wykorzystywany jest do wyświetlania,
	 * powinien być unikalny i jednoznaczny, np.: < == && OR.
	 * @var string
	 */
	public $symbol;

	/**
	 * MM: Stałe do sposobu wyświetlania operatora w drzewiastej strukturze
	 * wyrażenia, pole $displayMethod.
	 * -------------------------------------------------------------------
	 * MM: Wyświetlanie operatora dwu wartościowego 'w poziomie' jako liść (a nie
	 * jako węzeł) drzewa.
	 * W poziomie oznacza tutaj, ze operandy są umieszczone jeden
	 * za drugim, jeden operand jest leftValue a drugi jako rightValue.
	 */
	const HORZ_2_NODE = "HORZ_2_NODE";

	/**
	 * MM: Wyświetlanie operatora jako pionowej listy z możliwością dodania 'nieskończonej'
	 * ilości operandów.
	 */
	const VERTICAL_NODE = "VERTICAL_NODE";

	/**
	 * MM: Typ operatora w drzewiastej strukturze wyrażenia.
	 * Operatory dwu-wartościowe są wyświetlane poziomo, operatory and/or jako
	 * 'nieskończona' lista operandów w pionie.
	 */
	public $typeNode;
}

