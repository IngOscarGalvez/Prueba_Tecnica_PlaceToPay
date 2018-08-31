<?php

namespace App;

class TransactionInformation
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
     * Referencia única de pago
     *
     * @var string
     */
    protected $reference;

    /**
     * Fecha de solicitud o creación de la
     * transacción acorde a ISO 8601
     *
     * @var string
     */
    protected $requestDate;

    /**
     * Fecha de procesamiento de la transacción
     * acorde a ISO 8601
     *
     * @var string
     */
    protected $bankProcessDate;

    /**
     * Indicador de si la transacción es en modo
     * de pruebas o no
     *
     * @var boolean
     */
    protected $onTest;

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
     * Información del estado de la transacción [OK, NOT_AUTHORIZED, PENDING, FAILED]
     *
     * @var string
     */
    protected $transactionState;

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
     * @param string $reference
     * @param string $requestDate
     * @param string $bankProcessDate
     * @param string $onTest
     * @param string $returnCode
     * @param string $trazabilityCode
     * @param int $transactionCycle
     * @param string $transactionState
     * @param int $responseCode
     * @param string $responseReasonCode
     * @param string $responseReasonText
     */
    public function __construct($transactionID, $sessionID, $reference, $requestDate, $bankProcessDate, $onTest, $returnCode,
                                $trazabilityCode, $transactionCycle, $transactionState,
                                $responseCode, $responseReasonCode, $responseReasonText)
    {
        $this->transactionID = $transactionID;
        $this->sessionID = $sessionID;
        $this->reference = $reference;
        $this->requestDate = $requestDate;
        $this->bankProcessDate = $bankProcessDate;
        $this->onTest = $onTest;
        $this->returnCode = $returnCode;
        $this->trazabilityCode = $trazabilityCode;
        $this->transactionCycle = $transactionCycle;
        $this->transactionState = $transactionState;
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
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return string
     */
    public function getRequestDate()
    {
        return $this->requestDate;
    }

    /**
     * @return string
     */
    public function getBankProcessDate()
    {
        return $this->bankProcessDate;
    }

    /**
     * @return string
     */
    public function getOnTest()
    {
        return $this->onTest;
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
    public function getTransactionState()
    {
        return $this->transactionState;
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
