<?php
namespace braga\enginerule\iface;
interface Testable
{
	public function test(\stdClass $baseComand): bool;
}
