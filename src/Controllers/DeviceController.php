<?php

declare(strict_types=1);

/*
 * SiskomVoiceAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SiskomVoiceAPILib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use SiskomVoiceAPILib\Exceptions\ApiException;
use SiskomVoiceAPILib\Exceptions\Device1Exception;
use SiskomVoiceAPILib\Exceptions\DeviceDeleteException;
use SiskomVoiceAPILib\Exceptions\DeviceEditException;
use SiskomVoiceAPILib\Models\DevcieList;
use SiskomVoiceAPILib\Models\Device;
use SiskomVoiceAPILib\Models\DeviceDeleteRequest;
use SiskomVoiceAPILib\Models\DeviceEditRequest;
use SiskomVoiceAPILib\Models\DeviceRequest;

class DeviceController extends BaseController
{
    /**
     * DEVICE_TYPE :
     *
     * \*   TRUNK (This will be sip trunk with dedicated IP Address)
     * \*   EXTEN (Extension)
     *
     * @param DeviceRequest $body
     *
     * @return Device Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function device(DeviceRequest $body): Device
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/extension/new')
            ->auth('global')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(403, ErrorType::init('Forbidden', Device1Exception::class))
            ->type(Device::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @return DevcieList Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function devcieList(): DevcieList
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/extension/list')
            ->auth('global')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'));

        $_resHandler = $this->responseHandler()->type(DevcieList::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param DeviceEditRequest $body
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deviceEdit(DeviceEditRequest $body): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/extension/edit')
            ->auth('global')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(403, ErrorType::init('Forbidden', DeviceEditException::class));

        $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param DeviceDeleteRequest $body
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deviceDelete(DeviceDeleteRequest $body): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/extension/delete')
            ->auth('global')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(404, ErrorType::init('Not Found', DeviceDeleteException::class));

        $this->execute($_reqBuilder, $_resHandler);
    }
}
