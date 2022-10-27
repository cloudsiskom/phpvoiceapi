<?php

declare(strict_types=1);

/*
 * SiskomVoiceAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SiskomVoiceAPILib;

use Core\Authentication\CoreAuth;
use Core\Request\Parameters\HeaderParam;

/**
 * Utility class for authorization and token management.
 */
class BasicAuthManager extends CoreAuth implements BasicAuthCredentials
{
    private $username;

    private $password;

    /**
     * Returns an instance of this class.
     *
     * @param string $username
     * @param string $password
     */
    public function __construct(string $username, string $password)
    {
        parent::__construct(
            HeaderParam::init('Authorization', 'Basic ' . base64_encode("$username:$password"))->required()
        );
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * String value for username.
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * String value for password.
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $username
     * @param string $password
     */
    public function equals(string $username, string $password): bool
    {
        return $username == $this->username &&
            $password == $this->password;
    }
}
