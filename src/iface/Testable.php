<?php
namespace braga\enginerule\iface;
use braga\enginerule\utils\RunnableComand;
interface Testable
{
	public function test(RunnableComand $baseComand): bool;
}
