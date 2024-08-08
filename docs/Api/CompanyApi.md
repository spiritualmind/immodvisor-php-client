# Immodvisor\CompanyApi

All URIs are relative to *https://sandbox-api.immodvisor.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyAddMediaPost**](CompanyApi.md#companyaddmediapost) | **POST** /company/add-media | add media to company
[**companyAddPartnerPost**](CompanyApi.md#companyaddpartnerpost) | **POST** /company/add-partner | add partner to company
[**companyAddServicePost**](CompanyApi.md#companyaddservicepost) | **POST** /company/add-service | add service to company
[**companyAttributesPost**](CompanyApi.md#companyattributespost) | **POST** /company/attributes | Replace Google attibuts of company
[**companyCreatePost**](CompanyApi.md#companycreatepost) | **POST** /company/create | Create company
[**companyDeleteMediaDelete**](CompanyApi.md#companydeletemediadelete) | **DELETE** /company/delete-media | delete media from company
[**companyDeletePartnerDelete**](CompanyApi.md#companydeletepartnerdelete) | **DELETE** /company/delete-partner | delete partner from company
[**companyDeleteServiceDelete**](CompanyApi.md#companydeleteservicedelete) | **DELETE** /company/delete-service | delete service from company
[**companyGetGet**](CompanyApi.md#companygetget) | **GET** /company/get | get company&#x27;s informations
[**companyListGet**](CompanyApi.md#companylistget) | **GET** /company/list | Company&#x27;s list
[**companyRichsnippetsGet**](CompanyApi.md#companyrichsnippetsget) | **GET** /company/richsnippets | Company&#x27;s rich snippet code
[**companyUpdatePut**](CompanyApi.md#companyupdateput) | **PUT** /company/update | Update company

# **companyAddMediaPost**
> \Immodvisor\Model\InlineResponse2004 companyAddMediaPost($aPIVERSION, $id, $customId, $category, $type, $url, $photo, $all, $checksum)

add media to company

Add a media to the company. **Note** : if this endpoint is called with the type logo or background and there is already a photo filled in, the existing photo will be overwritten. For the gallery type, the media is added afterwards.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$id = 56; // int | 
$customId = "customId_example"; // string | 
$category = "category_example"; // string | 
$type = "type_example"; // string | 
$url = "url_example"; // string | 
$photo = "photo_example"; // string | 
$all = true; // bool | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->companyAddMediaPost($aPIVERSION, $id, $customId, $category, $type, $url, $photo, $all, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyAddMediaPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **id** | **int**|  | [optional]
 **customId** | **string**|  | [optional]
 **category** | **string**|  | [optional]
 **type** | **string**|  | [optional]
 **url** | **string**|  | [optional]
 **photo** | **string****string**|  | [optional]
 **all** | **bool**|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyAddPartnerPost**
> \Immodvisor\Model\InlineResponse2004 companyAddPartnerPost($aPIVERSION, $id, $customId, $type, $url, $logo, $checksum)

add partner to company

Add a partner to the company's web page.  **Note: this endpoint is only valid for companies of type 'company'.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$id = 56; // int | 
$customId = "customId_example"; // string | 
$type = "type_example"; // string | 
$url = "url_example"; // string | 
$logo = "logo_example"; // string | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->companyAddPartnerPost($aPIVERSION, $id, $customId, $type, $url, $logo, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyAddPartnerPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **id** | **int**|  | [optional]
 **customId** | **string**|  | [optional]
 **type** | **string**|  | [optional]
 **url** | **string**|  | [optional]
 **logo** | **string****string**|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyAddServicePost**
> \Immodvisor\Model\InlineResponse2004 companyAddServicePost($aPIVERSION, $id, $customId, $serviceId, $checksum)

add service to company

Adds an activity/service to your company.  **Note** : this endpoint is only valid for companies of type 'company'. You can find possible services' list by querying the activity endpoint. It is recommended to define 3 or 4.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$id = 56; // int | 
$customId = "customId_example"; // string | 
$serviceId = 56; // int | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->companyAddServicePost($aPIVERSION, $id, $customId, $serviceId, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyAddServicePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **id** | **int**|  | [optional]
 **customId** | **string**|  | [optional]
 **serviceId** | **int**|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyAttributesPost**
> \Immodvisor\Model\InlineResponse2004 companyAttributesPost($aPIVERSION, $id, $customId, $attributes, $checksum)

Replace Google attibuts of company

Allow adding attributes to the Google listing.  **Warning**, the new Google attributes cancel and replace the previous ones.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$id = 56; // int | 
$customId = "customId_example"; // string | 
$attributes = array(new \stdClass); // object[] | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->companyAttributesPost($aPIVERSION, $id, $customId, $attributes, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyAttributesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **id** | **int**|  | [optional]
 **customId** | **string**|  | [optional]
 **attributes** | [**object[]**](../Model/object.md)|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCreatePost**
> \Immodvisor\Model\InlineResponse2003 companyCreatePost($aPIVERSION, $customId, $name, $shortName, $rsac, $siret, $enable, $activities, $phone, $fax, $email, $website, $address, $address2, $zipcode, $city, $department, $hideCity, $hideAddress, $content, $color, $facebookPage, $twitterPage, $openingTime, $checksum)

Create company

Create a new company of type 'company'.  **Warning**, the specific Google elements, for example :google_attributes, cannot be added when creating the agency via the api. Indeed, a reconciliation with the Google record of the agency must first be done by Immodvisor. To update this type of value, use the updatecompany endpoint. When the value presence_management=1, the reconciliation with the Google record is effective.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$customId = "customId_example"; // string | 
$name = "name_example"; // string | 
$shortName = "shortName_example"; // string | 
$rsac = "rsac_example"; // string | 
$siret = "siret_example"; // string | 
$enable = true; // bool | 
$activities = array(56); // int[] | 
$phone = "phone_example"; // string | 
$fax = "fax_example"; // string | 
$email = "email_example"; // string | 
$website = "website_example"; // string | 
$address = "address_example"; // string | 
$address2 = "address2_example"; // string | 
$zipcode = "zipcode_example"; // string | 
$city = "city_example"; // string | 
$department = "department_example"; // string | 
$hideCity = true; // bool | 
$hideAddress = true; // bool | 
$content = "content_example"; // string | 
$color = "color_example"; // string | 
$facebookPage = "facebookPage_example"; // string | 
$twitterPage = "twitterPage_example"; // string | 
$openingTime = new \Immodvisor\Model\CompanycreateOpeningTime(); // \Immodvisor\Model\CompanycreateOpeningTime | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->companyCreatePost($aPIVERSION, $customId, $name, $shortName, $rsac, $siret, $enable, $activities, $phone, $fax, $email, $website, $address, $address2, $zipcode, $city, $department, $hideCity, $hideAddress, $content, $color, $facebookPage, $twitterPage, $openingTime, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **customId** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **shortName** | **string**|  | [optional]
 **rsac** | **string**|  | [optional]
 **siret** | **string**|  | [optional]
 **enable** | **bool**|  | [optional]
 **activities** | [**int[]**](../Model/int.md)|  | [optional]
 **phone** | **string**|  | [optional]
 **fax** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **website** | **string**|  | [optional]
 **address** | **string**|  | [optional]
 **address2** | **string**|  | [optional]
 **zipcode** | **string**|  | [optional]
 **city** | **string**|  | [optional]
 **department** | **string**|  | [optional]
 **hideCity** | **bool**|  | [optional]
 **hideAddress** | **bool**|  | [optional]
 **content** | **string**|  | [optional]
 **color** | **string**|  | [optional]
 **facebookPage** | **string**|  | [optional]
 **twitterPage** | **string**|  | [optional]
 **openingTime** | [**\Immodvisor\Model\CompanycreateOpeningTime**](../Model/.md)|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyDeleteMediaDelete**
> \Immodvisor\Model\InlineResponse2004 companyDeleteMediaDelete($checksum, $aPIVERSION, $id, $customId, $category, $index)

delete media from company

Delete a media from a company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checksum = "checksum_example"; // string | Request's validity's checksum
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$id = 56; // int | unique Immodvisor company ID to update (company or brand). optional if custom_id present.
$customId = "customId_example"; // string | Your unique company's identifier to update (company or brand). Optional if id present.
$category = "category_example"; // string | media category to add among logo, background and gallery
$index = 56; // int | Index of the item to be deleted in the company's media list. Only for the gallery type.

try {
    $result = $apiInstance->companyDeleteMediaDelete($checksum, $aPIVERSION, $id, $customId, $category, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyDeleteMediaDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checksum** | **string**| Request&#x27;s validity&#x27;s checksum |
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **id** | **int**| unique Immodvisor company ID to update (company or brand). optional if custom_id present. | [optional]
 **customId** | **string**| Your unique company&#x27;s identifier to update (company or brand). Optional if id present. | [optional]
 **category** | **string**| media category to add among logo, background and gallery | [optional]
 **index** | **int**| Index of the item to be deleted in the company&#x27;s media list. Only for the gallery type. | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyDeletePartnerDelete**
> \Immodvisor\Model\InlineResponse2004 companyDeletePartnerDelete($checksum, $aPIVERSION, $id, $customId, $type, $url, $index)

delete partner from company

Delete a partner from the company's web page.  **Note: this endpoint is only valid for companies of type 'company'.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checksum = "checksum_example"; // string | Request's validity's checksum
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$id = 56; // int | unique Immodvisor company ID to update (company or brand). optional if custom_id present.
$customId = "customId_example"; // string | Your unique company's identifier to update (company or brand). Optional if id present.
$type = "type_example"; // string | immodvisor or external, specifies if it is a partner customer of Immodvisor or other
$url = "url_example"; // string | 
$index = 56; // int | only for type external, position of the element to be deleted in the list of external partners received via the endpoint company/get

try {
    $result = $apiInstance->companyDeletePartnerDelete($checksum, $aPIVERSION, $id, $customId, $type, $url, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyDeletePartnerDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checksum** | **string**| Request&#x27;s validity&#x27;s checksum |
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **id** | **int**| unique Immodvisor company ID to update (company or brand). optional if custom_id present. | [optional]
 **customId** | **string**| Your unique company&#x27;s identifier to update (company or brand). Optional if id present. | [optional]
 **type** | **string**| immodvisor or external, specifies if it is a partner customer of Immodvisor or other | [optional]
 **url** | **string**|  | [optional]
 **index** | **int**| only for type external, position of the element to be deleted in the list of external partners received via the endpoint company/get | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyDeleteServiceDelete**
> \Immodvisor\Model\InlineResponse2004 companyDeleteServiceDelete($serviceId, $checksum, $aPIVERSION, $id, $customId)

delete service from company

Delete an activity/service from your company.  **Note** : this endpoint is only valid for companies of type 'company'.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serviceId = 56; // int | Service's identifier to be added
$checksum = "checksum_example"; // string | Request's validity's checksum
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$id = 56; // int | unique Immodvisor company ID to update (company or brand). optional if custom_id present.
$customId = "customId_example"; // string | Your unique company's identifier to update (company or brand). Optional if id present.

try {
    $result = $apiInstance->companyDeleteServiceDelete($serviceId, $checksum, $aPIVERSION, $id, $customId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyDeleteServiceDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serviceId** | **int**| Service&#x27;s identifier to be added |
 **checksum** | **string**| Request&#x27;s validity&#x27;s checksum |
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **id** | **int**| unique Immodvisor company ID to update (company or brand). optional if custom_id present. | [optional]
 **customId** | **string**| Your unique company&#x27;s identifier to update (company or brand). Optional if id present. | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyGetGet**
> \Immodvisor\Model\InlineResponse200 companyGetGet($checksum, $aPIVERSION, $id, $customId, $nbrReviews)

get company's informations

Retrieve all company's informations. If neither of the two identifiers is provided, then the company linked to the API key is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checksum = "checksum_example"; // string | Request's validity's checksum
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$id = 56; // int | Immodvisor ID
$customId = 56; // int | Company's personalized identifier.
$nbrReviews = 56; // int | last notices' number to return. Possible values : 0 : default value, tags nbr_reviews and reviews are not returned. -1 : all reviews are sent [int] : last reviews sent last number

try {
    $result = $apiInstance->companyGetGet($checksum, $aPIVERSION, $id, $customId, $nbrReviews);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checksum** | **string**| Request&#x27;s validity&#x27;s checksum |
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **id** | **int**| Immodvisor ID | [optional]
 **customId** | **int**| Company&#x27;s personalized identifier. | [optional]
 **nbrReviews** | **int**| last notices&#x27; number to return. Possible values : 0 : default value, tags nbr_reviews and reviews are not returned. -1 : all reviews are sent [int] : last reviews sent last number | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyListGet**
> \Immodvisor\Model\InlineResponse2001 companyListGet($checksum, $aPIVERSION, $nbrReviews, $enable)

Company's list

Retrieve brand's companies informations in addition with brand's informations. Also retrieves the last N reviews for each company  **Note**: {COMPANY} objects in this service do not return richsnippets information.  **Limitation** : only a company of type 'brand' is allowed to call this service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checksum = "checksum_example"; // string | Request's validity checksum
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$nbrReviews = 56; // int | Last notices' number to return per company.  By default 0, maximum 5. To retrieve previous notices, see the reviewList() service. This parameter adds an array of reviews objects to the return.
$enable = true; // bool | if true returns only active companies, if false returns all companies. True by default.

try {
    $result = $apiInstance->companyListGet($checksum, $aPIVERSION, $nbrReviews, $enable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checksum** | **string**| Request&#x27;s validity checksum |
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **nbrReviews** | **int**| Last notices&#x27; number to return per company.  By default 0, maximum 5. To retrieve previous notices, see the reviewList() service. This parameter adds an array of reviews objects to the return. | [optional]
 **enable** | **bool**| if true returns only active companies, if false returns all companies. True by default. | [optional] [default to true]

### Return type

[**\Immodvisor\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyRichsnippetsGet**
> \Immodvisor\Model\InlineResponse2002 companyRichsnippetsGet($checksum, $aPIVERSION)

Company's rich snippet code

Retrieves the Rich Snippets code to embed directly on the company page of your website. No additional processing is required. Only active companies have Rich Snippets.  **Limitation**: only a 'brand' company is allowed to call this service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checksum = "checksum_example"; // string | Request's validity checksum
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.

try {
    $result = $apiInstance->companyRichsnippetsGet($checksum, $aPIVERSION);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyRichsnippetsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checksum** | **string**| Request&#x27;s validity checksum |
 **aPIVERSION** | **string**| API&#x27;s Used version. |

### Return type

[**\Immodvisor\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyUpdatePut**
> \Immodvisor\Model\InlineResponse2003 companyUpdatePut($aPIVERSION, $id, $customId, $visible, $name, $shortName, $rsac, $siret, $enable, $activities, $phone, $fax, $email, $website, $address, $address2, $zipcode, $city, $department, $hideCity, $hideAddress, $content, $color, $facebookPage, $twitterPage, $openingTime, $serviceArea, $googleDescription, $shortDescription, $longDescription, $checksum)

Update company

Updating a company.   **Note** : To not update a data, just don't send it. To empty a data, you must send an empty or null value. The fields 'name', 'city' and 'department' cannot be emptied, because they are mandatory for the proper functioning of the Immodvisor site.  **Warning**, the treatments linked to presence management are done asynchronously, it is therefore normal not to recover updated data during an update.  **Warning**, for array elements, the whole element must be sent during the update. The elements not sent will be set to null.  At least one of the two identifiers must be sent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKey('APIKEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Immodvisor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKEY', 'Bearer');

$apiInstance = new Immodvisor\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aPIVERSION = "aPIVERSION_example"; // string | API's Used version.
$id = 56; // int | 
$customId = "customId_example"; // string | 
$visible = true; // bool | 
$name = "name_example"; // string | 
$shortName = "shortName_example"; // string | 
$rsac = "rsac_example"; // string | 
$siret = "siret_example"; // string | 
$enable = true; // bool | 
$activities = array(56); // int[] | 
$phone = "phone_example"; // string | 
$fax = "fax_example"; // string | 
$email = "email_example"; // string | 
$website = "website_example"; // string | 
$address = "address_example"; // string | 
$address2 = "address2_example"; // string | 
$zipcode = "zipcode_example"; // string | 
$city = "city_example"; // string | 
$department = "department_example"; // string | 
$hideCity = true; // bool | 
$hideAddress = true; // bool | 
$content = "content_example"; // string | 
$color = "color_example"; // string | 
$facebookPage = "facebookPage_example"; // string | 
$twitterPage = "twitterPage_example"; // string | 
$openingTime = new \Immodvisor\Model\CompanycreateOpeningTime(); // \Immodvisor\Model\CompanycreateOpeningTime | 
$serviceArea = array(new \Immodvisor\Model\ServiceArea()); // \Immodvisor\Model\ServiceArea[] | 
$googleDescription = "googleDescription_example"; // string | 
$shortDescription = "shortDescription_example"; // string | 
$longDescription = "longDescription_example"; // string | 
$checksum = "checksum_example"; // string | 

try {
    $result = $apiInstance->companyUpdatePut($aPIVERSION, $id, $customId, $visible, $name, $shortName, $rsac, $siret, $enable, $activities, $phone, $fax, $email, $website, $address, $address2, $zipcode, $city, $department, $hideCity, $hideAddress, $content, $color, $facebookPage, $twitterPage, $openingTime, $serviceArea, $googleDescription, $shortDescription, $longDescription, $checksum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyUpdatePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aPIVERSION** | **string**| API&#x27;s Used version. |
 **id** | **int**|  | [optional]
 **customId** | **string**|  | [optional]
 **visible** | **bool**|  | [optional]
 **name** | **string**|  | [optional]
 **shortName** | **string**|  | [optional]
 **rsac** | **string**|  | [optional]
 **siret** | **string**|  | [optional]
 **enable** | **bool**|  | [optional]
 **activities** | [**int[]**](../Model/int.md)|  | [optional]
 **phone** | **string**|  | [optional]
 **fax** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **website** | **string**|  | [optional]
 **address** | **string**|  | [optional]
 **address2** | **string**|  | [optional]
 **zipcode** | **string**|  | [optional]
 **city** | **string**|  | [optional]
 **department** | **string**|  | [optional]
 **hideCity** | **bool**|  | [optional]
 **hideAddress** | **bool**|  | [optional]
 **content** | **string**|  | [optional]
 **color** | **string**|  | [optional]
 **facebookPage** | **string**|  | [optional]
 **twitterPage** | **string**|  | [optional]
 **openingTime** | [**\Immodvisor\Model\CompanycreateOpeningTime**](../Model/.md)|  | [optional]
 **serviceArea** | [**\Immodvisor\Model\ServiceArea[]**](../Model/\Immodvisor\Model\ServiceArea.md)|  | [optional]
 **googleDescription** | **string**|  | [optional]
 **shortDescription** | **string**|  | [optional]
 **longDescription** | **string**|  | [optional]
 **checksum** | **string**|  | [optional]

### Return type

[**\Immodvisor\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

