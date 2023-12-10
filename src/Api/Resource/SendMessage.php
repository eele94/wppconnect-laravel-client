<?php

namespace Eele94\Wppconnect\Api\Resource;

use Eele94\Wppconnect\Api\Requests\SendMessage\ForwardMessagesEncaminharMensagem;
use Eele94\Wppconnect\Api\Requests\SendMessage\SendContactVcard;
use Eele94\Wppconnect\Api\Requests\SendMessage\SendFile;
use Eele94\Wppconnect\Api\Requests\SendMessage\SendFileBase64;
use Eele94\Wppconnect\Api\Requests\SendMessage\SendImage;
use Eele94\Wppconnect\Api\Requests\SendMessage\SendImageStorie;
use Eele94\Wppconnect\Api\Requests\SendMessage\SendLinkPreview;
use Eele94\Wppconnect\Api\Requests\SendMessage\SendLocation;
use Eele94\Wppconnect\Api\Requests\SendMessage\SendMentioned;
use Eele94\Wppconnect\Api\Requests\SendMessage\SendMessage as SendMessageRequest;
use Eele94\Wppconnect\Api\Requests\SendMessage\SendReply;
use Eele94\Wppconnect\Api\Requests\SendMessage\SendTextStorie;
use Eele94\Wppconnect\Api\Requests\SendMessage\SendVideoStorie;
use Eele94\Wppconnect\Api\Resource;
use Saloon\Contracts\Response;

class SendMessage extends Resource
{
    public function sendFileBase64(string $session, mixed $phone, mixed $base64, mixed $isGroup): Response
    {
        return $this->connector->send(new SendFileBase64($session, $phone, $base64, $isGroup));
    }

    public function sendReply(string $session, mixed $phone, mixed $message, mixed $messageId, mixed $isGroup): Response
    {
        return $this->connector->send(new SendReply($session, $phone, $message, $messageId, $isGroup));
    }

    public function sendMessage(string $session, mixed $phone, mixed $message, mixed $isGroup): Response
    {
        return $this->connector->send(new SendMessageRequest($session, $phone, $message, $isGroup));
    }

    public function forwardMessagesEncaminharMensagem(string $session, mixed $phone, mixed $messageId): Response
    {
        return $this->connector->send(new ForwardMessagesEncaminharMensagem($session, $phone, $messageId));
    }

    public function sendContactVcard(string $session, mixed $phone, mixed $contactsId): Response
    {
        return $this->connector->send(new SendContactVcard($session, $phone, $contactsId));
    }

    public function sendLinkPreview(string $session, mixed $phone, mixed $url, mixed $caption): Response
    {
        return $this->connector->send(new SendLinkPreview($session, $phone, $url, $caption));
    }

    public function sendLocation(string $session, mixed $phone, mixed $lat, mixed $lng, mixed $title): Response
    {
        return $this->connector->send(new SendLocation($session, $phone, $lat, $lng, $title));
    }

    public function sendMentioned(
        string $session,
        mixed $phone,
        mixed $message,
        mixed $mentioned,
        mixed $isGruop,
    ): Response {
        return $this->connector->send(new SendMentioned($session, $phone, $message, $mentioned, $isGruop));
    }

    public function sendFile(string $session): Response
    {
        return $this->connector->send(new SendFile($session));
    }

    public function sendImage(string $session, mixed $phone, mixed $base64, mixed $isGroup): Response
    {
        return $this->connector->send(new SendImage($session, $phone, $base64, $isGroup));
    }

    public function sendTextStorie(string $session, mixed $text): Response
    {
        return $this->connector->send(new SendTextStorie($session, $text));
    }

    public function sendVideoStorie(string $session, mixed $path, mixed $caption): Response
    {
        return $this->connector->send(new SendVideoStorie($session, $path, $caption));
    }

    public function sendImageStorie(string $session, mixed $path, mixed $caption): Response
    {
        return $this->connector->send(new SendImageStorie($session, $path, $caption));
    }
}
