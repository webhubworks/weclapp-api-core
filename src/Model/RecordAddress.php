<?php

namespace Webhubworks\WeclappApiCore\Model;

class RecordAddress extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $city;
    /**
     * 
     *
     * @var string
     */
    protected $company;
    /**
     * 
     *
     * @var string
     */
    protected $company2;
    /**
     * 
     *
     * @var string
     */
    protected $countryCode;
    /**
     * 
     *
     * @var string
     */
    protected $firstName;
    /**
     * 
     *
     * @var string
     */
    protected $globalLocationNumber;
    /**
     * 
     *
     * @var string
     */
    protected $lastName;
    /**
     * 
     *
     * @var string
     */
    protected $middleName;
    /**
     * 
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * 
     *
     * @var string
     */
    protected $postOfficeBoxCity;
    /**
     * 
     *
     * @var string
     */
    protected $postOfficeBoxNumber;
    /**
     * 
     *
     * @var string
     */
    protected $postOfficeBoxZipCode;
    /**
     * 
     *
     * @var string
     */
    protected $salutation;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var string
     */
    protected $street1;
    /**
     * 
     *
     * @var string
     */
    protected $street2;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @var string
     */
    protected $titleId;
    /**
     * 
     *
     * @var string
     */
    protected $zipcode;
    /**
     * 
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * 
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }
    /**
     * 
     *
     * @param string $company
     *
     * @return self
     */
    public function setCompany(string $company): self
    {
        $this->initialized['company'] = true;
        $this->company = $company;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompany2(): string
    {
        return $this->company2;
    }
    /**
     * 
     *
     * @param string $company2
     *
     * @return self
     */
    public function setCompany2(string $company2): self
    {
        $this->initialized['company2'] = true;
        $this->company2 = $company2;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * 
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGlobalLocationNumber(): string
    {
        return $this->globalLocationNumber;
    }
    /**
     * 
     *
     * @param string $globalLocationNumber
     *
     * @return self
     */
    public function setGlobalLocationNumber(string $globalLocationNumber): self
    {
        $this->initialized['globalLocationNumber'] = true;
        $this->globalLocationNumber = $globalLocationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMiddleName(): string
    {
        return $this->middleName;
    }
    /**
     * 
     *
     * @param string $middleName
     *
     * @return self
     */
    public function setMiddleName(string $middleName): self
    {
        $this->initialized['middleName'] = true;
        $this->middleName = $middleName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
    /**
     * 
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPostOfficeBoxCity(): string
    {
        return $this->postOfficeBoxCity;
    }
    /**
     * 
     *
     * @param string $postOfficeBoxCity
     *
     * @return self
     */
    public function setPostOfficeBoxCity(string $postOfficeBoxCity): self
    {
        $this->initialized['postOfficeBoxCity'] = true;
        $this->postOfficeBoxCity = $postOfficeBoxCity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPostOfficeBoxNumber(): string
    {
        return $this->postOfficeBoxNumber;
    }
    /**
     * 
     *
     * @param string $postOfficeBoxNumber
     *
     * @return self
     */
    public function setPostOfficeBoxNumber(string $postOfficeBoxNumber): self
    {
        $this->initialized['postOfficeBoxNumber'] = true;
        $this->postOfficeBoxNumber = $postOfficeBoxNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPostOfficeBoxZipCode(): string
    {
        return $this->postOfficeBoxZipCode;
    }
    /**
     * 
     *
     * @param string $postOfficeBoxZipCode
     *
     * @return self
     */
    public function setPostOfficeBoxZipCode(string $postOfficeBoxZipCode): self
    {
        $this->initialized['postOfficeBoxZipCode'] = true;
        $this->postOfficeBoxZipCode = $postOfficeBoxZipCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalutation(): string
    {
        return $this->salutation;
    }
    /**
     * 
     *
     * @param string $salutation
     *
     * @return self
     */
    public function setSalutation(string $salutation): self
    {
        $this->initialized['salutation'] = true;
        $this->salutation = $salutation;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStreet1(): string
    {
        return $this->street1;
    }
    /**
     * 
     *
     * @param string $street1
     *
     * @return self
     */
    public function setStreet1(string $street1): self
    {
        $this->initialized['street1'] = true;
        $this->street1 = $street1;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStreet2(): string
    {
        return $this->street2;
    }
    /**
     * 
     *
     * @param string $street2
     *
     * @return self
     */
    public function setStreet2(string $street2): self
    {
        $this->initialized['street2'] = true;
        $this->street2 = $street2;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @deprecated
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTitleId(): string
    {
        return $this->titleId;
    }
    /**
     * 
     *
     * @param string $titleId
     *
     * @return self
     */
    public function setTitleId(string $titleId): self
    {
        $this->initialized['titleId'] = true;
        $this->titleId = $titleId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getZipcode(): string
    {
        return $this->zipcode;
    }
    /**
     * 
     *
     * @param string $zipcode
     *
     * @return self
     */
    public function setZipcode(string $zipcode): self
    {
        $this->initialized['zipcode'] = true;
        $this->zipcode = $zipcode;
        return $this;
    }
}