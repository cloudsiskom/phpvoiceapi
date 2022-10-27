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
use CoreInterfaces\Core\Request\RequestMethod;
use SiskomVoiceAPILib\Exceptions\ApiException;
use SiskomVoiceAPILib\Models\Delete;
use SiskomVoiceAPILib\Models\Deleterequest;
use SiskomVoiceAPILib\Models\MList;
use SiskomVoiceAPILib\Models\Request;
use SiskomVoiceAPILib\Models\Requestrequest;

class MaskingController extends BaseController
{
    /**
     * @param Requestrequest $body
     *
     * @return Request Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function request(Requestrequest $body): Request
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/masking/request')
            ->auth('global')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()->type(Request::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param Deleterequest $body
     *
     * @return Delete Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function delete(Deleterequest $body): Delete
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/masking/delete')
            ->auth('global')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()->type(Delete::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @return MList Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function mList(): MList
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/masking/list')
            ->auth('global')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'));

        $_resHandler = $this->responseHandler()->type(MList::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
