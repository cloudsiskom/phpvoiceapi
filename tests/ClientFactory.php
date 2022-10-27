<?php

declare(strict_types=1);

/*
 * SiskomVoiceAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SiskomVoiceAPILib\Tests;

use Core\Types\CallbackCatcher;

class ClientFactory
{
    public static function create(CallbackCatcher $httpCallback): \SiskomVoiceAPILib\SiskomVoiceAPIClient
    {
        $clientBuilder = \SiskomVoiceAPILib\SiskomVoiceAPIClientBuilder::init();
        $clientBuilder = self::addConfigurationFromEnvironment($clientBuilder);
        $clientBuilder = self::addTestConfiguration($clientBuilder);
        return $clientBuilder->httpCallback($httpCallback)->build();
    }

    public static function addTestConfiguration(
        \SiskomVoiceAPILib\SiskomVoiceAPIClientBuilder $builder
    ): \SiskomVoiceAPILib\SiskomVoiceAPIClientBuilder {
        return $builder;
    }

    public static function addConfigurationFromEnvironment(
        \SiskomVoiceAPILib\SiskomVoiceAPIClientBuilder $builder
    ): \SiskomVoiceAPILib\SiskomVoiceAPIClientBuilder {
        $timeout = getenv('SISKOM_VOICE_API_LIB_TIMEOUT');
        $numberOfRetries = getenv('SISKOM_VOICE_API_LIB_NUMBER_OF_RETRIES');
        $maximumRetryWaitTime = getenv('SISKOM_VOICE_API_LIB_MAXIMUM_RETRY_WAIT_TIME');
        $environment = getenv('SISKOM_VOICE_API_LIB_ENVIRONMENT');
        $username = getenv('SISKOM_VOICE_API_LIB_USERNAME');
        $password = getenv('SISKOM_VOICE_API_LIB_PASSWORD');

        if ($timeout !== false && \is_numeric($timeout)) {
            $builder->timeout(intval($timeout));
        }

        if ($numberOfRetries !== false && \is_numeric($numberOfRetries)) {
            $builder->numberOfRetries(intval($numberOfRetries));
        }

        if ($maximumRetryWaitTime !== false && \is_numeric($maximumRetryWaitTime)) {
            $builder->maximumRetryWaitTime(intval($maximumRetryWaitTime));
        }

        if ($environment !== false) {
            $builder->environment($environment);
        }

        if ($username !== false) {
            $builder->username($username);
        }

        if ($password !== false) {
            $builder->password($password);
        }

        return $builder;
    }
}