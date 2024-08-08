# CompanyAttributesBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | unique Immodvisor company ID to update (company or brand). optional if custom_id present. | [optional] 
**customId** | **string** | Your unique company&#x27;s identifier to update (company or brand). Optional if id present. | [optional] 
**attributes** | **object[]** | Google attribute table. To get the list of Google attributes see the endpoint : getactivity. example : attributes[has_wheelchair_accessible_entrance]&#x3D;true The type of value to send for each attribute is specified in the endpoint. | 
**checksum** | **string** | Request&#x27;s validity checksum | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

