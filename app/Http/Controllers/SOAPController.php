<?php

namespace App\Http\Controllers;

use App\Authentication;
use App\PSETransactionRequest;
use App\PSETransactionMultiCreditRequest;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSoapTransaction;
use App\Http\Requests\StoreSoapTransactionMulti;

class SOAPController extends BaseSoapController
{
    /**
     * @var service
     */
    private $service;

    /**
     * @var Authentication
     */
    private $autenticacion;

    /**
     * SOAPController constructor.
     *
     */
    public function __construct()
    {
        $seed = date('c');
        $trankey = "024h1IlD";
        $concat = $seed.$trankey;
        $hash = sha1($concat);

        $this->autenticacion = new Authentication('6dd490faf9cb87a9862245da41170ff2', $hash, $seed, []);

        self::setWsdl('https://test.placetopay.com/soap/pse/?wsdl');
        $this->service = InstanceSoapClient::init();
    }

    /**
     * Use the Service
     */
    public function showBanks()
    {
        try
        {
            $banks = $this->service->getBankList([ 'auth' => $this->autenticacion ]);
            return $banks;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }

    public function createTransactionMultiCredit(StoreSoapTransactionMulti $request)
    {
        try
        {
            $transaccion = new PSETransactionMultiCreditRequest(
                $request->bankCode,
                $request->bankInterface,
                "",
                $request->reference,
                $request->description,
                $request->languaje,
                $request->currency,
                $request->totalAmount,
                $request->taxAmount,
                $request->devolutionBase,
                $request->tipAmount,
                "",
                "",
                "",
                $request->ipAddress,
                $request->userAgent,
                [],
                []);

            $trasactionResponse = $this->service->createTransactionMultiCredit([
                'auth' => $this->autenticacion,
                'transaction' => $transaccion]);

            return $trasactionResponse;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }

    public function createTransaction(StoreSoapTransaction $request)
    {
        try
        {
            $transaccion = new PSETransactionRequest(
                $request->bankCode,
                $request->bankInterface,
                "",
                $request->reference,
                $request->description,
                $request->languaje,
                $request->currency,
                $request->totalAmount,
                $request->taxAmount,
                $request->devolutionBase,
                $request->tipAmount,
                "",
                "",
                "",
                $request->ipAddress,
                $request->userAgent,
                []);

            $trasactionResponse = $this->service->createTransaction([ 'auth' => $this->autenticacion,
                                                          'transaction' => $transaccion]);
            return $trasactionResponse;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }

    public function getTransactionInformation($transactionID)
    {
        try
        {
            $information = $this->service->getTransactionInformation([ 'auth' => $this->autenticacion,
                                                                  'transactionID' =>$transactionID ]);
            return $information;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
}
