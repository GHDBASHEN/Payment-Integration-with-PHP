<?php

require __DIR__ . "/vendor/autoload.php";

$stripe_secret_key = "sk_test_51Qb2bRGpoWioXpuzPUenaMe59gfnKrjGqSf5zo9xkGV17yJsHSP9wVIljct4jdozF6R72PkwbYYWiFn0CBry3Ksu00P8ti84CY";

\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/Payment-Integration-with-PHP/success.php",
    "cancel_url" => "http://localhost/Payment-Integration-with-PHP/index.php",
    "locale" => "auto",
    "line_items" => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "usd",
                "unit_amount" => 18999,
                "product_data" => [
                    "name" => "Shoe"
                ]
            ]
        ]
               
    ]
]);

http_response_code(303);
header("Location: " . $checkout_session->url);