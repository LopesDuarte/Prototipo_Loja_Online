<?php
	define('BASEURL', $_SERVER['DOCUMENT_ROOT'].'/ecommerce/');
    define('CART_COOKIE', 'SBqewdsasd1333fF3s');
    define('CART_COOKIE_EXPIRE', time() + (86400 * 30));
    define('TAXRATE', .029);

    define('CURRENCY', 'chf');
    define('CHECKOUTMODE','TEST'); //CHANGE FOR LIVE WHEN READY

    if(CHECKOUTMODE == 'TEST'){
        define('STRIPE_PRIVATE','sk_test_tMig4JZrgH3frY3kSylsDWjL');
        define('STRIPE_PUBLIC','pk_test_43IuuEw9iNYOGYM2e4UtjQDt');
    }

    if(CHECKOUTMODE == 'LIVE'){
        define('STRIPE_PRIVATE','');
        define('STRIPE_PUBLIC','');
    }