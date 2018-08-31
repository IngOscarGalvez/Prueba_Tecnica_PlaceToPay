<?php

namespace App;

class Authentication
{
    /**
     * Identificador habilitado para el consumo del
     * API, entregado por Place to Pay.
     *
     * @var string
     */
    protected $login;

    /**
     * Llave transaccional para el consumo del API
     * SHA1(seed + tranKey)
     *
     * @var string
     */
    protected $tranKey;

    /**
     * Semilla usada para el consumo del API en el
     * proceso del hash por SHA1 del tranKey, ISO
     * 8601.
     *
     * @var string
     */
    protected $seed;

    /**
     * Datos adicionales a la estructura de
     * autenticación
     *
     * @var Attribute[]
     */
    protected $additional;

    /**
     * Authentication constructor.
     *
     * @param string $login
     * @param string $tranKey
     * @param string $seed
     * @param array $additional
     */
    public function __construct($login, $tranKey, $seed, $additional)
    {
        $this->login = $login;
        $this->tranKey = $tranKey;
        $this->seed = $seed;
        $this->additional = $additional;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getTranKey()
    {
        return $this->tranKey;
    }

    /**
     * @return string
     */
    public function getSeed()
    {
        return $this->seed;
    }

    /**
     * @return Attribute[]
     */
    public function getAdditional()
    {
        return $this->additional;
    }
}
