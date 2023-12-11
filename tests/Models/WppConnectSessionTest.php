<?php

use Eele94\Wppconnect\Models\WppconnectSession;

it('can create a model', function () {
    WppconnectSession::create([
        'token' => 'kaas',
        'session' => 'kaas',
        'init' => true,
    ]);

    $this->assertDatabaseCount('wppconnect_sessions', 1);
});
