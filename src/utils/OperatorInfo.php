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
	 * MM: Stałe do typów funkcji (operatorów), różne typy wymagają różnych węzłów.
	 * 1) Dwu-argumentowy komparator, bez możliwości osadzania pod-drzew.
	 */
	const TWO_ARG_COMPARATOR = "TwoArgComparator";

	/**
	 * 2) Funkcje główne (np.AND, OR) z nieskończoną ilością argumentów.
	 */
	const MAIN_FUNCTION = "MainFunction";

	/**
	 * MM: Typ funkcji (operatora) w drzewiastej strukturze wyrażenia.
	 */
	public $typeFunction;

	// MM: Wyciąga ze ścieżki samą nazwę klasy i ustawia ją w polu className.
	public function setClassName(string $className)
	{
		$matches = [];
		if(!preg_match('/^.*\\\\([^\\\\]+)$/', $className, $matches))
		{
			throw new \Exception("CB:43178 Problem z wyszukaniem nazwy klasy w ciagu [" . htmlentities($className) . "]");
		}
		if(count($matches) != 2)
		{
			throw new \Exception("CB:43167 Problem z wyszukaniem nazwy klasy w ciagu [" . htmlentities($className) . "]");
		}
		$this->className = $matches[1];
	}
}

