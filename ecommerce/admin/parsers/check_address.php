<?php
    require_once $_SERVER['DOCUMENT_ROOT']. '/ecommerce/core/init.php';
    $name = sanitize($_POST['full_name']);
    $email = sanitize($_POST['email']);
    $street = sanitize($_POST['street']);
    $street2 = sanitize($_POST['street2']);
    $city = sanitize($_POST['city']);
    $zip_code = sanitize($_POST['zip_code']);
    $country = sanitize($_POST['country']);
    $errors = array();
    $required = array(
        'full_name' => 'Full Name',
        'email'     => 'Email',
        'street'    => 'Street Address',
        'city'      => 'City',
        'zip_code'  => 'Zip Code',
        'country'   => 'Country',
    );
//Check if all required fields are filled
    foreach($required as $f => $d){
        if(empty($_POST[$f]) || $_POST[$f] == ''){
            $errors[] = $d.' is required';
        }
    }
    if(!empty($errors)){
        echo display_errors($errors);
    }else{
        echo 'passed';
    }
    ?>
