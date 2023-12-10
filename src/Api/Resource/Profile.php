<?php

namespace Eele94\Wppconnect\Api\Resource;

use Eele94\Wppconnect\Api\Requests\Profile\ChangeProfileImage;
use Eele94\Wppconnect\Api\Requests\Profile\ChangeProfileStatus;
use Eele94\Wppconnect\Api\Requests\Profile\ChangeUsername;
use Eele94\Wppconnect\Api\Resource;
use Saloon\Contracts\Response;

class Profile extends Resource
{
    public function changeUsername(string $session, mixed $name): Response
    {
        return $this->connector->send(new ChangeUsername($session, $name));
    }

    public function changeProfileImage(string $session, mixed $path): Response
    {
        return $this->connector->send(new ChangeProfileImage($session, $path));
    }

    public function changeProfileStatus(string $session, mixed $status): Response
    {
        return $this->connector->send(new ChangeProfileStatus($session, $status));
    }
}
