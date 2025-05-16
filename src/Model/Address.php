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
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var int|null
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $version;
    /**
     * 
     *
     * @var string|null
     */
    protected $city;
    /**
     * 
     *
     * @var string|null
     */
    protected $company;
    /**
     * 
     *
     * @var string|null
     */
    protected $company2;
    /**
     * 
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * 
     *
     * @var bool|null
     */
    protected $deliveryAddress;
    /**
     * 
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * 
     *
     * @var string|null
     */
    protected $globalLocationNumber;
    /**
     * 
     *
     * @var bool|null
     */
    protected $invoiceAddress;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * 
     *
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $postOfficeBoxCity;
    /**
     * 
     *
     * @var string|null
     */
    protected $postOfficeBoxNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $postOfficeBoxZipCode;
    /**
     * 
     *
     * @var bool|null
     */
    protected $primeAddress;
    /**
     * 
     *
     * @var string|null
     */
    protected $salutation;
    /**
     * 
     *
     * @var string|null
     */
    protected $state;
    /**
     * 
     *
     * @var string|null
     */
    protected $street1;
    /**
     * 
     *
     * @var string|null
     */
    protected $street2;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @var string|null
     */
    protected $titleId;
    /**
     * 
     *
     * @var string|null
     */
    protected $zipcode;
    /**
     * 
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int|null $createdDate
     *
     * @return self
     */
    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int|null $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * 
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }
    /**
     * 
     *
     * @param string|null $company
     *
     * @return self
     */
    public function setCompany(?string $company): self
    {
        $this->initialized['company'] = true;
        $this->company = $company;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCompany2(): ?string
    {
        return $this->company2;
    }
    /**
     * 
     *
     * @param string|null $company2
     *
     * @return self
     */
    public function setCompany2(?string $company2): self
    {
        $this->initialized['company2'] = true;
        $this->company2 = $company2;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * 
     *
     * @param string|null $countryCode
     *
     * @return self
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDeliveryAddress(): ?bool
    {
        return $this->deliveryAddress;
    }
    /**
     * 
     *
     * @param bool|null $deliveryAddress
     *
     * @return self
     */
    public function setDeliveryAddress(?bool $deliveryAddress): self
    {
        $this->initialized['deliveryAddress'] = true;
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGlobalLocationNumber(): ?string
    {
        return $this->globalLocationNumber;
    }
    /**
     * 
     *
     * @param string|null $globalLocationNumber
     *
     * @return self
     */
    public function setGlobalLocationNumber(?string $globalLocationNumber): self
    {
        $this->initialized['globalLocationNumber'] = true;
        $this->globalLocationNumber = $globalLocationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getInvoiceAddress(): ?bool
    {
        return $this->invoiceAddress;
    }
    /**
     * 
     *
     * @param bool|null $invoiceAddress
     *
     * @return self
     */
    public function setInvoiceAddress(?bool $invoiceAddress): self
    {
        $this->initialized['invoiceAddress'] = true;
        $this->invoiceAddress = $invoiceAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }
    /**
     * 
     *
     * @param string|null $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPostOfficeBoxCity(): ?string
    {
        return $this->postOfficeBoxCity;
    }
    /**
     * 
     *
     * @param string|null $postOfficeBoxCity
     *
     * @return self
     */
    public function setPostOfficeBoxCity(?string $postOfficeBoxCity): self
    {
        $this->initialized['postOfficeBoxCity'] = true;
        $this->postOfficeBoxCity = $postOfficeBoxCity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPostOfficeBoxNumber(): ?string
    {
        return $this->postOfficeBoxNumber;
    }
    /**
     * 
     *
     * @param string|null $postOfficeBoxNumber
     *
     * @return self
     */
    public function setPostOfficeBoxNumber(?string $postOfficeBoxNumber): self
    {
        $this->initialized['postOfficeBoxNumber'] = true;
        $this->postOfficeBoxNumber = $postOfficeBoxNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPostOfficeBoxZipCode(): ?string
    {
        return $this->postOfficeBoxZipCode;
    }
    /**
     * 
     *
     * @param string|null $postOfficeBoxZipCode
     *
     * @return self
     */
    public function setPostOfficeBoxZipCode(?string $postOfficeBoxZipCode): self
    {
        $this->initialized['postOfficeBoxZipCode'] = true;
        $this->postOfficeBoxZipCode = $postOfficeBoxZipCode;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getPrimeAddress(): ?bool
    {
        return $this->primeAddress;
    }
    /**
     * 
     *
     * @param bool|null $primeAddress
     *
     * @return self
     */
    public function setPrimeAddress(?bool $primeAddress): self
    {
        $this->initialized['primeAddress'] = true;
        $this->primeAddress = $primeAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalutation(): ?string
    {
        return $this->salutation;
    }
    /**
     * 
     *
     * @param string|null $salutation
     *
     * @return self
     */
    public function setSalutation(?string $salutation): self
    {
        $this->initialized['salutation'] = true;
        $this->salutation = $salutation;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStreet1(): ?string
    {
        return $this->street1;
    }
    /**
     * 
     *
     * @param string|null $street1
     *
     * @return self
     */
    public function setStreet1(?string $street1): self
    {
        $this->initialized['street1'] = true;
        $this->street1 = $street1;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStreet2(): ?string
    {
        return $this->street2;
    }
    /**
     * 
     *
     * @param string|null $street2
     *
     * @return self
     */
    public function setStreet2(?string $street2): self
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
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string|null $title
     *
     * @deprecated
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTitleId(): ?string
    {
        return $this->titleId;
    }
    /**
     * 
     *
     * @param string|null $titleId
     *
     * @return self
     */
    public function setTitleId(?string $titleId): self
    {
        $this->initialized['titleId'] = true;
        $this->titleId = $titleId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }
    /**
     * 
     *
     * @param string|null $zipcode
     *
     * @return self
     */
    public function setZipcode(?string $zipcode): self
    {
        $this->initialized['zipcode'] = true;
        $this->zipcode = $zipcode;
        return $this;
    }
}