<?php

namespace Eele94\Wppconnect\Api\Resource;

use Eele94\Wppconnect\Api\Requests\Contact\CheckNumberStatus;
use Eele94\Wppconnect\Api\Requests\Contact\GetAllContacts;
use Eele94\Wppconnect\Api\Requests\Contact\GetContact;
use Eele94\Wppconnect\Api\Requests\Contact\GetNumberProfile;
use Eele94\Wppconnect\Api\Requests\Contact\GetProfilePicture;
use Eele94\Wppconnect\Api\Requests\Contact\GetProfileStatus;
use Eele94\Wppconnect\Api\Resource;
use Saloon\Contracts\Response;

class Contact extends Resource
{
    /**
     * @param  string  $phone
     */
    public function checkNumberStatus(string $session, mixed $phone): Response
    {
        return $this->connector->send(new CheckNumberStatus($session, $phone, $phone));
    }

    public function getAllContacts(string $session): Response
    {
        return $this->connector->send(new GetAllContacts($session));
    }

    public function getContact(string $session): Response
    {
        return $this->connector->send(new GetContact($session));
    }

    public function getNumberProfile(string $session): Response
    {
        return $this->connector->send(new GetNumberProfile($session));
    }

    public function getProfilePicture(string $session): Response
    {
        return $this->connector->send(new GetProfilePicture($session));
    }

    public function getProfileStatus(string $session): Response
    {
        return $this->connector->send(new GetProfileStatus($session));
    }
}
