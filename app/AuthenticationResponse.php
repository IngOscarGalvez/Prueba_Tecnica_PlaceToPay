<?php

namespace App;

class AuthenticationResponse
{
    /**
     * @var Authentication
     */
    protected $Authentication;

    /**
     * GetConversionAmountResponse constructor.
     *
     * @param string
     */
    public function __construct($Authentication)
    {
        $this->Authentication = $Authentication;
    }

    /**
     * @return string
     */
    public function getAuthentication()
    {
        return $this->Authentication;
    }
}
