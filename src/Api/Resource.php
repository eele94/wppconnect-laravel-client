<?php

namespace Eele94\Wppconnect\Api;

use Saloon\Http\Connector;

class Resource
{
	public function __construct(
		protected Connector $connector,
	) {
	}
}
