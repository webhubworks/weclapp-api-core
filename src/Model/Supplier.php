<?php

namespace Webhubworks\WeclappApiCore\Model;

class Supplier extends \ArrayObject
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
     * @var list<mixed>|null
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var list<Address>|null
     */
    protected $addresses;
    /**
     * 
     *
     * @var int|null
     */
    protected $birthDate;
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
    protected $deliveryAddressId;
    /**
     * 
     *
     * @var string|null
     */
    protected $email;
    /**
     * 
     *
     * @var string|null
     */
    protected $fax;
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
    protected $invoiceAddressId;
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
    protected $middleName;
    /**
     * 
     *
     * @var string|null
     */
    protected $mobilePhone1;
    /**
     * 
     *
     * @var list<OnlineAccount>|null
     */
    protected $onlineAccounts;
    /**
     * 
     *
     * @var string|null
     */
    protected $partyType;
    /**
     * 
     *
     * @var string|null
     */
    protected $personCompany;
    /**
     * 
     *
     * @var string|null
     */
    protected $personDepartmentId;
    /**
     * 
     *
     * @var string|null
     */
    protected $personRoleId;
    /**
     * 
     *
     * @var string|null
     */
    protected $phone;
    /**
     * 
     *
     * @var string|null
     */
    protected $primaryAddressId;
    /**
     * 
     *
     * @var string|null
     */
    protected $salutation;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $tags;
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
    protected $website;
    /**
     * 
     *
     * @var string|null
     */
    protected $commercialLanguageId;
    /**
     * 
     *
     * @var list<Contact>|null
     */
    protected $contacts;
    /**
     * 
     *
     * @var string|null
     */
    protected $currencyId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $currencyName;
    /**
     * 
     *
     * @var string|null
     */
    protected $primaryContactId;
    /**
     * 
     *
     * @var string|null
     */
    protected $sectorId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $sectorName;
    /**
     * 
     *
     * @var list<PartyBankAccount>|null
     */
    protected $bankAccounts;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerNumberAtSupplier;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $nonStandardTaxId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $orderBlock;
    /**
     * 
     *
     * @var string|null
     */
    protected $paymentMethodId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $paymentMethodName;
    /**
     * 
     *
     * @var string|null
     */
    protected $referenceNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $shipmentMethodId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $shipmentMethodName;
    /**
     * 
     *
     * @var string|null
     */
    protected $supplierNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $supplierRatingId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $supplierRatingName;
    /**
     * 
     *
     * @var string|null
     */
    protected $termOfPaymentId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $termOfPaymentName;
    /**
     * 
     *
     * @var string|null
     */
    protected $vatRegistrationNumber;
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
     * @return list<mixed>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<mixed>|null $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return list<Address>|null
     */
    public function getAddresses(): ?array
    {
        return $this->addresses;
    }
    /**
     * 
     *
     * @param list<Address>|null $addresses
     *
     * @return self
     */
    public function setAddresses(?array $addresses): self
    {
        $this->initialized['addresses'] = true;
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBirthDate(): ?int
    {
        return $this->birthDate;
    }
    /**
     * 
     *
     * @param int|null $birthDate
     *
     * @return self
     */
    public function setBirthDate(?int $birthDate): self
    {
        $this->initialized['birthDate'] = true;
        $this->birthDate = $birthDate;
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
    public function getDeliveryAddressId(): ?string
    {
        return $this->deliveryAddressId;
    }
    /**
     * 
     *
     * @param string|null $deliveryAddressId
     *
     * @return self
     */
    public function setDeliveryAddressId(?string $deliveryAddressId): self
    {
        $this->initialized['deliveryAddressId'] = true;
        $this->deliveryAddressId = $deliveryAddressId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }
    /**
     * 
     *
     * @param string|null $fax
     *
     * @return self
     */
    public function setFax(?string $fax): self
    {
        $this->initialized['fax'] = true;
        $this->fax = $fax;
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
    public function getInvoiceAddressId(): ?string
    {
        return $this->invoiceAddressId;
    }
    /**
     * 
     *
     * @param string|null $invoiceAddressId
     *
     * @return self
     */
    public function setInvoiceAddressId(?string $invoiceAddressId): self
    {
        $this->initialized['invoiceAddressId'] = true;
        $this->invoiceAddressId = $invoiceAddressId;
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
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }
    /**
     * 
     *
     * @param string|null $middleName
     *
     * @return self
     */
    public function setMiddleName(?string $middleName): self
    {
        $this->initialized['middleName'] = true;
        $this->middleName = $middleName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMobilePhone1(): ?string
    {
        return $this->mobilePhone1;
    }
    /**
     * 
     *
     * @param string|null $mobilePhone1
     *
     * @return self
     */
    public function setMobilePhone1(?string $mobilePhone1): self
    {
        $this->initialized['mobilePhone1'] = true;
        $this->mobilePhone1 = $mobilePhone1;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlineAccount>|null
     */
    public function getOnlineAccounts(): ?array
    {
        return $this->onlineAccounts;
    }
    /**
     * 
     *
     * @param list<OnlineAccount>|null $onlineAccounts
     *
     * @return self
     */
    public function setOnlineAccounts(?array $onlineAccounts): self
    {
        $this->initialized['onlineAccounts'] = true;
        $this->onlineAccounts = $onlineAccounts;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPartyType(): ?string
    {
        return $this->partyType;
    }
    /**
     * 
     *
     * @param string|null $partyType
     *
     * @return self
     */
    public function setPartyType(?string $partyType): self
    {
        $this->initialized['partyType'] = true;
        $this->partyType = $partyType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPersonCompany(): ?string
    {
        return $this->personCompany;
    }
    /**
     * 
     *
     * @param string|null $personCompany
     *
     * @return self
     */
    public function setPersonCompany(?string $personCompany): self
    {
        $this->initialized['personCompany'] = true;
        $this->personCompany = $personCompany;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPersonDepartmentId(): ?string
    {
        return $this->personDepartmentId;
    }
    /**
     * 
     *
     * @param string|null $personDepartmentId
     *
     * @return self
     */
    public function setPersonDepartmentId(?string $personDepartmentId): self
    {
        $this->initialized['personDepartmentId'] = true;
        $this->personDepartmentId = $personDepartmentId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPersonRoleId(): ?string
    {
        return $this->personRoleId;
    }
    /**
     * 
     *
     * @param string|null $personRoleId
     *
     * @return self
     */
    public function setPersonRoleId(?string $personRoleId): self
    {
        $this->initialized['personRoleId'] = true;
        $this->personRoleId = $personRoleId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    /**
     * 
     *
     * @param string|null $phone
     *
     * @return self
     */
    public function setPhone(?string $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPrimaryAddressId(): ?string
    {
        return $this->primaryAddressId;
    }
    /**
     * 
     *
     * @param string|null $primaryAddressId
     *
     * @return self
     */
    public function setPrimaryAddressId(?string $primaryAddressId): self
    {
        $this->initialized['primaryAddressId'] = true;
        $this->primaryAddressId = $primaryAddressId;
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
     * @return list<string>|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param list<string>|null $tags
     *
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
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
    public function getWebsite(): ?string
    {
        return $this->website;
    }
    /**
     * 
     *
     * @param string|null $website
     *
     * @return self
     */
    public function setWebsite(?string $website): self
    {
        $this->initialized['website'] = true;
        $this->website = $website;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCommercialLanguageId(): ?string
    {
        return $this->commercialLanguageId;
    }
    /**
     * 
     *
     * @param string|null $commercialLanguageId
     *
     * @return self
     */
    public function setCommercialLanguageId(?string $commercialLanguageId): self
    {
        $this->initialized['commercialLanguageId'] = true;
        $this->commercialLanguageId = $commercialLanguageId;
        return $this;
    }
    /**
     * 
     *
     * @return list<Contact>|null
     */
    public function getContacts(): ?array
    {
        return $this->contacts;
    }
    /**
     * 
     *
     * @param list<Contact>|null $contacts
     *
     * @return self
     */
    public function setContacts(?array $contacts): self
    {
        $this->initialized['contacts'] = true;
        $this->contacts = $contacts;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCurrencyId(): ?string
    {
        return $this->currencyId;
    }
    /**
     * 
     *
     * @param string|null $currencyId
     *
     * @return self
     */
    public function setCurrencyId(?string $currencyId): self
    {
        $this->initialized['currencyId'] = true;
        $this->currencyId = $currencyId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getCurrencyName(): ?string
    {
        return $this->currencyName;
    }
    /**
     * 
     *
     * @param string|null $currencyName
     *
     * @deprecated
     *
     * @return self
     */
    public function setCurrencyName(?string $currencyName): self
    {
        $this->initialized['currencyName'] = true;
        $this->currencyName = $currencyName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPrimaryContactId(): ?string
    {
        return $this->primaryContactId;
    }
    /**
     * 
     *
     * @param string|null $primaryContactId
     *
     * @return self
     */
    public function setPrimaryContactId(?string $primaryContactId): self
    {
        $this->initialized['primaryContactId'] = true;
        $this->primaryContactId = $primaryContactId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSectorId(): ?string
    {
        return $this->sectorId;
    }
    /**
     * 
     *
     * @param string|null $sectorId
     *
     * @return self
     */
    public function setSectorId(?string $sectorId): self
    {
        $this->initialized['sectorId'] = true;
        $this->sectorId = $sectorId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getSectorName(): ?string
    {
        return $this->sectorName;
    }
    /**
     * 
     *
     * @param string|null $sectorName
     *
     * @deprecated
     *
     * @return self
     */
    public function setSectorName(?string $sectorName): self
    {
        $this->initialized['sectorName'] = true;
        $this->sectorName = $sectorName;
        return $this;
    }
    /**
     * 
     *
     * @return list<PartyBankAccount>|null
     */
    public function getBankAccounts(): ?array
    {
        return $this->bankAccounts;
    }
    /**
     * 
     *
     * @param list<PartyBankAccount>|null $bankAccounts
     *
     * @return self
     */
    public function setBankAccounts(?array $bankAccounts): self
    {
        $this->initialized['bankAccounts'] = true;
        $this->bankAccounts = $bankAccounts;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerNumberAtSupplier(): ?string
    {
        return $this->customerNumberAtSupplier;
    }
    /**
     * 
     *
     * @param string|null $customerNumberAtSupplier
     *
     * @return self
     */
    public function setCustomerNumberAtSupplier(?string $customerNumberAtSupplier): self
    {
        $this->initialized['customerNumberAtSupplier'] = true;
        $this->customerNumberAtSupplier = $customerNumberAtSupplier;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNonStandardTaxId(): ?string
    {
        return $this->nonStandardTaxId;
    }
    /**
     * 
     *
     * @param string|null $nonStandardTaxId
     *
     * @return self
     */
    public function setNonStandardTaxId(?string $nonStandardTaxId): self
    {
        $this->initialized['nonStandardTaxId'] = true;
        $this->nonStandardTaxId = $nonStandardTaxId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getOrderBlock(): ?bool
    {
        return $this->orderBlock;
    }
    /**
     * 
     *
     * @param bool|null $orderBlock
     *
     * @return self
     */
    public function setOrderBlock(?bool $orderBlock): self
    {
        $this->initialized['orderBlock'] = true;
        $this->orderBlock = $orderBlock;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPaymentMethodId(): ?string
    {
        return $this->paymentMethodId;
    }
    /**
     * 
     *
     * @param string|null $paymentMethodId
     *
     * @return self
     */
    public function setPaymentMethodId(?string $paymentMethodId): self
    {
        $this->initialized['paymentMethodId'] = true;
        $this->paymentMethodId = $paymentMethodId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getPaymentMethodName(): ?string
    {
        return $this->paymentMethodName;
    }
    /**
     * 
     *
     * @param string|null $paymentMethodName
     *
     * @deprecated
     *
     * @return self
     */
    public function setPaymentMethodName(?string $paymentMethodName): self
    {
        $this->initialized['paymentMethodName'] = true;
        $this->paymentMethodName = $paymentMethodName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReferenceNumber(): ?string
    {
        return $this->referenceNumber;
    }
    /**
     * 
     *
     * @param string|null $referenceNumber
     *
     * @return self
     */
    public function setReferenceNumber(?string $referenceNumber): self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShipmentMethodId(): ?string
    {
        return $this->shipmentMethodId;
    }
    /**
     * 
     *
     * @param string|null $shipmentMethodId
     *
     * @return self
     */
    public function setShipmentMethodId(?string $shipmentMethodId): self
    {
        $this->initialized['shipmentMethodId'] = true;
        $this->shipmentMethodId = $shipmentMethodId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getShipmentMethodName(): ?string
    {
        return $this->shipmentMethodName;
    }
    /**
     * 
     *
     * @param string|null $shipmentMethodName
     *
     * @deprecated
     *
     * @return self
     */
    public function setShipmentMethodName(?string $shipmentMethodName): self
    {
        $this->initialized['shipmentMethodName'] = true;
        $this->shipmentMethodName = $shipmentMethodName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSupplierNumber(): ?string
    {
        return $this->supplierNumber;
    }
    /**
     * 
     *
     * @param string|null $supplierNumber
     *
     * @return self
     */
    public function setSupplierNumber(?string $supplierNumber): self
    {
        $this->initialized['supplierNumber'] = true;
        $this->supplierNumber = $supplierNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSupplierRatingId(): ?string
    {
        return $this->supplierRatingId;
    }
    /**
     * 
     *
     * @param string|null $supplierRatingId
     *
     * @return self
     */
    public function setSupplierRatingId(?string $supplierRatingId): self
    {
        $this->initialized['supplierRatingId'] = true;
        $this->supplierRatingId = $supplierRatingId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getSupplierRatingName(): ?string
    {
        return $this->supplierRatingName;
    }
    /**
     * 
     *
     * @param string|null $supplierRatingName
     *
     * @deprecated
     *
     * @return self
     */
    public function setSupplierRatingName(?string $supplierRatingName): self
    {
        $this->initialized['supplierRatingName'] = true;
        $this->supplierRatingName = $supplierRatingName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTermOfPaymentId(): ?string
    {
        return $this->termOfPaymentId;
    }
    /**
     * 
     *
     * @param string|null $termOfPaymentId
     *
     * @return self
     */
    public function setTermOfPaymentId(?string $termOfPaymentId): self
    {
        $this->initialized['termOfPaymentId'] = true;
        $this->termOfPaymentId = $termOfPaymentId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getTermOfPaymentName(): ?string
    {
        return $this->termOfPaymentName;
    }
    /**
     * 
     *
     * @param string|null $termOfPaymentName
     *
     * @deprecated
     *
     * @return self
     */
    public function setTermOfPaymentName(?string $termOfPaymentName): self
    {
        $this->initialized['termOfPaymentName'] = true;
        $this->termOfPaymentName = $termOfPaymentName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVatRegistrationNumber(): ?string
    {
        return $this->vatRegistrationNumber;
    }
    /**
     * 
     *
     * @param string|null $vatRegistrationNumber
     *
     * @return self
     */
    public function setVatRegistrationNumber(?string $vatRegistrationNumber): self
    {
        $this->initialized['vatRegistrationNumber'] = true;
        $this->vatRegistrationNumber = $vatRegistrationNumber;
        return $this;
    }
}