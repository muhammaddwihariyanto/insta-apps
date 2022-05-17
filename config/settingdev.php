<?php

$settingdev['username'] = "081231435045";
//untuk development/testing
$settingdev['api_key'] = "216600bfc3c50687";
//
//
//apikey production => 363600e28bdea89c363
// $settingdevdev['api_key'] = "363600e28bdea89c363";
$settingdev['ref_id'] = uniqid('');


$settingdev['sign_balance'] = md5($settingdev['username'] . $settingdev['api_key'] . 'bl');
$settingdev['sign_pricelist'] = md5($settingdev['username'] . $settingdev['api_key'] . 'pl');
$settingdev['sign_topup'] = md5($settingdev['username'] . $settingdev['api_key'] . $settingdev['ref_id']);

//testing
$settingdev['url'] = "https://testprepaid.mobilepulsa.net/v1/legacy/index";

// $settingdev['url'] = "https://api.mobilepulsa.net/v1/legacy/index";

$settingdev['json_balance'] = [
    'commands' => "balance",
    'username' => $settingdev['username'],
    'sign' => $settingdev['sign_balance']
];
$settingdev['json_pricelist'] = [
    'commands' => "pricelist",
    'username' => $settingdev['username'],
    'sign' => $settingdev['sign_pricelist']
];


return $settingdev;
