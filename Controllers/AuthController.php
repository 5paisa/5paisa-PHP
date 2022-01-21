<?php
/**
 * Controller
 * PHP version 7.2
 *
 */
namespace Controllers;

/**
 * Class AuthController
 *
 * @category Controllers
 * @package  5paisa.
 * @author   5paisa. <https://www.5paisa.com/developerapi/>
 * @license  https://www.5paisa.com/developerapi/ N/A
 * @link     https://www.5paisa.com/developerapi/
 */
class AuthController
{
    private $commanHelper;
    private $commanCurl;
    private $aesEncryption;
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->commanHelper=new CommanHelperController();
        $this->commanCurl=new CommanCurlController();
        $this->aesEncryption=new AesEncyptionController();
    }

    /**
     * Customer Login API
     * @param $requestData
     * @param $headerData
     * @author 5paisa. <https://www.5paisa.com/developerapi/>
     * @return Json
     */
    public function loginRequestMobileNewbyEmail($requestData = null, $headerData = null)
    {
        $method='POST';
        $apiUrl=BASE_URL."V4/LoginRequestMobileNewbyEmail";
        $headerType='WITHOUT_COOKIE';
        $data=$this->commanHelper->makeApi($requestData, $headerData, REQUEST_CODE_LOGIN, 'login', $headerType);
        return $this->commanCurl->callApi($method, $apiUrl, $data['reqData'], $data['headData'], $resHead = 1);
    }
}
