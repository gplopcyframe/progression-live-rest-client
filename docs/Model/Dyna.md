# Dyna

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**label** | **string** |  | 
**type** | [**\ProgressionLive\Model\EntityRef**](EntityRef.md) |  | 
**properties** | **map[string,string]** | Properties specific to the type of the entity. | [optional] 
**metas** | **map[string,string]** | Metas properties of this entity. Most schema entities (TODO: list) support this type of property. They make it possible to store various information on the entity without the fields being defined beforehand. | [optional] 
**url** | **string** | The REST api url of this entity to read it. | [optional] 
**id** | **float** | The unique identifier of this entity. Auto generated by the system. | [optional] 
**uid** | **string** | The unique universal identifier of this entity. | [optional] 
**created** | [**\DateTime**](\DateTime.md) |  | [optional] 
**updated** | [**\DateTime**](\DateTime.md) |  | [optional] 
**removed** | [**\DateTime**](\DateTime.md) |  | [optional] 
**externalId** | **string** | Unique field to identify a record by the identifier of an external system. | [optional] 
**tags** | [**\ProgressionLive\Model\EntityRef[]**](EntityRef.md) | The list of the tags for this entity. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
