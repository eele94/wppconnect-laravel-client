<?php

// config for Eele94/Wppconnect
return [
    'session' => env('WPPCONNECT_SESSION'),
    'base_uri' => env('WPPCONNECT_BASE_URI', 'http://localhost:21465/api'),
    'secret_key' => env('WPPCONNECT_SECRET_KEY', 'cheesypoof'),
];
