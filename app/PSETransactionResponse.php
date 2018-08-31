<?php

namespace App;


class PSETransactionResponse
{
    /**
     * Identificador único de la transacción en
     * PlacetoPay
     *
     * @var int
     */
    protected $transactionID;

    /**
     * Identificador único de la sesión en
     * PlacetoPay
     *
     * @var string
     */
    protected $sessionID;

    /**
     * Código de respuesta de la transacción, uno
     * de los siguientes valores:
     * SUCCESS
     * FAIL_ENTITYNOTEXISTSORDISABLED
     * FAIL_BANKNOTEXISTSORDISABLED
     * FAIL_SERVICENOTEXISTS
     * FAIL_INVALIDAMOUNT
     * FAIL_INVALIDSOLICITDATE
     * FAIL_BANKUNREACHEABLE
     * FAIL_NOTCONFIRMEDBYBANK
     * FAIL_CANNOTGETCURRENTCYCLE
     * FAIL_ACCESSDENIED
     * FAIL_TIMEOUT
     * FAIL_DESCRIPTIONNOTFOUND
     * FAIL_EXCEEDEDLIMIT
     * FAIL_TRANSACTIONNOTALLOWED
     * FAIL_RISK
     * FAIL_NOHOST
     * FAIL_NOTALLOWEDBYTIME
     * FAIL_ERRORINCREDITS
     *
     * @var string
     */
    protected $returnCode;

    /**
     * Código único de seguimiento para la
     * operación dado por la red ACH
     *
     * @var string
     */
    protected $trazabilityCode;

    /**
     * Ciclo de compensación de la red
     *
     * @var int
     */
    protected $transactionCycle;

    /**
     * Moneda aceptada por el banco acorde a
     * ISO 4217
     *
     * @var string
     */
    protected $bankCurrency;

    /**
     * Factor de conversión de la moneda
     *
     * @var float
     */
    protected $bankFactor;

    /**
     * URL a la cual remitir la solicitud para iniciar
     * la interfaz del banco, sólo disponible
     * cuando returnCode = SUCCESS
     *
     * @var string
     */
    protected $bankURL;

    /**
     * Estado de la operación en PlacetoPay [ 0 =
     * FAILED, 1 = APPROVED, 2 = DECLINED, 3 =
     * PENDING ]
     *
     * @var int
     */
    protected $responseCode;

    /**
     * Código interno de respuesta de la
     * operación en PlacetoPay
     *
     * @var string
     */
    protected $responseReasonCode;

    /**
     * Mensaje asociado con el código de
     * respuesta de la operación en PlacetoPay
     *
     * @var string
     */
    protected $responseReasonText;

    /**
     * Person constructor.
     *
     * @param int $transactionID
     * @param string $sessionID
     * @param string $returnCode
     * @param string $trazabilityCode
     * @param int $transactionCycle
     * @param string $bankCurrency
     * @param float $bankFactor
     * @param string $bankURL
     * @param int $responseCode
     * @param string $responseReasonCode
     * @param string $responseReasonText
     */
    public function __construct($transactionID, $sessionID, $returnCode, $trazabilityCode, $transactionCycle, $bankCurrency,
                                $bankFactor, $bankURL, $responseCode, $responseReasonCode, $responseReasonText)
    {
        $this->transactionID = $transactionID;
        $this->sessionID = $sessionID;
        $this->returnCode = $returnCode;
        $this->trazabilityCode = $trazabilityCode;
        $this->transactionCycle = $transactionCycle;
        $this->bankCurrency = $bankCurrency;
        $this->bankFactor = $bankFactor;
        $this->bankURL = $bankURL;
        $this->responseCode = $responseCode;
        $this->responseReasonCode = $responseReasonCode;
        $this->responseReasonText = $responseReasonText;
    }

    /**
     * @return int
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * @return string
     */
    public function getSessionID()
    {
        return $this->sessionID;
    }

    /**
     * @return string
     */
    public function getReturnCode()
    {
        return $this->returnCode;
    }

    /**
     * @return string
     */
    public function getTrazabilityCode()
    {
        return $this->trazabilityCode;
    }

    /**
     * @return int
     */
    public function getTransactionCycle()
    {
        return $this->transactionCycle;
    }

    /**
     * @return string
     */
    public function getBankCurrency()
    {
        return $this->bankCurrency;
    }

    /**
     * @return float
     */
    public function getBankFactor()
    {
        return $this->bankFactor;
    }

    /**
     * @return string
     */
    public function getBankURL()
    {
        return $this->bankURL;
    }

    /**
     * @return int
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * @return string
     */
    public function getResponseReasonCode()
    {
        return $this->responseReasonCode;
    }

    /**
     * @return string
     */
    public function getResponseReasonText()
    {
        return $this->responseReasonText;
    }
}
