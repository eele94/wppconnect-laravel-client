<?php

namespace Eele94\Wppconnect\Api\Resource;

use Eele94\Wppconnect\Api\Requests\Auth\ChatWootWebHook;
use Eele94\Wppconnect\Api\Requests\Auth\CheckConnectionSessionStatusDaConexao;
use Eele94\Wppconnect\Api\Requests\Auth\CloseSession;
use Eele94\Wppconnect\Api\Requests\Auth\GenerateTokenGeraTokenBearerParaSessao;
use Eele94\Wppconnect\Api\Requests\Auth\LogoutSession;
use Eele94\Wppconnect\Api\Requests\Auth\QrcodeSessionPegarQrCodeDeAutenticacaoViaStream;
use Eele94\Wppconnect\Api\Requests\Auth\StartSessionRetornaQrcodeDeLogin;
use Eele94\Wppconnect\Api\Requests\Auth\StatusSessionAtualizaQrcodeDeLogin;
use Eele94\Wppconnect\Api\Resource;
use Saloon\Http\Response;

class Auth extends Resource
{
    public function generateTokenGeraTokenBearerParaSessao(string $session, string $secretkey): Response
    {
        return $this->connector->send(new GenerateTokenGeraTokenBearerParaSessao($session, $secretkey));
    }

    public function startSessionRetornaQrcodeDeLogin(string $session, mixed $waitQrCode, mixed $webhook = null): Response
    {
        return $this->connector->send(new StartSessionRetornaQrcodeDeLogin($session, $waitQrCode, $webhook));
    }

    public function statusSessionAtualizaQrcodeDeLogin(string $session): Response
    {
        return $this->connector->send(new StatusSessionAtualizaQrcodeDeLogin($session));
    }

    public function qrcodeSessionPegarQrCodeDeAutenticacaoViaStream(string $session): Response
    {
        return $this->connector->send(new QrcodeSessionPegarQrCodeDeAutenticacaoViaStream($session));
    }

    public function checkConnectionSessionStatusDaConexao(string $session): Response
    {
        return $this->connector->send(new CheckConnectionSessionStatusDaConexao($session));
    }

    public function closeSession(string $session): Response
    {
        return $this->connector->send(new CloseSession($session));
    }

    public function logoutSession(string $session): Response
    {
        return $this->connector->send(new LogoutSession($session));
    }

    public function chatWootWebHook(string $session): Response
    {
        return $this->connector->send(new ChatWootWebHook($session));
    }
}
