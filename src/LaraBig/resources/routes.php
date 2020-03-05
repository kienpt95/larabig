<?php

Route::middleware(['web','larabig.x-frame-all'])
    ->namespace('Smartosc\LaraBig\Http\Controllers')
    ->prefix(config('larabig.prefix'))
    ->group(function () {
        /*
        |---------------------------------------------------
        | Install App Route
        |---------------------------------------------------
        |
        */
        Route::get(
            'install',
            'LaraBigController@install'
        )->middleware('larabig.x-frame-all')->name('larabig.install');

        /*
        |---------------------------------------------------
        | Load App Route
        |---------------------------------------------------
        |
        */
        Route::get(
            'load',
            'LaraBigController@load'
        )->middleware('larabig.auth.admin')->name('larabig.load');

        /*
        |---------------------------------------------------
        | Uninstall App Route
        |---------------------------------------------------
        |
        */
        Route::get(
            'uninstall',
            'LaraBigController@uninstall'
        )->middleware('larabig.auth.admin')->name('larabig.uninstall');

        /*
        |---------------------------------------------------
        | Remove user Route
        |---------------------------------------------------
        |
        */
        if (config('larabig.enable-multi-user', false)) {
            Route::get(
                'remove-user',
                'LaraBigController@removeUser'
            )->middleware('larabig.auth.admin')->name('larabig.remove-user');
        }

        Route::post(
            'logout',
            'LaraBigController@logout'
        )->name('larabig.logout');
    }
);

Route::group(
    ['middleware' => ['api']], function () {

        /*
        |--------------------------------------------------------------------------
        | Webhook Handler
        |--------------------------------------------------------------------------
        |
        | Handles incoming webhooks.
        |
        */

        Route::post(
            '/webhook/{type}',
            'Smartosc\LaraBig\Http\Controllers\WebhookController@handle'
        )->middleware('larabig.auth.webhook')->name('larabig.webhook');
    }
);
