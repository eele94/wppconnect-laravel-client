<?php

namespace Eele94\Wppconnect\Api\Resource;

use Eele94\Wppconnect\Api\Requests\PhoneStatus\BatteryStatus;
use Eele94\Wppconnect\Api\Requests\PhoneStatus\HostDevice;
use Eele94\Wppconnect\Api\Resource;
use Saloon\Contracts\Response;

class PhoneStatus extends Resource
{
    public function batteryStatus(string $session): Response
    {
        return $this->connector->send(new BatteryStatus($session));
    }

    public function hostDevice(string $session): Response
    {
        return $this->connector->send(new HostDevice($session));
    }
}
