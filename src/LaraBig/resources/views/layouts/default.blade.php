<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <script src="//cdn.bigcommerce.com/jssdk/bc-sdk.js"></script>

    @yield('styles')
</head>
<body>
    <div class="app-wrapper">
        <div class="app-content">
            <main role="main">
                @yield('content')
            </main>
        </div>
    </div>

    @yield('scripts')
    <script type="text/javascript" defer>
        Bigcommerce.init({
            onLogout: function () {
                console.log('call logout request to flush session')
            }
        });
    </script>
</body>
</html>
