<?php
/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category Class
 * @package  ProgressionLive
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address' => 'string',
'app' => 'string',
'city' => 'string',
'province' => 'string',
'country' => 'string',
'postalCode' => 'string',
'phone' => 'string',
'fax' => 'string',
'email' => 'string',
'position' => '\ProgressionLive\Model\Position'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address' => null,
'app' => null,
'city' => null,
'province' => null,
'country' => null,
'postalCode' => null,
'phone' => null,
'fax' => null,
'email' => null,
'position' => null    ];

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
        'address' => 'address',
'app' => 'app',
'city' => 'city',
'province' => 'province',
'country' => 'country',
'postalCode' => 'postalCode',
'phone' => 'phone',
'fax' => 'fax',
'email' => 'email',
'position' => 'position'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
'app' => 'setApp',
'city' => 'setCity',
'province' => 'setProvince',
'country' => 'setCountry',
'postalCode' => 'setPostalCode',
'phone' => 'setPhone',
'fax' => 'setFax',
'email' => 'setEmail',
'position' => 'setPosition'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
'app' => 'getApp',
'city' => 'getCity',
'province' => 'getProvince',
'country' => 'getCountry',
'postalCode' => 'getPostalCode',
'phone' => 'getPhone',
'fax' => 'getFax',
'email' => 'getEmail',
'position' => 'getPosition'    ];

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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets app
     *
     * @return string
     */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
     * Sets app
     *
     * @param string $app app
     *
     * @return $this
     */
    public function setApp($app)
    {
        $this->container['app'] = $app;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
     * Sets province
     *
     * @param string $province province
     *
     * @return $this
     */
    public function setProvince($province)
    {
        $this->container['province'] = $province;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param string $postalCode postalCode
     *
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string $fax fax
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets position
     *
     * @return \ProgressionLive\Model\Position
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param \ProgressionLive\Model\Position $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

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