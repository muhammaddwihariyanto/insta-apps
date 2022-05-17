<?php

$settingpasca['username'] = "081231435045";
//untuk development/testing
$settingpasca['api_key'] = "216600bfc3c50687";
//
//
//apikey production => 363600e28bdea89c363
// $settingpascadev['api_key'] = "363600e28bdea89c363";
$settingpasca['ref_id'] = uniqid('');


$settingpasca['sign_balance'] = md5($settingpasca['username'] . $settingpasca['api_key'] . 'bl');
$settingpasca['sign_pricelist'] = md5($settingpasca['username'] . $settingpasca['api_key'] . 'pl');
$settingpasca['sign_topup'] = md5($settingpasca['username'] . $settingpasca['api_key'] . $settingpasca['ref_id']);

//testing
$settingpasca['url'] = "https://testpostpaid.mobilepulsa.net/api/v1/bill/check";

// $settingpasca['url'] = "https://api.mobilepulsa.net/v1/legacy/index";

$settingpasca['json_balance'] = [
    'commands' => "balance",
    'username' => $settingpasca['username'],
    'sign' => $settingpasca['sign_balance']
];
$settingpasca['json_pricelist'] = [
    'commands' => "pricelist",
    'username' => $settingpasca['username'],
    'sign' => $settingpasca['sign_pricelist']
];


return $settingpasca;
