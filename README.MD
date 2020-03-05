BigCommerce Library integration with Laravel
---
This package make easy way to quickly build new Big Commerce App with Laravel.

### Install
- Require package: ``composer require smartosc\larabig``
- Migrate database: ``php artisan migrate``

### Uses:
1. Inject `LaraBig` class into constructor when using package to call api:
    ```php
    public function __construct(LaraBig $laraBig) {
        $this->laraBig = $laraBig;
    }
    ```
2. Using by call:
    ```php
    $this->laraBig
      ->setStore('Store Model')
      ->catalog
      ->product
      ->all()
    ```
### Development note:
- All of class need create contract interface in the folder: `LaraBig\Contracts` and bind in `LaraBigProvider`

### TODO
- Build event handle
- Webhook handle
