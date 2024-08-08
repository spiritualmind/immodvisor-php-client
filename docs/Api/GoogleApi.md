# Immodvisor\GoogleApi

All URIs are relative to *https://sandbox-api.immodvisor.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**googleCollectPost**](GoogleApi.md#googlecollectpost) | **POST** /google/collect | Google reviews&#x27; send request
[**googleCollectmultiplePost**](GoogleApi.md#googlecollectmultiplepost) | **POST** /google/collectmultiple | Google reviews&#x27; multiple send request
[**googleListreviewGet**](GoogleApi.md#googlelistreviewget) | **GET** /google/listreview | Get company&#x27;s Googlereviews list

# **googleCollectPost**
> \Immodvisor\Model\InlineResponse2004 googleCollectPost($aPIVERSION, $companyId, $companyCustomId, $email, $mobile, $type, $smsContent, $sendingDate, $checksum)

Google reviews' send request

Create a collection for a customer. This service allows you to collect reviews on google one by one as soon as a transaction is registered in your systems.  The collection sends an invitation by email or sms to the customer, with an automatic reminder sent 7 days later.  For brands, provide either company_id or company_custom_id. A notice cannot be filed on a brand.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\GoogleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$companyId = 56; // int | 
$companyCustomId = "companyCustomId_example"; // string | 
$email = "email_example"; // string | 
$mobile = "mobile_example"; // string | 
$type = "type_example"; // string | 
$smsContent = new \Immodvisor\Model\GooglecollectSmsContent(); // \Immodvisor\Model\GooglecollectSmsContent | 
$sendingDate = "sendingDate_example"; // string | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->googleCollectPost($aPIVERSION, $companyId, $companyCustomId, $email, $mobile, $type, $smsContent, $sendingDate, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleApi->googleCollectPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **companyId** | **int**|  | [optional]
 **companyCustomId** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **type** | **string**|  | [optional]
 **smsContent** | [**\Immodvisor\Model\GooglecollectSmsContent**](../Model/.md)|  | [optional]
 **sendingDate** | **string**|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **googleCollectmultiplePost**
> \Immodvisor\Model\InlineResponse20012 googleCollectmultiplePost($aPIVERSION, $datas, $checksum)

Google reviews' multiple send request

Launch a collection of google requests on several customers. This service works in the same way as the google collect service except that it allows several simultaneous sends, and that the sends are asynchronous.  **Important** : the service can return a Successs even if all the sendings could not be done. You have to process the response to see the details of the sendings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\GoogleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$datas = array(new \Immodvisor\Model\GooglecollectmultipleDatas()); // \Immodvisor\Model\GooglecollectmultipleDatas[] | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->googleCollectmultiplePost($aPIVERSION, $datas, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleApi->googleCollectmultiplePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **datas** | [**\Immodvisor\Model\GooglecollectmultipleDatas[]**](../Model/\Immodvisor\Model\GooglecollectmultipleDatas.md)|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **googleListreviewGet**
> \Immodvisor\Model\InlineResponse20016 googleListreviewGet($checksum, $aPIVERSION, $companyId, $companyCustomId, $dateStart, $dateStop)

Get company's Googlereviews list

Retrieves Google reviews from one or all companies in the park.  All inputs work as filters. For companies of type 'company', the first 2 inputs are useless.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\GoogleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checksum = "checksum_example"; // string | Request's validity checksum
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$companyId = 56; // int | unique Immodvisor company ID
$companyCustomId = "companyCustomId_example"; // string | Your unique company's ID.
$dateStart = "dateStart_example"; // string | start date of the search (YYYY-MM-DD : year + month + day). The date indicated is included. If the start date is not indicated, then it takes the value of the date of creation of the company on Immodvisor.
$dateStop = "dateStop_example"; // string | Search's end date (same format accepted). If the end date is not filled in, then it takes the value of the current date.

try {
    $result = $apiInstance->googleListreviewGet($checksum, $aPIVERSION, $companyId, $companyCustomId, $dateStart, $dateStop);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleApi->googleListreviewGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checksum** | **string**| Request&#x27;s validity checksum |
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **companyId** | **int**| unique Immodvisor company ID | [optional]
 **companyCustomId** | **string**| Your unique company&#x27;s ID. | [optional]
 **dateStart** | **string**| start date of the search (YYYY-MM-DD : year + month + day). The date indicated is included. If the start date is not indicated, then it takes the value of the date of creation of the company on Immodvisor. | [optional]
 **dateStop** | **string**| Search&#x27;s end date (same format accepted). If the end date is not filled in, then it takes the value of the current date. | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

