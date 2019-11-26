<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'firebase' => [
        'api_key' => 'AIzaSyC8Zogij_YoPMsOEEIuvjYKOmPNhXpgbPs',
        'auth_domain' => 'manote-425e4.firebaseapp.com',
        'database_url' => 'https://manote-425e4.firebaseio.com',
        'storage_bucket' => 'manote-425e4.appspot.com',
        'project_id' => 'manote-425e4',
        'messaging_sender_id' => '1048669011182',
        'app_id' => '1:1048669011182:web:9888b17009eeb6261a07ff',
    ],

];
