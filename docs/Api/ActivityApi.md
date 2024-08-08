# Immodvisor\ActivityApi

All URIs are relative to *https://sandbox-api.immodvisor.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activityGetGet**](ActivityApi.md#activitygetget) | **GET** /activity/get | get job informations
[**companyActivitiesGet**](ActivityApi.md#companyactivitiesget) | **GET** /company/activities | Get job&#x27;s list

# **activityGetGet**
> \Immodvisor\Model\InlineResponse20020 activityGetGet($id, $checksum, $aPIVERSION)

get job informations

Retrieve the activity's informations : username, lastname, list of possible services and list of associated Google My Business attributes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | activity id
$checksum = "checksum_example"; // string | Request's validity checksum
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.

try {
    $result = $apiInstance->activityGetGet($id, $checksum, $aPIVERSION);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->activityGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| activity id |
 **checksum** | **string**| Request&#x27;s validity checksum |
 **aPIVERSION** | **string**| API&#x27;s Used version. |

### Return type

[**\Immodvisor\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyActivitiesGet**
> \Immodvisor\Model\InlineResponse2005 companyActivitiesGet($checksum, $aPIVERSION)

Get job's list

Get available professions' list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checksum = "checksum_example"; // string | Request's validity checksum
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.

try {
    $result = $apiInstance->companyActivitiesGet($checksum, $aPIVERSION);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->companyActivitiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checksum** | **string**| Request&#x27;s validity checksum |
 **aPIVERSION** | **string**| API&#x27;s Used version. |

### Return type

[**\Immodvisor\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

