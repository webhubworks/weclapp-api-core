<?php

namespace Webhubworks\WeclappApiCore\Model;

class Lead extends \ArrayObject
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
     * @var string|null
     */
    protected $annualRevenue;
    /**
     * 
     *
     * @var string|null
     */
    protected $companySizeId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $companySizeName;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerCategoryId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $customerCategoryName;
    /**
     * 
     *
     * @var string|null
     */
    protected $parentPartyId;
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
    protected $responsibleUserId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $responsibleUserUsername;
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
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $leadNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $leadRatingId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $leadRatingName;
    /**
     * 
     *
     * @var string|null
     */
    protected $leadSourceId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $leadSourceName;
    /**
     * 
     *
     * @var string|null
     */
    protected $leadStatus;
    /**
     * 
     *
     * @deprecated
     *
     * @var list<Entity>|null
     */
    protected $leadTopics;
    /**
     * 
     *
     * @var string|null
     */
    protected $lossDescription;
    /**
     * 
     *
     * @var string|null
     */
    protected $lossReasonId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $lossReasonName;
    /**
     * 
     *
     * @var string|null
     */
    protected $oldLeadNumber;
    /**
     * 
     *
     * @var bool|null
     */
    protected $optIn;
    /**
     * 
     *
     * @var bool|null
     */
    protected $optInLetter;
    /**
     * 
     *
     * @var bool|null
     */
    protected $optInPhone;
    /**
     * 
     *
     * @var bool|null
     */
    protected $optInSms;
    /**
     * 
     *
     * @var bool|null
     */
    protected $responsibleUserFixed;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesChannel;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesStageId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $salesStageName;
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
     * @return string|null
     */
    public function getAnnualRevenue(): ?string
    {
        return $this->annualRevenue;
    }
    /**
     * 
     *
     * @param string|null $annualRevenue
     *
     * @return self
     */
    public function setAnnualRevenue(?string $annualRevenue): self
    {
        $this->initialized['annualRevenue'] = true;
        $this->annualRevenue = $annualRevenue;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCompanySizeId(): ?string
    {
        return $this->companySizeId;
    }
    /**
     * 
     *
     * @param string|null $companySizeId
     *
     * @return self
     */
    public function setCompanySizeId(?string $companySizeId): self
    {
        $this->initialized['companySizeId'] = true;
        $this->companySizeId = $companySizeId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getCompanySizeName(): ?string
    {
        return $this->companySizeName;
    }
    /**
     * 
     *
     * @param string|null $companySizeName
     *
     * @deprecated
     *
     * @return self
     */
    public function setCompanySizeName(?string $companySizeName): self
    {
        $this->initialized['companySizeName'] = true;
        $this->companySizeName = $companySizeName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerCategoryId(): ?string
    {
        return $this->customerCategoryId;
    }
    /**
     * 
     *
     * @param string|null $customerCategoryId
     *
     * @return self
     */
    public function setCustomerCategoryId(?string $customerCategoryId): self
    {
        $this->initialized['customerCategoryId'] = true;
        $this->customerCategoryId = $customerCategoryId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getCustomerCategoryName(): ?string
    {
        return $this->customerCategoryName;
    }
    /**
     * 
     *
     * @param string|null $customerCategoryName
     *
     * @deprecated
     *
     * @return self
     */
    public function setCustomerCategoryName(?string $customerCategoryName): self
    {
        $this->initialized['customerCategoryName'] = true;
        $this->customerCategoryName = $customerCategoryName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getParentPartyId(): ?string
    {
        return $this->parentPartyId;
    }
    /**
     * 
     *
     * @param string|null $parentPartyId
     *
     * @return self
     */
    public function setParentPartyId(?string $parentPartyId): self
    {
        $this->initialized['parentPartyId'] = true;
        $this->parentPartyId = $parentPartyId;
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
    public function getResponsibleUserId(): ?string
    {
        return $this->responsibleUserId;
    }
    /**
     * 
     *
     * @param string|null $responsibleUserId
     *
     * @return self
     */
    public function setResponsibleUserId(?string $responsibleUserId): self
    {
        $this->initialized['responsibleUserId'] = true;
        $this->responsibleUserId = $responsibleUserId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getResponsibleUserUsername(): ?string
    {
        return $this->responsibleUserUsername;
    }
    /**
     * 
     *
     * @param string|null $responsibleUserUsername
     *
     * @deprecated
     *
     * @return self
     */
    public function setResponsibleUserUsername(?string $responsibleUserUsername): self
    {
        $this->initialized['responsibleUserUsername'] = true;
        $this->responsibleUserUsername = $responsibleUserUsername;
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
    public function getLeadNumber(): ?string
    {
        return $this->leadNumber;
    }
    /**
     * 
     *
     * @param string|null $leadNumber
     *
     * @return self
     */
    public function setLeadNumber(?string $leadNumber): self
    {
        $this->initialized['leadNumber'] = true;
        $this->leadNumber = $leadNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLeadRatingId(): ?string
    {
        return $this->leadRatingId;
    }
    /**
     * 
     *
     * @param string|null $leadRatingId
     *
     * @return self
     */
    public function setLeadRatingId(?string $leadRatingId): self
    {
        $this->initialized['leadRatingId'] = true;
        $this->leadRatingId = $leadRatingId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getLeadRatingName(): ?string
    {
        return $this->leadRatingName;
    }
    /**
     * 
     *
     * @param string|null $leadRatingName
     *
     * @deprecated
     *
     * @return self
     */
    public function setLeadRatingName(?string $leadRatingName): self
    {
        $this->initialized['leadRatingName'] = true;
        $this->leadRatingName = $leadRatingName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLeadSourceId(): ?string
    {
        return $this->leadSourceId;
    }
    /**
     * 
     *
     * @param string|null $leadSourceId
     *
     * @return self
     */
    public function setLeadSourceId(?string $leadSourceId): self
    {
        $this->initialized['leadSourceId'] = true;
        $this->leadSourceId = $leadSourceId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getLeadSourceName(): ?string
    {
        return $this->leadSourceName;
    }
    /**
     * 
     *
     * @param string|null $leadSourceName
     *
     * @deprecated
     *
     * @return self
     */
    public function setLeadSourceName(?string $leadSourceName): self
    {
        $this->initialized['leadSourceName'] = true;
        $this->leadSourceName = $leadSourceName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLeadStatus(): ?string
    {
        return $this->leadStatus;
    }
    /**
     * 
     *
     * @param string|null $leadStatus
     *
     * @return self
     */
    public function setLeadStatus(?string $leadStatus): self
    {
        $this->initialized['leadStatus'] = true;
        $this->leadStatus = $leadStatus;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return list<Entity>|null
     */
    public function getLeadTopics(): ?array
    {
        return $this->leadTopics;
    }
    /**
     * 
     *
     * @param list<Entity>|null $leadTopics
     *
     * @deprecated
     *
     * @return self
     */
    public function setLeadTopics(?array $leadTopics): self
    {
        $this->initialized['leadTopics'] = true;
        $this->leadTopics = $leadTopics;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLossDescription(): ?string
    {
        return $this->lossDescription;
    }
    /**
     * 
     *
     * @param string|null $lossDescription
     *
     * @return self
     */
    public function setLossDescription(?string $lossDescription): self
    {
        $this->initialized['lossDescription'] = true;
        $this->lossDescription = $lossDescription;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLossReasonId(): ?string
    {
        return $this->lossReasonId;
    }
    /**
     * 
     *
     * @param string|null $lossReasonId
     *
     * @return self
     */
    public function setLossReasonId(?string $lossReasonId): self
    {
        $this->initialized['lossReasonId'] = true;
        $this->lossReasonId = $lossReasonId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getLossReasonName(): ?string
    {
        return $this->lossReasonName;
    }
    /**
     * 
     *
     * @param string|null $lossReasonName
     *
     * @deprecated
     *
     * @return self
     */
    public function setLossReasonName(?string $lossReasonName): self
    {
        $this->initialized['lossReasonName'] = true;
        $this->lossReasonName = $lossReasonName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOldLeadNumber(): ?string
    {
        return $this->oldLeadNumber;
    }
    /**
     * 
     *
     * @param string|null $oldLeadNumber
     *
     * @return self
     */
    public function setOldLeadNumber(?string $oldLeadNumber): self
    {
        $this->initialized['oldLeadNumber'] = true;
        $this->oldLeadNumber = $oldLeadNumber;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getOptIn(): ?bool
    {
        return $this->optIn;
    }
    /**
     * 
     *
     * @param bool|null $optIn
     *
     * @return self
     */
    public function setOptIn(?bool $optIn): self
    {
        $this->initialized['optIn'] = true;
        $this->optIn = $optIn;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getOptInLetter(): ?bool
    {
        return $this->optInLetter;
    }
    /**
     * 
     *
     * @param bool|null $optInLetter
     *
     * @return self
     */
    public function setOptInLetter(?bool $optInLetter): self
    {
        $this->initialized['optInLetter'] = true;
        $this->optInLetter = $optInLetter;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getOptInPhone(): ?bool
    {
        return $this->optInPhone;
    }
    /**
     * 
     *
     * @param bool|null $optInPhone
     *
     * @return self
     */
    public function setOptInPhone(?bool $optInPhone): self
    {
        $this->initialized['optInPhone'] = true;
        $this->optInPhone = $optInPhone;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getOptInSms(): ?bool
    {
        return $this->optInSms;
    }
    /**
     * 
     *
     * @param bool|null $optInSms
     *
     * @return self
     */
    public function setOptInSms(?bool $optInSms): self
    {
        $this->initialized['optInSms'] = true;
        $this->optInSms = $optInSms;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getResponsibleUserFixed(): ?bool
    {
        return $this->responsibleUserFixed;
    }
    /**
     * 
     *
     * @param bool|null $responsibleUserFixed
     *
     * @return self
     */
    public function setResponsibleUserFixed(?bool $responsibleUserFixed): self
    {
        $this->initialized['responsibleUserFixed'] = true;
        $this->responsibleUserFixed = $responsibleUserFixed;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesChannel(): ?string
    {
        return $this->salesChannel;
    }
    /**
     * 
     *
     * @param string|null $salesChannel
     *
     * @return self
     */
    public function setSalesChannel(?string $salesChannel): self
    {
        $this->initialized['salesChannel'] = true;
        $this->salesChannel = $salesChannel;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesStageId(): ?string
    {
        return $this->salesStageId;
    }
    /**
     * 
     *
     * @param string|null $salesStageId
     *
     * @return self
     */
    public function setSalesStageId(?string $salesStageId): self
    {
        $this->initialized['salesStageId'] = true;
        $this->salesStageId = $salesStageId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getSalesStageName(): ?string
    {
        return $this->salesStageName;
    }
    /**
     * 
     *
     * @param string|null $salesStageName
     *
     * @deprecated
     *
     * @return self
     */
    public function setSalesStageName(?string $salesStageName): self
    {
        $this->initialized['salesStageName'] = true;
        $this->salesStageName = $salesStageName;
        return $this;
    }
}