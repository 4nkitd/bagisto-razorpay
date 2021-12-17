# Bagisto/Razorpay

### Extension to Integrate Razorpay payment gateway with bagisto laravel ecommerce.

<img src="https://razorpay.com/assets/razorpay-logo.svg" width="200" height="100" style="background: #fff; padding: 10px;"> <img src="https://laravel.com/img/logomark.min.svg" width="200" height="100"> <img src="https://devdocs.bagisto.com/logo.png?__WB_REVISION__=7623b31ea8912e775aa903f3da491179"  height="100"> 

## Reason of existence
their is are a few razorpay integration extension are present on github but the installation process is not good 

## Install

requirements
```bash
    composer require razorpay/razorpay
```

use composer
```bash
    composer require dagar/razorpay-bagisto
```

Compose Views
```bash
    php artisan optimize
    php artisan route:cache
    php artisan config:cache
    php artisan view:cache

    php artisan migrate
```

## Configure

Route `$BASE_URI$/admin/configuration/sales/paymentmethods`

<img src="https://i.imgur.com/oQ7bzGk.png"  width="100%"> 


## Issues if you find any issue you can report them to the github issues page.
