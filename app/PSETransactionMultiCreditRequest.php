<?php

namespace App;

class PSETransactionMultiCreditRequest
{
    /**
     * Código de la entidad financiera con la cual
     * realizar la transacción
     *
     * @var string
     */
    protected $bankCode;

    /**
     * Tipo de interfaz del banco a desplegar [0 =
     * PERSONAS, 1 = EMPRESAS]
     *
     * @var string
     */
    protected $bankInterface;

    /**
     * URL de retorno especificada para la entidad
     * financiera
     *
     * @var string
     */
    protected $returnURL;

    /**
     * Referencia única de pago
     *
     * @var string
     */
    protected $reference;

    /**
     * Descripción del pago
     *
     * @var string
     */
    protected $description;

    /**
     * Idioma esperado para las transacciones
     * acorde a ISO 631-1, mayúscula sostenida
     *
     * @var string
     */
    protected $language;

    /**
     * Moneda a usar para el recaudo acorde a ISO
     * 4217
     *
     * @var string
     */
    protected $currency;

    /**
     * Valor total a recaudar
     *
     * @var double
     */
    protected $totalAmount;

    /**
     * Discriminación del impuesto aplicado
     *
     * @var double
     */
    protected $taxAmount;

    /**
     * Base de devolución para el impuesto
     *
     * @var double
     */
    protected $devolutionBase;

    /**
     * Propina u otros valores exentos de impuesto
     * (tasa aeroportuaria) y que deben agregarse
     * al valor total a pagar
     *
     * @var double
     */
    protected $tipAmount;

    /**
     * Información del pagador
     *
     * @var Person
     */
    protected $payer;

    /**
     * Información del comprador
     *
     * @var Person
     */
    protected $buyer;

    /**
     * Información del receptor
     *
     * @var Person
     */
    protected $shipping;

    /**
     * Dirección IP desde la cual realiza la
     * transacción el pagador
     *
     * @var string
     */
    protected $ipAddress;

    /**
     * Agente de navegación utilizado por el
     * pagador
     *
     * @var string
     */
    protected $userAgent;

    /**
     * Datos adicionales para ser almacenados con
     * la transacción
     *
     * @var Attribute​[]
     */
    protected $additionalData;

    /**
     * Detalle de la dispersión a realizar
     *
     * @var CreditConcept​[]
     */
    protected $credits;

    /**
     * Person constructor.
     *
     * @param string $bankCode
     * @param string $bankInterface
     * @param string $returnURL
     * @param string $reference
     * @param string $description
     * @param string $language
     * @param string $currency
     * @param double $totalAmount
     * @param double $taxAmount
     * @param double $devolutionBase
     * @param double $tipAmount
     * @param Person $payer
     * @param Person $buyer
     * @param Person $shipping
     * @param string $ipAddress
     * @param string $userAgent
     * @param Attribute​[] $additionalData
     * @param CreditConcept​[] $credits
     */
    public function __construct($bankCode, $bankInterface, $returnURL, $reference, $description, $language, $currency, $totalAmount,
                                $taxAmount, $devolutionBase, $tipAmount, $payer, $buyer, $shipping, $ipAddress, $userAgent,
                                $additionalData, $credits)
    {
        $this->bankCode = $bankCode;
        $this->bankInterface = $bankInterface;
        $this->returnURL = $returnURL;
        $this->reference = $reference;
        $this->description = $description;
        $this->language = $language;
        $this->currency = $currency;
        $this->totalAmount = $totalAmount;
        $this->taxAmount = $taxAmount;
        $this->devolutionBase = $devolutionBase;
        $this->tipAmount = $tipAmount;
        $this->payer = $payer;
        $this->buyer = $buyer;
        $this->shipping = $shipping;
        $this->ipAddress = $ipAddress;
        $this->userAgent = $userAgent;
        $this->additionalData = $additionalData;
        $this->credits = $credits;
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
    public function getBankInterface()
    {
        return $this->bankInterface;
    }

    /**
     * @return string
     */
    public function getReturnURL()
    {
        return $this->returnURL;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return double
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @return double
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * @return double
     */
    public function getDevolutionBase()
    {
        return $this->devolutionBase;
    }

    /**
     * @return double
     */
    public function getTipAmount()
    {
        return $this->tipAmount;
    }

    /**
     * @return Person
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * @return Person
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * @return Person
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @return Attribute​[]
     */
    public function getAdditionalData()
    {
        return $this->additionalData;
    }

    /**
     * @return CreditConcept​[]
     */
    public function getCredits()
    {
        return $this->credits;
    }
}
