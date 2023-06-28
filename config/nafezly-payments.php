<?php
return [
    #PAYMOB
    'PAYMOB_API_KEY' => env('PAYMOB_API_KEY'),
    'PAYMOB_INTEGRATION_ID' => env('PAYMOB_INTEGRATION_ID'),
    'PAYMOB_IFRAME_ID' => env('PAYMOB_IFRAME_ID'),
    'PAYMOB_HMAC' => env('PAYMOB_HMAC'),
    'PAYMOB_CURRENCY' => env('PAYMOB_CURRENCY', "EGP"),


    'VERIFY_ROUTE_NAME' => "payment-verify",
    'APP_NAME' => env('APP_NAME'),


];
