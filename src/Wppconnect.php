<?php

namespace Eele94\Wppconnect;

// Extend from the generated file so that we can simply generate it again and keep the custom functionality
class Wppconnect extends \Eele94\Wppconnect\Api\Wppconnect
{
    // Overwrite from config instead of generated file
    public function resolveBaseUrl(): string
    {
        return config('wppconnect.base_uri');
    }
}
