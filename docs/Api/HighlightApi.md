# Immodvisor\HighlightApi

All URIs are relative to *https://sandbox-api.immodvisor.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**highlightListGet**](HighlightApi.md#highlightlistget) | **GET** /highlight/list | Get custom questionnaires list

# **highlightListGet**
> \Immodvisor\Model\InlineResponse20019 highlightListGet($checksum, $aPIVERSION, $companyId, $companyCustomId)

Get custom questionnaires list

Retrieve custom questionnaires informations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\HighlightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checksum = "checksum_example"; // string | Request's validity checksum
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$companyId = 56; // int | unique Immodvisor company ID
$companyCustomId = "companyCustomId_example"; // string | Your unique company's identifier (can be used instead of company_id if it is filled in on Immodvisor).

try {
    $result = $apiInstance->highlightListGet($checksum, $aPIVERSION, $companyId, $companyCustomId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HighlightApi->highlightListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checksum** | **string**| Request&#x27;s validity checksum |
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **companyId** | **int**| unique Immodvisor company ID | [optional]
 **companyCustomId** | **string**| Your unique company&#x27;s identifier (can be used instead of company_id if it is filled in on Immodvisor). | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

