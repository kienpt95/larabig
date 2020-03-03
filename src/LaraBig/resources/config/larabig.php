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
    | Client ID
    |--------------------------------------------------------------------------
    |
    | Nothing in your eyes ai ai ai aiiiii
    |
    */
    'client_id' => env('LARABIG_APP_CLIENT_ID', ''),

    /*
    |--------------------------------------------------------------------------
    | Secret Key
    |--------------------------------------------------------------------------
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */
    'secret_key' => env('LARABIG_APP_SECRET',''),

    /*
    |--------------------------------------------------------------------------
    | Multi user support
    |--------------------------------------------------------------------------
    | enabling multi-user support will allow store admins to
    | manually authorize users – other than the store owner – to load the app
    |
    */
    'enable-multi-user' => env('LARABIG_ENABLE_MULTI_USER',false),

    /*
    |--------------------------------------------------------------------------
    | BigCommerce URL for request token
    |--------------------------------------------------------------------------
    |
    | note for this config
    |
    */
    'url_request_token' => env('LARABIG_REQUEST_TOKEN_URL', 'https://login.bigcommerce.com/oauth2/token'),

    /*
    |--------------------------------------------------------------------------
    | BigCommerce API URL
    |--------------------------------------------------------------------------
    |
    | note for this config
    |
    */
    'api_url' => env('LARABIG_API_URL', 'https://api.bigcommerce.com'),

];
