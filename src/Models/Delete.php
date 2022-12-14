<?php

declare(strict_types=1);

/*
 * SiskomVoiceAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SiskomVoiceAPILib\Models;

use stdClass;

class Delete implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $response;

    /**
     * @var string
     */
    private $callerId;

    /**
     * @var string
     */
    private $action;

    /**
     * @param bool $response
     * @param string $callerId
     * @param string $action
     */
    public function __construct(bool $response, string $callerId, string $action)
    {
        $this->response = $response;
        $this->callerId = $callerId;
        $this->action = $action;
    }

    /**
     * Returns Response.
     */
    public function getResponse(): bool
    {
        return $this->response;
    }

    /**
     * Sets Response.
     *
     * @required
     * @maps response
     */
    public function setResponse(bool $response): void
    {
        $this->response = $response;
    }

    /**
     * Returns Caller Id.
     */
    public function getCallerId(): string
    {
        return $this->callerId;
    }

    /**
     * Sets Caller Id.
     *
     * @required
     * @maps caller_id
     */
    public function setCallerId(string $callerId): void
    {
        $this->callerId = $callerId;
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
        $json['response']  = $this->response;
        $json['caller_id'] = $this->callerId;
        $json['action']    = $this->action;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
