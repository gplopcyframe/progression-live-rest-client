<?php
/**
 * ProfileApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace ProgressionLive;

use ProgressionLive\Configuration;
use ProgressionLive\ApiException;
use ProgressionLive\ObjectSerializer;

/**
 * ProfileApiTest Class Doc Comment
 *
 * @category Class
 * @package  ProgressionLive
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProfileApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for profileUpdatePost
     *
     * .
     *
     */
    public function testProfileUpdatePost()
    {
    }
}
