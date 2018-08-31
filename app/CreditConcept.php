<?php

namespace App;


class CreditConcept
{
    /**
     * Código de la entidad del tercero para
     * dispersión
     *
     * @var string
     */
    protected $entityCode;

    /**
     * Código del servicio del tercero
     *
     * @var string
     */
    protected $serviceCode;

    /**
     * Valor total a recaudar a favor de la entidad
     *
     * @var double
     */
    protected $amountValue;

    /**
     * Discriminación del impuesto aplicado a favor
     * de la entidad
     *
     * @var double
     */
    protected $taxValue;

    /**
     * Descripción el concepto cobrado
     *
     * @var string
     */
    protected $description;

    /**
     * CreditConcept constructor.
     *
     * @param string $entityCode
     * @param string $serviceCode
     * @param double $amountValue
     * @param double $taxValue
     * @param string $description
     */
    public function __construct($entityCode, $serviceCode, $amountValue, $taxValue, $description)
    {
        $this->entityCode = $entityCode;
        $this->serviceCode = $serviceCode;
        $this->amountValue = $amountValue;
        $this->taxValue = $taxValue;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getEntityCode()
    {
        return $this->entityCode;
    }

    /**
     * @return string
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    /**
     * @return double
     */
    public function getAmountValue()
    {
        return $this->amountValue;
    }

    /**
     * @return double
     */
    public function getTaxValuel()
    {
        return $this->taxValue;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
