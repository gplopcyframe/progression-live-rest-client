<?php
/**
 * Client
 *
 * PHP version 5
 *
 * @category Class
 * @package  ProgressionLive
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ProgressionLIVE API
 *
 * Welcome to the ProgressionLIVE REST API documentation page.    The data exchange format is [JSON](https://en.wikipedia.org/wiki/JavaScript_Object_Notation). This format facilitates the exchange of data with almost all systems while minimizing the amount of data.    All API operations are listed on this page and can be tested directly.    An [OpenAPI](https://github.com/OAI/OpenAPI-Specification) specification file is available at the link above and allows you to generate clients in several languages ​​using [Swagger](https://swagger.io/swagger-codegen/) tools.    The examples on this page use the command-line tool from the well-known Unix family of systems [CURL](https://curl.haxx.se/). This demonstrates the ease of integration. Note that it is possible to install CURL under Microsoft Windows but it's not necessary for the development of an integration. .NET technologies also make it easy to connect to a [REST / JSON API](https://docs.microsoft.com/en-us/aspnet/web-api/overview/advanced/calling-a-web-api-from-a-net-client).    At the authentication level, 3 options are available:    #### HTTP Basic  This mechanism uses standard HTTP authentication supported by the majority of HTTP clients. Just provide your API key as a user without a password. If you have to do it programmatically, you must add an \"Authorization: Basic&lt;base64 encoded apikey:&gt;\" header.    #### HTTP Bearer  This mechanism uses the same header as HTTP Basic authentication but makes adding a header manually easier. Just add an \"Authorization: Bearer&lt;apikey&gt;\" header.    #### Query  In the case where it would be too complex or impossible for you to add authentication headers on the programming platform used, it is possible to add an apiKey = &lt;apikey&gt; parameter to the URL of each request. e.g.: https://macie.progressionlive.com/server/rest/task/1234?apikey=&lt;apikey&gt;
 *
 * OpenAPI spec version: 1.0
 * Contact: support@progressionlive.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.35
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ProgressionLive\Model;

use \ArrayAccess;
use \ProgressionLive\ObjectSerializer;

/**
 * Client Class Doc Comment
 *
 * @category Class
 * @package  ProgressionLive
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Client implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Client';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'label' => 'string',
'lang' => 'string',
'address' => '\ProgressionLive\Model\Address',
'rebate' => 'float',
'showNote' => 'bool',
'note' => 'string',
'type' => '\ProgressionLive\Model\EntityRef',
'taxConfig' => '\ProgressionLive\Model\TaxConfig',
'primaryContact' => '\ProgressionLive\Model\Contact',
'priceList' => '\ProgressionLive\Model\EntityRef',
'properties' => 'map[string,string]',
'metas' => 'map[string,string]',
'url' => 'string',
'id' => 'float',
'uid' => 'string',
'created' => '\DateTime',
'updated' => '\DateTime',
'removed' => '\DateTime',
'externalId' => 'string',
'tags' => '\ProgressionLive\Model\EntityRef[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'label' => null,
'lang' => null,
'address' => null,
'rebate' => null,
'showNote' => null,
'note' => null,
'type' => null,
'taxConfig' => null,
'primaryContact' => null,
'priceList' => null,
'properties' => null,
'metas' => null,
'url' => null,
'id' => null,
'uid' => null,
'created' => 'date-time',
'updated' => 'date-time',
'removed' => 'date-time',
'externalId' => null,
'tags' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'label' => 'label',
'lang' => 'lang',
'address' => 'address',
'rebate' => 'rebate',
'showNote' => 'showNote',
'note' => 'note',
'type' => 'type',
'taxConfig' => 'taxConfig',
'primaryContact' => 'primaryContact',
'priceList' => 'priceList',
'properties' => 'properties',
'metas' => 'metas',
'url' => 'url',
'id' => 'id',
'uid' => 'uid',
'created' => 'created',
'updated' => 'updated',
'removed' => 'removed',
'externalId' => 'externalId',
'tags' => 'tags'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label' => 'setLabel',
'lang' => 'setLang',
'address' => 'setAddress',
'rebate' => 'setRebate',
'showNote' => 'setShowNote',
'note' => 'setNote',
'type' => 'setType',
'taxConfig' => 'setTaxConfig',
'primaryContact' => 'setPrimaryContact',
'priceList' => 'setPriceList',
'properties' => 'setProperties',
'metas' => 'setMetas',
'url' => 'setUrl',
'id' => 'setId',
'uid' => 'setUid',
'created' => 'setCreated',
'updated' => 'setUpdated',
'removed' => 'setRemoved',
'externalId' => 'setExternalId',
'tags' => 'setTags'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label' => 'getLabel',
'lang' => 'getLang',
'address' => 'getAddress',
'rebate' => 'getRebate',
'showNote' => 'getShowNote',
'note' => 'getNote',
'type' => 'getType',
'taxConfig' => 'getTaxConfig',
'primaryContact' => 'getPrimaryContact',
'priceList' => 'getPriceList',
'properties' => 'getProperties',
'metas' => 'getMetas',
'url' => 'getUrl',
'id' => 'getId',
'uid' => 'getUid',
'created' => 'getCreated',
'updated' => 'getUpdated',
'removed' => 'getRemoved',
'externalId' => 'getExternalId',
'tags' => 'getTags'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const LANG_FR = 'fr';
const LANG_EN = 'en';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLangAllowableValues()
    {
        return [
            self::LANG_FR,
self::LANG_EN,        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['lang'] = isset($data['lang']) ? $data['lang'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['rebate'] = isset($data['rebate']) ? $data['rebate'] : null;
        $this->container['showNote'] = isset($data['showNote']) ? $data['showNote'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['taxConfig'] = isset($data['taxConfig']) ? $data['taxConfig'] : null;
        $this->container['primaryContact'] = isset($data['primaryContact']) ? $data['primaryContact'] : null;
        $this->container['priceList'] = isset($data['priceList']) ? $data['priceList'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['metas'] = isset($data['metas']) ? $data['metas'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        $allowedValues = $this->getLangAllowableValues();
        if (!is_null($this->container['lang']) && !in_array($this->container['lang'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'lang', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
     * Sets lang
     *
     * @param string $lang The language code to use: 'en' or 'fr'. (Default = company's default language)
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $allowedValues = $this->getLangAllowableValues();
        if (!is_null($lang) && !in_array($lang, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'lang', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['lang'] = $lang;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \ProgressionLive\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \ProgressionLive\Model\Address $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets rebate
     *
     * @return float
     */
    public function getRebate()
    {
        return $this->container['rebate'];
    }

    /**
     * Sets rebate
     *
     * @param float $rebate rebate
     *
     * @return $this
     */
    public function setRebate($rebate)
    {
        $this->container['rebate'] = $rebate;

        return $this;
    }

    /**
     * Gets showNote
     *
     * @return bool
     */
    public function getShowNote()
    {
        return $this->container['showNote'];
    }

    /**
     * Sets showNote
     *
     * @param bool $showNote showNote
     *
     * @return $this
     */
    public function setShowNote($showNote)
    {
        $this->container['showNote'] = $showNote;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \ProgressionLive\Model\EntityRef
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \ProgressionLive\Model\EntityRef $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets taxConfig
     *
     * @return \ProgressionLive\Model\TaxConfig
     */
    public function getTaxConfig()
    {
        return $this->container['taxConfig'];
    }

    /**
     * Sets taxConfig
     *
     * @param \ProgressionLive\Model\TaxConfig $taxConfig taxConfig
     *
     * @return $this
     */
    public function setTaxConfig($taxConfig)
    {
        $this->container['taxConfig'] = $taxConfig;

        return $this;
    }

    /**
     * Gets primaryContact
     *
     * @return \ProgressionLive\Model\Contact
     */
    public function getPrimaryContact()
    {
        return $this->container['primaryContact'];
    }

    /**
     * Sets primaryContact
     *
     * @param \ProgressionLive\Model\Contact $primaryContact primaryContact
     *
     * @return $this
     */
    public function setPrimaryContact($primaryContact)
    {
        $this->container['primaryContact'] = $primaryContact;

        return $this;
    }

    /**
     * Gets priceList
     *
     * @return \ProgressionLive\Model\EntityRef
     */
    public function getPriceList()
    {
        return $this->container['priceList'];
    }

    /**
     * Sets priceList
     *
     * @param \ProgressionLive\Model\EntityRef $priceList priceList
     *
     * @return $this
     */
    public function setPriceList($priceList)
    {
        $this->container['priceList'] = $priceList;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return map[string,string]
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param map[string,string] $properties Properties specific to the type of the entity.
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets metas
     *
     * @return map[string,string]
     */
    public function getMetas()
    {
        return $this->container['metas'];
    }

    /**
     * Sets metas
     *
     * @param map[string,string] $metas Metas properties of this entity. Most schema entities (TODO: list) support this type of property. They make it possible to store various information on the entity without the fields being defined beforehand.
     *
     * @return $this
     */
    public function setMetas($metas)
    {
        $this->container['metas'] = $metas;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url The REST api url of this entity to read it.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets id
     *
     * @return float
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float $id The unique identifier of this entity. Auto generated by the system.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string $uid The unique universal identifier of this entity.
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime $updated updated
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets removed
     *
     * @return \DateTime
     */
    public function getRemoved()
    {
        return $this->container['removed'];
    }

    /**
     * Sets removed
     *
     * @param \DateTime $removed removed
     *
     * @return $this
     */
    public function setRemoved($removed)
    {
        $this->container['removed'] = $removed;

        return $this;
    }

    /**
     * Gets externalId
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
     * Sets externalId
     *
     * @param string $externalId Unique field to identify a record by the identifier of an external system.
     *
     * @return $this
     */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \ProgressionLive\Model\EntityRef[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \ProgressionLive\Model\EntityRef[] $tags The list of the tags for this entity.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
