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
     * @deprecated
     *
     * @var bool
     */
    protected $allowPurchaseOrderCreation;
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
    protected $commercialLanguageId;
    /**
     * 
     *
     * @var bool
     */
    protected $commissionBlock;
    /**
     * 
     *
     * @var list<CommissionSalesPartner>
     */
    protected $commissionSalesPartners;
    /**
     * 
     *
     * @var string
     */
    protected $companySizeId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $companySizeName;
    /**
     * 
     *
     * @var bool
     */
    protected $competitor;
    /**
     * 
     *
     * @var list<OnlyId>
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
     * @var bool
     */
    protected $customer;
    /**
     * 
     *
     * @var bool
     */
    protected $customerAllowDropshippingOrderCreation;
    /**
     * 
     *
     * @var string
     */
    protected $customerAmountInsured;
    /**
     * 
     *
     * @var string
     */
    protected $customerAnnualRevenue;
    /**
     * 
     *
     * @var string
     */
    protected $customerBlockNotice;
    /**
     * 
     *
     * @var bool
     */
    protected $customerBlocked;
    /**
     * 
     *
     * @var string
     */
    protected $customerBusinessType;
    /**
     * 
     *
     * @var string
     */
    protected $customerCategoryId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $customerCategoryName;
    /**
     * 
     *
     * @var string
     */
    protected $customerCreditLimit;
    /**
     * 
     *
     * @var string
     */
    protected $customerCurrentSalesStageId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $customerCurrentSalesStageName;
    /**
     * 
     *
     * @var string
     */
    protected $customerDebtorAccountId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $customerDebtorAccountNumber;
    /**
     * 
     *
     * @var string
     */
    protected $customerDebtorAccountingCodeId;
    /**
     * 
     *
     * @var string
     */
    protected $customerDefaultHeaderDiscount;
    /**
     * 
     *
     * @var string
     */
    protected $customerDefaultHeaderSurcharge;
    /**
     * 
     *
     * @var string
     */
    protected $customerDefaultShippingCarrierId;
    /**
     * 
     *
     * @var bool
     */
    protected $customerDeliveryBlock;
    /**
     * 
     *
     * @var bool
     */
    protected $customerInsolvent;
    /**
     * 
     *
     * @var bool
     */
    protected $customerInsured;
    /**
     * 
     *
     * @var string
     */
    protected $customerInternalNote;
    /**
     * 
     *
     * @var string
     */
    protected $customerLossDescription;
    /**
     * 
     *
     * @var string
     */
    protected $customerLossReasonId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $customerLossReasonName;
    /**
     * 
     *
     * @var string
     */
    protected $customerNonStandardTaxId;
    /**
     * 
     *
     * @var string
     */
    protected $customerNumber;
    /**
     * 
     *
     * @var string
     */
    protected $customerNumberOld;
    /**
     * 
     *
     * @var string
     */
    protected $customerPaymentMethodId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $customerPaymentMethodName;
    /**
     * 
     *
     * @var string
     */
    protected $customerSalesChannel;
    /**
     * 
     *
     * @var string
     */
    protected $customerSalesOrderPaymentType;
    /**
     * 
     *
     * @var int
     */
    protected $customerSalesProbability;
    /**
     * 
     *
     * @var list<SalesStageHistory>
     */
    protected $customerSalesStageHistory;
    /**
     * 
     *
     * @var string
     */
    protected $customerSatisfaction;
    /**
     * 
     *
     * @var string
     */
    protected $customerShipmentMethodId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $customerShipmentMethodName;
    /**
     * 
     *
     * @var string
     */
    protected $customerSupplierNumber;
    /**
     * 
     *
     * @var string
     */
    protected $customerTermOfPaymentId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $customerTermOfPaymentName;
    /**
     * 
     *
     * @var bool
     */
    protected $customerUseCustomsTariffNumber;
    /**
     * 
     *
     * @var string
     */
    protected $deliveryEmailAddressesId;
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
    protected $dunningAddressId;
    /**
     * 
     *
     * @var string
     */
    protected $dunningEmailAddressesId;
    /**
     * 
     *
     * @var bool
     */
    protected $enableDropshippingInNewSupplySources;
    /**
     * 
     *
     * @var string
     */
    protected $eoriNumber;
    /**
     * 
     *
     * @var bool
     */
    protected $factoring;
    /**
     * 
     *
     * @var string
     */
    protected $fixPhone2;
    /**
     * 
     *
     * @var bool
     */
    protected $fixedResponsibleUser;
    /**
     * 
     *
     * @var bool
     */
    protected $formerSalesPartner;
    /**
     * 
     *
     * @var bool
     */
    protected $habitualExporter;
    /**
     * 
     *
     * @var string
     */
    protected $imageId;
    /**
     * 
     *
     * @var bool
     */
    protected $invoiceBlock;
    /**
     * 
     *
     * @var string
     */
    protected $invoiceRecipientId;
    /**
     * 
     *
     * @var string
     */
    protected $leadRatingId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $leadRatingName;
    /**
     * 
     *
     * @var string
     */
    protected $leadSourceId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $leadSourceName;
    /**
     * 
     *
     * @var string
     */
    protected $leadStatus;
    /**
     * 
     *
     * @var string
     */
    protected $legalFormId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $legalFormName;
    /**
     * 
     *
     * @var string
     */
    protected $mobilePhone2;
    /**
     * 
     *
     * @var bool
     */
    protected $optInEmail;
    /**
     * 
     *
     * @var bool
     */
    protected $optInLetter;
    /**
     * 
     *
     * @var bool
     */
    protected $optInPhone;
    /**
     * 
     *
     * @var bool
     */
    protected $optInSms;
    /**
     * 
     *
     * @var string
     */
    protected $parentPartyId;
    /**
     * 
     *
     * @var list<PartyEmailAddresses>
     */
    protected $partyEmailAddresses;
    /**
     * 
     *
     * @var list<PartyHabitualExporterLetterOfIntent>
     */
    protected $partyHabitualExporterLettersOfIntent;
    /**
     * 
     *
     * @var string
     */
    protected $phoneHome;
    /**
     * 
     *
     * @var string
     */
    protected $primaryContactId;
    /**
     * 
     *
     * @var int
     */
    protected $publicPageExpirationDate;
    /**
     * 
     *
     * @var string
     */
    protected $publicPageUuid;
    /**
     * 
     *
     * @var string
     */
    protected $purchaseEmailAddressesId;
    /**
     * 
     *
     * @var bool
     */
    protected $purchaseViaPlafond;
    /**
     * 
     *
     * @var string
     */
    protected $quotationEmailAddressesId;
    /**
     * 
     *
     * @var string
     */
    protected $ratingId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $ratingName;
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
    protected $regionId;
    /**
     * 
     *
     * @var string
     */
    protected $responsibleUserId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $responsibleUserUsername;
    /**
     * 
     *
     * @var string
     */
    protected $salesInvoiceEmailAddressesId;
    /**
     * 
     *
     * @var string
     */
    protected $salesOrderEmailAddressesId;
    /**
     * 
     *
     * @var bool
     */
    protected $salesPartner;
    /**
     * 
     *
     * @var string
     */
    protected $salesPartnerDefaultCommissionFix;
    /**
     * 
     *
     * @var string
     */
    protected $salesPartnerDefaultCommissionPercentage;
    /**
     * 
     *
     * @var string
     */
    protected $salesPartnerDefaultCommissionType;
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
     * @var bool
     */
    protected $supplier;
    /**
     * 
     *
     * @var string
     */
    protected $supplierCreditorAccountId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $supplierCreditorAccountNumber;
    /**
     * 
     *
     * @var string
     */
    protected $supplierCreditorAccountingCodeId;
    /**
     * 
     *
     * @var string
     */
    protected $supplierCustomerNumberAtSupplier;
    /**
     * 
     *
     * @var string
     */
    protected $supplierDefaultShippingCarrierId;
    /**
     * 
     *
     * @var string
     */
    protected $supplierInternalNote;
    /**
     * 
     *
     * @var string
     */
    protected $supplierMinimumPurchaseOrderAmount;
    /**
     * 
     *
     * @var string
     */
    protected $supplierNonStandardTaxId;
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
    protected $supplierNumberOld;
    /**
     * 
     *
     * @var bool
     */
    protected $supplierOrderBlock;
    /**
     * 
     *
     * @var string
     */
    protected $supplierPaymentMethodId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $supplierPaymentMethodName;
    /**
     * 
     *
     * @var string
     */
    protected $supplierShipmentMethodId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $supplierShipmentMethodName;
    /**
     * 
     *
     * @var string
     */
    protected $supplierTermOfPaymentId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $supplierTermOfPaymentName;
    /**
     * 
     *
     * @var string
     */
    protected $taxId;
    /**
     * 
     *
     * @deprecated
     *
     * @var list<Entity>
     */
    protected $topics;
    /**
     * 
     *
     * @var string
     */
    protected $vatIdentificationNumber;
    /**
     * 
     *
     * @var string
     */
    protected $xRechnungLeitwegId;
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
     * @deprecated
     *
     * @return bool
     */
    public function getAllowPurchaseOrderCreation(): bool
    {
        return $this->allowPurchaseOrderCreation;
    }
    /**
     * 
     *
     * @param bool $allowPurchaseOrderCreation
     *
     * @deprecated
     *
     * @return self
     */
    public function setAllowPurchaseOrderCreation(bool $allowPurchaseOrderCreation): self
    {
        $this->initialized['allowPurchaseOrderCreation'] = true;
        $this->allowPurchaseOrderCreation = $allowPurchaseOrderCreation;
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
     * @return bool
     */
    public function getCommissionBlock(): bool
    {
        return $this->commissionBlock;
    }
    /**
     * 
     *
     * @param bool $commissionBlock
     *
     * @return self
     */
    public function setCommissionBlock(bool $commissionBlock): self
    {
        $this->initialized['commissionBlock'] = true;
        $this->commissionBlock = $commissionBlock;
        return $this;
    }
    /**
     * 
     *
     * @return list<CommissionSalesPartner>
     */
    public function getCommissionSalesPartners(): array
    {
        return $this->commissionSalesPartners;
    }
    /**
     * 
     *
     * @param list<CommissionSalesPartner> $commissionSalesPartners
     *
     * @return self
     */
    public function setCommissionSalesPartners(array $commissionSalesPartners): self
    {
        $this->initialized['commissionSalesPartners'] = true;
        $this->commissionSalesPartners = $commissionSalesPartners;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompanySizeId(): string
    {
        return $this->companySizeId;
    }
    /**
     * 
     *
     * @param string $companySizeId
     *
     * @return self
     */
    public function setCompanySizeId(string $companySizeId): self
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
     * @return string
     */
    public function getCompanySizeName(): string
    {
        return $this->companySizeName;
    }
    /**
     * 
     *
     * @param string $companySizeName
     *
     * @deprecated
     *
     * @return self
     */
    public function setCompanySizeName(string $companySizeName): self
    {
        $this->initialized['companySizeName'] = true;
        $this->companySizeName = $companySizeName;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCompetitor(): bool
    {
        return $this->competitor;
    }
    /**
     * 
     *
     * @param bool $competitor
     *
     * @return self
     */
    public function setCompetitor(bool $competitor): self
    {
        $this->initialized['competitor'] = true;
        $this->competitor = $competitor;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>
     */
    public function getContacts(): array
    {
        return $this->contacts;
    }
    /**
     * 
     *
     * @param list<OnlyId> $contacts
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
     * @return bool
     */
    public function getCustomer(): bool
    {
        return $this->customer;
    }
    /**
     * 
     *
     * @param bool $customer
     *
     * @return self
     */
    public function setCustomer(bool $customer): self
    {
        $this->initialized['customer'] = true;
        $this->customer = $customer;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCustomerAllowDropshippingOrderCreation(): bool
    {
        return $this->customerAllowDropshippingOrderCreation;
    }
    /**
     * 
     *
     * @param bool $customerAllowDropshippingOrderCreation
     *
     * @return self
     */
    public function setCustomerAllowDropshippingOrderCreation(bool $customerAllowDropshippingOrderCreation): self
    {
        $this->initialized['customerAllowDropshippingOrderCreation'] = true;
        $this->customerAllowDropshippingOrderCreation = $customerAllowDropshippingOrderCreation;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerAmountInsured(): string
    {
        return $this->customerAmountInsured;
    }
    /**
     * 
     *
     * @param string $customerAmountInsured
     *
     * @return self
     */
    public function setCustomerAmountInsured(string $customerAmountInsured): self
    {
        $this->initialized['customerAmountInsured'] = true;
        $this->customerAmountInsured = $customerAmountInsured;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerAnnualRevenue(): string
    {
        return $this->customerAnnualRevenue;
    }
    /**
     * 
     *
     * @param string $customerAnnualRevenue
     *
     * @return self
     */
    public function setCustomerAnnualRevenue(string $customerAnnualRevenue): self
    {
        $this->initialized['customerAnnualRevenue'] = true;
        $this->customerAnnualRevenue = $customerAnnualRevenue;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerBlockNotice(): string
    {
        return $this->customerBlockNotice;
    }
    /**
     * 
     *
     * @param string $customerBlockNotice
     *
     * @return self
     */
    public function setCustomerBlockNotice(string $customerBlockNotice): self
    {
        $this->initialized['customerBlockNotice'] = true;
        $this->customerBlockNotice = $customerBlockNotice;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCustomerBlocked(): bool
    {
        return $this->customerBlocked;
    }
    /**
     * 
     *
     * @param bool $customerBlocked
     *
     * @return self
     */
    public function setCustomerBlocked(bool $customerBlocked): self
    {
        $this->initialized['customerBlocked'] = true;
        $this->customerBlocked = $customerBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerBusinessType(): string
    {
        return $this->customerBusinessType;
    }
    /**
     * 
     *
     * @param string $customerBusinessType
     *
     * @return self
     */
    public function setCustomerBusinessType(string $customerBusinessType): self
    {
        $this->initialized['customerBusinessType'] = true;
        $this->customerBusinessType = $customerBusinessType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerCategoryId(): string
    {
        return $this->customerCategoryId;
    }
    /**
     * 
     *
     * @param string $customerCategoryId
     *
     * @return self
     */
    public function setCustomerCategoryId(string $customerCategoryId): self
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
     * @return string
     */
    public function getCustomerCategoryName(): string
    {
        return $this->customerCategoryName;
    }
    /**
     * 
     *
     * @param string $customerCategoryName
     *
     * @deprecated
     *
     * @return self
     */
    public function setCustomerCategoryName(string $customerCategoryName): self
    {
        $this->initialized['customerCategoryName'] = true;
        $this->customerCategoryName = $customerCategoryName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerCreditLimit(): string
    {
        return $this->customerCreditLimit;
    }
    /**
     * 
     *
     * @param string $customerCreditLimit
     *
     * @return self
     */
    public function setCustomerCreditLimit(string $customerCreditLimit): self
    {
        $this->initialized['customerCreditLimit'] = true;
        $this->customerCreditLimit = $customerCreditLimit;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerCurrentSalesStageId(): string
    {
        return $this->customerCurrentSalesStageId;
    }
    /**
     * 
     *
     * @param string $customerCurrentSalesStageId
     *
     * @return self
     */
    public function setCustomerCurrentSalesStageId(string $customerCurrentSalesStageId): self
    {
        $this->initialized['customerCurrentSalesStageId'] = true;
        $this->customerCurrentSalesStageId = $customerCurrentSalesStageId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getCustomerCurrentSalesStageName(): string
    {
        return $this->customerCurrentSalesStageName;
    }
    /**
     * 
     *
     * @param string $customerCurrentSalesStageName
     *
     * @deprecated
     *
     * @return self
     */
    public function setCustomerCurrentSalesStageName(string $customerCurrentSalesStageName): self
    {
        $this->initialized['customerCurrentSalesStageName'] = true;
        $this->customerCurrentSalesStageName = $customerCurrentSalesStageName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerDebtorAccountId(): string
    {
        return $this->customerDebtorAccountId;
    }
    /**
     * 
     *
     * @param string $customerDebtorAccountId
     *
     * @return self
     */
    public function setCustomerDebtorAccountId(string $customerDebtorAccountId): self
    {
        $this->initialized['customerDebtorAccountId'] = true;
        $this->customerDebtorAccountId = $customerDebtorAccountId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getCustomerDebtorAccountNumber(): string
    {
        return $this->customerDebtorAccountNumber;
    }
    /**
     * 
     *
     * @param string $customerDebtorAccountNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setCustomerDebtorAccountNumber(string $customerDebtorAccountNumber): self
    {
        $this->initialized['customerDebtorAccountNumber'] = true;
        $this->customerDebtorAccountNumber = $customerDebtorAccountNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerDebtorAccountingCodeId(): string
    {
        return $this->customerDebtorAccountingCodeId;
    }
    /**
     * 
     *
     * @param string $customerDebtorAccountingCodeId
     *
     * @return self
     */
    public function setCustomerDebtorAccountingCodeId(string $customerDebtorAccountingCodeId): self
    {
        $this->initialized['customerDebtorAccountingCodeId'] = true;
        $this->customerDebtorAccountingCodeId = $customerDebtorAccountingCodeId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerDefaultHeaderDiscount(): string
    {
        return $this->customerDefaultHeaderDiscount;
    }
    /**
     * 
     *
     * @param string $customerDefaultHeaderDiscount
     *
     * @return self
     */
    public function setCustomerDefaultHeaderDiscount(string $customerDefaultHeaderDiscount): self
    {
        $this->initialized['customerDefaultHeaderDiscount'] = true;
        $this->customerDefaultHeaderDiscount = $customerDefaultHeaderDiscount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerDefaultHeaderSurcharge(): string
    {
        return $this->customerDefaultHeaderSurcharge;
    }
    /**
     * 
     *
     * @param string $customerDefaultHeaderSurcharge
     *
     * @return self
     */
    public function setCustomerDefaultHeaderSurcharge(string $customerDefaultHeaderSurcharge): self
    {
        $this->initialized['customerDefaultHeaderSurcharge'] = true;
        $this->customerDefaultHeaderSurcharge = $customerDefaultHeaderSurcharge;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerDefaultShippingCarrierId(): string
    {
        return $this->customerDefaultShippingCarrierId;
    }
    /**
     * 
     *
     * @param string $customerDefaultShippingCarrierId
     *
     * @return self
     */
    public function setCustomerDefaultShippingCarrierId(string $customerDefaultShippingCarrierId): self
    {
        $this->initialized['customerDefaultShippingCarrierId'] = true;
        $this->customerDefaultShippingCarrierId = $customerDefaultShippingCarrierId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCustomerDeliveryBlock(): bool
    {
        return $this->customerDeliveryBlock;
    }
    /**
     * 
     *
     * @param bool $customerDeliveryBlock
     *
     * @return self
     */
    public function setCustomerDeliveryBlock(bool $customerDeliveryBlock): self
    {
        $this->initialized['customerDeliveryBlock'] = true;
        $this->customerDeliveryBlock = $customerDeliveryBlock;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCustomerInsolvent(): bool
    {
        return $this->customerInsolvent;
    }
    /**
     * 
     *
     * @param bool $customerInsolvent
     *
     * @return self
     */
    public function setCustomerInsolvent(bool $customerInsolvent): self
    {
        $this->initialized['customerInsolvent'] = true;
        $this->customerInsolvent = $customerInsolvent;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCustomerInsured(): bool
    {
        return $this->customerInsured;
    }
    /**
     * 
     *
     * @param bool $customerInsured
     *
     * @return self
     */
    public function setCustomerInsured(bool $customerInsured): self
    {
        $this->initialized['customerInsured'] = true;
        $this->customerInsured = $customerInsured;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerInternalNote(): string
    {
        return $this->customerInternalNote;
    }
    /**
     * 
     *
     * @param string $customerInternalNote
     *
     * @return self
     */
    public function setCustomerInternalNote(string $customerInternalNote): self
    {
        $this->initialized['customerInternalNote'] = true;
        $this->customerInternalNote = $customerInternalNote;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerLossDescription(): string
    {
        return $this->customerLossDescription;
    }
    /**
     * 
     *
     * @param string $customerLossDescription
     *
     * @return self
     */
    public function setCustomerLossDescription(string $customerLossDescription): self
    {
        $this->initialized['customerLossDescription'] = true;
        $this->customerLossDescription = $customerLossDescription;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerLossReasonId(): string
    {
        return $this->customerLossReasonId;
    }
    /**
     * 
     *
     * @param string $customerLossReasonId
     *
     * @return self
     */
    public function setCustomerLossReasonId(string $customerLossReasonId): self
    {
        $this->initialized['customerLossReasonId'] = true;
        $this->customerLossReasonId = $customerLossReasonId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getCustomerLossReasonName(): string
    {
        return $this->customerLossReasonName;
    }
    /**
     * 
     *
     * @param string $customerLossReasonName
     *
     * @deprecated
     *
     * @return self
     */
    public function setCustomerLossReasonName(string $customerLossReasonName): self
    {
        $this->initialized['customerLossReasonName'] = true;
        $this->customerLossReasonName = $customerLossReasonName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerNonStandardTaxId(): string
    {
        return $this->customerNonStandardTaxId;
    }
    /**
     * 
     *
     * @param string $customerNonStandardTaxId
     *
     * @return self
     */
    public function setCustomerNonStandardTaxId(string $customerNonStandardTaxId): self
    {
        $this->initialized['customerNonStandardTaxId'] = true;
        $this->customerNonStandardTaxId = $customerNonStandardTaxId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerNumber(): string
    {
        return $this->customerNumber;
    }
    /**
     * 
     *
     * @param string $customerNumber
     *
     * @return self
     */
    public function setCustomerNumber(string $customerNumber): self
    {
        $this->initialized['customerNumber'] = true;
        $this->customerNumber = $customerNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerNumberOld(): string
    {
        return $this->customerNumberOld;
    }
    /**
     * 
     *
     * @param string $customerNumberOld
     *
     * @return self
     */
    public function setCustomerNumberOld(string $customerNumberOld): self
    {
        $this->initialized['customerNumberOld'] = true;
        $this->customerNumberOld = $customerNumberOld;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerPaymentMethodId(): string
    {
        return $this->customerPaymentMethodId;
    }
    /**
     * 
     *
     * @param string $customerPaymentMethodId
     *
     * @return self
     */
    public function setCustomerPaymentMethodId(string $customerPaymentMethodId): self
    {
        $this->initialized['customerPaymentMethodId'] = true;
        $this->customerPaymentMethodId = $customerPaymentMethodId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getCustomerPaymentMethodName(): string
    {
        return $this->customerPaymentMethodName;
    }
    /**
     * 
     *
     * @param string $customerPaymentMethodName
     *
     * @deprecated
     *
     * @return self
     */
    public function setCustomerPaymentMethodName(string $customerPaymentMethodName): self
    {
        $this->initialized['customerPaymentMethodName'] = true;
        $this->customerPaymentMethodName = $customerPaymentMethodName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerSalesChannel(): string
    {
        return $this->customerSalesChannel;
    }
    /**
     * 
     *
     * @param string $customerSalesChannel
     *
     * @return self
     */
    public function setCustomerSalesChannel(string $customerSalesChannel): self
    {
        $this->initialized['customerSalesChannel'] = true;
        $this->customerSalesChannel = $customerSalesChannel;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerSalesOrderPaymentType(): string
    {
        return $this->customerSalesOrderPaymentType;
    }
    /**
     * 
     *
     * @param string $customerSalesOrderPaymentType
     *
     * @return self
     */
    public function setCustomerSalesOrderPaymentType(string $customerSalesOrderPaymentType): self
    {
        $this->initialized['customerSalesOrderPaymentType'] = true;
        $this->customerSalesOrderPaymentType = $customerSalesOrderPaymentType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCustomerSalesProbability(): int
    {
        return $this->customerSalesProbability;
    }
    /**
     * 
     *
     * @param int $customerSalesProbability
     *
     * @return self
     */
    public function setCustomerSalesProbability(int $customerSalesProbability): self
    {
        $this->initialized['customerSalesProbability'] = true;
        $this->customerSalesProbability = $customerSalesProbability;
        return $this;
    }
    /**
     * 
     *
     * @return list<SalesStageHistory>
     */
    public function getCustomerSalesStageHistory(): array
    {
        return $this->customerSalesStageHistory;
    }
    /**
     * 
     *
     * @param list<SalesStageHistory> $customerSalesStageHistory
     *
     * @return self
     */
    public function setCustomerSalesStageHistory(array $customerSalesStageHistory): self
    {
        $this->initialized['customerSalesStageHistory'] = true;
        $this->customerSalesStageHistory = $customerSalesStageHistory;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerSatisfaction(): string
    {
        return $this->customerSatisfaction;
    }
    /**
     * 
     *
     * @param string $customerSatisfaction
     *
     * @return self
     */
    public function setCustomerSatisfaction(string $customerSatisfaction): self
    {
        $this->initialized['customerSatisfaction'] = true;
        $this->customerSatisfaction = $customerSatisfaction;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerShipmentMethodId(): string
    {
        return $this->customerShipmentMethodId;
    }
    /**
     * 
     *
     * @param string $customerShipmentMethodId
     *
     * @return self
     */
    public function setCustomerShipmentMethodId(string $customerShipmentMethodId): self
    {
        $this->initialized['customerShipmentMethodId'] = true;
        $this->customerShipmentMethodId = $customerShipmentMethodId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getCustomerShipmentMethodName(): string
    {
        return $this->customerShipmentMethodName;
    }
    /**
     * 
     *
     * @param string $customerShipmentMethodName
     *
     * @deprecated
     *
     * @return self
     */
    public function setCustomerShipmentMethodName(string $customerShipmentMethodName): self
    {
        $this->initialized['customerShipmentMethodName'] = true;
        $this->customerShipmentMethodName = $customerShipmentMethodName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerSupplierNumber(): string
    {
        return $this->customerSupplierNumber;
    }
    /**
     * 
     *
     * @param string $customerSupplierNumber
     *
     * @return self
     */
    public function setCustomerSupplierNumber(string $customerSupplierNumber): self
    {
        $this->initialized['customerSupplierNumber'] = true;
        $this->customerSupplierNumber = $customerSupplierNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerTermOfPaymentId(): string
    {
        return $this->customerTermOfPaymentId;
    }
    /**
     * 
     *
     * @param string $customerTermOfPaymentId
     *
     * @return self
     */
    public function setCustomerTermOfPaymentId(string $customerTermOfPaymentId): self
    {
        $this->initialized['customerTermOfPaymentId'] = true;
        $this->customerTermOfPaymentId = $customerTermOfPaymentId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getCustomerTermOfPaymentName(): string
    {
        return $this->customerTermOfPaymentName;
    }
    /**
     * 
     *
     * @param string $customerTermOfPaymentName
     *
     * @deprecated
     *
     * @return self
     */
    public function setCustomerTermOfPaymentName(string $customerTermOfPaymentName): self
    {
        $this->initialized['customerTermOfPaymentName'] = true;
        $this->customerTermOfPaymentName = $customerTermOfPaymentName;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCustomerUseCustomsTariffNumber(): bool
    {
        return $this->customerUseCustomsTariffNumber;
    }
    /**
     * 
     *
     * @param bool $customerUseCustomsTariffNumber
     *
     * @return self
     */
    public function setCustomerUseCustomsTariffNumber(bool $customerUseCustomsTariffNumber): self
    {
        $this->initialized['customerUseCustomsTariffNumber'] = true;
        $this->customerUseCustomsTariffNumber = $customerUseCustomsTariffNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeliveryEmailAddressesId(): string
    {
        return $this->deliveryEmailAddressesId;
    }
    /**
     * 
     *
     * @param string $deliveryEmailAddressesId
     *
     * @return self
     */
    public function setDeliveryEmailAddressesId(string $deliveryEmailAddressesId): self
    {
        $this->initialized['deliveryEmailAddressesId'] = true;
        $this->deliveryEmailAddressesId = $deliveryEmailAddressesId;
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
    public function getDunningAddressId(): string
    {
        return $this->dunningAddressId;
    }
    /**
     * 
     *
     * @param string $dunningAddressId
     *
     * @return self
     */
    public function setDunningAddressId(string $dunningAddressId): self
    {
        $this->initialized['dunningAddressId'] = true;
        $this->dunningAddressId = $dunningAddressId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDunningEmailAddressesId(): string
    {
        return $this->dunningEmailAddressesId;
    }
    /**
     * 
     *
     * @param string $dunningEmailAddressesId
     *
     * @return self
     */
    public function setDunningEmailAddressesId(string $dunningEmailAddressesId): self
    {
        $this->initialized['dunningEmailAddressesId'] = true;
        $this->dunningEmailAddressesId = $dunningEmailAddressesId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEnableDropshippingInNewSupplySources(): bool
    {
        return $this->enableDropshippingInNewSupplySources;
    }
    /**
     * 
     *
     * @param bool $enableDropshippingInNewSupplySources
     *
     * @return self
     */
    public function setEnableDropshippingInNewSupplySources(bool $enableDropshippingInNewSupplySources): self
    {
        $this->initialized['enableDropshippingInNewSupplySources'] = true;
        $this->enableDropshippingInNewSupplySources = $enableDropshippingInNewSupplySources;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEoriNumber(): string
    {
        return $this->eoriNumber;
    }
    /**
     * 
     *
     * @param string $eoriNumber
     *
     * @return self
     */
    public function setEoriNumber(string $eoriNumber): self
    {
        $this->initialized['eoriNumber'] = true;
        $this->eoriNumber = $eoriNumber;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFactoring(): bool
    {
        return $this->factoring;
    }
    /**
     * 
     *
     * @param bool $factoring
     *
     * @return self
     */
    public function setFactoring(bool $factoring): self
    {
        $this->initialized['factoring'] = true;
        $this->factoring = $factoring;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFixPhone2(): string
    {
        return $this->fixPhone2;
    }
    /**
     * 
     *
     * @param string $fixPhone2
     *
     * @return self
     */
    public function setFixPhone2(string $fixPhone2): self
    {
        $this->initialized['fixPhone2'] = true;
        $this->fixPhone2 = $fixPhone2;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFixedResponsibleUser(): bool
    {
        return $this->fixedResponsibleUser;
    }
    /**
     * 
     *
     * @param bool $fixedResponsibleUser
     *
     * @return self
     */
    public function setFixedResponsibleUser(bool $fixedResponsibleUser): self
    {
        $this->initialized['fixedResponsibleUser'] = true;
        $this->fixedResponsibleUser = $fixedResponsibleUser;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFormerSalesPartner(): bool
    {
        return $this->formerSalesPartner;
    }
    /**
     * 
     *
     * @param bool $formerSalesPartner
     *
     * @return self
     */
    public function setFormerSalesPartner(bool $formerSalesPartner): self
    {
        $this->initialized['formerSalesPartner'] = true;
        $this->formerSalesPartner = $formerSalesPartner;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHabitualExporter(): bool
    {
        return $this->habitualExporter;
    }
    /**
     * 
     *
     * @param bool $habitualExporter
     *
     * @return self
     */
    public function setHabitualExporter(bool $habitualExporter): self
    {
        $this->initialized['habitualExporter'] = true;
        $this->habitualExporter = $habitualExporter;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImageId(): string
    {
        return $this->imageId;
    }
    /**
     * 
     *
     * @param string $imageId
     *
     * @return self
     */
    public function setImageId(string $imageId): self
    {
        $this->initialized['imageId'] = true;
        $this->imageId = $imageId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getInvoiceBlock(): bool
    {
        return $this->invoiceBlock;
    }
    /**
     * 
     *
     * @param bool $invoiceBlock
     *
     * @return self
     */
    public function setInvoiceBlock(bool $invoiceBlock): self
    {
        $this->initialized['invoiceBlock'] = true;
        $this->invoiceBlock = $invoiceBlock;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInvoiceRecipientId(): string
    {
        return $this->invoiceRecipientId;
    }
    /**
     * 
     *
     * @param string $invoiceRecipientId
     *
     * @return self
     */
    public function setInvoiceRecipientId(string $invoiceRecipientId): self
    {
        $this->initialized['invoiceRecipientId'] = true;
        $this->invoiceRecipientId = $invoiceRecipientId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLeadRatingId(): string
    {
        return $this->leadRatingId;
    }
    /**
     * 
     *
     * @param string $leadRatingId
     *
     * @return self
     */
    public function setLeadRatingId(string $leadRatingId): self
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
     * @return string
     */
    public function getLeadRatingName(): string
    {
        return $this->leadRatingName;
    }
    /**
     * 
     *
     * @param string $leadRatingName
     *
     * @deprecated
     *
     * @return self
     */
    public function setLeadRatingName(string $leadRatingName): self
    {
        $this->initialized['leadRatingName'] = true;
        $this->leadRatingName = $leadRatingName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLeadSourceId(): string
    {
        return $this->leadSourceId;
    }
    /**
     * 
     *
     * @param string $leadSourceId
     *
     * @return self
     */
    public function setLeadSourceId(string $leadSourceId): self
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
     * @return string
     */
    public function getLeadSourceName(): string
    {
        return $this->leadSourceName;
    }
    /**
     * 
     *
     * @param string $leadSourceName
     *
     * @deprecated
     *
     * @return self
     */
    public function setLeadSourceName(string $leadSourceName): self
    {
        $this->initialized['leadSourceName'] = true;
        $this->leadSourceName = $leadSourceName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLeadStatus(): string
    {
        return $this->leadStatus;
    }
    /**
     * 
     *
     * @param string $leadStatus
     *
     * @return self
     */
    public function setLeadStatus(string $leadStatus): self
    {
        $this->initialized['leadStatus'] = true;
        $this->leadStatus = $leadStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLegalFormId(): string
    {
        return $this->legalFormId;
    }
    /**
     * 
     *
     * @param string $legalFormId
     *
     * @return self
     */
    public function setLegalFormId(string $legalFormId): self
    {
        $this->initialized['legalFormId'] = true;
        $this->legalFormId = $legalFormId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getLegalFormName(): string
    {
        return $this->legalFormName;
    }
    /**
     * 
     *
     * @param string $legalFormName
     *
     * @deprecated
     *
     * @return self
     */
    public function setLegalFormName(string $legalFormName): self
    {
        $this->initialized['legalFormName'] = true;
        $this->legalFormName = $legalFormName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMobilePhone2(): string
    {
        return $this->mobilePhone2;
    }
    /**
     * 
     *
     * @param string $mobilePhone2
     *
     * @return self
     */
    public function setMobilePhone2(string $mobilePhone2): self
    {
        $this->initialized['mobilePhone2'] = true;
        $this->mobilePhone2 = $mobilePhone2;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOptInEmail(): bool
    {
        return $this->optInEmail;
    }
    /**
     * 
     *
     * @param bool $optInEmail
     *
     * @return self
     */
    public function setOptInEmail(bool $optInEmail): self
    {
        $this->initialized['optInEmail'] = true;
        $this->optInEmail = $optInEmail;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOptInLetter(): bool
    {
        return $this->optInLetter;
    }
    /**
     * 
     *
     * @param bool $optInLetter
     *
     * @return self
     */
    public function setOptInLetter(bool $optInLetter): self
    {
        $this->initialized['optInLetter'] = true;
        $this->optInLetter = $optInLetter;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOptInPhone(): bool
    {
        return $this->optInPhone;
    }
    /**
     * 
     *
     * @param bool $optInPhone
     *
     * @return self
     */
    public function setOptInPhone(bool $optInPhone): self
    {
        $this->initialized['optInPhone'] = true;
        $this->optInPhone = $optInPhone;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOptInSms(): bool
    {
        return $this->optInSms;
    }
    /**
     * 
     *
     * @param bool $optInSms
     *
     * @return self
     */
    public function setOptInSms(bool $optInSms): self
    {
        $this->initialized['optInSms'] = true;
        $this->optInSms = $optInSms;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getParentPartyId(): string
    {
        return $this->parentPartyId;
    }
    /**
     * 
     *
     * @param string $parentPartyId
     *
     * @return self
     */
    public function setParentPartyId(string $parentPartyId): self
    {
        $this->initialized['parentPartyId'] = true;
        $this->parentPartyId = $parentPartyId;
        return $this;
    }
    /**
     * 
     *
     * @return list<PartyEmailAddresses>
     */
    public function getPartyEmailAddresses(): array
    {
        return $this->partyEmailAddresses;
    }
    /**
     * 
     *
     * @param list<PartyEmailAddresses> $partyEmailAddresses
     *
     * @return self
     */
    public function setPartyEmailAddresses(array $partyEmailAddresses): self
    {
        $this->initialized['partyEmailAddresses'] = true;
        $this->partyEmailAddresses = $partyEmailAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return list<PartyHabitualExporterLetterOfIntent>
     */
    public function getPartyHabitualExporterLettersOfIntent(): array
    {
        return $this->partyHabitualExporterLettersOfIntent;
    }
    /**
     * 
     *
     * @param list<PartyHabitualExporterLetterOfIntent> $partyHabitualExporterLettersOfIntent
     *
     * @return self
     */
    public function setPartyHabitualExporterLettersOfIntent(array $partyHabitualExporterLettersOfIntent): self
    {
        $this->initialized['partyHabitualExporterLettersOfIntent'] = true;
        $this->partyHabitualExporterLettersOfIntent = $partyHabitualExporterLettersOfIntent;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPhoneHome(): string
    {
        return $this->phoneHome;
    }
    /**
     * 
     *
     * @param string $phoneHome
     *
     * @return self
     */
    public function setPhoneHome(string $phoneHome): self
    {
        $this->initialized['phoneHome'] = true;
        $this->phoneHome = $phoneHome;
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
     * @return int
     */
    public function getPublicPageExpirationDate(): int
    {
        return $this->publicPageExpirationDate;
    }
    /**
     * 
     *
     * @param int $publicPageExpirationDate
     *
     * @return self
     */
    public function setPublicPageExpirationDate(int $publicPageExpirationDate): self
    {
        $this->initialized['publicPageExpirationDate'] = true;
        $this->publicPageExpirationDate = $publicPageExpirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPublicPageUuid(): string
    {
        return $this->publicPageUuid;
    }
    /**
     * 
     *
     * @param string $publicPageUuid
     *
     * @return self
     */
    public function setPublicPageUuid(string $publicPageUuid): self
    {
        $this->initialized['publicPageUuid'] = true;
        $this->publicPageUuid = $publicPageUuid;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPurchaseEmailAddressesId(): string
    {
        return $this->purchaseEmailAddressesId;
    }
    /**
     * 
     *
     * @param string $purchaseEmailAddressesId
     *
     * @return self
     */
    public function setPurchaseEmailAddressesId(string $purchaseEmailAddressesId): self
    {
        $this->initialized['purchaseEmailAddressesId'] = true;
        $this->purchaseEmailAddressesId = $purchaseEmailAddressesId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPurchaseViaPlafond(): bool
    {
        return $this->purchaseViaPlafond;
    }
    /**
     * 
     *
     * @param bool $purchaseViaPlafond
     *
     * @return self
     */
    public function setPurchaseViaPlafond(bool $purchaseViaPlafond): self
    {
        $this->initialized['purchaseViaPlafond'] = true;
        $this->purchaseViaPlafond = $purchaseViaPlafond;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQuotationEmailAddressesId(): string
    {
        return $this->quotationEmailAddressesId;
    }
    /**
     * 
     *
     * @param string $quotationEmailAddressesId
     *
     * @return self
     */
    public function setQuotationEmailAddressesId(string $quotationEmailAddressesId): self
    {
        $this->initialized['quotationEmailAddressesId'] = true;
        $this->quotationEmailAddressesId = $quotationEmailAddressesId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRatingId(): string
    {
        return $this->ratingId;
    }
    /**
     * 
     *
     * @param string $ratingId
     *
     * @return self
     */
    public function setRatingId(string $ratingId): self
    {
        $this->initialized['ratingId'] = true;
        $this->ratingId = $ratingId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getRatingName(): string
    {
        return $this->ratingName;
    }
    /**
     * 
     *
     * @param string $ratingName
     *
     * @deprecated
     *
     * @return self
     */
    public function setRatingName(string $ratingName): self
    {
        $this->initialized['ratingName'] = true;
        $this->ratingName = $ratingName;
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
    public function getRegionId(): string
    {
        return $this->regionId;
    }
    /**
     * 
     *
     * @param string $regionId
     *
     * @return self
     */
    public function setRegionId(string $regionId): self
    {
        $this->initialized['regionId'] = true;
        $this->regionId = $regionId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getResponsibleUserId(): string
    {
        return $this->responsibleUserId;
    }
    /**
     * 
     *
     * @param string $responsibleUserId
     *
     * @return self
     */
    public function setResponsibleUserId(string $responsibleUserId): self
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
     * @return string
     */
    public function getResponsibleUserUsername(): string
    {
        return $this->responsibleUserUsername;
    }
    /**
     * 
     *
     * @param string $responsibleUserUsername
     *
     * @deprecated
     *
     * @return self
     */
    public function setResponsibleUserUsername(string $responsibleUserUsername): self
    {
        $this->initialized['responsibleUserUsername'] = true;
        $this->responsibleUserUsername = $responsibleUserUsername;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalesInvoiceEmailAddressesId(): string
    {
        return $this->salesInvoiceEmailAddressesId;
    }
    /**
     * 
     *
     * @param string $salesInvoiceEmailAddressesId
     *
     * @return self
     */
    public function setSalesInvoiceEmailAddressesId(string $salesInvoiceEmailAddressesId): self
    {
        $this->initialized['salesInvoiceEmailAddressesId'] = true;
        $this->salesInvoiceEmailAddressesId = $salesInvoiceEmailAddressesId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalesOrderEmailAddressesId(): string
    {
        return $this->salesOrderEmailAddressesId;
    }
    /**
     * 
     *
     * @param string $salesOrderEmailAddressesId
     *
     * @return self
     */
    public function setSalesOrderEmailAddressesId(string $salesOrderEmailAddressesId): self
    {
        $this->initialized['salesOrderEmailAddressesId'] = true;
        $this->salesOrderEmailAddressesId = $salesOrderEmailAddressesId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSalesPartner(): bool
    {
        return $this->salesPartner;
    }
    /**
     * 
     *
     * @param bool $salesPartner
     *
     * @return self
     */
    public function setSalesPartner(bool $salesPartner): self
    {
        $this->initialized['salesPartner'] = true;
        $this->salesPartner = $salesPartner;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalesPartnerDefaultCommissionFix(): string
    {
        return $this->salesPartnerDefaultCommissionFix;
    }
    /**
     * 
     *
     * @param string $salesPartnerDefaultCommissionFix
     *
     * @return self
     */
    public function setSalesPartnerDefaultCommissionFix(string $salesPartnerDefaultCommissionFix): self
    {
        $this->initialized['salesPartnerDefaultCommissionFix'] = true;
        $this->salesPartnerDefaultCommissionFix = $salesPartnerDefaultCommissionFix;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalesPartnerDefaultCommissionPercentage(): string
    {
        return $this->salesPartnerDefaultCommissionPercentage;
    }
    /**
     * 
     *
     * @param string $salesPartnerDefaultCommissionPercentage
     *
     * @return self
     */
    public function setSalesPartnerDefaultCommissionPercentage(string $salesPartnerDefaultCommissionPercentage): self
    {
        $this->initialized['salesPartnerDefaultCommissionPercentage'] = true;
        $this->salesPartnerDefaultCommissionPercentage = $salesPartnerDefaultCommissionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalesPartnerDefaultCommissionType(): string
    {
        return $this->salesPartnerDefaultCommissionType;
    }
    /**
     * 
     *
     * @param string $salesPartnerDefaultCommissionType
     *
     * @return self
     */
    public function setSalesPartnerDefaultCommissionType(string $salesPartnerDefaultCommissionType): self
    {
        $this->initialized['salesPartnerDefaultCommissionType'] = true;
        $this->salesPartnerDefaultCommissionType = $salesPartnerDefaultCommissionType;
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
     * @return bool
     */
    public function getSupplier(): bool
    {
        return $this->supplier;
    }
    /**
     * 
     *
     * @param bool $supplier
     *
     * @return self
     */
    public function setSupplier(bool $supplier): self
    {
        $this->initialized['supplier'] = true;
        $this->supplier = $supplier;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSupplierCreditorAccountId(): string
    {
        return $this->supplierCreditorAccountId;
    }
    /**
     * 
     *
     * @param string $supplierCreditorAccountId
     *
     * @return self
     */
    public function setSupplierCreditorAccountId(string $supplierCreditorAccountId): self
    {
        $this->initialized['supplierCreditorAccountId'] = true;
        $this->supplierCreditorAccountId = $supplierCreditorAccountId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getSupplierCreditorAccountNumber(): string
    {
        return $this->supplierCreditorAccountNumber;
    }
    /**
     * 
     *
     * @param string $supplierCreditorAccountNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setSupplierCreditorAccountNumber(string $supplierCreditorAccountNumber): self
    {
        $this->initialized['supplierCreditorAccountNumber'] = true;
        $this->supplierCreditorAccountNumber = $supplierCreditorAccountNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSupplierCreditorAccountingCodeId(): string
    {
        return $this->supplierCreditorAccountingCodeId;
    }
    /**
     * 
     *
     * @param string $supplierCreditorAccountingCodeId
     *
     * @return self
     */
    public function setSupplierCreditorAccountingCodeId(string $supplierCreditorAccountingCodeId): self
    {
        $this->initialized['supplierCreditorAccountingCodeId'] = true;
        $this->supplierCreditorAccountingCodeId = $supplierCreditorAccountingCodeId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSupplierCustomerNumberAtSupplier(): string
    {
        return $this->supplierCustomerNumberAtSupplier;
    }
    /**
     * 
     *
     * @param string $supplierCustomerNumberAtSupplier
     *
     * @return self
     */
    public function setSupplierCustomerNumberAtSupplier(string $supplierCustomerNumberAtSupplier): self
    {
        $this->initialized['supplierCustomerNumberAtSupplier'] = true;
        $this->supplierCustomerNumberAtSupplier = $supplierCustomerNumberAtSupplier;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSupplierDefaultShippingCarrierId(): string
    {
        return $this->supplierDefaultShippingCarrierId;
    }
    /**
     * 
     *
     * @param string $supplierDefaultShippingCarrierId
     *
     * @return self
     */
    public function setSupplierDefaultShippingCarrierId(string $supplierDefaultShippingCarrierId): self
    {
        $this->initialized['supplierDefaultShippingCarrierId'] = true;
        $this->supplierDefaultShippingCarrierId = $supplierDefaultShippingCarrierId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSupplierInternalNote(): string
    {
        return $this->supplierInternalNote;
    }
    /**
     * 
     *
     * @param string $supplierInternalNote
     *
     * @return self
     */
    public function setSupplierInternalNote(string $supplierInternalNote): self
    {
        $this->initialized['supplierInternalNote'] = true;
        $this->supplierInternalNote = $supplierInternalNote;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSupplierMinimumPurchaseOrderAmount(): string
    {
        return $this->supplierMinimumPurchaseOrderAmount;
    }
    /**
     * 
     *
     * @param string $supplierMinimumPurchaseOrderAmount
     *
     * @return self
     */
    public function setSupplierMinimumPurchaseOrderAmount(string $supplierMinimumPurchaseOrderAmount): self
    {
        $this->initialized['supplierMinimumPurchaseOrderAmount'] = true;
        $this->supplierMinimumPurchaseOrderAmount = $supplierMinimumPurchaseOrderAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSupplierNonStandardTaxId(): string
    {
        return $this->supplierNonStandardTaxId;
    }
    /**
     * 
     *
     * @param string $supplierNonStandardTaxId
     *
     * @return self
     */
    public function setSupplierNonStandardTaxId(string $supplierNonStandardTaxId): self
    {
        $this->initialized['supplierNonStandardTaxId'] = true;
        $this->supplierNonStandardTaxId = $supplierNonStandardTaxId;
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
    public function getSupplierNumberOld(): string
    {
        return $this->supplierNumberOld;
    }
    /**
     * 
     *
     * @param string $supplierNumberOld
     *
     * @return self
     */
    public function setSupplierNumberOld(string $supplierNumberOld): self
    {
        $this->initialized['supplierNumberOld'] = true;
        $this->supplierNumberOld = $supplierNumberOld;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSupplierOrderBlock(): bool
    {
        return $this->supplierOrderBlock;
    }
    /**
     * 
     *
     * @param bool $supplierOrderBlock
     *
     * @return self
     */
    public function setSupplierOrderBlock(bool $supplierOrderBlock): self
    {
        $this->initialized['supplierOrderBlock'] = true;
        $this->supplierOrderBlock = $supplierOrderBlock;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSupplierPaymentMethodId(): string
    {
        return $this->supplierPaymentMethodId;
    }
    /**
     * 
     *
     * @param string $supplierPaymentMethodId
     *
     * @return self
     */
    public function setSupplierPaymentMethodId(string $supplierPaymentMethodId): self
    {
        $this->initialized['supplierPaymentMethodId'] = true;
        $this->supplierPaymentMethodId = $supplierPaymentMethodId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getSupplierPaymentMethodName(): string
    {
        return $this->supplierPaymentMethodName;
    }
    /**
     * 
     *
     * @param string $supplierPaymentMethodName
     *
     * @deprecated
     *
     * @return self
     */
    public function setSupplierPaymentMethodName(string $supplierPaymentMethodName): self
    {
        $this->initialized['supplierPaymentMethodName'] = true;
        $this->supplierPaymentMethodName = $supplierPaymentMethodName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSupplierShipmentMethodId(): string
    {
        return $this->supplierShipmentMethodId;
    }
    /**
     * 
     *
     * @param string $supplierShipmentMethodId
     *
     * @return self
     */
    public function setSupplierShipmentMethodId(string $supplierShipmentMethodId): self
    {
        $this->initialized['supplierShipmentMethodId'] = true;
        $this->supplierShipmentMethodId = $supplierShipmentMethodId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getSupplierShipmentMethodName(): string
    {
        return $this->supplierShipmentMethodName;
    }
    /**
     * 
     *
     * @param string $supplierShipmentMethodName
     *
     * @deprecated
     *
     * @return self
     */
    public function setSupplierShipmentMethodName(string $supplierShipmentMethodName): self
    {
        $this->initialized['supplierShipmentMethodName'] = true;
        $this->supplierShipmentMethodName = $supplierShipmentMethodName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSupplierTermOfPaymentId(): string
    {
        return $this->supplierTermOfPaymentId;
    }
    /**
     * 
     *
     * @param string $supplierTermOfPaymentId
     *
     * @return self
     */
    public function setSupplierTermOfPaymentId(string $supplierTermOfPaymentId): self
    {
        $this->initialized['supplierTermOfPaymentId'] = true;
        $this->supplierTermOfPaymentId = $supplierTermOfPaymentId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getSupplierTermOfPaymentName(): string
    {
        return $this->supplierTermOfPaymentName;
    }
    /**
     * 
     *
     * @param string $supplierTermOfPaymentName
     *
     * @deprecated
     *
     * @return self
     */
    public function setSupplierTermOfPaymentName(string $supplierTermOfPaymentName): self
    {
        $this->initialized['supplierTermOfPaymentName'] = true;
        $this->supplierTermOfPaymentName = $supplierTermOfPaymentName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTaxId(): string
    {
        return $this->taxId;
    }
    /**
     * 
     *
     * @param string $taxId
     *
     * @return self
     */
    public function setTaxId(string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return list<Entity>
     */
    public function getTopics(): array
    {
        return $this->topics;
    }
    /**
     * 
     *
     * @param list<Entity> $topics
     *
     * @deprecated
     *
     * @return self
     */
    public function setTopics(array $topics): self
    {
        $this->initialized['topics'] = true;
        $this->topics = $topics;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVatIdentificationNumber(): string
    {
        return $this->vatIdentificationNumber;
    }
    /**
     * 
     *
     * @param string $vatIdentificationNumber
     *
     * @return self
     */
    public function setVatIdentificationNumber(string $vatIdentificationNumber): self
    {
        $this->initialized['vatIdentificationNumber'] = true;
        $this->vatIdentificationNumber = $vatIdentificationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getXRechnungLeitwegId(): string
    {
        return $this->xRechnungLeitwegId;
    }
    /**
     * 
     *
     * @param string $xRechnungLeitwegId
     *
     * @return self
     */
    public function setXRechnungLeitwegId(string $xRechnungLeitwegId): self
    {
        $this->initialized['xRechnungLeitwegId'] = true;
        $this->xRechnungLeitwegId = $xRechnungLeitwegId;
        return $this;
    }
}