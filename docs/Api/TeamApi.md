# Immodvisor\TeamApi

All URIs are relative to *https://sandbox-api.immodvisor.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamCreatePost**](TeamApi.md#teamcreatepost) | **POST** /team/create | create team for company
[**teamDeleteDelete**](TeamApi.md#teamdeletedelete) | **DELETE** /team/delete | delete team
[**teamGetGet**](TeamApi.md#teamgetget) | **GET** /team/get | get team&#x27;s informations
[**teamListGet**](TeamApi.md#teamlistget) | **GET** /team/list | Get company&#x27;s teams list
[**teamProlinkPost**](TeamApi.md#teamprolinkpost) | **POST** /team/prolink | Associate a pro to a team
[**teamProunlinkDelete**](TeamApi.md#teamprounlinkdelete) | **DELETE** /team/prounlink | Dissociate a pro from a team.
[**teamUpdatePut**](TeamApi.md#teamupdateput) | **PUT** /team/update | update team

# **teamCreatePost**
> \Immodvisor\Model\InlineResponse20015 teamCreatePost($aPIVERSION, $companyId, $companyCustomId, $name, $customId, $checksum)

create team for company

Create a new team. Once the team is created, you can add / remove professionals from the linkpro and unlinkpro methods.  At least one of the two company IDs must be transmitted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$companyId = 56; // int | 
$companyCustomId = "companyCustomId_example"; // string | 
$name = "name_example"; // string | 
$customId = "customId_example"; // string | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->teamCreatePost($aPIVERSION, $companyId, $companyCustomId, $name, $customId, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamCreatePost: ', $e->getMessage(), PHP_EOL;
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
 **customId** | **string**|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamDeleteDelete**
> \Immodvisor\Model\InlineResponse2004 teamDeleteDelete($id, $checksum, $aPIVERSION)

delete team

delete team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Team's ID to delete.
$checksum = "checksum_example"; // string | Request's validity checksum
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.

try {
    $result = $apiInstance->teamDeleteDelete($id, $checksum, $aPIVERSION);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Team&#x27;s ID to delete. |
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

# **teamGetGet**
> \Immodvisor\Model\InlineResponse20015 teamGetGet($id, $checksum, $aPIVERSION)

get team's informations

get team's informations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | team Immodvisor login
$checksum = "checksum_example"; // string | Request's validity checksum
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.

try {
    $result = $apiInstance->teamGetGet($id, $checksum, $aPIVERSION);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| team Immodvisor login |
 **checksum** | **string**| Request&#x27;s validity checksum |
 **aPIVERSION** | **string**| API&#x27;s Used version. |

### Return type

[**\Immodvisor\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamListGet**
> \Immodvisor\Model\InlineResponse20014 teamListGet($checksum, $aPIVERSION, $companyId, $companyCustomId)

Get company's teams list

Return company or brand teams list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checksum = "checksum_example"; // string | Request's validity checksum
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$companyId = 56; // int | unique Immodvisor company ID
$companyCustomId = "companyCustomId_example"; // string | Your unique company's ID. (unused if 'company_id' is present)

try {
    $result = $apiInstance->teamListGet($checksum, $aPIVERSION, $companyId, $companyCustomId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checksum** | **string**| Request&#x27;s validity checksum |
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **companyId** | **int**| unique Immodvisor company ID | [optional]
 **companyCustomId** | **string**| Your unique company&#x27;s ID. (unused if &#x27;company_id&#x27; is present) | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamProlinkPost**
> \Immodvisor\Model\InlineResponse2004 teamProlinkPost($aPIVERSION, $id, $customId, $proId, $proCustomId, $checksum)

Associate a pro to a team

Associate a professional with a team. A professional can be associated to several teams.  If a custom_id or pro_custom_id field is filled in, it must be correct for the action to be executed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$id = 56; // int | 
$customId = "customId_example"; // string | 
$proId = "proId_example"; // string | 
$proCustomId = "proCustomId_example"; // string | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->teamProlinkPost($aPIVERSION, $id, $customId, $proId, $proCustomId, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamProlinkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **id** | **int**|  | [optional]
 **customId** | **string**|  | [optional]
 **proId** | **string**|  | [optional]
 **proCustomId** | **string**|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamProunlinkDelete**
> \Immodvisor\Model\InlineResponse2004 teamProunlinkDelete($id, $proId, $checksum, $aPIVERSION, $customId, $proCustomId)

Dissociate a pro from a team.

Dissociate a pro from a team.          If a custom_id or pro_custom_id field is filled in, it must be correct for the action to be executed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | team Immodvisor login
$proId = 56; // int | Pro's identifier to dissociate.
$checksum = "checksum_example"; // string | Request's validity checksum
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$customId = "customId_example"; // string | your team ID
$proCustomId = "proCustomId_example"; // string | Your unique pro's identifier to dissociate.

try {
    $result = $apiInstance->teamProunlinkDelete($id, $proId, $checksum, $aPIVERSION, $customId, $proCustomId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamProunlinkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| team Immodvisor login |
 **proId** | **int**| Pro&#x27;s identifier to dissociate. |
 **checksum** | **string**| Request&#x27;s validity checksum |
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **customId** | **string**| your team ID | [optional]
 **proCustomId** | **string**| Your unique pro&#x27;s identifier to dissociate. | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamUpdatePut**
> \Immodvisor\Model\InlineResponse20015 teamUpdatePut($aPIVERSION, $id, $name, $customId, $checksum)

update team

Update of a team. Only the data entered are updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$id = 56; // int | 
$name = "name_example"; // string | 
$customId = "customId_example"; // string | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->teamUpdatePut($aPIVERSION, $id, $name, $customId, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamUpdatePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **id** | **int**|  | [optional]
 **name** | **string**|  | [optional]
 **customId** | **string**|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

