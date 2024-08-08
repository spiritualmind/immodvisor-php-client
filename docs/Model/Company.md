# Company

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Immodvisor&#x27;s company&#x27;s unique identifier | [optional] 
**customId** | **string** | your&#x27;s unique identifier | [optional] 
**type** | **string** | brand or company | [optional] 
**url** | **string** | Company&#x27;s file absolute url on immodvisor.com | [optional] 
**enable** | **bool** | Company enable | [optional] 
**visible** | **bool** | If public record is visible | [optional] 
**name** | **string** | company&#x27;s name | [optional] 
**rsac** | **string** | Company&#x27;s RSAC | [optional] 
**siret** | **string** | Company&#x27;s SIRET | [optional] 
**rating** | **float** | score out of 5, empty if no opinion | [optional] 
**activities** | **int[]** | Company&#x27;s activities list | [optional] 
**reviews** | [**\Immodvisor\Model\CompanyReviews**](CompanyReviews.md) |  | [optional] 
**address** | [**\Immodvisor\Model\Address**](Address.md) |  | [optional] 
**contact** | [**\Immodvisor\Model\Contact**](Contact.md) |  | [optional] 
**widget** | [**\Immodvisor\Model\Widget**](Widget.md) |  | [optional] 
**content** | **string** | Company&#x27;s description on immodvisor.com (HTML format) | [optional] 
**presenceManagement** | **bool** | Presence management&#x27;s enable | [optional] 
**serviceArea** | [**\Immodvisor\Model\ServiceArea[]**](ServiceArea.md) | Company&#x27;s intervention area | [optional] 
**googleDescription** | **string** | Google My Business&#x27; description | [optional] 
**shortDescription** | **string** | Presence management&#x27;s short description | [optional] 
**longDescription** | **string** | Presence management&#x27;s long description | [optional] 
**googleAttributes** | [**\Immodvisor\Model\GoogleAttribute[]**](GoogleAttribute.md) |  | [optional] 
**openingTime** | [**\Immodvisor\Model\CompanycreateOpeningTime**](CompanycreateOpeningTime.md) |  | [optional] 
**services** | [**\Immodvisor\Model\Service[]**](Service.md) | Company&#x27;s offered services list | [optional] 
**facebookPage** | **string** | Facebook&#x27;s url page | [optional] 
**twitterPage** | **string** | Twitter&#x27;s url page | [optional] 
**website** | **string** | Company&#x27;s website | [optional] 
**logo** | **string** | URL of the logo on Immodvisor.com | [optional] 
**color** | **string** | Window&#x27;s color on immodvisor.com | [optional] 
**background** | **string** | URL of the background image on Immodvisor.com | [optional] 
**medias** | [**\Immodvisor\Model\Media[]**](Media.md) | list of media present on the Immodvisor.com showcase and on the portals | [optional] 
**partners** | [**\Immodvisor\Model\Partner[]**](Partner.md) | Company&#x27;s partners list | [optional] 
**immodvisorPartners** | [**\Immodvisor\Model\ImmodvisorPartner[]**](ImmodvisorPartner.md) | list of the company&#x27;s Immodvisor partners | [optional] 
**richsnippet** | **string** | code to be integrated on the company&#x27;s page | [optional] 
**ratingGoogle** | **float** | Google&#x27;s overall rating of the company out of 5 (only for companies with the Gomybusiness product activated) | [optional] 
**nbrReviewsGoogle** | **int** | number of Google reviews (only for companies with the Gomybusiness product activated) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

