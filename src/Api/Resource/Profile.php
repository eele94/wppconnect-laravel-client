<?php

namespace Eele94\Wppconnect\Api\Resource;

use Eele94\Wppconnect\Api\Requests\Profile\ChangeProfileImage;
use Eele94\Wppconnect\Api\Requests\Profile\ChangeProfileStatus;
use Eele94\Wppconnect\Api\Requests\Profile\ChangeUsername;
use Eele94\Wppconnect\Api\Resource;
use Saloon\Contracts\Response;

class Profile extends Resource
{
	/**
	 * @param string $session
	 * @param mixed $name
	 */
	public function changeUsername(string $session, mixed $name): Response
	{
		return $this->connector->send(new ChangeUsername($session, $name));
	}


	/**
	 * @param string $session
	 * @param mixed $path
	 */
	public function changeProfileImage(string $session, mixed $path): Response
	{
		return $this->connector->send(new ChangeProfileImage($session, $path));
	}


	/**
	 * @param string $session
	 * @param mixed $status
	 */
	public function changeProfileStatus(string $session, mixed $status): Response
	{
		return $this->connector->send(new ChangeProfileStatus($session, $status));
	}
}
