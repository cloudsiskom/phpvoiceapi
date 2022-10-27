<?php

declare(strict_types=1);

/*
 * SiskomVoiceAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SiskomVoiceAPILib\Exceptions;

class DeviceDeleteException extends ApiException
{
    /**
     * @var bool
     */
    private $response;

    /**
     * @var int
     */
    private $errorCode;

    /**
     * @var string
     */
    private $reason;

    /**
     * @param string $reason
     * @param \SiskomVoiceAPILib\Http\HttpRequest $request
     * @param \SiskomVoiceAPILib\Http\HttpResponse $response
     * @param bool $response
     * @param int $errorCode
     * @param string $reason
     */
    public function __construct(
        string $reason,
        \SiskomVoiceAPILib\Http\HttpRequest $request,
        \SiskomVoiceAPILib\Http\HttpResponse $response,
        bool $response,
        int $errorCode,
        string $reason
    ) {
        parent::__construct($reason, $request, $response);
        $this->response = $response;
        $this->errorCode = $errorCode;
        $this->reason = $reason;
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
     * Returns Error Code.
     */
    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    /**
     * Sets Error Code.
     *
     * @required
     * @maps error_code
     */
    public function setErrorCode(int $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    /**
     * Returns Reason.
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * Sets Reason.
     *
     * @required
     * @maps reason
     */
    public function setReason(string $reason): void
    {
        $this->reason = $reason;
    }
}