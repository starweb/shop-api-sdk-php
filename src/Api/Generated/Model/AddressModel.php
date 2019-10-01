<?php

namespace Starweb\Api\Generated\Model;

class AddressModel
{
    /**
     * Company name
     *
     * @var string
     */
    protected $companyName;
    /**
     * First name
     *
     * @var string
     */
    protected $firstName;
    /**
     * Last name
     *
     * @var string
     */
    protected $lastName;
    /**
     * Care Of
     *
     * @var string
     */
    protected $careOf;
    /**
     * Attention
     *
     * @var string
     */
    protected $attention;
    /**
     * Reference
     *
     * @var string
     */
    protected $reference;
    /**
     * Address
     *
     * @var string
     */
    protected $address;
    /**
     * Postal Code
     *
     * @var string
     */
    protected $postalCode;
    /**
     * City
     *
     * @var string
     */
    protected $city;
    /**
     * State
     *
     * @var string
     */
    protected $state;
    /**
     * Country code in ISO 3166-1 alpha-2 format
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Phone number in an international format
     *
     * @var string
     */
    protected $phoneNo;
    /**
     * Mobile phone number in an international format
     *
     * @var string
     */
    protected $mobilePhoneNo;
    /**
     * Company name
     *
     * @return string
     */
    public function getCompanyName() : string
    {
        return $this->companyName;
    }
    /**
     * Company name
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName) : self
    {
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * First name
     *
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    /**
     * First name
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Last name
     *
     * @return string
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }
    /**
     * Last name
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName) : self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * Care Of
     *
     * @return string
     */
    public function getCareOf() : string
    {
        return $this->careOf;
    }
    /**
     * Care Of
     *
     * @param string $careOf
     *
     * @return self
     */
    public function setCareOf(string $careOf) : self
    {
        $this->careOf = $careOf;
        return $this;
    }
    /**
     * Attention
     *
     * @return string
     */
    public function getAttention() : string
    {
        return $this->attention;
    }
    /**
     * Attention
     *
     * @param string $attention
     *
     * @return self
     */
    public function setAttention(string $attention) : self
    {
        $this->attention = $attention;
        return $this;
    }
    /**
     * Reference
     *
     * @return string
     */
    public function getReference() : string
    {
        return $this->reference;
    }
    /**
     * Reference
     *
     * @param string $reference
     *
     * @return self
     */
    public function setReference(string $reference) : self
    {
        $this->reference = $reference;
        return $this;
    }
    /**
     * Address
     *
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }
    /**
     * Address
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Postal Code
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * Postal Code
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode) : self
    {
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * City
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * City
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city) : self
    {
        $this->city = $city;
        return $this;
    }
    /**
     * State
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * State
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * Country code in ISO 3166-1 alpha-2 format
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Country code in ISO 3166-1 alpha-2 format
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode) : self
    {
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Phone number in an international format
     *
     * @return string
     */
    public function getPhoneNo() : string
    {
        return $this->phoneNo;
    }
    /**
     * Phone number in an international format
     *
     * @param string $phoneNo
     *
     * @return self
     */
    public function setPhoneNo(string $phoneNo) : self
    {
        $this->phoneNo = $phoneNo;
        return $this;
    }
    /**
     * Mobile phone number in an international format
     *
     * @return string
     */
    public function getMobilePhoneNo() : string
    {
        return $this->mobilePhoneNo;
    }
    /**
     * Mobile phone number in an international format
     *
     * @param string $mobilePhoneNo
     *
     * @return self
     */
    public function setMobilePhoneNo(string $mobilePhoneNo) : self
    {
        $this->mobilePhoneNo = $mobilePhoneNo;
        return $this;
    }
}