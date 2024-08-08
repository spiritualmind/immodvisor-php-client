# ReviewCollectBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**companyId** | **int** | Immodvisor company ID | [optional] 
**companyCustomId** | **int** | Your unique company&#x27;s ID. | [optional] 
**email** | **string** | e-mail of your customer | 
**mobile** | **string** | your client&#x27;s mobile number | [optional] 
**firstname** | **string** | client&#x27;s firstname | [optional] 
**lastname** | **string** | client&#x27;s lastname | [optional] 
**proId** | **int** | Immodvisor identifier of the professional at the origin of the notice | [optional] 
**proCustomId** | **string** | Your pro&#x27;s identifier who created the notice. If your collaborator IDs are registered with Immodvisor, you can use your own IDs instead of the Immodvisor IDs | [optional] 
**activityId** | **int** | The company&#x27;s business line concerned by the notification. By default the first business of the company. If the company has only one job it is useless to fill this value. | [optional] 
**highlightNumber** | **int** | number of highlight linked to the job. If the highlights are activated on the company and they have been defined, you can transmit the highlight number that will be associated with the notification so that the notification questionnaire takes the parameters of the highlight and the statistics of the highlight are updated. The highlight numbers can be found in your Pro Area, under the heading \&quot;Highlights\&quot;. | [optional] 
**customRef** | **string** | Your solicitation reference. You can transmit an internal reference for each solicitation, which will then be returned in the notices returned by the API. Allowed characters: numbers, lower case letters, upper case letters, hyphens and underscores. | [optional] 
**folderId** | **int** | Immodvisor identifier of the file | [optional] 
**lang** | **string** | Language associated with the collection for translation of the email and the deposit. If this is not specified, it will be determined either by the mobile code, if specified, or by the company&#x27;s default selection. | [optional] 
**checksum** | **string** | Request&#x27;s validity checksum | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

