<?php
namespace braga\project\iface;
interface Runnable
{
	/**
	 * @param \stdClass $obiekt
	 * @param string $metoda
	 * @return mixed
	 */
	public function run(\stdClass $obiekt, string $metoda);
}

