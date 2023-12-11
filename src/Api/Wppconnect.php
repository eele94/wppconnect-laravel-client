<?php

namespace Eele94\Wppconnect\Api;

use Eele94\Wppconnect\Api\Resource\Auth;
use Eele94\Wppconnect\Api\Resource\BlockList;
use Eele94\Wppconnect\Api\Resource\Chat;
use Eele94\Wppconnect\Api\Resource\Contact;
use Eele94\Wppconnect\Api\Resource\Group;
use Eele94\Wppconnect\Api\Resource\PhoneStatus;
use Eele94\Wppconnect\Api\Resource\Profile;
use Eele94\Wppconnect\Api\Resource\SendMessage;
use Saloon\Http\Connector;

/**
 * WPPConnect API REST
 */
class Wppconnect extends Connector
{
    public function resolveBaseUrl(): string
    {
        return 'http://localhost:21465/api';
    }


    public function auth(): Auth
    {
        return new Auth($this);
    }


    public function blockList(): BlockList
    {
        return new BlockList($this);
    }


    public function chat(): Chat
    {
        return new Chat($this);
    }


    public function contact(): Contact
    {
        return new Contact($this);
    }


    public function group(): Group
    {
        return new Group($this);
    }


    public function phoneStatus(): PhoneStatus
    {
        return new PhoneStatus($this);
    }


    public function profile(): Profile
    {
        return new Profile($this);
    }


    public function sendMessage(): SendMessage
    {
        return new SendMessage($this);
    }
}
