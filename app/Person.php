<?php

namespace App;


class Person
{
    /**
     * Número de identificación de la persona
     *
     * @var string
     */
    protected $document;

    /**
     * Tipo de documento de identificación de la
     * persona [CC, CE, TI, PPN].
     * CC = Cédula de ciudanía colombiana
     * CE = Cédula de extranjería
     * TI = Tarjeta de identidad
     * PPN = Pasaporte
     * NIT = Número de identificación tributaria
     * SSN = Social Security Number
     *
     * @var string
     */
    protected $documentType;

    /**
     * Nombres
     *
     * @var string
     */
    protected $firstName;

    /**
     * Apellidos
     *
     * @var string
     */
    protected $lastName;

    /**
     * Nombre de la compañía en la cual labora o
     * representa
     *
     * @var string
     */
    protected $company;

    /**
     * Correo electrónico
     *
     * @var string
     */
    protected $emailAddress;

    /**
     * Dirección postal completa
     *
     * @var string
     */
    protected $address;

    /**
     * Nombre de la ciudad coincidente con la
     * dirección
     *
     * @var string
     */
    protected $city;

    /**
     * Nombre de la provincia o departamento
     * coincidente con la dirección
     *
     * @var string
     */
    protected $province;

    /**
     * Código internacional del país que aplica a la
     * dirección física acorde a ISO 3166-1,
     * mayúscula sostenida.
     *
     * @var string
     */
    protected $country;

    /**
     * Número de telefonía fija
     *
     * @var string
     */
    protected $phone;

    /**
     * Número de telefonía móvil o celular
     *
     * @var string
     */
    protected $mobile;

    /**
     * Person constructor.
     *
     * @param string $document
     * @param string $documentType
     * @param string $firstName
     * @param string $lastName
     * @param string $company
     * @param string $emailAddress
     * @param string $address
     * @param string $city
     * @param string $province
     * @param string $country
     * @param string $phone
     * @param string $mobile
     */
    public function __construct($document, $documentType, $firstName, $lastName, $company, $emailAddress, $address, $city,
                                $province, $country, $phone, $mobile)
    {
        $this->document = $document;
        $this->documentType = $documentType;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->company = $company;
        $this->emailAddress = $emailAddress;
        $this->address = $address;
        $this->city = $city;
        $this->province = $province;
        $this->country = $country;
        $this->phone = $phone;
        $this->mobile = $mobile;
    }

    /**
     * @return string
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @return string
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }
}
