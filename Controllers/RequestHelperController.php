<?php
/**
 * Controller
 * PHP version 7.2
 *
 */
namespace Controllers;

/**
 * Class CommanHelperController
 *
 * @category Controllers
 * @package  5paisa.
 * @author   5paisa. <https://www.5paisa.com/developerapi/>
 * @license  https://www.5paisa.com/developerapi/ N/A
 * @link     https://www.5paisa.com/developerapi/
 */
class RequestHelperController
{

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
    }
    /**
      * Get all headers of request
      * @author 5paisa. <https://www.5paisa.com/developerapi/>
      * @return Array
      */
    public function requestParams($api, $requestCode)
    {
        switch ($api) {
            case 'login':
                return $this->loginRequestParam($requestCode);
                break;
            case 'websocket_login':
                return $this->webSocketLoginRequestParam($requestCode);
                break;
            case 'websocket_logincheck':
                return $this->webSocketLoginCheckRequestParam($requestCode);
                break;
            case 'report':
                return $this->reportApisRequestParam($requestCode);
                break;
            case 'marketFeed':
                return $this->marketFeedRequestParam($requestCode);
                break;
            case 'orderRequest':
                return $this->orderRequestParam($requestCode);
                break;
            case 'orderStatus':
                return $this->orderStatusRequestParam($requestCode);
                break;
            case 'tradeInfo':
                return $this->tradeInfoRequestParam($requestCode);
                break;
            case 'tradeBook':
                return $this->tradeBookRequestParam($requestCode);
                break;
            case 'smoorderrequest':
                return $this->smoOrderRequestParam($requestCode);
                break;
            case 'modifysmoorder':
                return $this->modifySmoOrderRequestParam($requestCode);
                break;
            default:
               # code...
               break;
        }
    }
    /**
      * Default request parameters for Customer Login API
      * @author 5paisa. <https://www.5paisa.com/developerapi/>
      * @return array
      */
    public function loginRequestParam($requestCode)
    {
        $aes = new AesEncyptionController();
        $headArry=array('appName'=>APP_NAME,
                        'appVer'=>APP_VERSION,
                        'key'=>KEY,
                        'osName'=>OS_NAME,
                        'requestCode'=>$requestCode,
                        'userId'=>USER_ID,
                        'password'=>PASSWORD,
                       );

        $bodyArry=array('Email_id'=>$aes->encrypt(EMAIL_ID),
                        'Password'=>$aes->encrypt(EMAIL_PASSWORD),
                        'LocalIP'=>'123.123.123.123',
                        'PublicIP'=>'123.123.123.12',
                        'HDSerailNumber'=>'',
                        'MACAddress'=>'',
                        'MachineID'=>'039377',
                        'VersionNo'=>'1.7',
                        'RequestNo'=>'1',
                        'My2PIN'=>$aes->encrypt(MY2PIN),
                        'ConnectionType'=>"1"
                        );

        $requestData = array("head"=>$headArry,"body"=>$bodyArry);
        return $requestData;
    }

    /**
      * Default request parameters for Customer Login API
      * @author 5paisa. <https://www.5paisa.com/developerapi/>
      * @return array
      */
      public function webSocketLoginRequestParam($requestCode)
      {
          $headArry=array('appName'=>APP_NAME,
                          'appVer'=>APP_VERSION,
                          'key'=>KEY,
                          'osName'=>OS_NAME,
                          'requestCode'=>$requestCode,
                          'userId'=>USER_ID,
                          'password'=>PASSWORD,
                         );
  
          $bodyArry=array('Email_id'=>EMAIL_ID,
                          'Password'=>EMAIL_PASSWORD,
                          'LocalIP'=>'123.123.123.123',
                          'PublicIP'=>'123.123.123.12',
                          'HDSerailNumber'=>'',
                          'MACAddress'=>'',
                          'MachineID'=>'039377',
                          'VersionNo'=>'1.7',
                          'RequestNo'=>'1',
                          'My2PIN'=>MY2PIN,
                          'ConnectionType'=>"1"
                          );
  
          $requestData = array("head"=>$headArry,"body"=>$bodyArry);
          return $requestData;
      }

      /**
      * Default request parameters for Customer Login API
      * @author 5paisa. <https://www.5paisa.com/developerapi/>
      * @return array
      */
      public function webSocketLoginCheckRequestParam($requestCode)
      {
          $headArry=array('appName'=>APP_NAME,
                          'appVer'=>APP_VERSION,
                          'key'=>KEY,
                          'osName'=>OS_NAME,
                          'requestCode'=>$requestCode,
                          'LoginId'=>CLIENT_CODE
                         );
  
          $bodyArry=array('RegistrationID'=>$_SESSION["JwtToken"]
                          );
  
          $requestData = array("head"=>$headArry,"body"=>$bodyArry);
          return $requestData;
      }

    /**
      * Report API request parameters
      * @author 5paisa. <https://www.5paisa.com/developerapi/>
      * @return array
      */
    public function reportApisRequestParam($requestCode)
    {
        $headArry=array('appName'=>APP_NAME,
                        'appVer'=>APP_VERSION,
                        'key'=>KEY,
                        'osName'=>OS_NAME,
                        'requestCode'=>$requestCode,
                        'userId'=>USER_ID,
                        'password'=>PASSWORD,
                       );

        $bodyArry=array('ClientCode'=>CLIENT_CODE);

        return $requestData = array("head"=>$headArry,"body"=>$bodyArry);
    }
    /**
      * Default request parameters for MarketFeed API
      * @author 5paisa. <https://www.5paisa.com/developerapi/>
      * @return array
      */
    public function marketFeedRequestParam($requestCode)
    {
        $headArry=array('appName'=>APP_NAME,
                        'appVer'=>APP_VERSION,
                        'key'=>KEY,
                        'osName'=>OS_NAME,
                        'requestCode'=>$requestCode,
                        'userId'=>USER_ID,
                        'password'=>PASSWORD,
                       );

        $subArray=array(
               ["Exch"=>"N","ExchType"=>"C","Symbol"=>"BHEL","Expiry"=>"","StrikePrice"=>"0","OptionType"=>""]
               ,["Exch"=>"N","ExchType"=>"C","Symbol"=>"RELIANCE","Expiry"=>"","StrikePrice"=>"0","OptionType"=>""],
               ["Exch"=>"N","ExchType"=>"C","Symbol"=>"AXISBANK","Expiry"=>"","StrikePrice"=>"0","OptionType"=>""]
        );

        $bodyArry=array('Count'=>1,
                        'MarketFeedData'=>$subArray,
                        'ClientLoginType'=>0,
                        'LastRequestTime'=>'/Date(0)/',
                        'RefreshRate'=>'H',
                        );

        $requestData = array("head"=>$headArry,"body"=>$bodyArry);
        return $requestData;
    }
    /**
      * Default request parameters for OrderRequest API
      * @author 5paisa. <https://www.5paisa.com/developerapi/>
      * @return array
      */
    public function orderRequestParam($requestCode)
    {
        $headArry=array('appName'=>APP_NAME,
                        'appVer'=>APP_VERSION,
                        'key'=>KEY,
                        'osName'=>OS_NAME,
                        'requestCode'=>$requestCode,
                        'userId'=>USER_ID,
                        'password'=>PASSWORD,
                       );

        $bodyArry=array('ClientCode'=>CLIENT_CODE,
                        "OrderFor"=> "P", 
                        "Exchange"=> "N",
                        "ExchangeType"=> "C",
                        "Price"=> 202, 
                        "OrderID"=> 0, 
                        "OrderType"=> "B", 
                        "Qty"=> 1, 
                        "OrderDateTime"=> "/Date(1620801976)/", 
                        "ScripCode"=> 1660, 
                        "AtMarket"=> "false", 
                        "RemoteOrderID"=> 1, 
                        "ExchOrderID"=> 0, 
                        "DisQty"=> 1, 
                        "IsStopLossOrder"=> "false", 
                        "IsVTD"=> "false", 
                        "IOCOrder"=> "false", 
                        "IsIntraday"=> "true", 
                        "PublicIP"=> "192.168.1.1", 
                        "AHPlaced"=> "N", 
                        "ValidTillDate"=> "/Date(1620888376)/", 
                        "TradedQty"=> 0, 
                        "OrderRequesterCode"=> "56565401", 
                        "AppSource"=> "4057", 
                        "iOrderValidity"=> 0, 
                        "StopLossPrice"=> 0
                      );

        $requestData = array("head"=>$headArry,"body"=>$bodyArry);
        return $requestData;
    }
    /**
      * Default request parameters for OrderStatus API
      * @author 5paisa. <https://www.5paisa.com/developerapi/>
      * @return array
      */
    public function orderStatusRequestParam($requestCode)
    {
        $headArry=array('appName'=>APP_NAME,
                        'appVer'=>APP_VERSION,
                        'key'=>KEY,
                        'osName'=>OS_NAME,
                        'requestCode'=>$requestCode,
                        'userId'=>USER_ID,
                        'password'=>PASSWORD,
                       );

        $bodyArry=array('ClientCode'=>CLIENT_CODE,
                        "OrdStatusReqList"=>array(["Exch"=>"N",
                        "ExchType"=>"C",
                        "ScripCode"=>1660,
                        "RemoteOrderID"=>1])
                      );

        $requestData = array("head"=>$headArry,"body"=>$bodyArry);
       
        return $requestData;
    }
    /**
      * Default request parameters for TradeInformation API
      * @author 5paisa. <https://www.5paisa.com/developerapi/>
      * @return array
      */
    public function tradeInfoRequestParam($requestCode)
    {
        $headArry=array('appName'=>APP_NAME,
                        'appVer'=>APP_VERSION,
                        'key'=>KEY,
                        'osName'=>OS_NAME,
                        'requestCode'=>$requestCode,
                        'userId'=>USER_ID,
                        'password'=>PASSWORD,
                       );

        $subArray=array(
               ["Exch"=>"N","ExchType"=>"C","ScripCode"=>11536,"RemoteOrderID"=>"5712977609111312242"],
               ["Exch"=>"N","ExchType"=>"C","ScripCode"=>842,"RemoteOrderID"=>"C14135409140114001"],
              ["Exch"=>"N","ExchType"=>"C","ScripCode"=>18011,"RemoteOrderID"=>"5712977613105215123"],
              ["Exch"=>"N","ExchType"=>"C","ScripCode"=>10440,"RemoteOrderID"=>"5712977613114258355"],
              ["Exch"=>"N","ExchType"=>"C","ScripCode"=>18011,"RemoteOrderID"=>"5712977613123434003"]
        );

        $bodyArry=array('ClientCode'=>CLIENT_CODE,
                        'TradeInformationList'=>$subArray
                        );

        $requestData = array("head"=>$headArry,"body"=>$bodyArry);
        return $requestData;
    }

    /**
      * Default request parameters for TradeBook API
      * @author 5paisa. <https://www.5paisa.com/developerapi/>
      * @return array
      */
    public function tradeBookRequestParam($requestCode)
    {
        $headArry=array('appName'=>APP_NAME,
                        'appVer'=>APP_VERSION,
                        'key'=>KEY,
                        'osName'=>OS_NAME,
                        'requestCode'=>$requestCode,
                        'userId'=>USER_ID,
                        'password'=>PASSWORD,
                       );

        $bodyArry=array('ClientCode'=>CLIENT_CODE);

        $requestData = array("head"=>$headArry,"body"=>$bodyArry);
        return $requestData;
    }

     /**
      * Default request parameters for SMOOrderRequest API
      * @author 5paisa. <https://www.5paisa.com/developerapi/>
      * @return array
      */
      public function smoOrderRequestParam($requestCode)
      {
          $headArry=array('appName'=>APP_NAME,
                          'appVer'=>APP_VERSION,
                          'key'=>KEY,
                          'osName'=>OS_NAME,
                          'requestCode'=>$requestCode,
                          'userId'=>USER_ID,
                          'password'=>PASSWORD,
                         );
  
          $bodyArry=array('ClientCode'=>CLIENT_CODE,
                        "OrderRequesterCode"=> CLIENT_CODE,
                        "RequestType"=> "P",
                        "BuySell"=> "B",
                        "Qty"=> 1,
                        "Exch"=> "B",
                        "ExchType"=> "C",
                        "DisQty"=> 0,
                        "AtMarket"=> false,
                        "ExchOrderId"=> 0,
                        "LimitPriceForSL"=> "0",
                        "LimitPriceInitialOrder"=> 661.5,
                        "TriggerPriceInitialOrder"=> "0",
                        "LimitPriceProfitOrder"=> 780,
                        "TriggerPriceForSL"=> 661.5,
                        "TrailingSL"=> 0,
                        "StopLoss"=> 0,
                        "ScripCode"=> 532215,
                        "OrderFor"=> "P",
                        "UniqueOrderIDNormal"=> "5000009120154900067",
                        "UniqueOrderIDSL"=> 0,
                        "UniqueOrderIDLimit"=> 0,
                        "LocalOrderIDNormal"=> 5,
                        "LocalOrderIDSL"=> 0,
                        "LocalOrderIDLimit"=> 0,
                        "PublicIP"=> "192.168.88.41",
                        "TradedQty"=> 0,
                        "AppSource"=> 4057
                    );
  
          $requestData = array("head"=>$headArry,"body"=>$bodyArry);
          return $requestData;
      }

       /**
      * Default request parameters for SMOOrderRequest API
      * @author 5paisa. <https://www.5paisa.com/developerapi/>
      * @return array
      */
      public function modifySmoOrderRequestParam($requestCode)
      {
          $headArry=array('appName'=>APP_NAME,
                          'appVer'=>APP_VERSION,
                          'key'=>KEY,
                          'osName'=>OS_NAME,
                          'requestCode'=>$requestCode,
                          'userId'=>USER_ID,
                          'password'=>PASSWORD,
                         );
  
          $bodyArry=array(

                          "ClientCode"=>CLIENT_CODE,
                          "OrderFor"=> "M",
                          "Exchange"=> "B",
                          "ExchangeType"=> "C",
                          "Price"=> 717.65,
                          "OrderID"=> 0,
                          "OrderType"=> "B",
                          "Qty"=> 1,
                          "OrderDateTime"=> "/Date(1306540800)/",
                          "ScripCode"=> 532215,
                          "AtMarket"=> false,
                          "RemoteOrderID"=> "5000009120154900067",
                          "ExchOrderID"=> 1606801033587000415,
                          "DisQty"=> 0,
                          "TriggerPriceForSL"=> 0,
                          "IsStopLossOrder"=> false,
                          "IOCOrder"=> true,
                          "IsIntraday"=> false,
                          "IsVTD"=> false,
                          "AHPlaced"=> "N",
                          "PublicIP"=> "0.0.0.0",
                          "iOrderValidity"=> 0,
                          "TradedQty"=> 0,
                          "OrderRequesterCode"=> "56565401",
                          "TrailingSL"=> 0,
                          "LegType"=> 0,
                          "TMOPartnerOrderID"=> 0,
                          "AppSource"=> 4057
                    );
  
          $requestData = array("head"=>$headArry,"body"=>$bodyArry);
          return $requestData;
      }
}
