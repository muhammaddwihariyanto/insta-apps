<?php

$setting['username'] = "081231435045";
//untuk development/testing
//$setting['api_key'] = "216600bfc3c50687";
//
//
//apikey production => 363600e28bdea89c363
$setting['api_key'] = "363600e28bdea89c363";
$setting['ref_id'] = uniqid('');


$setting['sign_balance'] = md5($setting['username'] . $setting['api_key'] . 'bl');
$setting['sign_pricelist'] = md5($setting['username'] . $setting['api_key'] . 'pl');
$setting['sign_topup'] = md5($setting['username'] . $setting['api_key'] . $setting['ref_id']);

//testing
// $setting['url'] = "https://testprepaid.mobilepulsa.net/v1/legacy/index";

$setting['url'] = "https://api.mobilepulsa.net/v1/legacy/index";

$setting['json_balance'] = [
    'commands' => "balance",
    'username' => $setting['username'],
    'sign' => $setting['sign_balance']
];
$setting['json_pricelist'] = [
    'commands' => "pricelist",
    'username' => $setting['username'],
    'sign' => $setting['sign_pricelist']
];


return $setting;
