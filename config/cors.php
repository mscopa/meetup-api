<?php
// config/cors.php

return [

    'paths' => ['api/*', 'login', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['https://super-meetup-2025.netlify.app', 'http://localhost:5173', 'http://localhost:4173', 'http://127.0.0.1:5500'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,

];