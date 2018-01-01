<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '376393106141378',
        'client_secret' => 'a9c1fa1495a0ef26a1ce2be9921e1285',
        'redirect' => 'http://sellbyrent.dev/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => '254918724285-9i6ddshpmci50ua5c4por3vlq84rcun5.apps.googleusercontent.com',
        'client_secret' => 'HkR4M64uYrq86GPqdmxz1VJd',
        'redirect' => 'http://sellbyrent.dev/auth/google/callback',
    ],

];
