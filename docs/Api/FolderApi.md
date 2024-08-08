# Immodvisor\FolderApi

All URIs are relative to *https://sandbox-api.immodvisor.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**folderCreatePost**](FolderApi.md#foldercreatepost) | **POST** /folder/create | create folder
[**folderDeleteDelete**](FolderApi.md#folderdeletedelete) | **DELETE** /folder/delete | delete folder
[**folderGetGet**](FolderApi.md#foldergetget) | **GET** /folder/get | get folder&#x27;s informations
[**folderListGet**](FolderApi.md#folderlistget) | **GET** /folder/list | get folders list
[**folderUpdatePut**](FolderApi.md#folderupdateput) | **PUT** /folder/update | update folder

# **folderCreatePost**
> \Immodvisor\Model\InlineResponse20017 folderCreatePost($aPIVERSION, $companyId, $companyCustomId, $name, $reference, $status, $startDate, $endDate, $checksum)

create folder

Create a new folder/program.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$companyId = 56; // int | 
$companyCustomId = "companyCustomId_example"; // string | 
$name = "name_example"; // string | 
$reference = "reference_example"; // string | 
$status = "status_example"; // string | 
$startDate = "startDate_example"; // string | 
$endDate = "endDate_example"; // string | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->folderCreatePost($aPIVERSION, $companyId, $companyCustomId, $name, $reference, $status, $startDate, $endDate, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->folderCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **companyId** | **int**|  | [optional]
 **companyCustomId** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **reference** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **startDate** | **string**|  | [optional]
 **endDate** | **string**|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **folderDeleteDelete**
> \Immodvisor\Model\InlineResponse2004 folderDeleteDelete($id, $checksum, $aPIVERSION)

delete folder

delete folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Folder's ID.
$checksum = "checksum_example"; // string | Request's validity checksum
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.

try {
    $result = $apiInstance->folderDeleteDelete($id, $checksum, $aPIVERSION);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->folderDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Folder&#x27;s ID. |
 **checksum** | **string**| Request&#x27;s validity checksum |
 **aPIVERSION** | **string**| API&#x27;s Used version. |

### Return type

[**\Immodvisor\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **folderGetGet**
> \Immodvisor\Model\InlineResponse20017 folderGetGet($id, $checksum, $aPIVERSION)

get folder's informations

Retrieve folder's informations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Folder's identifier.
$checksum = "checksum_example"; // string | Request's validity checksum
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.

try {
    $result = $apiInstance->folderGetGet($id, $checksum, $aPIVERSION);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->folderGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Folder&#x27;s identifier. |
 **checksum** | **string**| Request&#x27;s validity checksum |
 **aPIVERSION** | **string**| API&#x27;s Used version. |

### Return type

[**\Immodvisor\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **folderListGet**
> \Immodvisor\Model\InlineResponse20018 folderListGet($checksum, $aPIVERSION, $companyId, $companyCustomId)

get folders list

Return folders list from a company on Immodvisor.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\FolderApi(
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
    $result = $apiInstance->folderListGet($checksum, $aPIVERSION, $companyId, $companyCustomId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->folderListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Immodvisor\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **folderUpdatePut**
> \Immodvisor\Model\InlineResponse20017 folderUpdatePut($aPIVERSION, $id, $name, $reference, $status, $startDate, $endDate, $checksum)

update folder

Update a folder/program. Only the data entered are updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$id = 56; // int | 
$name = "name_example"; // string | 
$reference = "reference_example"; // string | 
$status = "status_example"; // string | 
$startDate = "startDate_example"; // string | 
$endDate = "endDate_example"; // string | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->folderUpdatePut($aPIVERSION, $id, $name, $reference, $status, $startDate, $endDate, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->folderUpdatePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **id** | **int**|  | [optional]
 **name** | **string**|  | [optional]
 **reference** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **startDate** | **string**|  | [optional]
 **endDate** | **string**|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

