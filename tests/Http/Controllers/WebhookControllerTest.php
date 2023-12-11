<?php

it('can reach the store endpoint', function () {
    $this->post(route('wppconnect.webhook.store'))
        ->assertStatus(403);
});
it('can authenticate using secretkey', function () {
    $this->post(route('wppconnect.webhook.store', [
        'secret' => config('wppconnect.secret_key'),
    ]))
        ->assertOk();
});
