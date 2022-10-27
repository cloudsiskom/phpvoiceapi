<?php

declare(strict_types=1);

/*
 * SiskomVoiceAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SiskomVoiceAPILib\Models;

use stdClass;

class TranslationSetup implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $respose;

    /**
     * @var string
     */
    private $action;

    /**
     * @var string
     */
    private $transactionId;

    /**
     * @var string
     */
    private $externalId;

    /**
     * @var string
     */
    private $fromNumber;

    /**
     * @var string
     */
    private $destinationNumber;

    /**
     * @var string
     */
    private $callerDidgateway;

    /**
     * @var string
     */
    private $calledDidgateway;

    /**
     * @param bool $respose
     * @param string $action
     * @param string $transactionId
     * @param string $externalId
     * @param string $fromNumber
     * @param string $destinationNumber
     * @param string $callerDidgateway
     * @param string $calledDidgateway
     */
    public function __construct(
        bool $respose,
        string $action,
        string $transactionId,
        string $externalId,
        string $fromNumber,
        string $destinationNumber,
        string $callerDidgateway,
        string $calledDidgateway
    ) {
        $this->respose = $respose;
        $this->action = $action;
        $this->transactionId = $transactionId;
        $this->externalId = $externalId;
        $this->fromNumber = $fromNumber;
        $this->destinationNumber = $destinationNumber;
        $this->callerDidgateway = $callerDidgateway;
        $this->calledDidgateway = $calledDidgateway;
    }

    /**
     * Returns Respose.
     */
    public function getRespose(): bool
    {
        return $this->respose;
    }

    /**
     * Sets Respose.
     *
     * @required
     * @maps respose
     */
    public function setRespose(bool $respose): void
    {
        $this->respose = $respose;
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
     * Returns Transaction Id.
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * Sets Transaction Id.
     *
     * @required
     * @maps transaction_id
     */
    public function setTransactionId(string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * Returns External Id.
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

    /**
     * Sets External Id.
     *
     * @required
     * @maps external_id
     */
    public function setExternalId(string $externalId): void
    {
        $this->externalId = $externalId;
    }

    /**
     * Returns From Number.
     */
    public function getFromNumber(): string
    {
        return $this->fromNumber;
    }

    /**
     * Sets From Number.
     *
     * @required
     * @maps from_number
     */
    public function setFromNumber(string $fromNumber): void
    {
        $this->fromNumber = $fromNumber;
    }

    /**
     * Returns Destination Number.
     */
    public function getDestinationNumber(): string
    {
        return $this->destinationNumber;
    }

    /**
     * Sets Destination Number.
     *
     * @required
     * @maps destination_number
     */
    public function setDestinationNumber(string $destinationNumber): void
    {
        $this->destinationNumber = $destinationNumber;
    }

    /**
     * Returns Caller Didgateway.
     */
    public function getCallerDidgateway(): string
    {
        return $this->callerDidgateway;
    }

    /**
     * Sets Caller Didgateway.
     *
     * @required
     * @maps caller_didgateway
     */
    public function setCallerDidgateway(string $callerDidgateway): void
    {
        $this->callerDidgateway = $callerDidgateway;
    }

    /**
     * Returns Called Didgateway.
     */
    public function getCalledDidgateway(): string
    {
        return $this->calledDidgateway;
    }

    /**
     * Sets Called Didgateway.
     *
     * @required
     * @maps called_didgateway
     */
    public function setCalledDidgateway(string $calledDidgateway): void
    {
        $this->calledDidgateway = $calledDidgateway;
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
        $json['respose']            = $this->respose;
        $json['action']             = $this->action;
        $json['transaction_id']     = $this->transactionId;
        $json['external_id']        = $this->externalId;
        $json['from_number']        = $this->fromNumber;
        $json['destination_number'] = $this->destinationNumber;
        $json['caller_didgateway']  = $this->callerDidgateway;
        $json['called_didgateway']  = $this->calledDidgateway;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
