# CompanyUpdateBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**customId** | **string** |  | [optional] 
**visible** | **bool** | public record visible or not | [optional] 
**name** | **string** | company&#x27;s name | [optional] 
**shortName** | **string** | company&#x27;s short name, useful in case the name exceeds 50 characters | [optional] 
**rsac** | **string** | Company&#x27;s RSAC | [optional] 
**siret** | **string** | Company&#x27;s SIRET | [optional] 
**enable** | **bool** | Company enable | [optional] 
**activities** | **int[]** | Company&#x27;s activities list | [optional] 
**phone** | **string** | contact&#x27;s phone | [optional] 
**fax** | **string** | company&#x27;s fax | [optional] 
**email** | **string** | contact&#x27;s email address | [optional] 
**website** | **string** | Company&#x27;s url | [optional] 
**address** | **string** | mailing address | [optional] 
**address2** | **string** | additional address | [optional] 
**zipcode** | **string** | zipcode | [optional] 
**city** | **string** | city | [optional] 
**department** | **string** | Department&#x27;s code. | [optional] 
**hideCity** | **bool** | if true, the company city will not be visible on immodvisor.com | [optional] 
**hideAddress** | **bool** | if true, the company address will not be visible on immodvisor.com | [optional] 
**content** | **string** | Company&#x27;s description on immodvisor.com (HTML format) | [optional] 
**color** | **string** | color of the window on Immodvisor.com | [optional] 
**facebookPage** | **string** | Facebook&#x27;s url page | [optional] 
**twitterPage** | **string** | Twitter&#x27;s url page | [optional] 
**openingTime** | [**\Immodvisor\Model\CompanycreateOpeningTime**](CompanycreateOpeningTime.md) |  | [optional] 
**serviceArea** | [**\Immodvisor\Model\ServiceArea[]**](ServiceArea.md) | Company&#x27;s intervention area | [optional] 
**googleDescription** | **string** | Google My Business&#x27; description | [optional] 
**shortDescription** | **string** | Presence management&#x27;s short description | [optional] 
**longDescription** | **string** | Presence management&#x27;s long description | [optional] 
**checksum** | **string** | Request&#x27;s validity checksum | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

