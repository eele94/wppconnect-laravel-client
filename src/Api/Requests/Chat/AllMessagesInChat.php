<?php

namespace Eele94\Wppconnect\Api\Requests\Chat;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * All Messages in Chat
 */
class AllMessagesInChat extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/";
	}


	/**
	 * @param string $session
	 * @param string $phone
	 * @param null|string $isGroup
	 * @param null|string $includeMe
	 * @param null|string $includeNotifications
	 */
	public function __construct(
		protected string $session,
		protected string $phone,
		protected ?string $isGroup = null,
		protected ?string $includeMe = null,
		protected ?string $includeNotifications = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['isGroup' => $this->isGroup, 'includeMe' => $this->includeMe, 'includeNotifications' => $this->includeNotifications]);
	}
}
