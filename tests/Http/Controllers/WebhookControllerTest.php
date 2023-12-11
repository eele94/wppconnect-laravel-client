<?php

it('can reach the store endpoint', function () {
    $this->post(route('wppconnect.webhook.store'))
        ->assertOk();
    expect(true)->toBeTrue();
});
