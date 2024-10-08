# 
## Terms of use The terms of use gather all the rules to follow to use the Immodvisor API. ## Technical side Your API key and the grains of salt of the checksums must remain secret, they represent your private parameters. It is strictly forbidden to communicate them to third parties. For security reasons, if one of these rules is not respected, we would be forced to deactivate your API key. ## Advices It is strongly recommended to use cache if you are using the API to display your rating and reviews on your site. This will ensure that the display of your page does not depend on the API responses and therefore does not affect its display time. ## Display the notices on your media ### On your website: You must clearly display the source of the reviews, namely Immodvisor. Thus, the Immodvisor logo or the seal of trust must clearly appear on the page displaying the reviews, with a link in the href, scanned by search engines, and pointing to the company file of the Immodvisor site. This point is essential for search engines to make the link between the 2 pages, and avoid duplication of content. The review pages of your site must be validated by our marketing department before going into production. You must also display a textual mention indicating that the reviews come from the Immodvisor site.   Our marketing department can be reached at 09 81 10 75 88 or by email at assistance@Immodvisor.com ### On other communication supports: You must always display the Immodvisor logo and indicate that the reviews are from the Immodvisor solution.  ## Display Rich Snippets in google results on your url Rich Snippets give the promise to the internet user to be able to read reviews. Any page displaying Rich Snippets in google must display the stars, as well as a link to the company's Immodvisor page. All these elements must match. For example, you can display the Rich Snippets of the company on the home page, and the Rich Snippets of each agency on your respective agency pages. Strong recommendation: a given Rich Snippet should only be placed on one and only one web page. Good to know: Rich Snippets tell Google's search engine a rating related to a web page. Google decides whether or not displaying the note in its search results is relevant to your web page. Immodvisor cannot influence Google's willingness to display or not the indicators sent by your site. ## Checksum For each call to the API, a checksum must be sent. This checksum is calculated as follows:   Concatenation of the following values, all formatted in SHA1 :  * apikey * values of the sent fields, formatted in JSON if it is an array or an object * checksum_salt_in  ### PHP code example ```PHP private function calcChecksumIn($api_key, $checksum_salt_in, $datas = array())     {         $checksum = \"\";         $checksum .= $api_key;         foreach ($datas as $k => $v) {             if (is_array($v) || is_object($v)) {                 $v = json_encode($v, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);             } elseif ($v === true) {                 $v = 1;             } elseif ($v === false) {                 $v = 0;             }             $checksum .= $v;         }         $checksum .= $checksum_salt_in;         return sha1($checksum);     }   ```

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.11.0
- Package version: 1.0.3
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/spiritualmind/immodvisor-php-client.git"
    }
  ],
  "require": {
    "spiritualmind/immodvisor-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to//vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://sandbox-api.immodvisor.dev*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActivityApi* | [**activityGetGet**](docs/Api/ActivityApi.md#activitygetget) | **GET** /activity/get | get job informations
*ActivityApi* | [**companyActivitiesGet**](docs/Api/ActivityApi.md#companyactivitiesget) | **GET** /company/activities | Get job&#x27;s list
*CompanyApi* | [**companyAddMediaPost**](docs/Api/CompanyApi.md#companyaddmediapost) | **POST** /company/add-media | add media to company
*CompanyApi* | [**companyAddPartnerPost**](docs/Api/CompanyApi.md#companyaddpartnerpost) | **POST** /company/add-partner | add partner to company
*CompanyApi* | [**companyAddServicePost**](docs/Api/CompanyApi.md#companyaddservicepost) | **POST** /company/add-service | add service to company
*CompanyApi* | [**companyAttributesPost**](docs/Api/CompanyApi.md#companyattributespost) | **POST** /company/attributes | Replace Google attibuts of company
*CompanyApi* | [**companyCreatePost**](docs/Api/CompanyApi.md#companycreatepost) | **POST** /company/create | Create company
*CompanyApi* | [**companyDeleteMediaDelete**](docs/Api/CompanyApi.md#companydeletemediadelete) | **DELETE** /company/delete-media | delete media from company
*CompanyApi* | [**companyDeletePartnerDelete**](docs/Api/CompanyApi.md#companydeletepartnerdelete) | **DELETE** /company/delete-partner | delete partner from company
*CompanyApi* | [**companyDeleteServiceDelete**](docs/Api/CompanyApi.md#companydeleteservicedelete) | **DELETE** /company/delete-service | delete service from company
*CompanyApi* | [**companyGetGet**](docs/Api/CompanyApi.md#companygetget) | **GET** /company/get | get company&#x27;s informations
*CompanyApi* | [**companyListGet**](docs/Api/CompanyApi.md#companylistget) | **GET** /company/list | Company&#x27;s list
*CompanyApi* | [**companyRichsnippetsGet**](docs/Api/CompanyApi.md#companyrichsnippetsget) | **GET** /company/richsnippets | Company&#x27;s rich snippet code
*CompanyApi* | [**companyUpdatePut**](docs/Api/CompanyApi.md#companyupdateput) | **PUT** /company/update | Update company
*FolderApi* | [**folderCreatePost**](docs/Api/FolderApi.md#foldercreatepost) | **POST** /folder/create | create folder
*FolderApi* | [**folderDeleteDelete**](docs/Api/FolderApi.md#folderdeletedelete) | **DELETE** /folder/delete | delete folder
*FolderApi* | [**folderGetGet**](docs/Api/FolderApi.md#foldergetget) | **GET** /folder/get | get folder&#x27;s informations
*FolderApi* | [**folderListGet**](docs/Api/FolderApi.md#folderlistget) | **GET** /folder/list | get folders list
*FolderApi* | [**folderUpdatePut**](docs/Api/FolderApi.md#folderupdateput) | **PUT** /folder/update | update folder
*GoogleApi* | [**googleCollectPost**](docs/Api/GoogleApi.md#googlecollectpost) | **POST** /google/collect | Google reviews&#x27; send request
*GoogleApi* | [**googleCollectmultiplePost**](docs/Api/GoogleApi.md#googlecollectmultiplepost) | **POST** /google/collectmultiple | Google reviews&#x27; multiple send request
*GoogleApi* | [**googleListreviewGet**](docs/Api/GoogleApi.md#googlelistreviewget) | **GET** /google/listreview | Get company&#x27;s Googlereviews list
*HighlightApi* | [**highlightListGet**](docs/Api/HighlightApi.md#highlightlistget) | **GET** /highlight/list | Get custom questionnaires list
*ProApi* | [**proCreatePost**](docs/Api/ProApi.md#procreatepost) | **POST** /pro/create | create pro
*ProApi* | [**proGetGet**](docs/Api/ProApi.md#progetget) | **GET** /pro/get | get pro&#x27;s informations
*ProApi* | [**proLinkPost**](docs/Api/ProApi.md#prolinkpost) | **POST** /pro/link | Associate a pro to a company
*ProApi* | [**proListGet**](docs/Api/ProApi.md#prolistget) | **GET** /pro/list | Get pros&#x27; list
*ProApi* | [**proUnlinkDelete**](docs/Api/ProApi.md#prounlinkdelete) | **DELETE** /pro/unlink | separate a pro from a company
*ProApi* | [**proUpdatePut**](docs/Api/ProApi.md#proupdateput) | **PUT** /pro/update | update pro
*ReviewApi* | [**reviewCollectPost**](docs/Api/ReviewApi.md#reviewcollectpost) | **POST** /review/collect | send request for an reviews
*ReviewApi* | [**reviewCollectmultiplePost**](docs/Api/ReviewApi.md#reviewcollectmultiplepost) | **POST** /review/collectmultiple | multiple send request for reviews
*ReviewApi* | [**reviewCreateAnswerPost**](docs/Api/ReviewApi.md#reviewcreateanswerpost) | **POST** /review/create-answer | Add an answer to a review
*ReviewApi* | [**reviewEvidencePost**](docs/Api/ReviewApi.md#reviewevidencepost) | **POST** /review/evidence | Add an evidence
*ReviewApi* | [**reviewListGet**](docs/Api/ReviewApi.md#reviewlistget) | **GET** /review/list | Get company&#x27;s reviews list
*ReviewApi* | [**reviewListarchivedGet**](docs/Api/ReviewApi.md#reviewlistarchivedget) | **GET** /review/listarchived | List of rejected or archived reviews
*ReviewApi* | [**reviewUpdateAnswerPatch**](docs/Api/ReviewApi.md#reviewupdateanswerpatch) | **PATCH** /review/update-answer | Edit an answer to a review
*TeamApi* | [**teamCreatePost**](docs/Api/TeamApi.md#teamcreatepost) | **POST** /team/create | create team for company
*TeamApi* | [**teamDeleteDelete**](docs/Api/TeamApi.md#teamdeletedelete) | **DELETE** /team/delete | delete team
*TeamApi* | [**teamGetGet**](docs/Api/TeamApi.md#teamgetget) | **GET** /team/get | get team&#x27;s informations
*TeamApi* | [**teamListGet**](docs/Api/TeamApi.md#teamlistget) | **GET** /team/list | Get company&#x27;s teams list
*TeamApi* | [**teamProlinkPost**](docs/Api/TeamApi.md#teamprolinkpost) | **POST** /team/prolink | Associate a pro to a team
*TeamApi* | [**teamProunlinkDelete**](docs/Api/TeamApi.md#teamprounlinkdelete) | **DELETE** /team/prounlink | Dissociate a pro from a team.
*TeamApi* | [**teamUpdatePut**](docs/Api/TeamApi.md#teamupdateput) | **PUT** /team/update | update team
*UtilsApi* | [**configGet**](docs/Api/UtilsApi.md#configget) | **GET** /config | get api&#x27;s configurations
*UtilsApi* | [**mapDepartmentsGet**](docs/Api/UtilsApi.md#mapdepartmentsget) | **GET** /map/departments | Get departments&#x27; list
*UtilsApi* | [**testGet**](docs/Api/UtilsApi.md#testget) | **GET** /test | check if api available

## Documentation For Models

 - [Activity](docs/Model/Activity.md)
 - [Address](docs/Model/Address.md)
 - [Answer](docs/Model/Answer.md)
 - [Attribute](docs/Model/Attribute.md)
 - [AttributeValues](docs/Model/AttributeValues.md)
 - [Company](docs/Model/Company.md)
 - [CompanyAddmediaBody](docs/Model/CompanyAddmediaBody.md)
 - [CompanyAddpartnerBody](docs/Model/CompanyAddpartnerBody.md)
 - [CompanyAddserviceBody](docs/Model/CompanyAddserviceBody.md)
 - [CompanyAttributesBody](docs/Model/CompanyAttributesBody.md)
 - [CompanyCreateBody](docs/Model/CompanyCreateBody.md)
 - [CompanyReviews](docs/Model/CompanyReviews.md)
 - [CompanyUpdateBody](docs/Model/CompanyUpdateBody.md)
 - [CompanycreateOpeningTime](docs/Model/CompanycreateOpeningTime.md)
 - [Contact](docs/Model/Contact.md)
 - [Departement](docs/Model/Departement.md)
 - [Folder](docs/Model/Folder.md)
 - [FolderCreateBody](docs/Model/FolderCreateBody.md)
 - [FolderUpdateBody](docs/Model/FolderUpdateBody.md)
 - [GoogleAttribute](docs/Model/GoogleAttribute.md)
 - [GoogleCollectBody](docs/Model/GoogleCollectBody.md)
 - [GoogleCollectmultipleBody](docs/Model/GoogleCollectmultipleBody.md)
 - [GoogleReview](docs/Model/GoogleReview.md)
 - [GoogleReviewAnswer](docs/Model/GoogleReviewAnswer.md)
 - [GoogleReviewUser](docs/Model/GoogleReviewUser.md)
 - [GooglecollectSmsContent](docs/Model/GooglecollectSmsContent.md)
 - [GooglecollectmultipleDatas](docs/Model/GooglecollectmultipleDatas.md)
 - [Highlight](docs/Model/Highlight.md)
 - [HighlightActivity](docs/Model/HighlightActivity.md)
 - [ImmodvisorPartner](docs/Model/ImmodvisorPartner.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20010Datas](docs/Model/InlineResponse20010Datas.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20011Datas](docs/Model/InlineResponse20011Datas.md)
 - [InlineResponse20011Reviews](docs/Model/InlineResponse20011Reviews.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse20012Datas](docs/Model/InlineResponse20012Datas.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse20013Datas](docs/Model/InlineResponse20013Datas.md)
 - [InlineResponse20014](docs/Model/InlineResponse20014.md)
 - [InlineResponse20015](docs/Model/InlineResponse20015.md)
 - [InlineResponse20016](docs/Model/InlineResponse20016.md)
 - [InlineResponse20016Datas](docs/Model/InlineResponse20016Datas.md)
 - [InlineResponse20017](docs/Model/InlineResponse20017.md)
 - [InlineResponse20018](docs/Model/InlineResponse20018.md)
 - [InlineResponse20019](docs/Model/InlineResponse20019.md)
 - [InlineResponse20019Datas](docs/Model/InlineResponse20019Datas.md)
 - [InlineResponse2001Datas](docs/Model/InlineResponse2001Datas.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse20020](docs/Model/InlineResponse20020.md)
 - [InlineResponse20020Datas](docs/Model/InlineResponse20020Datas.md)
 - [InlineResponse2002Datas](docs/Model/InlineResponse2002Datas.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2004Datas](docs/Model/InlineResponse2004Datas.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2005Datas](docs/Model/InlineResponse2005Datas.md)
 - [InlineResponse2005DatasActivities](docs/Model/InlineResponse2005DatasActivities.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2007Datas](docs/Model/InlineResponse2007Datas.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2008Datas](docs/Model/InlineResponse2008Datas.md)
 - [InlineResponse2008DatasContact](docs/Model/InlineResponse2008DatasContact.md)
 - [InlineResponse2008DatasVersion](docs/Model/InlineResponse2008DatasVersion.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse2009Datas](docs/Model/InlineResponse2009Datas.md)
 - [InlineResponse200Datas](docs/Model/InlineResponse200Datas.md)
 - [InlineResponse400](docs/Model/InlineResponse400.md)
 - [Media](docs/Model/Media.md)
 - [OpeningTime](docs/Model/OpeningTime.md)
 - [Partner](docs/Model/Partner.md)
 - [Pro](docs/Model/Pro.md)
 - [ProAcls](docs/Model/ProAcls.md)
 - [ProAddress](docs/Model/ProAddress.md)
 - [ProCompanies](docs/Model/ProCompanies.md)
 - [ProContact](docs/Model/ProContact.md)
 - [ProCreateBody](docs/Model/ProCreateBody.md)
 - [ProLinkBody](docs/Model/ProLinkBody.md)
 - [ProUpdateBody](docs/Model/ProUpdateBody.md)
 - [Review](docs/Model/Review.md)
 - [ReviewAnswer](docs/Model/ReviewAnswer.md)
 - [ReviewCollectBody](docs/Model/ReviewCollectBody.md)
 - [ReviewCollectmultipleBody](docs/Model/ReviewCollectmultipleBody.md)
 - [ReviewCreateanswerBody](docs/Model/ReviewCreateanswerBody.md)
 - [ReviewCriterions](docs/Model/ReviewCriterions.md)
 - [ReviewEvidenceBody](docs/Model/ReviewEvidenceBody.md)
 - [ReviewExp](docs/Model/ReviewExp.md)
 - [ReviewFolder](docs/Model/ReviewFolder.md)
 - [ReviewHighlight](docs/Model/ReviewHighlight.md)
 - [ReviewPro](docs/Model/ReviewPro.md)
 - [ReviewUpdateanswerBody](docs/Model/ReviewUpdateanswerBody.md)
 - [ReviewUser](docs/Model/ReviewUser.md)
 - [ReviewcollectmultipleDatas](docs/Model/ReviewcollectmultipleDatas.md)
 - [Sent](docs/Model/Sent.md)
 - [Service](docs/Model/Service.md)
 - [ServiceArea](docs/Model/ServiceArea.md)
 - [Team](docs/Model/Team.md)
 - [TeamCreateBody](docs/Model/TeamCreateBody.md)
 - [TeamProlinkBody](docs/Model/TeamProlinkBody.md)
 - [TeamPros](docs/Model/TeamPros.md)
 - [TeamUpdateBody](docs/Model/TeamUpdateBody.md)
 - [Widget](docs/Model/Widget.md)

## Documentation For Authorization


## apikey

- **Type**: API key
- **API key parameter name**: APIKEY
- **Location**: HTTP header


## Author

assistance@Immodvisor.com

