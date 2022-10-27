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
use SiskomVoiceAPILib\Models\Blast;
use SiskomVoiceAPILib\Models\Blastrequest;

class CallController extends BaseController
{
    /**
     * SUPPORTED **LANGUAGE** :
     *
     * \* id-ID
     * \* en-US
     *
     * **GENDER** :
     *
     * \* MALE
     * \* FEMALE
     *
     * @param Blastrequest $body
     *
     * @return Blast Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function blast(Blastrequest $body): Blast
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/call/blast')
            ->auth('global')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()->type(Blast::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
