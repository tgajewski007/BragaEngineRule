<?php
namespace braga\enginerule\iface;
interface Testable
{
	public function test(\stdClass $baseObiect): bool;
}
