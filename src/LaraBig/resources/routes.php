<?php

use Illuminate\Routing\Route;

Route::group(
    ['prefix' => config('larabig.prefix'), 'middleware' => ['web']], function () {

        /*
        |---------------------------------------------------
        | Install App Route
        |---------------------------------------------------
        |
        */
        Route::get(
            'install',
            'Smartosc\LaraBig\Http\Controllers\LaraBigController@install'
        )->middleware('larabig.x-frame-all')->name('larabig.install');

        /*
        |---------------------------------------------------
        | Load App Route
        |---------------------------------------------------
        |
        */
        Route::get(
            'load',
            'Smartosc\LaraBig\Http\Controllers\LaraBigController@load'
        )->middleware('larabig.auth.admin')->name('larabig.load');

        /*
        |---------------------------------------------------
        | Uninstall App Route
        |---------------------------------------------------
        |
        */
        Route::get(
            'uninstall',
            'Smartosc\LaraBig\Http\Controllers\LaraBigController@uninstall'
        )->middleware('larabig.auth.admin')->name('larabig.uninstall');
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
