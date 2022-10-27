<?php

declare(strict_types=1);

/*
 * SiskomVoiceAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SiskomVoiceAPILib\Tests\Controllers;

use Core\TestCase\BodyMatchers\KeysBodyMatcher;
use Core\TestCase\TestParam;
use SiskomVoiceAPILib\Controllers\AgentController;
use SiskomVoiceAPILib\Exceptions;
use SiskomVoiceAPILib\Models;

class AgentControllerTest extends BaseTestController
{
    /**
     * @var AgentController AgentController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getAgentController();
    }

    public function testAgentNew()
    {
        // Parameters for the API call
        $body = TestParam::object(
            "{\r\n  \"action\": \"[ACTION]\",\r\n  \"agent_code\": \"[AGENT_CODE]\",\r\n  \"age" .
            "nt_name\": \"[AGENT_NAME]\",\r\n  \"agent_password\": \"[AGENT_PASSWORD]\"\r\n}",
            Models\AgentNewRequest::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->agentNew($body);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json; charset=utf-8', false];
        $headers['Date'] = ['Thu, 15 Sep 2022 20:44:15 GMT', false];
        $headers['Server'] = ['Apache/2.4.41 (Ubuntu)', false];
        $headers['X-Powered-By'] = ['Express', false];
        $headers['Content-Length'] = ['111', false];
        $headers['ETag'] = ['W/"6f-oKohJtZJlMSnq8isk34nnQTBke8"', false];
        $headers['Keep-Alive'] = ['timeout=5, max=100', false];
        $headers['Connection'] = ['Keep-Alive', false];

        // Assert result with expected response
        $this->newTestCase($result)
        ->expectStatus(200)
        ->allowExtraHeaders()
        ->expectHeaders($headers)
        ->bodyMatcher(KeysBodyMatcher::init(
            TestParam::object(
                "{\r\n  \"response\": true,\r\n  \"data\": {\r\n    \"action\": \"new\",\r\n   " .
                " \"agent_code\": \"10002\",\r\n    \"agent_name\": \"queue-152\",\r\n    \"agen" .
                "t_password\": \"4321\"\r\n  }\r\n}"
            ),
            false,
            false
        ))
        ->assert();
    }

    public function testAgentDelete()
    {
        // Parameters for the API call
        $body = TestParam::object("{\r\n  \"agent_code\": \"[AGENT_CODE]\"\r\n}", Models\AgentDeleteRequest::class);

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->agentDelete($body);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json; charset=utf-8', false];
        $headers['Date'] = ['Thu, 15 Sep 2022 20:44:23 GMT', false];
        $headers['Server'] = ['Apache/2.4.41 (Ubuntu)', false];
        $headers['X-Powered-By'] = ['Express', false];
        $headers['Content-Length'] = ['47', false];
        $headers['ETag'] = ['W/"2f-hvW1DWNi5FAnBuaoQkNOFe057yA"', false];
        $headers['Keep-Alive'] = ['timeout=5, max=100', false];
        $headers['Connection'] = ['Keep-Alive', false];

        // Assert result with expected response
        $this->newTestCase($result)
        ->expectStatus(200)
        ->allowExtraHeaders()
        ->expectHeaders($headers)
        ->bodyMatcher(KeysBodyMatcher::init(
            TestParam::object(
                "{\r\n  \"response\": true,\r\n  \"data\": {\r\n    \"agent_code\": \"10002\"\r\n  }\r\n}"
            ),
            false,
            false
        ))
        ->assert();
    }

    public function testAgentList()
    {

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->agentList();
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json; charset=utf-8', false];
        $headers['Date'] = ['Thu, 15 Sep 2022 20:44:30 GMT', false];
        $headers['Server'] = ['Apache/2.4.41 (Ubuntu)', false];
        $headers['X-Powered-By'] = ['Express', false];
        $headers['Content-Length'] = ['253', false];
        $headers['ETag'] = ['W/"fd-iMH5V1E3Y5eiXsdls23bTaYwVCg"', false];
        $headers['Keep-Alive'] = ['timeout=5, max=100', false];
        $headers['Connection'] = ['Keep-Alive', false];

        // Assert result with expected response
        $this->newTestCase($result)
        ->expectStatus(200)
        ->allowExtraHeaders()
        ->expectHeaders($headers)
        ->bodyMatcher(KeysBodyMatcher::init(
            TestParam::object(
                "{\r\n  \"response\": true,\r\n  \"data\": [\r\n    {\r\n      \"id\": 34,\r\n " .
                "     \"customer_code\": \"GOJEK\",\r\n      \"agent_code\": 9610002,\r\n      " .
                "\"agent_name\": \"queue-152\",\r\n      \"require_password\": 1,\r\n      \"age" .
                "nt_password\": 4321,\r\n      \"lastlogin\": 0,\r\n      \"isActive\": 1,\r\n  " .
                "    \"isLogin\": 0,\r\n      \"login_channel\": null,\r\n      \"login_extensio" .
                "n\": null,\r\n      \"login_uniqueid\": null\r\n    }\r\n  ]\r\n}"
            ),
            false,
            false
        ))
        ->assert();
    }
}
