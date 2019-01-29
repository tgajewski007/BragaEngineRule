<?php
namespace braga\enginerule;
use braga\enginerule\iface\Testable;
use braga\enginerule\utils\OperatorsRegister;

/**
 * created on wto, 29 sty 2019, 16:36:28 CET
 * error prefix ER:124
 * @author Mariusz Marszałkowski
 * @package
 */

// MM: Kompilowanie wyrażenia w formie JSON.
class Compiler
{
	const ID_ROOT_NODE = 0;

	//
	private static function compileTwoArgsFunction(MainNode $node): Testable
	{
		$allowClasses = [
						"LowerOrEqualsOperator",
						"LowerOperator",
						"GreatOrEqualsOperator",
						"GreatOperator",
						"EqualsOperator" ];

		if(!in_array($node->className, $allowClasses))
		{
			throw new \Exception("ER:12491 Nieoczekiwana nazwa klasy [" . htmlentities($node->className) . "]");
		}
		$rejestr = new OperatorsRegister();

		/** @var FunctionOperatorsParameters $operator */
		$operator = $rejestr->getClassByName($node->className);
		// TODO: $operator->setParamRight
		// TODO: $operator->setParamLeft
	}

	//
	private static function compileRoot(array $nodes): EngineRule
	{
		/** @var \braga\enginerule\MainNode $rootNode */
		$rootNode = $nodes[self::ID_ROOT_NODE];

		$retVal = new EngineRule();

		switch($rootNode->typeNode)
		{
			case "horz2Node":

				break;
			case "vertFuncNode":
				break;
			case "vertArgNode":
				break;
			case "vertEmptyNode":
				break;
			default :
				throw new \Exception("ER:12496 Nie znany typ wezla [" . htmlentities($rootNode->typeNode) . "]");
		}
	}
	public static function compile(string $jsSerialize): EngineRule
	{
		$nodes = json_decode($jsSerialize);
		foreach($nodes as &$node)
		{
			$mapper = new \JsonMapper();
			$node = $mapper->map($node, new MainNode());
		}
	}
}
