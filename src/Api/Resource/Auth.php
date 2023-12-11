<?php

namespace Eele94\Wppconnect\Api\Resource;

use Eele94\Wppconnect\Api\Requests\Auth\ChatWootWebHook;
use Eele94\Wppconnect\Api\Requests\Auth\CheckConnectionSession;
use Eele94\Wppconnect\Api\Requests\Auth\ClearSessionData;
use Eele94\Wppconnect\Api\Requests\Auth\CloseSession;
use Eele94\Wppconnect\Api\Requests\Auth\GenerateToken;
use Eele94\Wppconnect\Api\Requests\Auth\LogoutSession;
use Eele94\Wppconnect\Api\Requests\Auth\QrcodeSession;
use Eele94\Wppconnect\Api\Requests\Auth\StartSession;
use Eele94\Wppconnect\Api\Requests\Auth\StatusSession;
use Eele94\Wppconnect\Api\Resource;
use Saloon\Http\Response;

class Auth extends Resource
{
    public function generateToken(string $session, string $secretkey): Response
    {
        return $this->connector->send(new GenerateToken($session, $secretkey));
    }

    public function startSession(string $session, mixed $waitQrCode, mixed $webhook = null): Response
    {
        return $this->connector->send(new StartSession($session, $waitQrCode, $webhook));
    }

    public function statusSession(string $session): Response
    {
        return $this->connector->send(new StatusSession($session));
    }

    public function qrcodeSession(string $session): Response
    {
        return $this->connector->send(new QrcodeSession($session));
    }

    public function checkConnection(string $session): Response
    {
        return $this->connector->send(new CheckConnectionSession($session));
    }

    public function closeSession(string $session): Response
    {
        return $this->connector->send(new CloseSession($session));
    }

    public function logoutSession(string $session): Response
    {
        return $this->connector->send(new LogoutSession($session));
    }

    public function clearSessionData(string $session, string $secretKey): Response
    {
        return $this->connector->send(new ClearSessionData($session, $secretKey));
    }

    public function chatWootWebHook(string $session): Response
    {
        return $this->connector->send(new ChatWootWebHook($session));
    }
}
