<?php

use Eele94\Wppconnect\Models\WppconnectWebhook;

it('can create a model', function () {
    WppconnectWebhook::create([
        'event' => 'kaas',
        'session' => 'kaas',
        'data' => [],
    ]);

    $this->assertDatabaseCount('wppconnect_webhooks', 1);
});
