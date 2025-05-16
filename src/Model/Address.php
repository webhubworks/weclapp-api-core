<?php

namespace Webhubworks\WeclappApiCore\Model;

class Address extends \ArrayObject
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
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string
     */
    protected $version;
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
     * @var bool
     */
    protected $deliveryAddress;
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
     * @var bool
     */
    protected $invoiceAddress;
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
     * @var bool
     */
    protected $primeAddress;
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
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int $createdDate
     *
     * @return self
     */
    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
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
     * @return bool
     */
    public function getDeliveryAddress(): bool
    {
        return $this->deliveryAddress;
    }
    /**
     * 
     *
     * @param bool $deliveryAddress
     *
     * @return self
     */
    public function setDeliveryAddress(bool $deliveryAddress): self
    {
        $this->initialized['deliveryAddress'] = true;
        $this->deliveryAddress = $deliveryAddress;
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
     * @return bool
     */
    public function getInvoiceAddress(): bool
    {
        return $this->invoiceAddress;
    }
    /**
     * 
     *
     * @param bool $invoiceAddress
     *
     * @return self
     */
    public function setInvoiceAddress(bool $invoiceAddress): self
    {
        $this->initialized['invoiceAddress'] = true;
        $this->invoiceAddress = $invoiceAddress;
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
     * @return bool
     */
    public function getPrimeAddress(): bool
    {
        return $this->primeAddress;
    }
    /**
     * 
     *
     * @param bool $primeAddress
     *
     * @return self
     */
    public function setPrimeAddress(bool $primeAddress): self
    {
        $this->initialized['primeAddress'] = true;
        $this->primeAddress = $primeAddress;
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