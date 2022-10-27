<?php

declare(strict_types=1);

/*
 * SiskomVoiceAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SiskomVoiceAPILib\Models;

use stdClass;

class IntentQuery implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $response;

    /**
     * @var string
     */
    private $messageTexts;

    /**
     * @param bool $response
     * @param string $messageTexts
     */
    public function __construct(bool $response, string $messageTexts)
    {
        $this->response = $response;
        $this->messageTexts = $messageTexts;
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
     * Returns Message Texts.
     */
    public function getMessageTexts(): string
    {
        return $this->messageTexts;
    }

    /**
     * Sets Message Texts.
     *
     * @required
     * @maps message_texts
     */
    public function setMessageTexts(string $messageTexts): void
    {
        $this->messageTexts = $messageTexts;
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
        $json['response']      = $this->response;
        $json['message_texts'] = $this->messageTexts;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
