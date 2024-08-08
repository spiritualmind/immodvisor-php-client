# Immodvisor\ProApi

All URIs are relative to *https://sandbox-api.immodvisor.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proCreatePost**](ProApi.md#procreatepost) | **POST** /pro/create | create pro
[**proGetGet**](ProApi.md#progetget) | **GET** /pro/get | get pro&#x27;s informations
[**proLinkPost**](ProApi.md#prolinkpost) | **POST** /pro/link | Associate a pro to a company
[**proListGet**](ProApi.md#prolistget) | **GET** /pro/list | Get pros&#x27; list
[**proUnlinkDelete**](ProApi.md#prounlinkdelete) | **DELETE** /pro/unlink | separate a pro from a company
[**proUpdatePut**](ProApi.md#proupdateput) | **PUT** /pro/update | update pro

# **proCreatePost**
> \Immodvisor\Model\InlineResponse2006 proCreatePost($aPIVERSION, $companyId, $companyCustomId, $email, $customId, $enable, $firstname, $lastname, $job, $phone, $mobile, $address, $address2, $zipcode, $city, $language, $aclAapp, $aclPro, $checksum)

create pro

Creation of a new professional account, directly associated with a company in the park. The professional will automatically receive his login information by email.  **info** : For brands only, it is mandatory to provide either the company_id or the company_custom_id. For 'company' type companies, these 2 parameters are useless because the pro will be automatically associated to the company linked to the API key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\ProApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$companyId = 56; // int | 
$companyCustomId = 56; // int | 
$email = "email_example"; // string | 
$customId = "customId_example"; // string | 
$enable = true; // bool | 
$firstname = "firstname_example"; // string | 
$lastname = "lastname_example"; // string | 
$job = "job_example"; // string | 
$phone = "phone_example"; // string | 
$mobile = "mobile_example"; // string | 
$address = "address_example"; // string | 
$address2 = "address2_example"; // string | 
$zipcode = "zipcode_example"; // string | 
$city = "city_example"; // string | 
$language = "language_example"; // string | 
$aclAapp = true; // bool | 
$aclPro = true; // bool | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->proCreatePost($aPIVERSION, $companyId, $companyCustomId, $email, $customId, $enable, $firstname, $lastname, $job, $phone, $mobile, $address, $address2, $zipcode, $city, $language, $aclAapp, $aclPro, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProApi->proCreatePost: ', $e->getMessage(), PHP_EOL;
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
 **customId** | **string**|  | [optional]
 **enable** | **bool**|  | [optional]
 **firstname** | **string**|  | [optional]
 **lastname** | **string**|  | [optional]
 **job** | **string**|  | [optional]
 **phone** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **address** | **string**|  | [optional]
 **address2** | **string**|  | [optional]
 **zipcode** | **string**|  | [optional]
 **city** | **string**|  | [optional]
 **language** | **string**|  | [optional]
 **aclAapp** | **bool**|  | [optional]
 **aclPro** | **bool**|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proGetGet**
> \Immodvisor\Model\InlineResponse2006 proGetGet($id, $checksum, $aPIVERSION, $customId)

get pro's informations

Retrieves all pro's informations associated with the company linked to the key, or associated with at least one of the companies in the fleet managed by the brand.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\ProApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Immodvisor unique identifier of the pro account
$checksum = "checksum_example"; // string | Request's validity checksum
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$customId = "customId_example"; // string | your's unique identifier

try {
    $result = $apiInstance->proGetGet($id, $checksum, $aPIVERSION, $customId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProApi->proGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Immodvisor unique identifier of the pro account |
 **checksum** | **string**| Request&#x27;s validity checksum |
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **customId** | **string**| your&#x27;s unique identifier | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proLinkPost**
> \Immodvisor\Model\InlineResponse2006 proLinkPost($aPIVERSION, $id, $customId, $companyId, $companyCustomId, $checksum)

Associate a pro to a company

Associate a pro account to a company. An account can be associated with several companies in the park, and has the same acl_aapp and acl_pro rights for all these companies.  **Limitation** : only a company of type 'brand' is authorized to call this service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\ProApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$id = 56; // int | 
$customId = "customId_example"; // string | 
$companyId = 56; // int | 
$companyCustomId = "companyCustomId_example"; // string | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->proLinkPost($aPIVERSION, $id, $customId, $companyId, $companyCustomId, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProApi->proLinkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **id** | **int**|  | [optional]
 **customId** | **string**|  | [optional]
 **companyId** | **int**|  | [optional]
 **companyCustomId** | **string**|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proListGet**
> \Immodvisor\Model\InlineResponse2007 proListGet($checksum, $aPIVERSION, $companyId, $companyCustomId, $enable)

Get pros' list

Retrieves all pros' informations associated with the company linked to the key, or associated with at least one of the companies in the fleet managed by the brand.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\ProApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checksum = "checksum_example"; // string | Request's validity checksum
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$companyId = 56; // int | Immodvisor company ID (company or brand)
$companyCustomId = "companyCustomId_example"; // string | Your unique company's ID (company or brand).
$enable = true; // bool | If 'true', only get activated pros in the activated companies too. 'true' by default.

try {
    $result = $apiInstance->proListGet($checksum, $aPIVERSION, $companyId, $companyCustomId, $enable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProApi->proListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checksum** | **string**| Request&#x27;s validity checksum |
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **companyId** | **int**| Immodvisor company ID (company or brand) | [optional]
 **companyCustomId** | **string**| Your unique company&#x27;s ID (company or brand). | [optional]
 **enable** | **bool**| If &#x27;true&#x27;, only get activated pros in the activated companies too. &#x27;true&#x27; by default. | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proUnlinkDelete**
> \Immodvisor\Model\InlineResponse2006 proUnlinkDelete($id, $checksum, $aPIVERSION, $customId, $companyId, $companyCustomId)

separate a pro from a company

Disassociates a pro account from a company. If the pro is only associated with a company, this link cannot be broken.  **Limitation** : only a company of type 'brand' is authorized to call this service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\ProApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Pro's Immodvisor's unique identifier to dissociate.
$checksum = "checksum_example"; // string | Request's validity checksum
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$customId = "customId_example"; // string | Your unique pro's identifier to dissociate.
$companyId = 56; // int | unique Immodvisor company ID to be dissociated
$companyCustomId = "companyCustomId_example"; // string | Your unique company's identifier to dissociate.

try {
    $result = $apiInstance->proUnlinkDelete($id, $checksum, $aPIVERSION, $customId, $companyId, $companyCustomId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProApi->proUnlinkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Pro&#x27;s Immodvisor&#x27;s unique identifier to dissociate. |
 **checksum** | **string**| Request&#x27;s validity checksum |
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **customId** | **string**| Your unique pro&#x27;s identifier to dissociate. | [optional]
 **companyId** | **int**| unique Immodvisor company ID to be dissociated | [optional]
 **companyCustomId** | **string**| Your unique company&#x27;s identifier to dissociate. | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proUpdatePut**
> \Immodvisor\Model\InlineResponse2006 proUpdatePut($aPIVERSION, $id, $customId, $email, $enable, $firstname, $lastname, $job, $phone, $mobile, $address, $address2, $zipcode, $city, $language, $aclAapp, $aclPro, $checksum)

update pro

Update a pro account. If the email address is modified, the professional will receive an email informing him/her of his/her new login information.  **Note** : To not update a data, just don't send it. To empty a data, you must send an empty or null value. The fields 'email', 'acl_aapp' and 'acl_pro' cannot be emptied, because they are mandatory for the proper functioning of the Immodvisor site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\ProApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$id = 56; // int | 
$customId = "customId_example"; // string | 
$email = "email_example"; // string | 
$enable = true; // bool | 
$firstname = "firstname_example"; // string | 
$lastname = "lastname_example"; // string | 
$job = "job_example"; // string | 
$phone = "phone_example"; // string | 
$mobile = "mobile_example"; // string | 
$address = "address_example"; // string | 
$address2 = "address2_example"; // string | 
$zipcode = "zipcode_example"; // string | 
$city = "city_example"; // string | 
$language = "language_example"; // string | 
$aclAapp = true; // bool | 
$aclPro = true; // bool | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->proUpdatePut($aPIVERSION, $id, $customId, $email, $enable, $firstname, $lastname, $job, $phone, $mobile, $address, $address2, $zipcode, $city, $language, $aclAapp, $aclPro, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProApi->proUpdatePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **id** | **int**|  | [optional]
 **customId** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **enable** | **bool**|  | [optional]
 **firstname** | **string**|  | [optional]
 **lastname** | **string**|  | [optional]
 **job** | **string**|  | [optional]
 **phone** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **address** | **string**|  | [optional]
 **address2** | **string**|  | [optional]
 **zipcode** | **string**|  | [optional]
 **city** | **string**|  | [optional]
 **language** | **string**|  | [optional]
 **aclAapp** | **bool**|  | [optional]
 **aclPro** | **bool**|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

