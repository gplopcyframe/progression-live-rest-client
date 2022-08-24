<?php
/**
 * TimeEntry
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
 * TimeEntry Class Doc Comment
 *
 * @category Class
 * @package  ProgressionLive
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TimeEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TimeEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activity' => '\ProgressionLive\Model\Activity',
'task' => '\ProgressionLive\Model\EntityRef',
'taskState' => '\ProgressionLive\Model\EntityRef',
'duration' => 'string',
'humanResource' => '\ProgressionLive\Model\EntityRef',
'sourceStart' => '\DateTime',
'sourceEnd' => '\DateTime',
'start' => '\DateTime',
'end' => '\DateTime',
'comment' => 'string',
'item' => '\ProgressionLive\Model\EntityRef',
'client' => '\ProgressionLive\Model\Client',
'location' => '\ProgressionLive\Model\EntityRef',
'punchInPosition' => '\ProgressionLive\Model\Position',
'punchOutPosition' => '\ProgressionLive\Model\Position',
'approvalDate' => '\DateTime',
'approver' => '\ProgressionLive\Model\EntityRef',
'metas' => 'map[string,string]',
'url' => 'string',
'id' => 'float',
'uid' => 'string',
'created' => '\DateTime',
'updated' => '\DateTime',
'removed' => '\DateTime',
'tags' => '\ProgressionLive\Model\EntityRef[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activity' => null,
'task' => null,
'taskState' => null,
'duration' => 'duration',
'humanResource' => null,
'sourceStart' => 'date-time',
'sourceEnd' => 'date-time',
'start' => 'date-time',
'end' => 'date-time',
'comment' => null,
'item' => null,
'client' => null,
'location' => null,
'punchInPosition' => null,
'punchOutPosition' => null,
'approvalDate' => 'date-time',
'approver' => null,
'metas' => null,
'url' => null,
'id' => null,
'uid' => null,
'created' => 'date-time',
'updated' => 'date-time',
'removed' => 'date-time',
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
        'activity' => 'activity',
'task' => 'task',
'taskState' => 'taskState',
'duration' => 'duration',
'humanResource' => 'humanResource',
'sourceStart' => 'sourceStart',
'sourceEnd' => 'sourceEnd',
'start' => 'start',
'end' => 'end',
'comment' => 'comment',
'item' => 'item',
'client' => 'client',
'location' => 'location',
'punchInPosition' => 'punchInPosition',
'punchOutPosition' => 'punchOutPosition',
'approvalDate' => 'approvalDate',
'approver' => 'approver',
'metas' => 'metas',
'url' => 'url',
'id' => 'id',
'uid' => 'uid',
'created' => 'created',
'updated' => 'updated',
'removed' => 'removed',
'tags' => 'tags'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activity' => 'setActivity',
'task' => 'setTask',
'taskState' => 'setTaskState',
'duration' => 'setDuration',
'humanResource' => 'setHumanResource',
'sourceStart' => 'setSourceStart',
'sourceEnd' => 'setSourceEnd',
'start' => 'setStart',
'end' => 'setEnd',
'comment' => 'setComment',
'item' => 'setItem',
'client' => 'setClient',
'location' => 'setLocation',
'punchInPosition' => 'setPunchInPosition',
'punchOutPosition' => 'setPunchOutPosition',
'approvalDate' => 'setApprovalDate',
'approver' => 'setApprover',
'metas' => 'setMetas',
'url' => 'setUrl',
'id' => 'setId',
'uid' => 'setUid',
'created' => 'setCreated',
'updated' => 'setUpdated',
'removed' => 'setRemoved',
'tags' => 'setTags'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activity' => 'getActivity',
'task' => 'getTask',
'taskState' => 'getTaskState',
'duration' => 'getDuration',
'humanResource' => 'getHumanResource',
'sourceStart' => 'getSourceStart',
'sourceEnd' => 'getSourceEnd',
'start' => 'getStart',
'end' => 'getEnd',
'comment' => 'getComment',
'item' => 'getItem',
'client' => 'getClient',
'location' => 'getLocation',
'punchInPosition' => 'getPunchInPosition',
'punchOutPosition' => 'getPunchOutPosition',
'approvalDate' => 'getApprovalDate',
'approver' => 'getApprover',
'metas' => 'getMetas',
'url' => 'getUrl',
'id' => 'getId',
'uid' => 'getUid',
'created' => 'getCreated',
'updated' => 'getUpdated',
'removed' => 'getRemoved',
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
        $this->container['activity'] = isset($data['activity']) ? $data['activity'] : null;
        $this->container['task'] = isset($data['task']) ? $data['task'] : null;
        $this->container['taskState'] = isset($data['taskState']) ? $data['taskState'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['humanResource'] = isset($data['humanResource']) ? $data['humanResource'] : null;
        $this->container['sourceStart'] = isset($data['sourceStart']) ? $data['sourceStart'] : null;
        $this->container['sourceEnd'] = isset($data['sourceEnd']) ? $data['sourceEnd'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['punchInPosition'] = isset($data['punchInPosition']) ? $data['punchInPosition'] : null;
        $this->container['punchOutPosition'] = isset($data['punchOutPosition']) ? $data['punchOutPosition'] : null;
        $this->container['approvalDate'] = isset($data['approvalDate']) ? $data['approvalDate'] : null;
        $this->container['approver'] = isset($data['approver']) ? $data['approver'] : null;
        $this->container['metas'] = isset($data['metas']) ? $data['metas'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
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

        if ($this->container['activity'] === null) {
            $invalidProperties[] = "'activity' can't be null";
        }
        if ($this->container['humanResource'] === null) {
            $invalidProperties[] = "'humanResource' can't be null";
        }
        if ($this->container['end'] === null) {
            $invalidProperties[] = "'end' can't be null";
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
     * Gets activity
     *
     * @return \ProgressionLive\Model\Activity
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     *
     * @param \ProgressionLive\Model\Activity $activity activity
     *
     * @return $this
     */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets task
     *
     * @return \ProgressionLive\Model\EntityRef
     */
    public function getTask()
    {
        return $this->container['task'];
    }

    /**
     * Sets task
     *
     * @param \ProgressionLive\Model\EntityRef $task task
     *
     * @return $this
     */
    public function setTask($task)
    {
        $this->container['task'] = $task;

        return $this;
    }

    /**
     * Gets taskState
     *
     * @return \ProgressionLive\Model\EntityRef
     */
    public function getTaskState()
    {
        return $this->container['taskState'];
    }

    /**
     * Sets taskState
     *
     * @param \ProgressionLive\Model\EntityRef $taskState taskState
     *
     * @return $this
     */
    public function setTaskState($taskState)
    {
        $this->container['taskState'] = $taskState;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param string $duration It is the duration in millis between the fields 'start' and 'end' ISO 8601 format (e.g.: PT1H20M).
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets humanResource
     *
     * @return \ProgressionLive\Model\EntityRef
     */
    public function getHumanResource()
    {
        return $this->container['humanResource'];
    }

    /**
     * Sets humanResource
     *
     * @param \ProgressionLive\Model\EntityRef $humanResource humanResource
     *
     * @return $this
     */
    public function setHumanResource($humanResource)
    {
        $this->container['humanResource'] = $humanResource;

        return $this;
    }

    /**
     * Gets sourceStart
     *
     * @return \DateTime
     */
    public function getSourceStart()
    {
        return $this->container['sourceStart'];
    }

    /**
     * Sets sourceStart
     *
     * @param \DateTime $sourceStart Start time generated by the system (cannot be updated by the user).
     *
     * @return $this
     */
    public function setSourceStart($sourceStart)
    {
        $this->container['sourceStart'] = $sourceStart;

        return $this;
    }

    /**
     * Gets sourceEnd
     *
     * @return \DateTime
     */
    public function getSourceEnd()
    {
        return $this->container['sourceEnd'];
    }

    /**
     * Sets sourceEnd
     *
     * @param \DateTime $sourceEnd End time generated by the system (cannot be updated by the user).
     *
     * @return $this
     */
    public function setSourceEnd($sourceEnd)
    {
        $this->container['sourceEnd'] = $sourceEnd;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime $start Start time used / shown by the system (can be updated by the user).
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime $end End time used / shown by the system (can be updated by the user).
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets item
     *
     * @return \ProgressionLive\Model\EntityRef
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \ProgressionLive\Model\EntityRef $item item
     *
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets client
     *
     * @return \ProgressionLive\Model\Client
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     *
     * @param \ProgressionLive\Model\Client $client client
     *
     * @return $this
     */
    public function setClient($client)
    {
        $this->container['client'] = $client;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \ProgressionLive\Model\EntityRef
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \ProgressionLive\Model\EntityRef $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets punchInPosition
     *
     * @return \ProgressionLive\Model\Position
     */
    public function getPunchInPosition()
    {
        return $this->container['punchInPosition'];
    }

    /**
     * Sets punchInPosition
     *
     * @param \ProgressionLive\Model\Position $punchInPosition punchInPosition
     *
     * @return $this
     */
    public function setPunchInPosition($punchInPosition)
    {
        $this->container['punchInPosition'] = $punchInPosition;

        return $this;
    }

    /**
     * Gets punchOutPosition
     *
     * @return \ProgressionLive\Model\Position
     */
    public function getPunchOutPosition()
    {
        return $this->container['punchOutPosition'];
    }

    /**
     * Sets punchOutPosition
     *
     * @param \ProgressionLive\Model\Position $punchOutPosition punchOutPosition
     *
     * @return $this
     */
    public function setPunchOutPosition($punchOutPosition)
    {
        $this->container['punchOutPosition'] = $punchOutPosition;

        return $this;
    }

    /**
     * Gets approvalDate
     *
     * @return \DateTime
     */
    public function getApprovalDate()
    {
        return $this->container['approvalDate'];
    }

    /**
     * Sets approvalDate
     *
     * @param \DateTime $approvalDate Date and time the the time entry has been approved.
     *
     * @return $this
     */
    public function setApprovalDate($approvalDate)
    {
        $this->container['approvalDate'] = $approvalDate;

        return $this;
    }

    /**
     * Gets approver
     *
     * @return \ProgressionLive\Model\EntityRef
     */
    public function getApprover()
    {
        return $this->container['approver'];
    }

    /**
     * Sets approver
     *
     * @param \ProgressionLive\Model\EntityRef $approver approver
     *
     * @return $this
     */
    public function setApprover($approver)
    {
        $this->container['approver'] = $approver;

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