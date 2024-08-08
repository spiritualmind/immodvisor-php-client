# Immodvisor\ReviewApi

All URIs are relative to *https://sandbox-api.immodvisor.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reviewCollectPost**](ReviewApi.md#reviewcollectpost) | **POST** /review/collect | send request for an reviews
[**reviewCollectmultiplePost**](ReviewApi.md#reviewcollectmultiplepost) | **POST** /review/collectmultiple | multiple send request for reviews
[**reviewCreateAnswerPost**](ReviewApi.md#reviewcreateanswerpost) | **POST** /review/create-answer | Add an answer to a review
[**reviewEvidencePost**](ReviewApi.md#reviewevidencepost) | **POST** /review/evidence | Add an evidence
[**reviewListGet**](ReviewApi.md#reviewlistget) | **GET** /review/list | Get company&#x27;s reviews list
[**reviewListarchivedGet**](ReviewApi.md#reviewlistarchivedget) | **GET** /review/listarchived | List of rejected or archived reviews
[**reviewUpdateAnswerPatch**](ReviewApi.md#reviewupdateanswerpatch) | **PATCH** /review/update-answer | Edit an answer to a review

# **reviewCollectPost**
> \Immodvisor\Model\InlineResponse2004 reviewCollectPost($aPIVERSION, $companyId, $companyCustomId, $email, $mobile, $firstname, $lastname, $proId, $proCustomId, $activityId, $highlightNumber, $customRef, $folderId, $lang, $checksum)

send request for an reviews

Create an email collection for a customer. This service allows you to collect reviews one by one as soon as a transaction is registered in your systems. The collection sends an email invitation to the customer, and in case no review is filed, an automatic reminder is sent 7 days later.  For brands, provide either company_id or company_custom_id. A review cannot be filed on a brand.  If the contact has a review or request that is less than 15 days old, the collection will be blocked.  **Tip** : As soon as a mobile number is sent, the API will send an SMS to your customer. If you want to send an email, just don't specify the customer's mobile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\ReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$companyId = 56; // int | 
$companyCustomId = 56; // int | 
$email = "email_example"; // string | 
$mobile = "mobile_example"; // string | 
$firstname = "firstname_example"; // string | 
$lastname = "lastname_example"; // string | 
$proId = 56; // int | 
$proCustomId = "proCustomId_example"; // string | 
$activityId = 56; // int | 
$highlightNumber = 56; // int | 
$customRef = "customRef_example"; // string | 
$folderId = 56; // int | 
$lang = "lang_example"; // string | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->reviewCollectPost($aPIVERSION, $companyId, $companyCustomId, $email, $mobile, $firstname, $lastname, $proId, $proCustomId, $activityId, $highlightNumber, $customRef, $folderId, $lang, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewApi->reviewCollectPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **companyId** | **int**|  | [optional]
 **companyCustomId** | **int**|  | [optional]
 **email** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **firstname** | **string**|  | [optional]
 **lastname** | **string**|  | [optional]
 **proId** | **int**|  | [optional]
 **proCustomId** | **string**|  | [optional]
 **activityId** | **int**|  | [optional]
 **highlightNumber** | **int**|  | [optional]
 **customRef** | **string**|  | [optional]
 **folderId** | **int**|  | [optional]
 **lang** | **string**|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewCollectmultiplePost**
> \Immodvisor\Model\InlineResponse20012 reviewCollectmultiplePost($aPIVERSION, $datas, $checksum)

multiple send request for reviews

Launch a collection of reviews on several customers. This service works in the same way as the collectreview service except that it allows several simultaneous sendings, and that the sendings are asynchronous. This service is ideal for collecting reviews at regular intervals (e.g. collecting reviews every 1st of each month for the previous month's customers).  For brands, provide either company_id or company_custom_id.  If the contact has a review or request that is less than 15 days old, the collection will be blocked.  **Limitation**: maximum 500 submissions per call

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\ReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$datas = array(new \Immodvisor\Model\ReviewcollectmultipleDatas()); // \Immodvisor\Model\ReviewcollectmultipleDatas[] | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->reviewCollectmultiplePost($aPIVERSION, $datas, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewApi->reviewCollectmultiplePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **datas** | [**\Immodvisor\Model\ReviewcollectmultipleDatas[]**](../Model/\Immodvisor\Model\ReviewcollectmultipleDatas.md)|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewCreateAnswerPost**
> \Immodvisor\Model\InlineResponse20013 reviewCreateAnswerPost($aPIVERSION, $reviewId, $answer, $job, $signature, $checksum)

Add an answer to a review

This service allows you to respond to a review.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\ReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's used version.
$reviewId = 56; // int | 
$answer = "answer_example"; // string | 
$job = "job_example"; // string | 
$signature = "signature_example"; // string | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->reviewCreateAnswerPost($aPIVERSION, $reviewId, $answer, $job, $signature, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewApi->reviewCreateAnswerPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aPIVERSION** | **string**| API&#x27;s used version. |
 **reviewId** | **int**|  | [optional]
 **answer** | **string**|  | [optional]
 **job** | **string**|  | [optional]
 **signature** | **string**|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewEvidencePost**
> \Immodvisor\Model\InlineResponse400 reviewEvidencePost($aPIVERSION, $reviewId, $file, $checksum)

Add an evidence

This service allows you to add evidence to a review.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\ReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's used version.
$reviewId = 56; // int | 
$file = "file_example"; // string | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->reviewEvidencePost($aPIVERSION, $reviewId, $file, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewApi->reviewEvidencePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aPIVERSION** | **string**| API&#x27;s used version. |
 **reviewId** | **int**|  | [optional]
 **file** | **string****string**|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse400**](../Model/InlineResponse400.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewListGet**
> \Immodvisor\Model\InlineResponse20010 reviewListGet($checksum, $aPIVERSION, $companyId, $companyCustomId, $dateStart, $dateStop, $dateFilter, $picking)

Get company's reviews list

Retrieves reviews from one or all companies in the park.        All inputs work as filters. For companies of type 'company', the first 2 inputs are useless.  **Tip:** Save the reviews in your data system, via an automated script that retrieves only the reviews of the period not yet retrieved, for example week by week, or month by month.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\ReviewApi(
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
$dateFilter = "dateFilter_example"; // string | Defines on which fields the dates are filtered :   * If not specified, filters dates based on the validation date   * If 'update', filters dates based on the last modification date (either validation, update or answer)
$picking = true; // bool | Filter reviews awaiting proof.

try {
    $result = $apiInstance->reviewListGet($checksum, $aPIVERSION, $companyId, $companyCustomId, $dateStart, $dateStop, $dateFilter, $picking);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewApi->reviewListGet: ', $e->getMessage(), PHP_EOL;
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
 **dateFilter** | **string**| Defines on which fields the dates are filtered :   * If not specified, filters dates based on the validation date   * If &#x27;update&#x27;, filters dates based on the last modification date (either validation, update or answer) | [optional]
 **picking** | **bool**| Filter reviews awaiting proof. | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewListarchivedGet**
> \Immodvisor\Model\InlineResponse20011 reviewListarchivedGet($checksum, $aPIVERSION, $companyId)

List of rejected or archived reviews

Returns rejected or archived reviews from one or all companies in the park. Helps you retrieve reviews that should no longer be displayed.  If the company_id is not filled in, then the notices returned will correspond to the rejected or archived notices of the brand or company associated with the API key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\ReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checksum = "checksum_example"; // string | request's validity checksum
$aPIVERSION = "aPIVERSION_example"; // string | API's used version.
$companyId = 56; // int | unique Immodvisor identifier of the company

try {
    $result = $apiInstance->reviewListarchivedGet($checksum, $aPIVERSION, $companyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewApi->reviewListarchivedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checksum** | **string**| request&#x27;s validity checksum |
 **aPIVERSION** | **string**| API&#x27;s used version. |
 **companyId** | **int**| unique Immodvisor identifier of the company | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewUpdateAnswerPatch**
> \Immodvisor\Model\InlineResponse20013 reviewUpdateAnswerPatch($aPIVERSION, $answerId, $answer, $job, $signature, $checksum)

Edit an answer to a review

This service allows you to respond to a review.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\ReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's used version.
$answerId = 56; // int | 
$answer = "answer_example"; // string | 
$job = "job_example"; // string | 
$signature = "signature_example"; // string | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->reviewUpdateAnswerPatch($aPIVERSION, $answerId, $answer, $job, $signature, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewApi->reviewUpdateAnswerPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aPIVERSION** | **string**| API&#x27;s used version. |
 **answerId** | **int**|  | [optional]
 **answer** | **string**|  | [optional]
 **job** | **string**|  | [optional]
 **signature** | **string**|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

