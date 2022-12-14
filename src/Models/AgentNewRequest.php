<?php

declare(strict_types=1);

/*
 * SiskomVoiceAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SiskomVoiceAPILib\Models;

use stdClass;

class AgentNewRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $action;

    /**
     * @var string
     */
    private $agentCode;

    /**
     * @var string
     */
    private $agentName;

    /**
     * @var string
     */
    private $agentPassword;

    /**
     * @param string $action
     * @param string $agentCode
     * @param string $agentName
     * @param string $agentPassword
     */
    public function __construct(string $action, string $agentCode, string $agentName, string $agentPassword)
    {
        $this->action = $action;
        $this->agentCode = $agentCode;
        $this->agentName = $agentName;
        $this->agentPassword = $agentPassword;
    }

    /**
     * Returns Action.
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * Sets Action.
     *
     * @required
     * @maps action
     */
    public function setAction(string $action): void
    {
        $this->action = $action;
    }

    /**
     * Returns Agent Code.
     */
    public function getAgentCode(): string
    {
        return $this->agentCode;
    }

    /**
     * Sets Agent Code.
     *
     * @required
     * @maps agent_code
     */
    public function setAgentCode(string $agentCode): void
    {
        $this->agentCode = $agentCode;
    }

    /**
     * Returns Agent Name.
     */
    public function getAgentName(): string
    {
        return $this->agentName;
    }

    /**
     * Sets Agent Name.
     *
     * @required
     * @maps agent_name
     */
    public function setAgentName(string $agentName): void
    {
        $this->agentName = $agentName;
    }

    /**
     * Returns Agent Password.
     */
    public function getAgentPassword(): string
    {
        return $this->agentPassword;
    }

    /**
     * Sets Agent Password.
     *
     * @required
     * @maps agent_password
     */
    public function setAgentPassword(string $agentPassword): void
    {
        $this->agentPassword = $agentPassword;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['action']         = $this->action;
        $json['agent_code']     = $this->agentCode;
        $json['agent_name']     = $this->agentName;
        $json['agent_password'] = $this->agentPassword;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
