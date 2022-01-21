<?php

//Credentials

define("BASE_URL", "https://Openapi.5paisa.com/VendorsAPI/Service1.svc/");
define("APP_NAME", "{GET FROM 5PAISA}");
define("APP_VERSION", "1.0");
define("KEY", "{GET FROM 5PAISA}");
define("OS_NAME", "Android");
define("USER_ID", "{GET FROM 5PAISA}");
define("PASSWORD", "{GET FROM 5PAISA}");
define("EMAIL_ID", "{GET FROM 5PAISA}"); //NOTE: If not encrypted then do encrypted by AesEncontroller's encrypt method
define("EMAIL_PASSWORD", "{GET FROM 5PAISA}");//NOTE: If not encrypted then do encrypted by AesEncontroller's encrypt method
define("MY2PIN", "{GET FROM 5PAISA}");//NOTE: If not encrypted then do encrypted by AesEncontroller's encrypt method
define("CLIENT_CODE", "{GET FROM 5PAISA}");
define("ENC_KEY", "{GET FROM 5PAISA}");


define('AES_256_CBC', 'aes-256-cbc');
define('AES_IV', [83, 71, 26, 58, 54, 35, 22, 11, 83, 71, 26, 58, 54, 35, 22, 11]);


/*
NOTE: Got cooki in login api 'LoginRequestMobileNewbyEmail' response's header & set in cooki or session & use for other api call by passing it into header like
'Cookie: 5paisacookie=nzqxurlfotqhywnklfb0x3pk'
Here We have set as  define Constant & use in default header.
*/
define("FIVEPAISA_COOKIE", "5paisacookie=nzqxurlfotqhywnklfb0x3pk");


//Request code According to API

/*LOGIN*/
define("REQUEST_CODE_LOGIN", "5PLoginV2");

/*MARKET FEEDS*/
define("REQUEST_CODE_MARKETFEED", "5PMF");

/*ORDER*/
define("REQUEST_CODE_OREDER_REQUEST", "5POrdReq");
define("REQUEST_CODE_OREDER_STATUS", "5POrdStatus");
define("REQUEST_CODE_TRADE_INFO", "5PTrdInfo");
define("REQUEST_CODE_TRADE_BOOK", "5PTrdBkV1");
define("REQUEST_CODE_SMO_ORDER_REQUEST", "5PSMOOrd");
define("REQUEST_CODE_MODIFY_SMO_ORDER", "5PSModMOOrd");

/*REPORT*/
define("REQUEST_CODE_MARGIN", "5PMarginV3");
define("REQUEST_CODE_ORDER_BOOK", "5POrdBkV2");
define("REQUEST_CODE_HOLDING", "5PHoldingV2");
define("REQUEST_CODE_POSITION", "5PNPNWV1");

/*WEBSOCKET*/
define("REQUEST_WEBSOCKET_LOGIN", "5PLoginV4");
define("REQUEST_WEBSOCKET_LOGINCHECK", "5PLoginCheck");

