<?php

namespace Starweb\Api\Generated\Model;

class AddressModel extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Company name
     *
     * @var string|null
     */
    protected $companyName;
    /**
     * First name
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * Last name
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * Care Of
     *
     * @var string|null
     */
    protected $careOf;
    /**
     * Attention
     *
     * @var string|null
     */
    protected $attention;
    /**
     * Reference
     *
     * @var string|null
     */
    protected $reference;
    /**
     * Address
     *
     * @var string|null
     */
    protected $address;
    /**
     * Postal Code
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * City
     *
     * @var string|null
     */
    protected $city;
    /**
     * State
     *
     * @var string|null
     */
    protected $state;
    /**
     * Country code in ISO 3166-1 alpha-2 format
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * Phone number in an international format
     *
     * @var string|null
     */
    protected $phoneNo;
    /**
     * Mobile phone number in an international format
     *
     * @var string|null
     */
    protected $mobilePhoneNo;
    /**
     * Company name
     *
     * @return string|null
     */
    public function getCompanyName() : ?string
    {
        return $this->companyName;
    }
    /**
     * Company name
     *
     * @param string|null $companyName
     *
     * @return self
     */
    public function setCompanyName(?string $companyName) : self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * First name
     *
     * @return string|null
     */
    public function getFirstName() : ?string
    {
        return $this->firstName;
    }
    /**
     * First name
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName) : self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Last name
     *
     * @return string|null
     */
    public function getLastName() : ?string
    {
        return $this->lastName;
    }
    /**
     * Last name
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName) : self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * Care Of
     *
     * @return string|null
     */
    public function getCareOf() : ?string
    {
        return $this->careOf;
    }
    /**
     * Care Of
     *
     * @param string|null $careOf
     *
     * @return self
     */
    public function setCareOf(?string $careOf) : self
    {
        $this->initialized['careOf'] = true;
        $this->careOf = $careOf;
        return $this;
    }
    /**
     * Attention
     *
     * @return string|null
     */
    public function getAttention() : ?string
    {
        return $this->attention;
    }
    /**
     * Attention
     *
     * @param string|null $attention
     *
     * @return self
     */
    public function setAttention(?string $attention) : self
    {
        $this->initialized['attention'] = true;
        $this->attention = $attention;
        return $this;
    }
    /**
     * Reference
     *
     * @return string|null
     */
    public function getReference() : ?string
    {
        return $this->reference;
    }
    /**
     * Reference
     *
     * @param string|null $reference
     *
     * @return self
     */
    public function setReference(?string $reference) : self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;
        return $this;
    }
    /**
     * Address
     *
     * @return string|null
     */
    public function getAddress() : ?string
    {
        return $this->address;
    }
    /**
     * Address
     *
     * @param string|null $address
     *
     * @return self
     */
    public function setAddress(?string $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Postal Code
     *
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * Postal Code
     *
     * @param string|null $postalCode
     *
     * @return self
     */
    public function setPostalCode(?string $postalCode) : self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * City
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * City
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city) : self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * State
     *
     * @return string|null
     */
    public function getState() : ?string
    {
        return $this->state;
    }
    /**
     * State
     *
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * Country code in ISO 3166-1 alpha-2 format
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * Country code in ISO 3166-1 alpha-2 format
     *
     * @param string|null $countryCode
     *
     * @return self
     */
    public function setCountryCode(?string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Phone number in an international format
     *
     * @return string|null
     */
    public function getPhoneNo() : ?string
    {
        return $this->phoneNo;
    }
    /**
     * Phone number in an international format
     *
     * @param string|null $phoneNo
     *
     * @return self
     */
    public function setPhoneNo(?string $phoneNo) : self
    {
        $this->initialized['phoneNo'] = true;
        $this->phoneNo = $phoneNo;
        return $this;
    }
    /**
     * Mobile phone number in an international format
     *
     * @return string|null
     */
    public function getMobilePhoneNo() : ?string
    {
        return $this->mobilePhoneNo;
    }
    /**
     * Mobile phone number in an international format
     *
     * @param string|null $mobilePhoneNo
     *
     * @return self
     */
    public function setMobilePhoneNo(?string $mobilePhoneNo) : self
    {
        $this->initialized['mobilePhoneNo'] = true;
        $this->mobilePhoneNo = $mobilePhoneNo;
        return $this;
    }
}