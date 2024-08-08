# GoogleCollectBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**companyId** | **int** | unique Immodvisor company ID | [optional] 
**companyCustomId** | **string** | Your unique company&#x27;s ID. | [optional] 
**email** | **string** | Customer&#x27;s email. | 
**mobile** | **string** | Customer&#x27;s mobile number. If present, the customer will receive a texting message instead of an email. | [optional] 
**type** | **string** | The default value is &#x27;mail&#x27;, if the value is &#x27;sms&#x27; the mobile parameter becomes mandatory. | [optional] 
**smsContent** | [**\Immodvisor\Model\GooglecollectSmsContent**](GooglecollectSmsContent.md) |  | [optional] 
**sendingDate** | **string** | Date in dateTime format (YYYY-MM-DD hh:mm:ss) which determine the collection&#x27;s sent date. If it is not filled in, the collection is sent at the earliest. | [optional] 
**checksum** | **string** | Request&#x27;s validity checksum | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

