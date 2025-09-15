<?php

namespace Webhubworks\WeclappApiCore\Model;

class Party extends \ArrayObject
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
     * @var list<PartyBankAccount>|null
     */
    protected $bankAccounts;
    /**
     * 
     *
     * @var string|null
     */
    protected $commercialLanguageId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $commissionBlock;
    /**
     * 
     *
     * @var list<CommissionSalesPartner>|null
     */
    protected $commissionSalesPartners;
    /**
     * 
     *
     * @var string|null
     */
    protected $companySizeId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $competitor;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $contacts;
    /**
     * 
     *
     * @var int|null
     */
    protected $convertedOnDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $currencyId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $customer;
    /**
     * 
     *
     * @var bool|null
     */
    protected $customerAllowDropshippingOrderCreation;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerAmountInsured;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerAnnualRevenue;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerBlockNotice;
    /**
     * 
     *
     * @var bool|null
     */
    protected $customerBlocked;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerBusinessType;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerCategoryId;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerCreditLimit;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerCurrentSalesStageId;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerDebtorAccountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerDebtorAccountingCodeId;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerDefaultHeaderDiscount;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerDefaultHeaderSurcharge;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerDefaultShippingCarrierId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $customerDeliveryBlock;
    /**
     * 
     *
     * @var bool|null
     */
    protected $customerInsolvent;
    /**
     * 
     *
     * @var bool|null
     */
    protected $customerInsured;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerInternalNote;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerLossDescription;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerLossReasonId;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerNonStandardTaxId;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerNumberOld;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerPaymentMethodId;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerSalesChannel;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerSalesOrderPaymentType;
    /**
     * 
     *
     * @var int|null
     */
    protected $customerSalesProbability;
    /**
     * 
     *
     * @var list<SalesStageHistory>|null
     */
    protected $customerSalesStageHistory;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerSatisfaction;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerShipmentMethodId;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerSupplierNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerTermOfPaymentId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $customerUseCustomsTariffNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $deliveryEmailAddressesId;
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
    protected $dunningAddressId;
    /**
     * 
     *
     * @var string|null
     */
    protected $dunningEmailAddressesId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $enableDropshippingInNewSupplySources;
    /**
     * 
     *
     * @var string|null
     */
    protected $eoriNumber;
    /**
     * 
     *
     * @var bool|null
     */
    protected $factoring;
    /**
     * 
     *
     * @var string|null
     */
    protected $fixPhone2;
    /**
     * 
     *
     * @var bool|null
     */
    protected $fixedResponsibleUser;
    /**
     * 
     *
     * @var bool|null
     */
    protected $formerSalesPartner;
    /**
     * 
     *
     * @var bool|null
     */
    protected $habitualExporter;
    /**
     * 
     *
     * @var string|null
     */
    protected $imageId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $invoiceBlock;
    /**
     * 
     *
     * @var string|null
     */
    protected $invoiceRecipientId;
    /**
     * 
     *
     * @var string|null
     */
    protected $leadRatingId;
    /**
     * 
     *
     * @var string|null
     */
    protected $leadSourceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $leadStatus;
    /**
     * 
     *
     * @var string|null
     */
    protected $legalFormId;
    /**
     * 
     *
     * @var string|null
     */
    protected $mobilePhone2;
    /**
     * 
     *
     * @var bool|null
     */
    protected $optInEmail;
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
     * @var string|null
     */
    protected $parentPartyId;
    /**
     * 
     *
     * @var list<PartyEmailAddresses>|null
     */
    protected $partyEmailAddresses;
    /**
     * 
     *
     * @var list<PartyHabitualExporterLetterOfIntent>|null
     */
    protected $partyHabitualExporterLettersOfIntent;
    /**
     * 
     *
     * @var string|null
     */
    protected $phoneHome;
    /**
     * 
     *
     * @var string|null
     */
    protected $primaryContactId;
    /**
     * 
     *
     * @var int|null
     */
    protected $publicPageExpirationDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $publicPageUuid;
    /**
     * 
     *
     * @var string|null
     */
    protected $purchaseEmailAddressesId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $purchaseViaPlafond;
    /**
     * 
     *
     * @var string|null
     */
    protected $quotationEmailAddressesId;
    /**
     * 
     *
     * @var string|null
     */
    protected $ratingId;
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
    protected $regionId;
    /**
     * 
     *
     * @var string|null
     */
    protected $responsibleUserId;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesInvoiceEmailAddressesId;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesOrderEmailAddressesId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $salesPartner;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesPartnerDefaultCommissionFix;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesPartnerDefaultCommissionPercentage;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesPartnerDefaultCommissionType;
    /**
     * 
     *
     * @var string|null
     */
    protected $sectorId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $supplier;
    /**
     * 
     *
     * @var bool|null
     */
    protected $supplierActive;
    /**
     * 
     *
     * @var string|null
     */
    protected $supplierCreditorAccountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $supplierCreditorAccountingCodeId;
    /**
     * 
     *
     * @var string|null
     */
    protected $supplierCustomerNumberAtSupplier;
    /**
     * 
     *
     * @var string|null
     */
    protected $supplierDefaultShippingCarrierId;
    /**
     * 
     *
     * @var string|null
     */
    protected $supplierInternalNote;
    /**
     * 
     *
     * @var bool|null
     */
    protected $supplierMergeItemsForOcrInvoiceUpload;
    /**
     * 
     *
     * @var string|null
     */
    protected $supplierMinimumPurchaseOrderAmount;
    /**
     * 
     *
     * @var string|null
     */
    protected $supplierNonStandardTaxId;
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
    protected $supplierNumberOld;
    /**
     * 
     *
     * @var bool|null
     */
    protected $supplierOrderBlock;
    /**
     * 
     *
     * @var string|null
     */
    protected $supplierPaymentMethodId;
    /**
     * 
     *
     * @var string|null
     */
    protected $supplierShipmentMethodId;
    /**
     * 
     *
     * @var string|null
     */
    protected $supplierTermOfPaymentId;
    /**
     * 
     *
     * @var string|null
     */
    protected $taxId;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $topics;
    /**
     * 
     *
     * @var string|null
     */
    protected $vatIdentificationNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $xRechnungLeitwegId;
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
     * @return bool|null
     */
    public function getCommissionBlock(): ?bool
    {
        return $this->commissionBlock;
    }
    /**
     * 
     *
     * @param bool|null $commissionBlock
     *
     * @return self
     */
    public function setCommissionBlock(?bool $commissionBlock): self
    {
        $this->initialized['commissionBlock'] = true;
        $this->commissionBlock = $commissionBlock;
        return $this;
    }
    /**
     * 
     *
     * @return list<CommissionSalesPartner>|null
     */
    public function getCommissionSalesPartners(): ?array
    {
        return $this->commissionSalesPartners;
    }
    /**
     * 
     *
     * @param list<CommissionSalesPartner>|null $commissionSalesPartners
     *
     * @return self
     */
    public function setCommissionSalesPartners(?array $commissionSalesPartners): self
    {
        $this->initialized['commissionSalesPartners'] = true;
        $this->commissionSalesPartners = $commissionSalesPartners;
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
     * @return bool|null
     */
    public function getCompetitor(): ?bool
    {
        return $this->competitor;
    }
    /**
     * 
     *
     * @param bool|null $competitor
     *
     * @return self
     */
    public function setCompetitor(?bool $competitor): self
    {
        $this->initialized['competitor'] = true;
        $this->competitor = $competitor;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getContacts(): ?array
    {
        return $this->contacts;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $contacts
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
     * @return int|null
     */
    public function getConvertedOnDate(): ?int
    {
        return $this->convertedOnDate;
    }
    /**
     * 
     *
     * @param int|null $convertedOnDate
     *
     * @return self
     */
    public function setConvertedOnDate(?int $convertedOnDate): self
    {
        $this->initialized['convertedOnDate'] = true;
        $this->convertedOnDate = $convertedOnDate;
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
     * @return bool|null
     */
    public function getCustomer(): ?bool
    {
        return $this->customer;
    }
    /**
     * 
     *
     * @param bool|null $customer
     *
     * @return self
     */
    public function setCustomer(?bool $customer): self
    {
        $this->initialized['customer'] = true;
        $this->customer = $customer;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCustomerAllowDropshippingOrderCreation(): ?bool
    {
        return $this->customerAllowDropshippingOrderCreation;
    }
    /**
     * 
     *
     * @param bool|null $customerAllowDropshippingOrderCreation
     *
     * @return self
     */
    public function setCustomerAllowDropshippingOrderCreation(?bool $customerAllowDropshippingOrderCreation): self
    {
        $this->initialized['customerAllowDropshippingOrderCreation'] = true;
        $this->customerAllowDropshippingOrderCreation = $customerAllowDropshippingOrderCreation;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerAmountInsured(): ?string
    {
        return $this->customerAmountInsured;
    }
    /**
     * 
     *
     * @param string|null $customerAmountInsured
     *
     * @return self
     */
    public function setCustomerAmountInsured(?string $customerAmountInsured): self
    {
        $this->initialized['customerAmountInsured'] = true;
        $this->customerAmountInsured = $customerAmountInsured;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerAnnualRevenue(): ?string
    {
        return $this->customerAnnualRevenue;
    }
    /**
     * 
     *
     * @param string|null $customerAnnualRevenue
     *
     * @return self
     */
    public function setCustomerAnnualRevenue(?string $customerAnnualRevenue): self
    {
        $this->initialized['customerAnnualRevenue'] = true;
        $this->customerAnnualRevenue = $customerAnnualRevenue;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerBlockNotice(): ?string
    {
        return $this->customerBlockNotice;
    }
    /**
     * 
     *
     * @param string|null $customerBlockNotice
     *
     * @return self
     */
    public function setCustomerBlockNotice(?string $customerBlockNotice): self
    {
        $this->initialized['customerBlockNotice'] = true;
        $this->customerBlockNotice = $customerBlockNotice;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCustomerBlocked(): ?bool
    {
        return $this->customerBlocked;
    }
    /**
     * 
     *
     * @param bool|null $customerBlocked
     *
     * @return self
     */
    public function setCustomerBlocked(?bool $customerBlocked): self
    {
        $this->initialized['customerBlocked'] = true;
        $this->customerBlocked = $customerBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerBusinessType(): ?string
    {
        return $this->customerBusinessType;
    }
    /**
     * 
     *
     * @param string|null $customerBusinessType
     *
     * @return self
     */
    public function setCustomerBusinessType(?string $customerBusinessType): self
    {
        $this->initialized['customerBusinessType'] = true;
        $this->customerBusinessType = $customerBusinessType;
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
     * @return string|null
     */
    public function getCustomerCreditLimit(): ?string
    {
        return $this->customerCreditLimit;
    }
    /**
     * 
     *
     * @param string|null $customerCreditLimit
     *
     * @return self
     */
    public function setCustomerCreditLimit(?string $customerCreditLimit): self
    {
        $this->initialized['customerCreditLimit'] = true;
        $this->customerCreditLimit = $customerCreditLimit;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerCurrentSalesStageId(): ?string
    {
        return $this->customerCurrentSalesStageId;
    }
    /**
     * 
     *
     * @param string|null $customerCurrentSalesStageId
     *
     * @return self
     */
    public function setCustomerCurrentSalesStageId(?string $customerCurrentSalesStageId): self
    {
        $this->initialized['customerCurrentSalesStageId'] = true;
        $this->customerCurrentSalesStageId = $customerCurrentSalesStageId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerDebtorAccountId(): ?string
    {
        return $this->customerDebtorAccountId;
    }
    /**
     * 
     *
     * @param string|null $customerDebtorAccountId
     *
     * @return self
     */
    public function setCustomerDebtorAccountId(?string $customerDebtorAccountId): self
    {
        $this->initialized['customerDebtorAccountId'] = true;
        $this->customerDebtorAccountId = $customerDebtorAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerDebtorAccountingCodeId(): ?string
    {
        return $this->customerDebtorAccountingCodeId;
    }
    /**
     * 
     *
     * @param string|null $customerDebtorAccountingCodeId
     *
     * @return self
     */
    public function setCustomerDebtorAccountingCodeId(?string $customerDebtorAccountingCodeId): self
    {
        $this->initialized['customerDebtorAccountingCodeId'] = true;
        $this->customerDebtorAccountingCodeId = $customerDebtorAccountingCodeId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerDefaultHeaderDiscount(): ?string
    {
        return $this->customerDefaultHeaderDiscount;
    }
    /**
     * 
     *
     * @param string|null $customerDefaultHeaderDiscount
     *
     * @return self
     */
    public function setCustomerDefaultHeaderDiscount(?string $customerDefaultHeaderDiscount): self
    {
        $this->initialized['customerDefaultHeaderDiscount'] = true;
        $this->customerDefaultHeaderDiscount = $customerDefaultHeaderDiscount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerDefaultHeaderSurcharge(): ?string
    {
        return $this->customerDefaultHeaderSurcharge;
    }
    /**
     * 
     *
     * @param string|null $customerDefaultHeaderSurcharge
     *
     * @return self
     */
    public function setCustomerDefaultHeaderSurcharge(?string $customerDefaultHeaderSurcharge): self
    {
        $this->initialized['customerDefaultHeaderSurcharge'] = true;
        $this->customerDefaultHeaderSurcharge = $customerDefaultHeaderSurcharge;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerDefaultShippingCarrierId(): ?string
    {
        return $this->customerDefaultShippingCarrierId;
    }
    /**
     * 
     *
     * @param string|null $customerDefaultShippingCarrierId
     *
     * @return self
     */
    public function setCustomerDefaultShippingCarrierId(?string $customerDefaultShippingCarrierId): self
    {
        $this->initialized['customerDefaultShippingCarrierId'] = true;
        $this->customerDefaultShippingCarrierId = $customerDefaultShippingCarrierId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCustomerDeliveryBlock(): ?bool
    {
        return $this->customerDeliveryBlock;
    }
    /**
     * 
     *
     * @param bool|null $customerDeliveryBlock
     *
     * @return self
     */
    public function setCustomerDeliveryBlock(?bool $customerDeliveryBlock): self
    {
        $this->initialized['customerDeliveryBlock'] = true;
        $this->customerDeliveryBlock = $customerDeliveryBlock;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCustomerInsolvent(): ?bool
    {
        return $this->customerInsolvent;
    }
    /**
     * 
     *
     * @param bool|null $customerInsolvent
     *
     * @return self
     */
    public function setCustomerInsolvent(?bool $customerInsolvent): self
    {
        $this->initialized['customerInsolvent'] = true;
        $this->customerInsolvent = $customerInsolvent;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCustomerInsured(): ?bool
    {
        return $this->customerInsured;
    }
    /**
     * 
     *
     * @param bool|null $customerInsured
     *
     * @return self
     */
    public function setCustomerInsured(?bool $customerInsured): self
    {
        $this->initialized['customerInsured'] = true;
        $this->customerInsured = $customerInsured;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerInternalNote(): ?string
    {
        return $this->customerInternalNote;
    }
    /**
     * 
     *
     * @param string|null $customerInternalNote
     *
     * @return self
     */
    public function setCustomerInternalNote(?string $customerInternalNote): self
    {
        $this->initialized['customerInternalNote'] = true;
        $this->customerInternalNote = $customerInternalNote;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerLossDescription(): ?string
    {
        return $this->customerLossDescription;
    }
    /**
     * 
     *
     * @param string|null $customerLossDescription
     *
     * @return self
     */
    public function setCustomerLossDescription(?string $customerLossDescription): self
    {
        $this->initialized['customerLossDescription'] = true;
        $this->customerLossDescription = $customerLossDescription;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerLossReasonId(): ?string
    {
        return $this->customerLossReasonId;
    }
    /**
     * 
     *
     * @param string|null $customerLossReasonId
     *
     * @return self
     */
    public function setCustomerLossReasonId(?string $customerLossReasonId): self
    {
        $this->initialized['customerLossReasonId'] = true;
        $this->customerLossReasonId = $customerLossReasonId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerNonStandardTaxId(): ?string
    {
        return $this->customerNonStandardTaxId;
    }
    /**
     * 
     *
     * @param string|null $customerNonStandardTaxId
     *
     * @return self
     */
    public function setCustomerNonStandardTaxId(?string $customerNonStandardTaxId): self
    {
        $this->initialized['customerNonStandardTaxId'] = true;
        $this->customerNonStandardTaxId = $customerNonStandardTaxId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerNumber(): ?string
    {
        return $this->customerNumber;
    }
    /**
     * 
     *
     * @param string|null $customerNumber
     *
     * @return self
     */
    public function setCustomerNumber(?string $customerNumber): self
    {
        $this->initialized['customerNumber'] = true;
        $this->customerNumber = $customerNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerNumberOld(): ?string
    {
        return $this->customerNumberOld;
    }
    /**
     * 
     *
     * @param string|null $customerNumberOld
     *
     * @return self
     */
    public function setCustomerNumberOld(?string $customerNumberOld): self
    {
        $this->initialized['customerNumberOld'] = true;
        $this->customerNumberOld = $customerNumberOld;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerPaymentMethodId(): ?string
    {
        return $this->customerPaymentMethodId;
    }
    /**
     * 
     *
     * @param string|null $customerPaymentMethodId
     *
     * @return self
     */
    public function setCustomerPaymentMethodId(?string $customerPaymentMethodId): self
    {
        $this->initialized['customerPaymentMethodId'] = true;
        $this->customerPaymentMethodId = $customerPaymentMethodId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerSalesChannel(): ?string
    {
        return $this->customerSalesChannel;
    }
    /**
     * 
     *
     * @param string|null $customerSalesChannel
     *
     * @return self
     */
    public function setCustomerSalesChannel(?string $customerSalesChannel): self
    {
        $this->initialized['customerSalesChannel'] = true;
        $this->customerSalesChannel = $customerSalesChannel;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerSalesOrderPaymentType(): ?string
    {
        return $this->customerSalesOrderPaymentType;
    }
    /**
     * 
     *
     * @param string|null $customerSalesOrderPaymentType
     *
     * @return self
     */
    public function setCustomerSalesOrderPaymentType(?string $customerSalesOrderPaymentType): self
    {
        $this->initialized['customerSalesOrderPaymentType'] = true;
        $this->customerSalesOrderPaymentType = $customerSalesOrderPaymentType;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCustomerSalesProbability(): ?int
    {
        return $this->customerSalesProbability;
    }
    /**
     * 
     *
     * @param int|null $customerSalesProbability
     *
     * @return self
     */
    public function setCustomerSalesProbability(?int $customerSalesProbability): self
    {
        $this->initialized['customerSalesProbability'] = true;
        $this->customerSalesProbability = $customerSalesProbability;
        return $this;
    }
    /**
     * 
     *
     * @return list<SalesStageHistory>|null
     */
    public function getCustomerSalesStageHistory(): ?array
    {
        return $this->customerSalesStageHistory;
    }
    /**
     * 
     *
     * @param list<SalesStageHistory>|null $customerSalesStageHistory
     *
     * @return self
     */
    public function setCustomerSalesStageHistory(?array $customerSalesStageHistory): self
    {
        $this->initialized['customerSalesStageHistory'] = true;
        $this->customerSalesStageHistory = $customerSalesStageHistory;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerSatisfaction(): ?string
    {
        return $this->customerSatisfaction;
    }
    /**
     * 
     *
     * @param string|null $customerSatisfaction
     *
     * @return self
     */
    public function setCustomerSatisfaction(?string $customerSatisfaction): self
    {
        $this->initialized['customerSatisfaction'] = true;
        $this->customerSatisfaction = $customerSatisfaction;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerShipmentMethodId(): ?string
    {
        return $this->customerShipmentMethodId;
    }
    /**
     * 
     *
     * @param string|null $customerShipmentMethodId
     *
     * @return self
     */
    public function setCustomerShipmentMethodId(?string $customerShipmentMethodId): self
    {
        $this->initialized['customerShipmentMethodId'] = true;
        $this->customerShipmentMethodId = $customerShipmentMethodId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerSupplierNumber(): ?string
    {
        return $this->customerSupplierNumber;
    }
    /**
     * 
     *
     * @param string|null $customerSupplierNumber
     *
     * @return self
     */
    public function setCustomerSupplierNumber(?string $customerSupplierNumber): self
    {
        $this->initialized['customerSupplierNumber'] = true;
        $this->customerSupplierNumber = $customerSupplierNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerTermOfPaymentId(): ?string
    {
        return $this->customerTermOfPaymentId;
    }
    /**
     * 
     *
     * @param string|null $customerTermOfPaymentId
     *
     * @return self
     */
    public function setCustomerTermOfPaymentId(?string $customerTermOfPaymentId): self
    {
        $this->initialized['customerTermOfPaymentId'] = true;
        $this->customerTermOfPaymentId = $customerTermOfPaymentId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCustomerUseCustomsTariffNumber(): ?bool
    {
        return $this->customerUseCustomsTariffNumber;
    }
    /**
     * 
     *
     * @param bool|null $customerUseCustomsTariffNumber
     *
     * @return self
     */
    public function setCustomerUseCustomsTariffNumber(?bool $customerUseCustomsTariffNumber): self
    {
        $this->initialized['customerUseCustomsTariffNumber'] = true;
        $this->customerUseCustomsTariffNumber = $customerUseCustomsTariffNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDeliveryEmailAddressesId(): ?string
    {
        return $this->deliveryEmailAddressesId;
    }
    /**
     * 
     *
     * @param string|null $deliveryEmailAddressesId
     *
     * @return self
     */
    public function setDeliveryEmailAddressesId(?string $deliveryEmailAddressesId): self
    {
        $this->initialized['deliveryEmailAddressesId'] = true;
        $this->deliveryEmailAddressesId = $deliveryEmailAddressesId;
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
    public function getDunningAddressId(): ?string
    {
        return $this->dunningAddressId;
    }
    /**
     * 
     *
     * @param string|null $dunningAddressId
     *
     * @return self
     */
    public function setDunningAddressId(?string $dunningAddressId): self
    {
        $this->initialized['dunningAddressId'] = true;
        $this->dunningAddressId = $dunningAddressId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDunningEmailAddressesId(): ?string
    {
        return $this->dunningEmailAddressesId;
    }
    /**
     * 
     *
     * @param string|null $dunningEmailAddressesId
     *
     * @return self
     */
    public function setDunningEmailAddressesId(?string $dunningEmailAddressesId): self
    {
        $this->initialized['dunningEmailAddressesId'] = true;
        $this->dunningEmailAddressesId = $dunningEmailAddressesId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getEnableDropshippingInNewSupplySources(): ?bool
    {
        return $this->enableDropshippingInNewSupplySources;
    }
    /**
     * 
     *
     * @param bool|null $enableDropshippingInNewSupplySources
     *
     * @return self
     */
    public function setEnableDropshippingInNewSupplySources(?bool $enableDropshippingInNewSupplySources): self
    {
        $this->initialized['enableDropshippingInNewSupplySources'] = true;
        $this->enableDropshippingInNewSupplySources = $enableDropshippingInNewSupplySources;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEoriNumber(): ?string
    {
        return $this->eoriNumber;
    }
    /**
     * 
     *
     * @param string|null $eoriNumber
     *
     * @return self
     */
    public function setEoriNumber(?string $eoriNumber): self
    {
        $this->initialized['eoriNumber'] = true;
        $this->eoriNumber = $eoriNumber;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getFactoring(): ?bool
    {
        return $this->factoring;
    }
    /**
     * 
     *
     * @param bool|null $factoring
     *
     * @return self
     */
    public function setFactoring(?bool $factoring): self
    {
        $this->initialized['factoring'] = true;
        $this->factoring = $factoring;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFixPhone2(): ?string
    {
        return $this->fixPhone2;
    }
    /**
     * 
     *
     * @param string|null $fixPhone2
     *
     * @return self
     */
    public function setFixPhone2(?string $fixPhone2): self
    {
        $this->initialized['fixPhone2'] = true;
        $this->fixPhone2 = $fixPhone2;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getFixedResponsibleUser(): ?bool
    {
        return $this->fixedResponsibleUser;
    }
    /**
     * 
     *
     * @param bool|null $fixedResponsibleUser
     *
     * @return self
     */
    public function setFixedResponsibleUser(?bool $fixedResponsibleUser): self
    {
        $this->initialized['fixedResponsibleUser'] = true;
        $this->fixedResponsibleUser = $fixedResponsibleUser;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getFormerSalesPartner(): ?bool
    {
        return $this->formerSalesPartner;
    }
    /**
     * 
     *
     * @param bool|null $formerSalesPartner
     *
     * @return self
     */
    public function setFormerSalesPartner(?bool $formerSalesPartner): self
    {
        $this->initialized['formerSalesPartner'] = true;
        $this->formerSalesPartner = $formerSalesPartner;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getHabitualExporter(): ?bool
    {
        return $this->habitualExporter;
    }
    /**
     * 
     *
     * @param bool|null $habitualExporter
     *
     * @return self
     */
    public function setHabitualExporter(?bool $habitualExporter): self
    {
        $this->initialized['habitualExporter'] = true;
        $this->habitualExporter = $habitualExporter;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getImageId(): ?string
    {
        return $this->imageId;
    }
    /**
     * 
     *
     * @param string|null $imageId
     *
     * @return self
     */
    public function setImageId(?string $imageId): self
    {
        $this->initialized['imageId'] = true;
        $this->imageId = $imageId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getInvoiceBlock(): ?bool
    {
        return $this->invoiceBlock;
    }
    /**
     * 
     *
     * @param bool|null $invoiceBlock
     *
     * @return self
     */
    public function setInvoiceBlock(?bool $invoiceBlock): self
    {
        $this->initialized['invoiceBlock'] = true;
        $this->invoiceBlock = $invoiceBlock;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInvoiceRecipientId(): ?string
    {
        return $this->invoiceRecipientId;
    }
    /**
     * 
     *
     * @param string|null $invoiceRecipientId
     *
     * @return self
     */
    public function setInvoiceRecipientId(?string $invoiceRecipientId): self
    {
        $this->initialized['invoiceRecipientId'] = true;
        $this->invoiceRecipientId = $invoiceRecipientId;
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
     * @return string|null
     */
    public function getLegalFormId(): ?string
    {
        return $this->legalFormId;
    }
    /**
     * 
     *
     * @param string|null $legalFormId
     *
     * @return self
     */
    public function setLegalFormId(?string $legalFormId): self
    {
        $this->initialized['legalFormId'] = true;
        $this->legalFormId = $legalFormId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMobilePhone2(): ?string
    {
        return $this->mobilePhone2;
    }
    /**
     * 
     *
     * @param string|null $mobilePhone2
     *
     * @return self
     */
    public function setMobilePhone2(?string $mobilePhone2): self
    {
        $this->initialized['mobilePhone2'] = true;
        $this->mobilePhone2 = $mobilePhone2;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getOptInEmail(): ?bool
    {
        return $this->optInEmail;
    }
    /**
     * 
     *
     * @param bool|null $optInEmail
     *
     * @return self
     */
    public function setOptInEmail(?bool $optInEmail): self
    {
        $this->initialized['optInEmail'] = true;
        $this->optInEmail = $optInEmail;
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
     * @return list<PartyEmailAddresses>|null
     */
    public function getPartyEmailAddresses(): ?array
    {
        return $this->partyEmailAddresses;
    }
    /**
     * 
     *
     * @param list<PartyEmailAddresses>|null $partyEmailAddresses
     *
     * @return self
     */
    public function setPartyEmailAddresses(?array $partyEmailAddresses): self
    {
        $this->initialized['partyEmailAddresses'] = true;
        $this->partyEmailAddresses = $partyEmailAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return list<PartyHabitualExporterLetterOfIntent>|null
     */
    public function getPartyHabitualExporterLettersOfIntent(): ?array
    {
        return $this->partyHabitualExporterLettersOfIntent;
    }
    /**
     * 
     *
     * @param list<PartyHabitualExporterLetterOfIntent>|null $partyHabitualExporterLettersOfIntent
     *
     * @return self
     */
    public function setPartyHabitualExporterLettersOfIntent(?array $partyHabitualExporterLettersOfIntent): self
    {
        $this->initialized['partyHabitualExporterLettersOfIntent'] = true;
        $this->partyHabitualExporterLettersOfIntent = $partyHabitualExporterLettersOfIntent;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPhoneHome(): ?string
    {
        return $this->phoneHome;
    }
    /**
     * 
     *
     * @param string|null $phoneHome
     *
     * @return self
     */
    public function setPhoneHome(?string $phoneHome): self
    {
        $this->initialized['phoneHome'] = true;
        $this->phoneHome = $phoneHome;
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
     * @return int|null
     */
    public function getPublicPageExpirationDate(): ?int
    {
        return $this->publicPageExpirationDate;
    }
    /**
     * 
     *
     * @param int|null $publicPageExpirationDate
     *
     * @return self
     */
    public function setPublicPageExpirationDate(?int $publicPageExpirationDate): self
    {
        $this->initialized['publicPageExpirationDate'] = true;
        $this->publicPageExpirationDate = $publicPageExpirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPublicPageUuid(): ?string
    {
        return $this->publicPageUuid;
    }
    /**
     * 
     *
     * @param string|null $publicPageUuid
     *
     * @return self
     */
    public function setPublicPageUuid(?string $publicPageUuid): self
    {
        $this->initialized['publicPageUuid'] = true;
        $this->publicPageUuid = $publicPageUuid;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPurchaseEmailAddressesId(): ?string
    {
        return $this->purchaseEmailAddressesId;
    }
    /**
     * 
     *
     * @param string|null $purchaseEmailAddressesId
     *
     * @return self
     */
    public function setPurchaseEmailAddressesId(?string $purchaseEmailAddressesId): self
    {
        $this->initialized['purchaseEmailAddressesId'] = true;
        $this->purchaseEmailAddressesId = $purchaseEmailAddressesId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getPurchaseViaPlafond(): ?bool
    {
        return $this->purchaseViaPlafond;
    }
    /**
     * 
     *
     * @param bool|null $purchaseViaPlafond
     *
     * @return self
     */
    public function setPurchaseViaPlafond(?bool $purchaseViaPlafond): self
    {
        $this->initialized['purchaseViaPlafond'] = true;
        $this->purchaseViaPlafond = $purchaseViaPlafond;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getQuotationEmailAddressesId(): ?string
    {
        return $this->quotationEmailAddressesId;
    }
    /**
     * 
     *
     * @param string|null $quotationEmailAddressesId
     *
     * @return self
     */
    public function setQuotationEmailAddressesId(?string $quotationEmailAddressesId): self
    {
        $this->initialized['quotationEmailAddressesId'] = true;
        $this->quotationEmailAddressesId = $quotationEmailAddressesId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRatingId(): ?string
    {
        return $this->ratingId;
    }
    /**
     * 
     *
     * @param string|null $ratingId
     *
     * @return self
     */
    public function setRatingId(?string $ratingId): self
    {
        $this->initialized['ratingId'] = true;
        $this->ratingId = $ratingId;
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
    public function getRegionId(): ?string
    {
        return $this->regionId;
    }
    /**
     * 
     *
     * @param string|null $regionId
     *
     * @return self
     */
    public function setRegionId(?string $regionId): self
    {
        $this->initialized['regionId'] = true;
        $this->regionId = $regionId;
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
     * @return string|null
     */
    public function getSalesInvoiceEmailAddressesId(): ?string
    {
        return $this->salesInvoiceEmailAddressesId;
    }
    /**
     * 
     *
     * @param string|null $salesInvoiceEmailAddressesId
     *
     * @return self
     */
    public function setSalesInvoiceEmailAddressesId(?string $salesInvoiceEmailAddressesId): self
    {
        $this->initialized['salesInvoiceEmailAddressesId'] = true;
        $this->salesInvoiceEmailAddressesId = $salesInvoiceEmailAddressesId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesOrderEmailAddressesId(): ?string
    {
        return $this->salesOrderEmailAddressesId;
    }
    /**
     * 
     *
     * @param string|null $salesOrderEmailAddressesId
     *
     * @return self
     */
    public function setSalesOrderEmailAddressesId(?string $salesOrderEmailAddressesId): self
    {
        $this->initialized['salesOrderEmailAddressesId'] = true;
        $this->salesOrderEmailAddressesId = $salesOrderEmailAddressesId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSalesPartner(): ?bool
    {
        return $this->salesPartner;
    }
    /**
     * 
     *
     * @param bool|null $salesPartner
     *
     * @return self
     */
    public function setSalesPartner(?bool $salesPartner): self
    {
        $this->initialized['salesPartner'] = true;
        $this->salesPartner = $salesPartner;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesPartnerDefaultCommissionFix(): ?string
    {
        return $this->salesPartnerDefaultCommissionFix;
    }
    /**
     * 
     *
     * @param string|null $salesPartnerDefaultCommissionFix
     *
     * @return self
     */
    public function setSalesPartnerDefaultCommissionFix(?string $salesPartnerDefaultCommissionFix): self
    {
        $this->initialized['salesPartnerDefaultCommissionFix'] = true;
        $this->salesPartnerDefaultCommissionFix = $salesPartnerDefaultCommissionFix;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesPartnerDefaultCommissionPercentage(): ?string
    {
        return $this->salesPartnerDefaultCommissionPercentage;
    }
    /**
     * 
     *
     * @param string|null $salesPartnerDefaultCommissionPercentage
     *
     * @return self
     */
    public function setSalesPartnerDefaultCommissionPercentage(?string $salesPartnerDefaultCommissionPercentage): self
    {
        $this->initialized['salesPartnerDefaultCommissionPercentage'] = true;
        $this->salesPartnerDefaultCommissionPercentage = $salesPartnerDefaultCommissionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesPartnerDefaultCommissionType(): ?string
    {
        return $this->salesPartnerDefaultCommissionType;
    }
    /**
     * 
     *
     * @param string|null $salesPartnerDefaultCommissionType
     *
     * @return self
     */
    public function setSalesPartnerDefaultCommissionType(?string $salesPartnerDefaultCommissionType): self
    {
        $this->initialized['salesPartnerDefaultCommissionType'] = true;
        $this->salesPartnerDefaultCommissionType = $salesPartnerDefaultCommissionType;
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
     * @return bool|null
     */
    public function getSupplier(): ?bool
    {
        return $this->supplier;
    }
    /**
     * 
     *
     * @param bool|null $supplier
     *
     * @return self
     */
    public function setSupplier(?bool $supplier): self
    {
        $this->initialized['supplier'] = true;
        $this->supplier = $supplier;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSupplierActive(): ?bool
    {
        return $this->supplierActive;
    }
    /**
     * 
     *
     * @param bool|null $supplierActive
     *
     * @return self
     */
    public function setSupplierActive(?bool $supplierActive): self
    {
        $this->initialized['supplierActive'] = true;
        $this->supplierActive = $supplierActive;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSupplierCreditorAccountId(): ?string
    {
        return $this->supplierCreditorAccountId;
    }
    /**
     * 
     *
     * @param string|null $supplierCreditorAccountId
     *
     * @return self
     */
    public function setSupplierCreditorAccountId(?string $supplierCreditorAccountId): self
    {
        $this->initialized['supplierCreditorAccountId'] = true;
        $this->supplierCreditorAccountId = $supplierCreditorAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSupplierCreditorAccountingCodeId(): ?string
    {
        return $this->supplierCreditorAccountingCodeId;
    }
    /**
     * 
     *
     * @param string|null $supplierCreditorAccountingCodeId
     *
     * @return self
     */
    public function setSupplierCreditorAccountingCodeId(?string $supplierCreditorAccountingCodeId): self
    {
        $this->initialized['supplierCreditorAccountingCodeId'] = true;
        $this->supplierCreditorAccountingCodeId = $supplierCreditorAccountingCodeId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSupplierCustomerNumberAtSupplier(): ?string
    {
        return $this->supplierCustomerNumberAtSupplier;
    }
    /**
     * 
     *
     * @param string|null $supplierCustomerNumberAtSupplier
     *
     * @return self
     */
    public function setSupplierCustomerNumberAtSupplier(?string $supplierCustomerNumberAtSupplier): self
    {
        $this->initialized['supplierCustomerNumberAtSupplier'] = true;
        $this->supplierCustomerNumberAtSupplier = $supplierCustomerNumberAtSupplier;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSupplierDefaultShippingCarrierId(): ?string
    {
        return $this->supplierDefaultShippingCarrierId;
    }
    /**
     * 
     *
     * @param string|null $supplierDefaultShippingCarrierId
     *
     * @return self
     */
    public function setSupplierDefaultShippingCarrierId(?string $supplierDefaultShippingCarrierId): self
    {
        $this->initialized['supplierDefaultShippingCarrierId'] = true;
        $this->supplierDefaultShippingCarrierId = $supplierDefaultShippingCarrierId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSupplierInternalNote(): ?string
    {
        return $this->supplierInternalNote;
    }
    /**
     * 
     *
     * @param string|null $supplierInternalNote
     *
     * @return self
     */
    public function setSupplierInternalNote(?string $supplierInternalNote): self
    {
        $this->initialized['supplierInternalNote'] = true;
        $this->supplierInternalNote = $supplierInternalNote;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSupplierMergeItemsForOcrInvoiceUpload(): ?bool
    {
        return $this->supplierMergeItemsForOcrInvoiceUpload;
    }
    /**
     * 
     *
     * @param bool|null $supplierMergeItemsForOcrInvoiceUpload
     *
     * @return self
     */
    public function setSupplierMergeItemsForOcrInvoiceUpload(?bool $supplierMergeItemsForOcrInvoiceUpload): self
    {
        $this->initialized['supplierMergeItemsForOcrInvoiceUpload'] = true;
        $this->supplierMergeItemsForOcrInvoiceUpload = $supplierMergeItemsForOcrInvoiceUpload;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSupplierMinimumPurchaseOrderAmount(): ?string
    {
        return $this->supplierMinimumPurchaseOrderAmount;
    }
    /**
     * 
     *
     * @param string|null $supplierMinimumPurchaseOrderAmount
     *
     * @return self
     */
    public function setSupplierMinimumPurchaseOrderAmount(?string $supplierMinimumPurchaseOrderAmount): self
    {
        $this->initialized['supplierMinimumPurchaseOrderAmount'] = true;
        $this->supplierMinimumPurchaseOrderAmount = $supplierMinimumPurchaseOrderAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSupplierNonStandardTaxId(): ?string
    {
        return $this->supplierNonStandardTaxId;
    }
    /**
     * 
     *
     * @param string|null $supplierNonStandardTaxId
     *
     * @return self
     */
    public function setSupplierNonStandardTaxId(?string $supplierNonStandardTaxId): self
    {
        $this->initialized['supplierNonStandardTaxId'] = true;
        $this->supplierNonStandardTaxId = $supplierNonStandardTaxId;
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
    public function getSupplierNumberOld(): ?string
    {
        return $this->supplierNumberOld;
    }
    /**
     * 
     *
     * @param string|null $supplierNumberOld
     *
     * @return self
     */
    public function setSupplierNumberOld(?string $supplierNumberOld): self
    {
        $this->initialized['supplierNumberOld'] = true;
        $this->supplierNumberOld = $supplierNumberOld;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSupplierOrderBlock(): ?bool
    {
        return $this->supplierOrderBlock;
    }
    /**
     * 
     *
     * @param bool|null $supplierOrderBlock
     *
     * @return self
     */
    public function setSupplierOrderBlock(?bool $supplierOrderBlock): self
    {
        $this->initialized['supplierOrderBlock'] = true;
        $this->supplierOrderBlock = $supplierOrderBlock;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSupplierPaymentMethodId(): ?string
    {
        return $this->supplierPaymentMethodId;
    }
    /**
     * 
     *
     * @param string|null $supplierPaymentMethodId
     *
     * @return self
     */
    public function setSupplierPaymentMethodId(?string $supplierPaymentMethodId): self
    {
        $this->initialized['supplierPaymentMethodId'] = true;
        $this->supplierPaymentMethodId = $supplierPaymentMethodId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSupplierShipmentMethodId(): ?string
    {
        return $this->supplierShipmentMethodId;
    }
    /**
     * 
     *
     * @param string|null $supplierShipmentMethodId
     *
     * @return self
     */
    public function setSupplierShipmentMethodId(?string $supplierShipmentMethodId): self
    {
        $this->initialized['supplierShipmentMethodId'] = true;
        $this->supplierShipmentMethodId = $supplierShipmentMethodId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSupplierTermOfPaymentId(): ?string
    {
        return $this->supplierTermOfPaymentId;
    }
    /**
     * 
     *
     * @param string|null $supplierTermOfPaymentId
     *
     * @return self
     */
    public function setSupplierTermOfPaymentId(?string $supplierTermOfPaymentId): self
    {
        $this->initialized['supplierTermOfPaymentId'] = true;
        $this->supplierTermOfPaymentId = $supplierTermOfPaymentId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTaxId(): ?string
    {
        return $this->taxId;
    }
    /**
     * 
     *
     * @param string|null $taxId
     *
     * @return self
     */
    public function setTaxId(?string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getTopics(): ?array
    {
        return $this->topics;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $topics
     *
     * @return self
     */
    public function setTopics(?array $topics): self
    {
        $this->initialized['topics'] = true;
        $this->topics = $topics;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVatIdentificationNumber(): ?string
    {
        return $this->vatIdentificationNumber;
    }
    /**
     * 
     *
     * @param string|null $vatIdentificationNumber
     *
     * @return self
     */
    public function setVatIdentificationNumber(?string $vatIdentificationNumber): self
    {
        $this->initialized['vatIdentificationNumber'] = true;
        $this->vatIdentificationNumber = $vatIdentificationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getXRechnungLeitwegId(): ?string
    {
        return $this->xRechnungLeitwegId;
    }
    /**
     * 
     *
     * @param string|null $xRechnungLeitwegId
     *
     * @return self
     */
    public function setXRechnungLeitwegId(?string $xRechnungLeitwegId): self
    {
        $this->initialized['xRechnungLeitwegId'] = true;
        $this->xRechnungLeitwegId = $xRechnungLeitwegId;
        return $this;
    }
}