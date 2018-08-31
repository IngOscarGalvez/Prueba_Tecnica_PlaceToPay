<?php

namespace App;


class Bank
{
    /**
     * Código de la entidad financiera
     *
     * @var string
     */
    protected $bankCode;

    /**
     * Nombre de la entidad financiera
     *
     * @var string
     */
    protected $bankName;

    /**
     * Bank constructor.
     *
     * @param string $bankCode
     * @param string $bankName
     */
    public function __construct($bankCode, $bankName)
    {
        $this->bankCode = $bankCode;
        $this->bankName = $bankName;
    }

    /**
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }
}
