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
use Saloon\Http\Response;

class Chat extends Resource
{
    public function allChats(string $session): Response
    {
        return $this->connector->send(new AllChats($session));
    }

    public function chatById(string $session, mixed $phone): Response
    {
        return $this->connector->send(new ChatById($session, $phone));
    }

    public function chatIsOnLine(string $session, mixed $phone): Response
    {
        return $this->connector->send(new ChatIsOnLine($session, $phone));
    }

    public function allChatsWhitMessages(string $session): Response
    {
        return $this->connector->send(new AllChatsWhitMessages($session));
    }

    public function allMessagesInChat(
        string $session,
        string $phone,
        ?string $isGroup,
        ?string $includeMe,
        ?string $includeNotifications,
    ): Response {
        return $this->connector->send(new AllMessagesInChat($session, $phone, $isGroup, $includeMe, $includeNotifications));
    }

    public function allNewMessages(string $session, mixed $phone): Response
    {
        return $this->connector->send(new AllNewMessages($session, $phone));
    }

    public function unreadMessages(string $session): Response
    {
        return $this->connector->send(new UnreadMessages($session));
    }

    public function allUnreadMessages(string $session): Response
    {
        return $this->connector->send(new AllUnreadMessages($session));
    }

    public function lastSeen(string $session, mixed $phone): Response
    {
        return $this->connector->send(new LastSeen($session, $phone));
    }

    public function listMutes(string $session, mixed $type): Response
    {
        return $this->connector->send(new ListMutes($session, $type));
    }

    public function archiveChat(string $session, mixed $phone): Response
    {
        return $this->connector->send(new ArchiveChat($session, $phone));
    }

    public function clearChat(string $session, mixed $phone): Response
    {
        return $this->connector->send(new ClearChat($session, $phone));
    }

    public function deleteChat(string $session, mixed $phone): Response
    {
        return $this->connector->send(new DeleteChat($session, $phone));
    }

    public function deleteMessage(string $session, mixed $phone, mixed $messageId): Response
    {
        return $this->connector->send(new DeleteMessage($session, $phone, $messageId));
    }

    public function markUnseen(string $session, mixed $phone): Response
    {
        return $this->connector->send(new MarkUnseen($session, $phone));
    }

    public function pinChat(string $session, mixed $phone, mixed $messageId): Response
    {
        return $this->connector->send(new PinChat($session, $phone, $messageId));
    }

    public function sendMute(string $session, mixed $phone, mixed $time, mixed $type): Response
    {
        return $this->connector->send(new SendMute($session, $phone, $time, $type));
    }

    public function chatState(string $session, mixed $phone, mixed $chatstate): Response
    {
        return $this->connector->send(new ChatState($session, $phone, $chatstate));
    }

    public function sendSeen(string $session, mixed $phone): Response
    {
        return $this->connector->send(new SendSeen($session, $phone));
    }

    public function temporaryMessages(string $session, mixed $phone, mixed $value): Response
    {
        return $this->connector->send(new TemporaryMessages($session, $phone, $value));
    }

    public function setTyping(string $session, mixed $phone, mixed $value, mixed $isGrup): Response
    {
        return $this->connector->send(new SetTyping($session, $phone, $value, $isGrup));
    }

    public function starMessage(string $session, mixed $messageId, mixed $star): Response
    {
        return $this->connector->send(new StarMessage($session, $messageId, $star));
    }

    public function subscribePresence(string $session, mixed $phone, mixed $isGroup, mixed $all): Response
    {
        return $this->connector->send(new SubscribePresence($session, $phone, $isGroup, $all));
    }

    public function subscribePresenceCopy(string $session, mixed $phone, mixed $isGroup, mixed $all): Response
    {
        return $this->connector->send(new SubscribePresenceCopy($session, $phone, $isGroup, $all));
    }
}
