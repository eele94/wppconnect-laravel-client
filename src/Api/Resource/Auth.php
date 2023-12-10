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
use Saloon\Contracts\Response;

class Auth extends Resource
{
	/**
	 * @param string $session
	 * @param string $secretkey
	 */
	public function generateTokenGeraTokenBearerParaSessao(string $session, string $secretkey): Response
	{
		return $this->connector->send(new GenerateTokenGeraTokenBearerParaSessao($session, $secretkey));
	}


	/**
	 * @param string $session
	 * @param mixed $webhook
	 * @param mixed $waitQrCode
	 */
	public function startSessionRetornaQrcodeDeLogin(string $session, mixed $webhook, mixed $waitQrCode): Response
	{
		return $this->connector->send(new StartSessionRetornaQrcodeDeLogin($session, $webhook, $waitQrCode));
	}


	/**
	 * @param string $session
	 */
	public function statusSessionAtualizaQrcodeDeLogin(string $session): Response
	{
		return $this->connector->send(new StatusSessionAtualizaQrcodeDeLogin($session));
	}


	/**
	 * @param string $session
	 */
	public function qrcodeSessionPegarQrCodeDeAutenticacaoViaStream(string $session): Response
	{
		return $this->connector->send(new QrcodeSessionPegarQrCodeDeAutenticacaoViaStream($session));
	}


	/**
	 * @param string $session
	 */
	public function checkConnectionSessionStatusDaConexao(string $session): Response
	{
		return $this->connector->send(new CheckConnectionSessionStatusDaConexao($session));
	}


	/**
	 * @param string $session
	 */
	public function closeSession(string $session): Response
	{
		return $this->connector->send(new CloseSession($session));
	}


	/**
	 * @param string $session
	 */
	public function logoutSession(string $session): Response
	{
		return $this->connector->send(new LogoutSession($session));
	}


	/**
	 * @param string $session
	 */
	public function chatWootWebHook(string $session): Response
	{
		return $this->connector->send(new ChatWootWebHook($session));
	}
}
