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
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $company;

    /**
     * @var string
     */
    protected $company2;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $globalLocationNumber;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $middleName;

    /**
     * @var string
     */
    protected $phoneNumber;

    /**
     * @var string
     */
    protected $postOfficeBoxCity;

    /**
     * @var string
     */
    protected $postOfficeBoxNumber;

    /**
     * @var string
     */
    protected $postOfficeBoxZipCode;

    /**
     * @var string
     */
    protected $salutation;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $street1;

    /**
     * @var string
     */
    protected $street2;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $titleId;

    /**
     * @var string
     */
    protected $zipcode;

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;

        return $this;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->initialized['company'] = true;
        $this->company = $company;

        return $this;
    }

    public function getCompany2(): string
    {
        return $this->company2;
    }

    public function setCompany2(string $company2): self
    {
        $this->initialized['company2'] = true;
        $this->company2 = $company2;

        return $this;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;

        return $this;
    }

    public function getGlobalLocationNumber(): string
    {
        return $this->globalLocationNumber;
    }

    public function setGlobalLocationNumber(string $globalLocationNumber): self
    {
        $this->initialized['globalLocationNumber'] = true;
        $this->globalLocationNumber = $globalLocationNumber;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;

        return $this;
    }

    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    public function setMiddleName(string $middleName): self
    {
        $this->initialized['middleName'] = true;
        $this->middleName = $middleName;

        return $this;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getPostOfficeBoxCity(): string
    {
        return $this->postOfficeBoxCity;
    }

    public function setPostOfficeBoxCity(string $postOfficeBoxCity): self
    {
        $this->initialized['postOfficeBoxCity'] = true;
        $this->postOfficeBoxCity = $postOfficeBoxCity;

        return $this;
    }

    public function getPostOfficeBoxNumber(): string
    {
        return $this->postOfficeBoxNumber;
    }

    public function setPostOfficeBoxNumber(string $postOfficeBoxNumber): self
    {
        $this->initialized['postOfficeBoxNumber'] = true;
        $this->postOfficeBoxNumber = $postOfficeBoxNumber;

        return $this;
    }

    public function getPostOfficeBoxZipCode(): string
    {
        return $this->postOfficeBoxZipCode;
    }

    public function setPostOfficeBoxZipCode(string $postOfficeBoxZipCode): self
    {
        $this->initialized['postOfficeBoxZipCode'] = true;
        $this->postOfficeBoxZipCode = $postOfficeBoxZipCode;

        return $this;
    }

    public function getSalutation(): string
    {
        return $this->salutation;
    }

    public function setSalutation(string $salutation): self
    {
        $this->initialized['salutation'] = true;
        $this->salutation = $salutation;

        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }

    public function getStreet1(): string
    {
        return $this->street1;
    }

    public function setStreet1(string $street1): self
    {
        $this->initialized['street1'] = true;
        $this->street1 = $street1;

        return $this;
    }

    public function getStreet2(): string
    {
        return $this->street2;
    }

    public function setStreet2(string $street2): self
    {
        $this->initialized['street2'] = true;
        $this->street2 = $street2;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @deprecated
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    public function getTitleId(): string
    {
        return $this->titleId;
    }

    public function setTitleId(string $titleId): self
    {
        $this->initialized['titleId'] = true;
        $this->titleId = $titleId;

        return $this;
    }

    public function getZipcode(): string
    {
        return $this->zipcode;
    }

    public function setZipcode(string $zipcode): self
    {
        $this->initialized['zipcode'] = true;
        $this->zipcode = $zipcode;

        return $this;
    }
}
