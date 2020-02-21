<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Prefix
    |--------------------------------------------------------------------------
    |
    | This option allows you to set a prefix for URLs.
    | Useful for multiple apps using the same database instance.
    |
    */

    'prefix' => env('LARABIG_PREFIX', 'app'),

    /*
    |--------------------------------------------------------------------------
    | Client ID Key
    |--------------------------------------------------------------------------
    |This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */
    'client_id_key'=>env('BC_APP_CLIENT_ID',null),

    /*
    |--------------------------------------------------------------------------
    | Secret Key
    |--------------------------------------------------------------------------
    |This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */
    'secret_key'=>env('BC_APP_SECRET',null),

    /*
    |--------------------------------------------------------------------------
    | BigCommerce URL for request token
    |--------------------------------------------------------------------------
    |
    | note for this config
    |
    */
    'url_request_token' => 'https://login.bigcommerce.com/oauth2/token',

    /*
    |--------------------------------------------------------------------------
    | BigCommerce API URL
    |--------------------------------------------------------------------------
    |
    | note for this config
    |
    */
    'api_url' => 'https://api.bigcommerce.com',
];
