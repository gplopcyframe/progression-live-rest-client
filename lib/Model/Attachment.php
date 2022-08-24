<?php
/**
 * Attachment
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
 * Attachment Class Doc Comment
 *
 * @category Class
 * @package  ProgressionLive
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Attachment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Attachment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => '\ProgressionLive\Model\EntityRef',
'properties' => 'map[string,string]',
'name' => 'string',
'contentType' => 'string',
'data' => 'string',
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
        'type' => null,
'properties' => null,
'name' => null,
'contentType' => null,
'data' => 'byte',
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
        'type' => 'type',
'properties' => 'properties',
'name' => 'name',
'contentType' => 'contentType',
'data' => 'data',
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
        'type' => 'setType',
'properties' => 'setProperties',
'name' => 'setName',
'contentType' => 'setContentType',
'data' => 'setData',
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
        'type' => 'getType',
'properties' => 'getProperties',
'name' => 'getName',
'contentType' => 'getContentType',
'data' => 'getData',
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets contentType
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
     * Sets contentType
     *
     * @param string $contentType MIME Type format (examples : 'application/pdf' or 'image/jpeg')
     *
     * @return $this
     */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;

        return $this;
    }

    /**
     * Gets data
     *
     * @return string
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param string $data data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

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
