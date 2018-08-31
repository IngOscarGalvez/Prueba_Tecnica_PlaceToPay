<?php

namespace App;

class Attribute
{
    /**
     * Código para referenciar el atributo
     *
     * @var string
     */
    protected $name;

    /**
     * Valor que asume el atributo
     *
     * @var string
     */
    protected $value;

    /**
     * Attribute constructor.
     *
     * @param string $name
     * @param string $value
     */
    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
