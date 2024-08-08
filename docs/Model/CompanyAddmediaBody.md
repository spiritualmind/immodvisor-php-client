# CompanyAddmediaBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | unique Immodvisor company ID to update (company or brand). optional if custom_id present. | [optional] 
**customId** | **string** | Your unique company&#x27;s identifier to update (company or brand). Optional if id present. | [optional] 
**category** | **string** | media category to add among logo, background and gallery | [optional] 
**type** | **string** | only for the photo or video gallery category | [optional] 
**url** | **string** | Video&#x27;s url. Only for the gallery category and the video type. Are accepted the url Youtube, Dailymotion, Vimeo and Matterport. | [optional] 
**photo** | **string** | photo to add, useless for the gallery category with the video type | [optional] 
**all** | **bool** | only for the gallery category and the &#x27;brand&#x27; companies. If true, will be displayed on all child companies. | [optional] 
**checksum** | **string** | Request&#x27;s validity checksum | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

