<?php

namespace Webhubworks\WeclappApiCore\Model;

class CustomerOrLead extends \ArrayObject
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
     * @var string|null
     */
    protected $id;

    /**
     * @var int|null
     */
    protected $createdDate;

    /**
     * @var int|null
     */
    protected $lastModifiedDate;

    /**
     * @var string|null
     */
    protected $version;

    /**
     * @var list<mixed>|null
     */
    protected $customAttributes;

    /**
     * @var list<Address>|null
     */
    protected $addresses;

    /**
     * @var int|null
     */
    protected $birthDate;

    /**
     * @var string|null
     */
    protected $company;

    /**
     * @var string|null
     */
    protected $company2;

    /**
     * @var string|null
     */
    protected $deliveryAddressId;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $fax;

    /**
     * @var string|null
     */
    protected $firstName;

    /**
     * @var string|null
     */
    protected $invoiceAddressId;

    /**
     * @var string|null
     */
    protected $lastName;

    /**
     * @var string|null
     */
    protected $middleName;

    /**
     * @var string|null
     */
    protected $mobilePhone1;

    /**
     * @var list<OnlineAccount>|null
     */
    protected $onlineAccounts;

    /**
     * @var string|null
     */
    protected $partyType;

    /**
     * @var string|null
     */
    protected $personCompany;

    /**
     * @var string|null
     */
    protected $personDepartmentId;

    /**
     * @var string|null
     */
    protected $personRoleId;

    /**
     * @var string|null
     */
    protected $phone;

    /**
     * @var string|null
     */
    protected $primaryAddressId;

    /**
     * @var string|null
     */
    protected $salutation;

    /**
     * @var list<string>|null
     */
    protected $tags;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $title;

    /**
     * @var string|null
     */
    protected $titleId;

    /**
     * @var string|null
     */
    protected $website;

    /**
     * @var string|null
     */
    protected $commercialLanguageId;

    /**
     * @var list<Contact>|null
     */
    protected $contacts;

    /**
     * @var string|null
     */
    protected $currencyId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $currencyName;

    /**
     * @var string|null
     */
    protected $primaryContactId;

    /**
     * @var string|null
     */
    protected $sectorId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $sectorName;

    /**
     * @var string|null
     */
    protected $annualRevenue;

    /**
     * @var string|null
     */
    protected $companySizeId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $companySizeName;

    /**
     * @var string|null
     */
    protected $customerCategoryId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $customerCategoryName;

    /**
     * @var string|null
     */
    protected $parentPartyId;

    /**
     * @var string|null
     */
    protected $paymentMethodId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $paymentMethodName;

    /**
     * @var string|null
     */
    protected $responsibleUserId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $responsibleUserUsername;

    /**
     * @var string|null
     */
    protected $shipmentMethodId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $shipmentMethodName;

    /**
     * @var string|null
     */
    protected $termOfPaymentId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $termOfPaymentName;

    /**
     * @var string|null
     */
    protected $vatRegistrationNumber;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    /**
     * @return list<mixed>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<mixed>|null  $customAttributes
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

        return $this;
    }

    /**
     * @return list<Address>|null
     */
    public function getAddresses(): ?array
    {
        return $this->addresses;
    }

    /**
     * @param  list<Address>|null  $addresses
     */
    public function setAddresses(?array $addresses): self
    {
        $this->initialized['addresses'] = true;
        $this->addresses = $addresses;

        return $this;
    }

    public function getBirthDate(): ?int
    {
        return $this->birthDate;
    }

    public function setBirthDate(?int $birthDate): self
    {
        $this->initialized['birthDate'] = true;
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): self
    {
        $this->initialized['company'] = true;
        $this->company = $company;

        return $this;
    }

    public function getCompany2(): ?string
    {
        return $this->company2;
    }

    public function setCompany2(?string $company2): self
    {
        $this->initialized['company2'] = true;
        $this->company2 = $company2;

        return $this;
    }

    public function getDeliveryAddressId(): ?string
    {
        return $this->deliveryAddressId;
    }

    public function setDeliveryAddressId(?string $deliveryAddressId): self
    {
        $this->initialized['deliveryAddressId'] = true;
        $this->deliveryAddressId = $deliveryAddressId;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->initialized['fax'] = true;
        $this->fax = $fax;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;

        return $this;
    }

    public function getInvoiceAddressId(): ?string
    {
        return $this->invoiceAddressId;
    }

    public function setInvoiceAddressId(?string $invoiceAddressId): self
    {
        $this->initialized['invoiceAddressId'] = true;
        $this->invoiceAddressId = $invoiceAddressId;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;

        return $this;
    }

    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    public function setMiddleName(?string $middleName): self
    {
        $this->initialized['middleName'] = true;
        $this->middleName = $middleName;

        return $this;
    }

    public function getMobilePhone1(): ?string
    {
        return $this->mobilePhone1;
    }

    public function setMobilePhone1(?string $mobilePhone1): self
    {
        $this->initialized['mobilePhone1'] = true;
        $this->mobilePhone1 = $mobilePhone1;

        return $this;
    }

    /**
     * @return list<OnlineAccount>|null
     */
    public function getOnlineAccounts(): ?array
    {
        return $this->onlineAccounts;
    }

    /**
     * @param  list<OnlineAccount>|null  $onlineAccounts
     */
    public function setOnlineAccounts(?array $onlineAccounts): self
    {
        $this->initialized['onlineAccounts'] = true;
        $this->onlineAccounts = $onlineAccounts;

        return $this;
    }

    public function getPartyType(): ?string
    {
        return $this->partyType;
    }

    public function setPartyType(?string $partyType): self
    {
        $this->initialized['partyType'] = true;
        $this->partyType = $partyType;

        return $this;
    }

    public function getPersonCompany(): ?string
    {
        return $this->personCompany;
    }

    public function setPersonCompany(?string $personCompany): self
    {
        $this->initialized['personCompany'] = true;
        $this->personCompany = $personCompany;

        return $this;
    }

    public function getPersonDepartmentId(): ?string
    {
        return $this->personDepartmentId;
    }

    public function setPersonDepartmentId(?string $personDepartmentId): self
    {
        $this->initialized['personDepartmentId'] = true;
        $this->personDepartmentId = $personDepartmentId;

        return $this;
    }

    public function getPersonRoleId(): ?string
    {
        return $this->personRoleId;
    }

    public function setPersonRoleId(?string $personRoleId): self
    {
        $this->initialized['personRoleId'] = true;
        $this->personRoleId = $personRoleId;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;

        return $this;
    }

    public function getPrimaryAddressId(): ?string
    {
        return $this->primaryAddressId;
    }

    public function setPrimaryAddressId(?string $primaryAddressId): self
    {
        $this->initialized['primaryAddressId'] = true;
        $this->primaryAddressId = $primaryAddressId;

        return $this;
    }

    public function getSalutation(): ?string
    {
        return $this->salutation;
    }

    public function setSalutation(?string $salutation): self
    {
        $this->initialized['salutation'] = true;
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param  list<string>|null  $tags
     */
    public function setTags(?array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @deprecated
     */
    public function setTitle(?string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    public function getTitleId(): ?string
    {
        return $this->titleId;
    }

    public function setTitleId(?string $titleId): self
    {
        $this->initialized['titleId'] = true;
        $this->titleId = $titleId;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): self
    {
        $this->initialized['website'] = true;
        $this->website = $website;

        return $this;
    }

    public function getCommercialLanguageId(): ?string
    {
        return $this->commercialLanguageId;
    }

    public function setCommercialLanguageId(?string $commercialLanguageId): self
    {
        $this->initialized['commercialLanguageId'] = true;
        $this->commercialLanguageId = $commercialLanguageId;

        return $this;
    }

    /**
     * @return list<Contact>|null
     */
    public function getContacts(): ?array
    {
        return $this->contacts;
    }

    /**
     * @param  list<Contact>|null  $contacts
     */
    public function setContacts(?array $contacts): self
    {
        $this->initialized['contacts'] = true;
        $this->contacts = $contacts;

        return $this;
    }

    public function getCurrencyId(): ?string
    {
        return $this->currencyId;
    }

    public function setCurrencyId(?string $currencyId): self
    {
        $this->initialized['currencyId'] = true;
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCurrencyName(): ?string
    {
        return $this->currencyName;
    }

    /**
     * @deprecated
     */
    public function setCurrencyName(?string $currencyName): self
    {
        $this->initialized['currencyName'] = true;
        $this->currencyName = $currencyName;

        return $this;
    }

    public function getPrimaryContactId(): ?string
    {
        return $this->primaryContactId;
    }

    public function setPrimaryContactId(?string $primaryContactId): self
    {
        $this->initialized['primaryContactId'] = true;
        $this->primaryContactId = $primaryContactId;

        return $this;
    }

    public function getSectorId(): ?string
    {
        return $this->sectorId;
    }

    public function setSectorId(?string $sectorId): self
    {
        $this->initialized['sectorId'] = true;
        $this->sectorId = $sectorId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSectorName(): ?string
    {
        return $this->sectorName;
    }

    /**
     * @deprecated
     */
    public function setSectorName(?string $sectorName): self
    {
        $this->initialized['sectorName'] = true;
        $this->sectorName = $sectorName;

        return $this;
    }

    public function getAnnualRevenue(): ?string
    {
        return $this->annualRevenue;
    }

    public function setAnnualRevenue(?string $annualRevenue): self
    {
        $this->initialized['annualRevenue'] = true;
        $this->annualRevenue = $annualRevenue;

        return $this;
    }

    public function getCompanySizeId(): ?string
    {
        return $this->companySizeId;
    }

    public function setCompanySizeId(?string $companySizeId): self
    {
        $this->initialized['companySizeId'] = true;
        $this->companySizeId = $companySizeId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCompanySizeName(): ?string
    {
        return $this->companySizeName;
    }

    /**
     * @deprecated
     */
    public function setCompanySizeName(?string $companySizeName): self
    {
        $this->initialized['companySizeName'] = true;
        $this->companySizeName = $companySizeName;

        return $this;
    }

    public function getCustomerCategoryId(): ?string
    {
        return $this->customerCategoryId;
    }

    public function setCustomerCategoryId(?string $customerCategoryId): self
    {
        $this->initialized['customerCategoryId'] = true;
        $this->customerCategoryId = $customerCategoryId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCustomerCategoryName(): ?string
    {
        return $this->customerCategoryName;
    }

    /**
     * @deprecated
     */
    public function setCustomerCategoryName(?string $customerCategoryName): self
    {
        $this->initialized['customerCategoryName'] = true;
        $this->customerCategoryName = $customerCategoryName;

        return $this;
    }

    public function getParentPartyId(): ?string
    {
        return $this->parentPartyId;
    }

    public function setParentPartyId(?string $parentPartyId): self
    {
        $this->initialized['parentPartyId'] = true;
        $this->parentPartyId = $parentPartyId;

        return $this;
    }

    public function getPaymentMethodId(): ?string
    {
        return $this->paymentMethodId;
    }

    public function setPaymentMethodId(?string $paymentMethodId): self
    {
        $this->initialized['paymentMethodId'] = true;
        $this->paymentMethodId = $paymentMethodId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getPaymentMethodName(): ?string
    {
        return $this->paymentMethodName;
    }

    /**
     * @deprecated
     */
    public function setPaymentMethodName(?string $paymentMethodName): self
    {
        $this->initialized['paymentMethodName'] = true;
        $this->paymentMethodName = $paymentMethodName;

        return $this;
    }

    public function getResponsibleUserId(): ?string
    {
        return $this->responsibleUserId;
    }

    public function setResponsibleUserId(?string $responsibleUserId): self
    {
        $this->initialized['responsibleUserId'] = true;
        $this->responsibleUserId = $responsibleUserId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getResponsibleUserUsername(): ?string
    {
        return $this->responsibleUserUsername;
    }

    /**
     * @deprecated
     */
    public function setResponsibleUserUsername(?string $responsibleUserUsername): self
    {
        $this->initialized['responsibleUserUsername'] = true;
        $this->responsibleUserUsername = $responsibleUserUsername;

        return $this;
    }

    public function getShipmentMethodId(): ?string
    {
        return $this->shipmentMethodId;
    }

    public function setShipmentMethodId(?string $shipmentMethodId): self
    {
        $this->initialized['shipmentMethodId'] = true;
        $this->shipmentMethodId = $shipmentMethodId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getShipmentMethodName(): ?string
    {
        return $this->shipmentMethodName;
    }

    /**
     * @deprecated
     */
    public function setShipmentMethodName(?string $shipmentMethodName): self
    {
        $this->initialized['shipmentMethodName'] = true;
        $this->shipmentMethodName = $shipmentMethodName;

        return $this;
    }

    public function getTermOfPaymentId(): ?string
    {
        return $this->termOfPaymentId;
    }

    public function setTermOfPaymentId(?string $termOfPaymentId): self
    {
        $this->initialized['termOfPaymentId'] = true;
        $this->termOfPaymentId = $termOfPaymentId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getTermOfPaymentName(): ?string
    {
        return $this->termOfPaymentName;
    }

    /**
     * @deprecated
     */
    public function setTermOfPaymentName(?string $termOfPaymentName): self
    {
        $this->initialized['termOfPaymentName'] = true;
        $this->termOfPaymentName = $termOfPaymentName;

        return $this;
    }

    public function getVatRegistrationNumber(): ?string
    {
        return $this->vatRegistrationNumber;
    }

    public function setVatRegistrationNumber(?string $vatRegistrationNumber): self
    {
        $this->initialized['vatRegistrationNumber'] = true;
        $this->vatRegistrationNumber = $vatRegistrationNumber;

        return $this;
    }
}
