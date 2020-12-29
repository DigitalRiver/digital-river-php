# # FileObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the file. | [optional] 
**created_time** | [**\DateTime**](\DateTime.md) | The time when the file was created. | [optional] 
**file_name** | **string** | A filename for the file, suitable for saving to a filesystem. | [optional] 
**links** | [**\DigitalRiver\ApiSdk\Model\FileLink[]**](FileLink.md) | An array of file links. | [optional] 
**purpose** | **string** | The [purpose of the file](https://docs.digitalriver.com/digital-river-api/files-and-file-links-1/files/understanding-the-files-purpose). | [optional] 
**title** | **string** | A user friendly title for the document. | [optional] 
**size** | **float** | The size in bytes of the file object. | [optional] 
**type** | **string** | The type of the file returned (e.g. pdf, jpg, or png). | [optional] 
**url** | **string** | The URL from which the file can be downloaded. To download the file, use your live secret API key. | [optional] 
**live_mode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


