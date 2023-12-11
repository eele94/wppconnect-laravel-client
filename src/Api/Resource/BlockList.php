<?php

namespace Eele94\Wppconnect\Api\Resource;

use Eele94\Wppconnect\Api\Requests\BlockList\BlockContact;
use Eele94\Wppconnect\Api\Requests\BlockList\BlockList as BlockListRequest;
use Eele94\Wppconnect\Api\Requests\BlockList\UnBlockContact;
use Eele94\Wppconnect\Api\Resource;
use Saloon\Contracts\Response;

class BlockList extends Resource
{
    public function blockContact(string $session, mixed $phone): Response
    {
        return $this->connector->send(new BlockContact($session, $phone));
    }

    public function unBlockContact(string $session, mixed $phone): Response
    {
        return $this->connector->send(new UnBlockContact($session, $phone));
    }

    public function blockList(string $session): Response
    {
        return $this->connector->send(new BlockListRequest($session));
    }
}
