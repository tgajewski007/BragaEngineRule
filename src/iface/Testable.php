<?php
namespace braga\enginerule\iface;
interface Testable
{
	public function test($baseObiect): bool;
}
