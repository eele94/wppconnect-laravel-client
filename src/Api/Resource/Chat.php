<?php

namespace Eele94\Wppconnect\Api\Resource;

use Eele94\Wppconnect\Api\Requests\Chat\AllChats;
use Eele94\Wppconnect\Api\Requests\Chat\AllChatsWhitMessages;
use Eele94\Wppconnect\Api\Requests\Chat\AllMessagesInChat;
use Eele94\Wppconnect\Api\Requests\Chat\AllNewMessages;
use Eele94\Wppconnect\Api\Requests\Chat\AllUnreadMessages;
use Eele94\Wppconnect\Api\Requests\Chat\ArchiveChat;
use Eele94\Wppconnect\Api\Requests\Chat\ChatById;
use Eele94\Wppconnect\Api\Requests\Chat\ChatIsOnLine;
use Eele94\Wppconnect\Api\Requests\Chat\ChatState;
use Eele94\Wppconnect\Api\Requests\Chat\ClearChat;
use Eele94\Wppconnect\Api\Requests\Chat\DeleteChat;
use Eele94\Wppconnect\Api\Requests\Chat\DeleteMessage;
use Eele94\Wppconnect\Api\Requests\Chat\LastSeen;
use Eele94\Wppconnect\Api\Requests\Chat\ListMutes;
use Eele94\Wppconnect\Api\Requests\Chat\MarkUnseen;
use Eele94\Wppconnect\Api\Requests\Chat\PinChat;
use Eele94\Wppconnect\Api\Requests\Chat\SendMute;
use Eele94\Wppconnect\Api\Requests\Chat\SendSeen;
use Eele94\Wppconnect\Api\Requests\Chat\SetTyping;
use Eele94\Wppconnect\Api\Requests\Chat\StarMessage;
use Eele94\Wppconnect\Api\Requests\Chat\SubscribePresence;
use Eele94\Wppconnect\Api\Requests\Chat\SubscribePresenceCopy;
use Eele94\Wppconnect\Api\Requests\Chat\TemporaryMessages;
use Eele94\Wppconnect\Api\Requests\Chat\UnreadMessages;
use Eele94\Wppconnect\Api\Resource;
use Saloon\Contracts\Response;

class Chat extends Resource
{
	/**
	 * @param string $session
	 */
	public function allChats(string $session): Response
	{
		return $this->connector->send(new AllChats($session));
	}


	/**
	 * @param string $session
	 * @param mixed $phone
	 */
	public function chatById(string $session, mixed $phone): Response
	{
		return $this->connector->send(new ChatById($session, $phone));
	}


	/**
	 * @param string $session
	 * @param mixed $phone
	 */
	public function chatIsOnLine(string $session, mixed $phone): Response
	{
		return $this->connector->send(new ChatIsOnLine($session, $phone));
	}


	/**
	 * @param string $session
	 */
	public function allChatsWhitMessages(string $session): Response
	{
		return $this->connector->send(new AllChatsWhitMessages($session));
	}


	/**
	 * @param string $session
	 * @param string $phone
	 * @param string $isGroup
	 * @param string $includeMe
	 * @param string $includeNotifications
	 */
	public function allMessagesInChat(
		string $session,
		string $phone,
		?string $isGroup,
		?string $includeMe,
		?string $includeNotifications,
	): Response
	{
		return $this->connector->send(new AllMessagesInChat($session, $phone, $isGroup, $includeMe, $includeNotifications));
	}


	/**
	 * @param string $session
	 * @param mixed $phone
	 */
	public function allNewMessages(string $session, mixed $phone): Response
	{
		return $this->connector->send(new AllNewMessages($session, $phone));
	}


	/**
	 * @param string $session
	 */
	public function unreadMessages(string $session): Response
	{
		return $this->connector->send(new UnreadMessages($session));
	}


	/**
	 * @param string $session
	 */
	public function allUnreadMessages(string $session): Response
	{
		return $this->connector->send(new AllUnreadMessages($session));
	}


	/**
	 * @param string $session
	 * @param mixed $phone
	 */
	public function lastSeen(string $session, mixed $phone): Response
	{
		return $this->connector->send(new LastSeen($session, $phone));
	}


	/**
	 * @param string $session
	 * @param mixed $type
	 */
	public function listMutes(string $session, mixed $type): Response
	{
		return $this->connector->send(new ListMutes($session, $type));
	}


	/**
	 * @param string $session
	 * @param mixed $phone
	 */
	public function archiveChat(string $session, mixed $phone): Response
	{
		return $this->connector->send(new ArchiveChat($session, $phone));
	}


	/**
	 * @param string $session
	 * @param mixed $phone
	 */
	public function clearChat(string $session, mixed $phone): Response
	{
		return $this->connector->send(new ClearChat($session, $phone));
	}


	/**
	 * @param string $session
	 * @param mixed $phone
	 */
	public function deleteChat(string $session, mixed $phone): Response
	{
		return $this->connector->send(new DeleteChat($session, $phone));
	}


	/**
	 * @param string $session
	 * @param mixed $phone
	 * @param mixed $messageId
	 */
	public function deleteMessage(string $session, mixed $phone, mixed $messageId): Response
	{
		return $this->connector->send(new DeleteMessage($session, $phone, $messageId));
	}


	/**
	 * @param string $session
	 * @param mixed $phone
	 */
	public function markUnseen(string $session, mixed $phone): Response
	{
		return $this->connector->send(new MarkUnseen($session, $phone));
	}


	/**
	 * @param string $session
	 * @param mixed $phone
	 * @param mixed $messageId
	 */
	public function pinChat(string $session, mixed $phone, mixed $messageId): Response
	{
		return $this->connector->send(new PinChat($session, $phone, $messageId));
	}


	/**
	 * @param string $session
	 * @param mixed $phone
	 * @param mixed $time
	 * @param mixed $type
	 */
	public function sendMute(string $session, mixed $phone, mixed $time, mixed $type): Response
	{
		return $this->connector->send(new SendMute($session, $phone, $time, $type));
	}


	/**
	 * @param string $session
	 * @param mixed $phone
	 * @param mixed $chatstate
	 */
	public function chatState(string $session, mixed $phone, mixed $chatstate): Response
	{
		return $this->connector->send(new ChatState($session, $phone, $chatstate));
	}


	/**
	 * @param string $session
	 * @param mixed $phone
	 */
	public function sendSeen(string $session, mixed $phone): Response
	{
		return $this->connector->send(new SendSeen($session, $phone));
	}


	/**
	 * @param string $session
	 * @param mixed $phone
	 * @param mixed $value
	 */
	public function temporaryMessages(string $session, mixed $phone, mixed $value): Response
	{
		return $this->connector->send(new TemporaryMessages($session, $phone, $value));
	}


	/**
	 * @param string $session
	 * @param mixed $phone
	 * @param mixed $value
	 * @param mixed $isGrup
	 */
	public function setTyping(string $session, mixed $phone, mixed $value, mixed $isGrup): Response
	{
		return $this->connector->send(new SetTyping($session, $phone, $value, $isGrup));
	}


	/**
	 * @param string $session
	 * @param mixed $messageId
	 * @param mixed $star
	 */
	public function starMessage(string $session, mixed $messageId, mixed $star): Response
	{
		return $this->connector->send(new StarMessage($session, $messageId, $star));
	}


	/**
	 * @param string $session
	 * @param mixed $phone
	 * @param mixed $isGroup
	 * @param mixed $all
	 */
	public function subscribePresence(string $session, mixed $phone, mixed $isGroup, mixed $all): Response
	{
		return $this->connector->send(new SubscribePresence($session, $phone, $isGroup, $all));
	}


	/**
	 * @param string $session
	 * @param mixed $phone
	 * @param mixed $isGroup
	 * @param mixed $all
	 */
	public function subscribePresenceCopy(string $session, mixed $phone, mixed $isGroup, mixed $all): Response
	{
		return $this->connector->send(new SubscribePresenceCopy($session, $phone, $isGroup, $all));
	}
}
