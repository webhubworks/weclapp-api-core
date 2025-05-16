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
     * @var list<mixed>
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var list<Address>
     */
    protected $addresses;
    /**
     * 
     *
     * @var int
     */
    protected $birthDate;
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
    protected $deliveryAddressId;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @var string
     */
    protected $fax;
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
    protected $invoiceAddressId;
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
    protected $mobilePhone1;
    /**
     * 
     *
     * @var list<OnlineAccount>
     */
    protected $onlineAccounts;
    /**
     * 
     *
     * @var string
     */
    protected $partyType;
    /**
     * 
     *
     * @var string
     */
    protected $personCompany;
    /**
     * 
     *
     * @var string
     */
    protected $personDepartmentId;
    /**
     * 
     *
     * @var string
     */
    protected $personRoleId;
    /**
     * 
     *
     * @var string
     */
    protected $phone;
    /**
     * 
     *
     * @var string
     */
    protected $primaryAddressId;
    /**
     * 
     *
     * @var string
     */
    protected $salutation;
    /**
     * 
     *
     * @var list<string>
     */
    protected $tags;
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
    protected $website;
    /**
     * 
     *
     * @var string
     */
    protected $commercialLanguageId;
    /**
     * 
     *
     * @var list<Contact>
     */
    protected $contacts;
    /**
     * 
     *
     * @var string
     */
    protected $currencyId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $currencyName;
    /**
     * 
     *
     * @var string
     */
    protected $primaryContactId;
    /**
     * 
     *
     * @var string
     */
    protected $sectorId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $sectorName;
    /**
     * 
     *
     * @var list<PartyBankAccount>
     */
    protected $bankAccounts;
    /**
     * 
     *
     * @var string
     */
    protected $customerNumberAtSupplier;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $nonStandardTaxId;
    /**
     * 
     *
     * @var bool
     */
    protected $orderBlock;
    /**
     * 
     *
     * @var string
     */
    protected $paymentMethodId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $paymentMethodName;
    /**
     * 
     *
     * @var string
     */
    protected $referenceNumber;
    /**
     * 
     *
     * @var string
     */
    protected $shipmentMethodId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $shipmentMethodName;
    /**
     * 
     *
     * @var string
     */
    protected $supplierNumber;
    /**
     * 
     *
     * @var string
     */
    protected $supplierRatingId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $supplierRatingName;
    /**
     * 
     *
     * @var string
     */
    protected $termOfPaymentId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $termOfPaymentName;
    /**
     * 
     *
     * @var string
     */
    protected $vatRegistrationNumber;
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
     * @return list<mixed>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<mixed> $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return list<Address>
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }
    /**
     * 
     *
     * @param list<Address> $addresses
     *
     * @return self
     */
    public function setAddresses(array $addresses): self
    {
        $this->initialized['addresses'] = true;
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBirthDate(): int
    {
        return $this->birthDate;
    }
    /**
     * 
     *
     * @param int $birthDate
     *
     * @return self
     */
    public function setBirthDate(int $birthDate): self
    {
        $this->initialized['birthDate'] = true;
        $this->birthDate = $birthDate;
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
    public function getDeliveryAddressId(): string
    {
        return $this->deliveryAddressId;
    }
    /**
     * 
     *
     * @param string $deliveryAddressId
     *
     * @return self
     */
    public function setDeliveryAddressId(string $deliveryAddressId): self
    {
        $this->initialized['deliveryAddressId'] = true;
        $this->deliveryAddressId = $deliveryAddressId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFax(): string
    {
        return $this->fax;
    }
    /**
     * 
     *
     * @param string $fax
     *
     * @return self
     */
    public function setFax(string $fax): self
    {
        $this->initialized['fax'] = true;
        $this->fax = $fax;
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
    public function getInvoiceAddressId(): string
    {
        return $this->invoiceAddressId;
    }
    /**
     * 
     *
     * @param string $invoiceAddressId
     *
     * @return self
     */
    public function setInvoiceAddressId(string $invoiceAddressId): self
    {
        $this->initialized['invoiceAddressId'] = true;
        $this->invoiceAddressId = $invoiceAddressId;
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
    public function getMobilePhone1(): string
    {
        return $this->mobilePhone1;
    }
    /**
     * 
     *
     * @param string $mobilePhone1
     *
     * @return self
     */
    public function setMobilePhone1(string $mobilePhone1): self
    {
        $this->initialized['mobilePhone1'] = true;
        $this->mobilePhone1 = $mobilePhone1;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlineAccount>
     */
    public function getOnlineAccounts(): array
    {
        return $this->onlineAccounts;
    }
    /**
     * 
     *
     * @param list<OnlineAccount> $onlineAccounts
     *
     * @return self
     */
    public function setOnlineAccounts(array $onlineAccounts): self
    {
        $this->initialized['onlineAccounts'] = true;
        $this->onlineAccounts = $onlineAccounts;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPartyType(): string
    {
        return $this->partyType;
    }
    /**
     * 
     *
     * @param string $partyType
     *
     * @return self
     */
    public function setPartyType(string $partyType): self
    {
        $this->initialized['partyType'] = true;
        $this->partyType = $partyType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPersonCompany(): string
    {
        return $this->personCompany;
    }
    /**
     * 
     *
     * @param string $personCompany
     *
     * @return self
     */
    public function setPersonCompany(string $personCompany): self
    {
        $this->initialized['personCompany'] = true;
        $this->personCompany = $personCompany;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPersonDepartmentId(): string
    {
        return $this->personDepartmentId;
    }
    /**
     * 
     *
     * @param string $personDepartmentId
     *
     * @return self
     */
    public function setPersonDepartmentId(string $personDepartmentId): self
    {
        $this->initialized['personDepartmentId'] = true;
        $this->personDepartmentId = $personDepartmentId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPersonRoleId(): string
    {
        return $this->personRoleId;
    }
    /**
     * 
     *
     * @param string $personRoleId
     *
     * @return self
     */
    public function setPersonRoleId(string $personRoleId): self
    {
        $this->initialized['personRoleId'] = true;
        $this->personRoleId = $personRoleId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }
    /**
     * 
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPrimaryAddressId(): string
    {
        return $this->primaryAddressId;
    }
    /**
     * 
     *
     * @param string $primaryAddressId
     *
     * @return self
     */
    public function setPrimaryAddressId(string $primaryAddressId): self
    {
        $this->initialized['primaryAddressId'] = true;
        $this->primaryAddressId = $primaryAddressId;
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
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param list<string> $tags
     *
     * @return self
     */
    public function setTags(array $tags): self
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
    public function getWebsite(): string
    {
        return $this->website;
    }
    /**
     * 
     *
     * @param string $website
     *
     * @return self
     */
    public function setWebsite(string $website): self
    {
        $this->initialized['website'] = true;
        $this->website = $website;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommercialLanguageId(): string
    {
        return $this->commercialLanguageId;
    }
    /**
     * 
     *
     * @param string $commercialLanguageId
     *
     * @return self
     */
    public function setCommercialLanguageId(string $commercialLanguageId): self
    {
        $this->initialized['commercialLanguageId'] = true;
        $this->commercialLanguageId = $commercialLanguageId;
        return $this;
    }
    /**
     * 
     *
     * @return list<Contact>
     */
    public function getContacts(): array
    {
        return $this->contacts;
    }
    /**
     * 
     *
     * @param list<Contact> $contacts
     *
     * @return self
     */
    public function setContacts(array $contacts): self
    {
        $this->initialized['contacts'] = true;
        $this->contacts = $contacts;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrencyId(): string
    {
        return $this->currencyId;
    }
    /**
     * 
     *
     * @param string $currencyId
     *
     * @return self
     */
    public function setCurrencyId(string $currencyId): self
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
     * @return string
     */
    public function getCurrencyName(): string
    {
        return $this->currencyName;
    }
    /**
     * 
     *
     * @param string $currencyName
     *
     * @deprecated
     *
     * @return self
     */
    public function setCurrencyName(string $currencyName): self
    {
        $this->initialized['currencyName'] = true;
        $this->currencyName = $currencyName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPrimaryContactId(): string
    {
        return $this->primaryContactId;
    }
    /**
     * 
     *
     * @param string $primaryContactId
     *
     * @return self
     */
    public function setPrimaryContactId(string $primaryContactId): self
    {
        $this->initialized['primaryContactId'] = true;
        $this->primaryContactId = $primaryContactId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSectorId(): string
    {
        return $this->sectorId;
    }
    /**
     * 
     *
     * @param string $sectorId
     *
     * @return self
     */
    public function setSectorId(string $sectorId): self
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
     * @return string
     */
    public function getSectorName(): string
    {
        return $this->sectorName;
    }
    /**
     * 
     *
     * @param string $sectorName
     *
     * @deprecated
     *
     * @return self
     */
    public function setSectorName(string $sectorName): self
    {
        $this->initialized['sectorName'] = true;
        $this->sectorName = $sectorName;
        return $this;
    }
    /**
     * 
     *
     * @return list<PartyBankAccount>
     */
    public function getBankAccounts(): array
    {
        return $this->bankAccounts;
    }
    /**
     * 
     *
     * @param list<PartyBankAccount> $bankAccounts
     *
     * @return self
     */
    public function setBankAccounts(array $bankAccounts): self
    {
        $this->initialized['bankAccounts'] = true;
        $this->bankAccounts = $bankAccounts;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerNumberAtSupplier(): string
    {
        return $this->customerNumberAtSupplier;
    }
    /**
     * 
     *
     * @param string $customerNumberAtSupplier
     *
     * @return self
     */
    public function setCustomerNumberAtSupplier(string $customerNumberAtSupplier): self
    {
        $this->initialized['customerNumberAtSupplier'] = true;
        $this->customerNumberAtSupplier = $customerNumberAtSupplier;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNonStandardTaxId(): string
    {
        return $this->nonStandardTaxId;
    }
    /**
     * 
     *
     * @param string $nonStandardTaxId
     *
     * @return self
     */
    public function setNonStandardTaxId(string $nonStandardTaxId): self
    {
        $this->initialized['nonStandardTaxId'] = true;
        $this->nonStandardTaxId = $nonStandardTaxId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOrderBlock(): bool
    {
        return $this->orderBlock;
    }
    /**
     * 
     *
     * @param bool $orderBlock
     *
     * @return self
     */
    public function setOrderBlock(bool $orderBlock): self
    {
        $this->initialized['orderBlock'] = true;
        $this->orderBlock = $orderBlock;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentMethodId(): string
    {
        return $this->paymentMethodId;
    }
    /**
     * 
     *
     * @param string $paymentMethodId
     *
     * @return self
     */
    public function setPaymentMethodId(string $paymentMethodId): self
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
     * @return string
     */
    public function getPaymentMethodName(): string
    {
        return $this->paymentMethodName;
    }
    /**
     * 
     *
     * @param string $paymentMethodName
     *
     * @deprecated
     *
     * @return self
     */
    public function setPaymentMethodName(string $paymentMethodName): self
    {
        $this->initialized['paymentMethodName'] = true;
        $this->paymentMethodName = $paymentMethodName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReferenceNumber(): string
    {
        return $this->referenceNumber;
    }
    /**
     * 
     *
     * @param string $referenceNumber
     *
     * @return self
     */
    public function setReferenceNumber(string $referenceNumber): self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShipmentMethodId(): string
    {
        return $this->shipmentMethodId;
    }
    /**
     * 
     *
     * @param string $shipmentMethodId
     *
     * @return self
     */
    public function setShipmentMethodId(string $shipmentMethodId): self
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
     * @return string
     */
    public function getShipmentMethodName(): string
    {
        return $this->shipmentMethodName;
    }
    /**
     * 
     *
     * @param string $shipmentMethodName
     *
     * @deprecated
     *
     * @return self
     */
    public function setShipmentMethodName(string $shipmentMethodName): self
    {
        $this->initialized['shipmentMethodName'] = true;
        $this->shipmentMethodName = $shipmentMethodName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSupplierNumber(): string
    {
        return $this->supplierNumber;
    }
    /**
     * 
     *
     * @param string $supplierNumber
     *
     * @return self
     */
    public function setSupplierNumber(string $supplierNumber): self
    {
        $this->initialized['supplierNumber'] = true;
        $this->supplierNumber = $supplierNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSupplierRatingId(): string
    {
        return $this->supplierRatingId;
    }
    /**
     * 
     *
     * @param string $supplierRatingId
     *
     * @return self
     */
    public function setSupplierRatingId(string $supplierRatingId): self
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
     * @return string
     */
    public function getSupplierRatingName(): string
    {
        return $this->supplierRatingName;
    }
    /**
     * 
     *
     * @param string $supplierRatingName
     *
     * @deprecated
     *
     * @return self
     */
    public function setSupplierRatingName(string $supplierRatingName): self
    {
        $this->initialized['supplierRatingName'] = true;
        $this->supplierRatingName = $supplierRatingName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTermOfPaymentId(): string
    {
        return $this->termOfPaymentId;
    }
    /**
     * 
     *
     * @param string $termOfPaymentId
     *
     * @return self
     */
    public function setTermOfPaymentId(string $termOfPaymentId): self
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
     * @return string
     */
    public function getTermOfPaymentName(): string
    {
        return $this->termOfPaymentName;
    }
    /**
     * 
     *
     * @param string $termOfPaymentName
     *
     * @deprecated
     *
     * @return self
     */
    public function setTermOfPaymentName(string $termOfPaymentName): self
    {
        $this->initialized['termOfPaymentName'] = true;
        $this->termOfPaymentName = $termOfPaymentName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVatRegistrationNumber(): string
    {
        return $this->vatRegistrationNumber;
    }
    /**
     * 
     *
     * @param string $vatRegistrationNumber
     *
     * @return self
     */
    public function setVatRegistrationNumber(string $vatRegistrationNumber): self
    {
        $this->initialized['vatRegistrationNumber'] = true;
        $this->vatRegistrationNumber = $vatRegistrationNumber;
        return $this;
    }
}