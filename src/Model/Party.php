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
     * @var string
     */
    protected $id;

    /**
     * @var int
     */
    protected $createdDate;

    /**
     * @var int
     */
    protected $lastModifiedDate;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var list<mixed>
     */
    protected $customAttributes;

    /**
     * @var list<Address>
     */
    protected $addresses;

    /**
     * @var int
     */
    protected $birthDate;

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
    protected $deliveryAddressId;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $fax;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $invoiceAddressId;

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
    protected $mobilePhone1;

    /**
     * @var list<OnlineAccount>
     */
    protected $onlineAccounts;

    /**
     * @var string
     */
    protected $partyType;

    /**
     * @var string
     */
    protected $personCompany;

    /**
     * @var string
     */
    protected $personDepartmentId;

    /**
     * @var string
     */
    protected $personRoleId;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $primaryAddressId;

    /**
     * @var string
     */
    protected $salutation;

    /**
     * @var list<string>
     */
    protected $tags;

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
    protected $website;

    /**
     * @deprecated
     *
     * @var bool
     */
    protected $allowPurchaseOrderCreation;

    /**
     * @var list<PartyBankAccount>
     */
    protected $bankAccounts;

    /**
     * @var string
     */
    protected $commercialLanguageId;

    /**
     * @var bool
     */
    protected $commissionBlock;

    /**
     * @var list<CommissionSalesPartner>
     */
    protected $commissionSalesPartners;

    /**
     * @var string
     */
    protected $companySizeId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $companySizeName;

    /**
     * @var bool
     */
    protected $competitor;

    /**
     * @var list<OnlyId>
     */
    protected $contacts;

    /**
     * @var string
     */
    protected $currencyId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $currencyName;

    /**
     * @var bool
     */
    protected $customer;

    /**
     * @var bool
     */
    protected $customerAllowDropshippingOrderCreation;

    /**
     * @var string
     */
    protected $customerAmountInsured;

    /**
     * @var string
     */
    protected $customerAnnualRevenue;

    /**
     * @var string
     */
    protected $customerBlockNotice;

    /**
     * @var bool
     */
    protected $customerBlocked;

    /**
     * @var string
     */
    protected $customerBusinessType;

    /**
     * @var string
     */
    protected $customerCategoryId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $customerCategoryName;

    /**
     * @var string
     */
    protected $customerCreditLimit;

    /**
     * @var string
     */
    protected $customerCurrentSalesStageId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $customerCurrentSalesStageName;

    /**
     * @var string
     */
    protected $customerDebtorAccountId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $customerDebtorAccountNumber;

    /**
     * @var string
     */
    protected $customerDebtorAccountingCodeId;

    /**
     * @var string
     */
    protected $customerDefaultHeaderDiscount;

    /**
     * @var string
     */
    protected $customerDefaultHeaderSurcharge;

    /**
     * @var string
     */
    protected $customerDefaultShippingCarrierId;

    /**
     * @var bool
     */
    protected $customerDeliveryBlock;

    /**
     * @var bool
     */
    protected $customerInsolvent;

    /**
     * @var bool
     */
    protected $customerInsured;

    /**
     * @var string
     */
    protected $customerInternalNote;

    /**
     * @var string
     */
    protected $customerLossDescription;

    /**
     * @var string
     */
    protected $customerLossReasonId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $customerLossReasonName;

    /**
     * @var string
     */
    protected $customerNonStandardTaxId;

    /**
     * @var string
     */
    protected $customerNumber;

    /**
     * @var string
     */
    protected $customerNumberOld;

    /**
     * @var string
     */
    protected $customerPaymentMethodId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $customerPaymentMethodName;

    /**
     * @var string
     */
    protected $customerSalesChannel;

    /**
     * @var string
     */
    protected $customerSalesOrderPaymentType;

    /**
     * @var int
     */
    protected $customerSalesProbability;

    /**
     * @var list<SalesStageHistory>
     */
    protected $customerSalesStageHistory;

    /**
     * @var string
     */
    protected $customerSatisfaction;

    /**
     * @var string
     */
    protected $customerShipmentMethodId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $customerShipmentMethodName;

    /**
     * @var string
     */
    protected $customerSupplierNumber;

    /**
     * @var string
     */
    protected $customerTermOfPaymentId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $customerTermOfPaymentName;

    /**
     * @var bool
     */
    protected $customerUseCustomsTariffNumber;

    /**
     * @var string
     */
    protected $deliveryEmailAddressesId;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $dunningAddressId;

    /**
     * @var string
     */
    protected $dunningEmailAddressesId;

    /**
     * @var bool
     */
    protected $enableDropshippingInNewSupplySources;

    /**
     * @var string
     */
    protected $eoriNumber;

    /**
     * @var bool
     */
    protected $factoring;

    /**
     * @var string
     */
    protected $fixPhone2;

    /**
     * @var bool
     */
    protected $fixedResponsibleUser;

    /**
     * @var bool
     */
    protected $formerSalesPartner;

    /**
     * @var bool
     */
    protected $habitualExporter;

    /**
     * @var string
     */
    protected $imageId;

    /**
     * @var bool
     */
    protected $invoiceBlock;

    /**
     * @var string
     */
    protected $invoiceRecipientId;

    /**
     * @var string
     */
    protected $leadRatingId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $leadRatingName;

    /**
     * @var string
     */
    protected $leadSourceId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $leadSourceName;

    /**
     * @var string
     */
    protected $leadStatus;

    /**
     * @var string
     */
    protected $legalFormId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $legalFormName;

    /**
     * @var string
     */
    protected $mobilePhone2;

    /**
     * @var bool
     */
    protected $optInEmail;

    /**
     * @var bool
     */
    protected $optInLetter;

    /**
     * @var bool
     */
    protected $optInPhone;

    /**
     * @var bool
     */
    protected $optInSms;

    /**
     * @var string
     */
    protected $parentPartyId;

    /**
     * @var list<PartyEmailAddresses>
     */
    protected $partyEmailAddresses;

    /**
     * @var list<PartyHabitualExporterLetterOfIntent>
     */
    protected $partyHabitualExporterLettersOfIntent;

    /**
     * @var string
     */
    protected $phoneHome;

    /**
     * @var string
     */
    protected $primaryContactId;

    /**
     * @var int
     */
    protected $publicPageExpirationDate;

    /**
     * @var string
     */
    protected $publicPageUuid;

    /**
     * @var string
     */
    protected $purchaseEmailAddressesId;

    /**
     * @var bool
     */
    protected $purchaseViaPlafond;

    /**
     * @var string
     */
    protected $quotationEmailAddressesId;

    /**
     * @var string
     */
    protected $ratingId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $ratingName;

    /**
     * @var string
     */
    protected $referenceNumber;

    /**
     * @var string
     */
    protected $regionId;

    /**
     * @var string
     */
    protected $responsibleUserId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $responsibleUserUsername;

    /**
     * @var string
     */
    protected $salesInvoiceEmailAddressesId;

    /**
     * @var string
     */
    protected $salesOrderEmailAddressesId;

    /**
     * @var bool
     */
    protected $salesPartner;

    /**
     * @var string
     */
    protected $salesPartnerDefaultCommissionFix;

    /**
     * @var string
     */
    protected $salesPartnerDefaultCommissionPercentage;

    /**
     * @var string
     */
    protected $salesPartnerDefaultCommissionType;

    /**
     * @var string
     */
    protected $sectorId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $sectorName;

    /**
     * @var bool
     */
    protected $supplier;

    /**
     * @var string
     */
    protected $supplierCreditorAccountId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $supplierCreditorAccountNumber;

    /**
     * @var string
     */
    protected $supplierCreditorAccountingCodeId;

    /**
     * @var string
     */
    protected $supplierCustomerNumberAtSupplier;

    /**
     * @var string
     */
    protected $supplierDefaultShippingCarrierId;

    /**
     * @var string
     */
    protected $supplierInternalNote;

    /**
     * @var string
     */
    protected $supplierMinimumPurchaseOrderAmount;

    /**
     * @var string
     */
    protected $supplierNonStandardTaxId;

    /**
     * @var string
     */
    protected $supplierNumber;

    /**
     * @var string
     */
    protected $supplierNumberOld;

    /**
     * @var bool
     */
    protected $supplierOrderBlock;

    /**
     * @var string
     */
    protected $supplierPaymentMethodId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $supplierPaymentMethodName;

    /**
     * @var string
     */
    protected $supplierShipmentMethodId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $supplierShipmentMethodName;

    /**
     * @var string
     */
    protected $supplierTermOfPaymentId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $supplierTermOfPaymentName;

    /**
     * @var string
     */
    protected $taxId;

    /**
     * @deprecated
     *
     * @var list<Entity>
     */
    protected $topics;

    /**
     * @var string
     */
    protected $vatIdentificationNumber;

    /**
     * @var string
     */
    protected $xRechnungLeitwegId;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    /**
     * @return list<mixed>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<mixed>  $customAttributes
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

        return $this;
    }

    /**
     * @return list<Address>
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * @param  list<Address>  $addresses
     */
    public function setAddresses(array $addresses): self
    {
        $this->initialized['addresses'] = true;
        $this->addresses = $addresses;

        return $this;
    }

    public function getBirthDate(): int
    {
        return $this->birthDate;
    }

    public function setBirthDate(int $birthDate): self
    {
        $this->initialized['birthDate'] = true;
        $this->birthDate = $birthDate;

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

    public function getDeliveryAddressId(): string
    {
        return $this->deliveryAddressId;
    }

    public function setDeliveryAddressId(string $deliveryAddressId): self
    {
        $this->initialized['deliveryAddressId'] = true;
        $this->deliveryAddressId = $deliveryAddressId;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    public function getFax(): string
    {
        return $this->fax;
    }

    public function setFax(string $fax): self
    {
        $this->initialized['fax'] = true;
        $this->fax = $fax;

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

    public function getInvoiceAddressId(): string
    {
        return $this->invoiceAddressId;
    }

    public function setInvoiceAddressId(string $invoiceAddressId): self
    {
        $this->initialized['invoiceAddressId'] = true;
        $this->invoiceAddressId = $invoiceAddressId;

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

    public function getMobilePhone1(): string
    {
        return $this->mobilePhone1;
    }

    public function setMobilePhone1(string $mobilePhone1): self
    {
        $this->initialized['mobilePhone1'] = true;
        $this->mobilePhone1 = $mobilePhone1;

        return $this;
    }

    /**
     * @return list<OnlineAccount>
     */
    public function getOnlineAccounts(): array
    {
        return $this->onlineAccounts;
    }

    /**
     * @param  list<OnlineAccount>  $onlineAccounts
     */
    public function setOnlineAccounts(array $onlineAccounts): self
    {
        $this->initialized['onlineAccounts'] = true;
        $this->onlineAccounts = $onlineAccounts;

        return $this;
    }

    public function getPartyType(): string
    {
        return $this->partyType;
    }

    public function setPartyType(string $partyType): self
    {
        $this->initialized['partyType'] = true;
        $this->partyType = $partyType;

        return $this;
    }

    public function getPersonCompany(): string
    {
        return $this->personCompany;
    }

    public function setPersonCompany(string $personCompany): self
    {
        $this->initialized['personCompany'] = true;
        $this->personCompany = $personCompany;

        return $this;
    }

    public function getPersonDepartmentId(): string
    {
        return $this->personDepartmentId;
    }

    public function setPersonDepartmentId(string $personDepartmentId): self
    {
        $this->initialized['personDepartmentId'] = true;
        $this->personDepartmentId = $personDepartmentId;

        return $this;
    }

    public function getPersonRoleId(): string
    {
        return $this->personRoleId;
    }

    public function setPersonRoleId(string $personRoleId): self
    {
        $this->initialized['personRoleId'] = true;
        $this->personRoleId = $personRoleId;

        return $this;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;

        return $this;
    }

    public function getPrimaryAddressId(): string
    {
        return $this->primaryAddressId;
    }

    public function setPrimaryAddressId(string $primaryAddressId): self
    {
        $this->initialized['primaryAddressId'] = true;
        $this->primaryAddressId = $primaryAddressId;

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

    /**
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param  list<string>  $tags
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

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

    public function getWebsite(): string
    {
        return $this->website;
    }

    public function setWebsite(string $website): self
    {
        $this->initialized['website'] = true;
        $this->website = $website;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getAllowPurchaseOrderCreation(): bool
    {
        return $this->allowPurchaseOrderCreation;
    }

    /**
     * @deprecated
     */
    public function setAllowPurchaseOrderCreation(bool $allowPurchaseOrderCreation): self
    {
        $this->initialized['allowPurchaseOrderCreation'] = true;
        $this->allowPurchaseOrderCreation = $allowPurchaseOrderCreation;

        return $this;
    }

    /**
     * @return list<PartyBankAccount>
     */
    public function getBankAccounts(): array
    {
        return $this->bankAccounts;
    }

    /**
     * @param  list<PartyBankAccount>  $bankAccounts
     */
    public function setBankAccounts(array $bankAccounts): self
    {
        $this->initialized['bankAccounts'] = true;
        $this->bankAccounts = $bankAccounts;

        return $this;
    }

    public function getCommercialLanguageId(): string
    {
        return $this->commercialLanguageId;
    }

    public function setCommercialLanguageId(string $commercialLanguageId): self
    {
        $this->initialized['commercialLanguageId'] = true;
        $this->commercialLanguageId = $commercialLanguageId;

        return $this;
    }

    public function getCommissionBlock(): bool
    {
        return $this->commissionBlock;
    }

    public function setCommissionBlock(bool $commissionBlock): self
    {
        $this->initialized['commissionBlock'] = true;
        $this->commissionBlock = $commissionBlock;

        return $this;
    }

    /**
     * @return list<CommissionSalesPartner>
     */
    public function getCommissionSalesPartners(): array
    {
        return $this->commissionSalesPartners;
    }

    /**
     * @param  list<CommissionSalesPartner>  $commissionSalesPartners
     */
    public function setCommissionSalesPartners(array $commissionSalesPartners): self
    {
        $this->initialized['commissionSalesPartners'] = true;
        $this->commissionSalesPartners = $commissionSalesPartners;

        return $this;
    }

    public function getCompanySizeId(): string
    {
        return $this->companySizeId;
    }

    public function setCompanySizeId(string $companySizeId): self
    {
        $this->initialized['companySizeId'] = true;
        $this->companySizeId = $companySizeId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCompanySizeName(): string
    {
        return $this->companySizeName;
    }

    /**
     * @deprecated
     */
    public function setCompanySizeName(string $companySizeName): self
    {
        $this->initialized['companySizeName'] = true;
        $this->companySizeName = $companySizeName;

        return $this;
    }

    public function getCompetitor(): bool
    {
        return $this->competitor;
    }

    public function setCompetitor(bool $competitor): self
    {
        $this->initialized['competitor'] = true;
        $this->competitor = $competitor;

        return $this;
    }

    /**
     * @return list<OnlyId>
     */
    public function getContacts(): array
    {
        return $this->contacts;
    }

    /**
     * @param  list<OnlyId>  $contacts
     */
    public function setContacts(array $contacts): self
    {
        $this->initialized['contacts'] = true;
        $this->contacts = $contacts;

        return $this;
    }

    public function getCurrencyId(): string
    {
        return $this->currencyId;
    }

    public function setCurrencyId(string $currencyId): self
    {
        $this->initialized['currencyId'] = true;
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCurrencyName(): string
    {
        return $this->currencyName;
    }

    /**
     * @deprecated
     */
    public function setCurrencyName(string $currencyName): self
    {
        $this->initialized['currencyName'] = true;
        $this->currencyName = $currencyName;

        return $this;
    }

    public function getCustomer(): bool
    {
        return $this->customer;
    }

    public function setCustomer(bool $customer): self
    {
        $this->initialized['customer'] = true;
        $this->customer = $customer;

        return $this;
    }

    public function getCustomerAllowDropshippingOrderCreation(): bool
    {
        return $this->customerAllowDropshippingOrderCreation;
    }

    public function setCustomerAllowDropshippingOrderCreation(bool $customerAllowDropshippingOrderCreation): self
    {
        $this->initialized['customerAllowDropshippingOrderCreation'] = true;
        $this->customerAllowDropshippingOrderCreation = $customerAllowDropshippingOrderCreation;

        return $this;
    }

    public function getCustomerAmountInsured(): string
    {
        return $this->customerAmountInsured;
    }

    public function setCustomerAmountInsured(string $customerAmountInsured): self
    {
        $this->initialized['customerAmountInsured'] = true;
        $this->customerAmountInsured = $customerAmountInsured;

        return $this;
    }

    public function getCustomerAnnualRevenue(): string
    {
        return $this->customerAnnualRevenue;
    }

    public function setCustomerAnnualRevenue(string $customerAnnualRevenue): self
    {
        $this->initialized['customerAnnualRevenue'] = true;
        $this->customerAnnualRevenue = $customerAnnualRevenue;

        return $this;
    }

    public function getCustomerBlockNotice(): string
    {
        return $this->customerBlockNotice;
    }

    public function setCustomerBlockNotice(string $customerBlockNotice): self
    {
        $this->initialized['customerBlockNotice'] = true;
        $this->customerBlockNotice = $customerBlockNotice;

        return $this;
    }

    public function getCustomerBlocked(): bool
    {
        return $this->customerBlocked;
    }

    public function setCustomerBlocked(bool $customerBlocked): self
    {
        $this->initialized['customerBlocked'] = true;
        $this->customerBlocked = $customerBlocked;

        return $this;
    }

    public function getCustomerBusinessType(): string
    {
        return $this->customerBusinessType;
    }

    public function setCustomerBusinessType(string $customerBusinessType): self
    {
        $this->initialized['customerBusinessType'] = true;
        $this->customerBusinessType = $customerBusinessType;

        return $this;
    }

    public function getCustomerCategoryId(): string
    {
        return $this->customerCategoryId;
    }

    public function setCustomerCategoryId(string $customerCategoryId): self
    {
        $this->initialized['customerCategoryId'] = true;
        $this->customerCategoryId = $customerCategoryId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCustomerCategoryName(): string
    {
        return $this->customerCategoryName;
    }

    /**
     * @deprecated
     */
    public function setCustomerCategoryName(string $customerCategoryName): self
    {
        $this->initialized['customerCategoryName'] = true;
        $this->customerCategoryName = $customerCategoryName;

        return $this;
    }

    public function getCustomerCreditLimit(): string
    {
        return $this->customerCreditLimit;
    }

    public function setCustomerCreditLimit(string $customerCreditLimit): self
    {
        $this->initialized['customerCreditLimit'] = true;
        $this->customerCreditLimit = $customerCreditLimit;

        return $this;
    }

    public function getCustomerCurrentSalesStageId(): string
    {
        return $this->customerCurrentSalesStageId;
    }

    public function setCustomerCurrentSalesStageId(string $customerCurrentSalesStageId): self
    {
        $this->initialized['customerCurrentSalesStageId'] = true;
        $this->customerCurrentSalesStageId = $customerCurrentSalesStageId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCustomerCurrentSalesStageName(): string
    {
        return $this->customerCurrentSalesStageName;
    }

    /**
     * @deprecated
     */
    public function setCustomerCurrentSalesStageName(string $customerCurrentSalesStageName): self
    {
        $this->initialized['customerCurrentSalesStageName'] = true;
        $this->customerCurrentSalesStageName = $customerCurrentSalesStageName;

        return $this;
    }

    public function getCustomerDebtorAccountId(): string
    {
        return $this->customerDebtorAccountId;
    }

    public function setCustomerDebtorAccountId(string $customerDebtorAccountId): self
    {
        $this->initialized['customerDebtorAccountId'] = true;
        $this->customerDebtorAccountId = $customerDebtorAccountId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCustomerDebtorAccountNumber(): string
    {
        return $this->customerDebtorAccountNumber;
    }

    /**
     * @deprecated
     */
    public function setCustomerDebtorAccountNumber(string $customerDebtorAccountNumber): self
    {
        $this->initialized['customerDebtorAccountNumber'] = true;
        $this->customerDebtorAccountNumber = $customerDebtorAccountNumber;

        return $this;
    }

    public function getCustomerDebtorAccountingCodeId(): string
    {
        return $this->customerDebtorAccountingCodeId;
    }

    public function setCustomerDebtorAccountingCodeId(string $customerDebtorAccountingCodeId): self
    {
        $this->initialized['customerDebtorAccountingCodeId'] = true;
        $this->customerDebtorAccountingCodeId = $customerDebtorAccountingCodeId;

        return $this;
    }

    public function getCustomerDefaultHeaderDiscount(): string
    {
        return $this->customerDefaultHeaderDiscount;
    }

    public function setCustomerDefaultHeaderDiscount(string $customerDefaultHeaderDiscount): self
    {
        $this->initialized['customerDefaultHeaderDiscount'] = true;
        $this->customerDefaultHeaderDiscount = $customerDefaultHeaderDiscount;

        return $this;
    }

    public function getCustomerDefaultHeaderSurcharge(): string
    {
        return $this->customerDefaultHeaderSurcharge;
    }

    public function setCustomerDefaultHeaderSurcharge(string $customerDefaultHeaderSurcharge): self
    {
        $this->initialized['customerDefaultHeaderSurcharge'] = true;
        $this->customerDefaultHeaderSurcharge = $customerDefaultHeaderSurcharge;

        return $this;
    }

    public function getCustomerDefaultShippingCarrierId(): string
    {
        return $this->customerDefaultShippingCarrierId;
    }

    public function setCustomerDefaultShippingCarrierId(string $customerDefaultShippingCarrierId): self
    {
        $this->initialized['customerDefaultShippingCarrierId'] = true;
        $this->customerDefaultShippingCarrierId = $customerDefaultShippingCarrierId;

        return $this;
    }

    public function getCustomerDeliveryBlock(): bool
    {
        return $this->customerDeliveryBlock;
    }

    public function setCustomerDeliveryBlock(bool $customerDeliveryBlock): self
    {
        $this->initialized['customerDeliveryBlock'] = true;
        $this->customerDeliveryBlock = $customerDeliveryBlock;

        return $this;
    }

    public function getCustomerInsolvent(): bool
    {
        return $this->customerInsolvent;
    }

    public function setCustomerInsolvent(bool $customerInsolvent): self
    {
        $this->initialized['customerInsolvent'] = true;
        $this->customerInsolvent = $customerInsolvent;

        return $this;
    }

    public function getCustomerInsured(): bool
    {
        return $this->customerInsured;
    }

    public function setCustomerInsured(bool $customerInsured): self
    {
        $this->initialized['customerInsured'] = true;
        $this->customerInsured = $customerInsured;

        return $this;
    }

    public function getCustomerInternalNote(): string
    {
        return $this->customerInternalNote;
    }

    public function setCustomerInternalNote(string $customerInternalNote): self
    {
        $this->initialized['customerInternalNote'] = true;
        $this->customerInternalNote = $customerInternalNote;

        return $this;
    }

    public function getCustomerLossDescription(): string
    {
        return $this->customerLossDescription;
    }

    public function setCustomerLossDescription(string $customerLossDescription): self
    {
        $this->initialized['customerLossDescription'] = true;
        $this->customerLossDescription = $customerLossDescription;

        return $this;
    }

    public function getCustomerLossReasonId(): string
    {
        return $this->customerLossReasonId;
    }

    public function setCustomerLossReasonId(string $customerLossReasonId): self
    {
        $this->initialized['customerLossReasonId'] = true;
        $this->customerLossReasonId = $customerLossReasonId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCustomerLossReasonName(): string
    {
        return $this->customerLossReasonName;
    }

    /**
     * @deprecated
     */
    public function setCustomerLossReasonName(string $customerLossReasonName): self
    {
        $this->initialized['customerLossReasonName'] = true;
        $this->customerLossReasonName = $customerLossReasonName;

        return $this;
    }

    public function getCustomerNonStandardTaxId(): string
    {
        return $this->customerNonStandardTaxId;
    }

    public function setCustomerNonStandardTaxId(string $customerNonStandardTaxId): self
    {
        $this->initialized['customerNonStandardTaxId'] = true;
        $this->customerNonStandardTaxId = $customerNonStandardTaxId;

        return $this;
    }

    public function getCustomerNumber(): string
    {
        return $this->customerNumber;
    }

    public function setCustomerNumber(string $customerNumber): self
    {
        $this->initialized['customerNumber'] = true;
        $this->customerNumber = $customerNumber;

        return $this;
    }

    public function getCustomerNumberOld(): string
    {
        return $this->customerNumberOld;
    }

    public function setCustomerNumberOld(string $customerNumberOld): self
    {
        $this->initialized['customerNumberOld'] = true;
        $this->customerNumberOld = $customerNumberOld;

        return $this;
    }

    public function getCustomerPaymentMethodId(): string
    {
        return $this->customerPaymentMethodId;
    }

    public function setCustomerPaymentMethodId(string $customerPaymentMethodId): self
    {
        $this->initialized['customerPaymentMethodId'] = true;
        $this->customerPaymentMethodId = $customerPaymentMethodId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCustomerPaymentMethodName(): string
    {
        return $this->customerPaymentMethodName;
    }

    /**
     * @deprecated
     */
    public function setCustomerPaymentMethodName(string $customerPaymentMethodName): self
    {
        $this->initialized['customerPaymentMethodName'] = true;
        $this->customerPaymentMethodName = $customerPaymentMethodName;

        return $this;
    }

    public function getCustomerSalesChannel(): string
    {
        return $this->customerSalesChannel;
    }

    public function setCustomerSalesChannel(string $customerSalesChannel): self
    {
        $this->initialized['customerSalesChannel'] = true;
        $this->customerSalesChannel = $customerSalesChannel;

        return $this;
    }

    public function getCustomerSalesOrderPaymentType(): string
    {
        return $this->customerSalesOrderPaymentType;
    }

    public function setCustomerSalesOrderPaymentType(string $customerSalesOrderPaymentType): self
    {
        $this->initialized['customerSalesOrderPaymentType'] = true;
        $this->customerSalesOrderPaymentType = $customerSalesOrderPaymentType;

        return $this;
    }

    public function getCustomerSalesProbability(): int
    {
        return $this->customerSalesProbability;
    }

    public function setCustomerSalesProbability(int $customerSalesProbability): self
    {
        $this->initialized['customerSalesProbability'] = true;
        $this->customerSalesProbability = $customerSalesProbability;

        return $this;
    }

    /**
     * @return list<SalesStageHistory>
     */
    public function getCustomerSalesStageHistory(): array
    {
        return $this->customerSalesStageHistory;
    }

    /**
     * @param  list<SalesStageHistory>  $customerSalesStageHistory
     */
    public function setCustomerSalesStageHistory(array $customerSalesStageHistory): self
    {
        $this->initialized['customerSalesStageHistory'] = true;
        $this->customerSalesStageHistory = $customerSalesStageHistory;

        return $this;
    }

    public function getCustomerSatisfaction(): string
    {
        return $this->customerSatisfaction;
    }

    public function setCustomerSatisfaction(string $customerSatisfaction): self
    {
        $this->initialized['customerSatisfaction'] = true;
        $this->customerSatisfaction = $customerSatisfaction;

        return $this;
    }

    public function getCustomerShipmentMethodId(): string
    {
        return $this->customerShipmentMethodId;
    }

    public function setCustomerShipmentMethodId(string $customerShipmentMethodId): self
    {
        $this->initialized['customerShipmentMethodId'] = true;
        $this->customerShipmentMethodId = $customerShipmentMethodId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCustomerShipmentMethodName(): string
    {
        return $this->customerShipmentMethodName;
    }

    /**
     * @deprecated
     */
    public function setCustomerShipmentMethodName(string $customerShipmentMethodName): self
    {
        $this->initialized['customerShipmentMethodName'] = true;
        $this->customerShipmentMethodName = $customerShipmentMethodName;

        return $this;
    }

    public function getCustomerSupplierNumber(): string
    {
        return $this->customerSupplierNumber;
    }

    public function setCustomerSupplierNumber(string $customerSupplierNumber): self
    {
        $this->initialized['customerSupplierNumber'] = true;
        $this->customerSupplierNumber = $customerSupplierNumber;

        return $this;
    }

    public function getCustomerTermOfPaymentId(): string
    {
        return $this->customerTermOfPaymentId;
    }

    public function setCustomerTermOfPaymentId(string $customerTermOfPaymentId): self
    {
        $this->initialized['customerTermOfPaymentId'] = true;
        $this->customerTermOfPaymentId = $customerTermOfPaymentId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCustomerTermOfPaymentName(): string
    {
        return $this->customerTermOfPaymentName;
    }

    /**
     * @deprecated
     */
    public function setCustomerTermOfPaymentName(string $customerTermOfPaymentName): self
    {
        $this->initialized['customerTermOfPaymentName'] = true;
        $this->customerTermOfPaymentName = $customerTermOfPaymentName;

        return $this;
    }

    public function getCustomerUseCustomsTariffNumber(): bool
    {
        return $this->customerUseCustomsTariffNumber;
    }

    public function setCustomerUseCustomsTariffNumber(bool $customerUseCustomsTariffNumber): self
    {
        $this->initialized['customerUseCustomsTariffNumber'] = true;
        $this->customerUseCustomsTariffNumber = $customerUseCustomsTariffNumber;

        return $this;
    }

    public function getDeliveryEmailAddressesId(): string
    {
        return $this->deliveryEmailAddressesId;
    }

    public function setDeliveryEmailAddressesId(string $deliveryEmailAddressesId): self
    {
        $this->initialized['deliveryEmailAddressesId'] = true;
        $this->deliveryEmailAddressesId = $deliveryEmailAddressesId;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getDunningAddressId(): string
    {
        return $this->dunningAddressId;
    }

    public function setDunningAddressId(string $dunningAddressId): self
    {
        $this->initialized['dunningAddressId'] = true;
        $this->dunningAddressId = $dunningAddressId;

        return $this;
    }

    public function getDunningEmailAddressesId(): string
    {
        return $this->dunningEmailAddressesId;
    }

    public function setDunningEmailAddressesId(string $dunningEmailAddressesId): self
    {
        $this->initialized['dunningEmailAddressesId'] = true;
        $this->dunningEmailAddressesId = $dunningEmailAddressesId;

        return $this;
    }

    public function getEnableDropshippingInNewSupplySources(): bool
    {
        return $this->enableDropshippingInNewSupplySources;
    }

    public function setEnableDropshippingInNewSupplySources(bool $enableDropshippingInNewSupplySources): self
    {
        $this->initialized['enableDropshippingInNewSupplySources'] = true;
        $this->enableDropshippingInNewSupplySources = $enableDropshippingInNewSupplySources;

        return $this;
    }

    public function getEoriNumber(): string
    {
        return $this->eoriNumber;
    }

    public function setEoriNumber(string $eoriNumber): self
    {
        $this->initialized['eoriNumber'] = true;
        $this->eoriNumber = $eoriNumber;

        return $this;
    }

    public function getFactoring(): bool
    {
        return $this->factoring;
    }

    public function setFactoring(bool $factoring): self
    {
        $this->initialized['factoring'] = true;
        $this->factoring = $factoring;

        return $this;
    }

    public function getFixPhone2(): string
    {
        return $this->fixPhone2;
    }

    public function setFixPhone2(string $fixPhone2): self
    {
        $this->initialized['fixPhone2'] = true;
        $this->fixPhone2 = $fixPhone2;

        return $this;
    }

    public function getFixedResponsibleUser(): bool
    {
        return $this->fixedResponsibleUser;
    }

    public function setFixedResponsibleUser(bool $fixedResponsibleUser): self
    {
        $this->initialized['fixedResponsibleUser'] = true;
        $this->fixedResponsibleUser = $fixedResponsibleUser;

        return $this;
    }

    public function getFormerSalesPartner(): bool
    {
        return $this->formerSalesPartner;
    }

    public function setFormerSalesPartner(bool $formerSalesPartner): self
    {
        $this->initialized['formerSalesPartner'] = true;
        $this->formerSalesPartner = $formerSalesPartner;

        return $this;
    }

    public function getHabitualExporter(): bool
    {
        return $this->habitualExporter;
    }

    public function setHabitualExporter(bool $habitualExporter): self
    {
        $this->initialized['habitualExporter'] = true;
        $this->habitualExporter = $habitualExporter;

        return $this;
    }

    public function getImageId(): string
    {
        return $this->imageId;
    }

    public function setImageId(string $imageId): self
    {
        $this->initialized['imageId'] = true;
        $this->imageId = $imageId;

        return $this;
    }

    public function getInvoiceBlock(): bool
    {
        return $this->invoiceBlock;
    }

    public function setInvoiceBlock(bool $invoiceBlock): self
    {
        $this->initialized['invoiceBlock'] = true;
        $this->invoiceBlock = $invoiceBlock;

        return $this;
    }

    public function getInvoiceRecipientId(): string
    {
        return $this->invoiceRecipientId;
    }

    public function setInvoiceRecipientId(string $invoiceRecipientId): self
    {
        $this->initialized['invoiceRecipientId'] = true;
        $this->invoiceRecipientId = $invoiceRecipientId;

        return $this;
    }

    public function getLeadRatingId(): string
    {
        return $this->leadRatingId;
    }

    public function setLeadRatingId(string $leadRatingId): self
    {
        $this->initialized['leadRatingId'] = true;
        $this->leadRatingId = $leadRatingId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getLeadRatingName(): string
    {
        return $this->leadRatingName;
    }

    /**
     * @deprecated
     */
    public function setLeadRatingName(string $leadRatingName): self
    {
        $this->initialized['leadRatingName'] = true;
        $this->leadRatingName = $leadRatingName;

        return $this;
    }

    public function getLeadSourceId(): string
    {
        return $this->leadSourceId;
    }

    public function setLeadSourceId(string $leadSourceId): self
    {
        $this->initialized['leadSourceId'] = true;
        $this->leadSourceId = $leadSourceId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getLeadSourceName(): string
    {
        return $this->leadSourceName;
    }

    /**
     * @deprecated
     */
    public function setLeadSourceName(string $leadSourceName): self
    {
        $this->initialized['leadSourceName'] = true;
        $this->leadSourceName = $leadSourceName;

        return $this;
    }

    public function getLeadStatus(): string
    {
        return $this->leadStatus;
    }

    public function setLeadStatus(string $leadStatus): self
    {
        $this->initialized['leadStatus'] = true;
        $this->leadStatus = $leadStatus;

        return $this;
    }

    public function getLegalFormId(): string
    {
        return $this->legalFormId;
    }

    public function setLegalFormId(string $legalFormId): self
    {
        $this->initialized['legalFormId'] = true;
        $this->legalFormId = $legalFormId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getLegalFormName(): string
    {
        return $this->legalFormName;
    }

    /**
     * @deprecated
     */
    public function setLegalFormName(string $legalFormName): self
    {
        $this->initialized['legalFormName'] = true;
        $this->legalFormName = $legalFormName;

        return $this;
    }

    public function getMobilePhone2(): string
    {
        return $this->mobilePhone2;
    }

    public function setMobilePhone2(string $mobilePhone2): self
    {
        $this->initialized['mobilePhone2'] = true;
        $this->mobilePhone2 = $mobilePhone2;

        return $this;
    }

    public function getOptInEmail(): bool
    {
        return $this->optInEmail;
    }

    public function setOptInEmail(bool $optInEmail): self
    {
        $this->initialized['optInEmail'] = true;
        $this->optInEmail = $optInEmail;

        return $this;
    }

    public function getOptInLetter(): bool
    {
        return $this->optInLetter;
    }

    public function setOptInLetter(bool $optInLetter): self
    {
        $this->initialized['optInLetter'] = true;
        $this->optInLetter = $optInLetter;

        return $this;
    }

    public function getOptInPhone(): bool
    {
        return $this->optInPhone;
    }

    public function setOptInPhone(bool $optInPhone): self
    {
        $this->initialized['optInPhone'] = true;
        $this->optInPhone = $optInPhone;

        return $this;
    }

    public function getOptInSms(): bool
    {
        return $this->optInSms;
    }

    public function setOptInSms(bool $optInSms): self
    {
        $this->initialized['optInSms'] = true;
        $this->optInSms = $optInSms;

        return $this;
    }

    public function getParentPartyId(): string
    {
        return $this->parentPartyId;
    }

    public function setParentPartyId(string $parentPartyId): self
    {
        $this->initialized['parentPartyId'] = true;
        $this->parentPartyId = $parentPartyId;

        return $this;
    }

    /**
     * @return list<PartyEmailAddresses>
     */
    public function getPartyEmailAddresses(): array
    {
        return $this->partyEmailAddresses;
    }

    /**
     * @param  list<PartyEmailAddresses>  $partyEmailAddresses
     */
    public function setPartyEmailAddresses(array $partyEmailAddresses): self
    {
        $this->initialized['partyEmailAddresses'] = true;
        $this->partyEmailAddresses = $partyEmailAddresses;

        return $this;
    }

    /**
     * @return list<PartyHabitualExporterLetterOfIntent>
     */
    public function getPartyHabitualExporterLettersOfIntent(): array
    {
        return $this->partyHabitualExporterLettersOfIntent;
    }

    /**
     * @param  list<PartyHabitualExporterLetterOfIntent>  $partyHabitualExporterLettersOfIntent
     */
    public function setPartyHabitualExporterLettersOfIntent(array $partyHabitualExporterLettersOfIntent): self
    {
        $this->initialized['partyHabitualExporterLettersOfIntent'] = true;
        $this->partyHabitualExporterLettersOfIntent = $partyHabitualExporterLettersOfIntent;

        return $this;
    }

    public function getPhoneHome(): string
    {
        return $this->phoneHome;
    }

    public function setPhoneHome(string $phoneHome): self
    {
        $this->initialized['phoneHome'] = true;
        $this->phoneHome = $phoneHome;

        return $this;
    }

    public function getPrimaryContactId(): string
    {
        return $this->primaryContactId;
    }

    public function setPrimaryContactId(string $primaryContactId): self
    {
        $this->initialized['primaryContactId'] = true;
        $this->primaryContactId = $primaryContactId;

        return $this;
    }

    public function getPublicPageExpirationDate(): int
    {
        return $this->publicPageExpirationDate;
    }

    public function setPublicPageExpirationDate(int $publicPageExpirationDate): self
    {
        $this->initialized['publicPageExpirationDate'] = true;
        $this->publicPageExpirationDate = $publicPageExpirationDate;

        return $this;
    }

    public function getPublicPageUuid(): string
    {
        return $this->publicPageUuid;
    }

    public function setPublicPageUuid(string $publicPageUuid): self
    {
        $this->initialized['publicPageUuid'] = true;
        $this->publicPageUuid = $publicPageUuid;

        return $this;
    }

    public function getPurchaseEmailAddressesId(): string
    {
        return $this->purchaseEmailAddressesId;
    }

    public function setPurchaseEmailAddressesId(string $purchaseEmailAddressesId): self
    {
        $this->initialized['purchaseEmailAddressesId'] = true;
        $this->purchaseEmailAddressesId = $purchaseEmailAddressesId;

        return $this;
    }

    public function getPurchaseViaPlafond(): bool
    {
        return $this->purchaseViaPlafond;
    }

    public function setPurchaseViaPlafond(bool $purchaseViaPlafond): self
    {
        $this->initialized['purchaseViaPlafond'] = true;
        $this->purchaseViaPlafond = $purchaseViaPlafond;

        return $this;
    }

    public function getQuotationEmailAddressesId(): string
    {
        return $this->quotationEmailAddressesId;
    }

    public function setQuotationEmailAddressesId(string $quotationEmailAddressesId): self
    {
        $this->initialized['quotationEmailAddressesId'] = true;
        $this->quotationEmailAddressesId = $quotationEmailAddressesId;

        return $this;
    }

    public function getRatingId(): string
    {
        return $this->ratingId;
    }

    public function setRatingId(string $ratingId): self
    {
        $this->initialized['ratingId'] = true;
        $this->ratingId = $ratingId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getRatingName(): string
    {
        return $this->ratingName;
    }

    /**
     * @deprecated
     */
    public function setRatingName(string $ratingName): self
    {
        $this->initialized['ratingName'] = true;
        $this->ratingName = $ratingName;

        return $this;
    }

    public function getReferenceNumber(): string
    {
        return $this->referenceNumber;
    }

    public function setReferenceNumber(string $referenceNumber): self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;

        return $this;
    }

    public function getRegionId(): string
    {
        return $this->regionId;
    }

    public function setRegionId(string $regionId): self
    {
        $this->initialized['regionId'] = true;
        $this->regionId = $regionId;

        return $this;
    }

    public function getResponsibleUserId(): string
    {
        return $this->responsibleUserId;
    }

    public function setResponsibleUserId(string $responsibleUserId): self
    {
        $this->initialized['responsibleUserId'] = true;
        $this->responsibleUserId = $responsibleUserId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getResponsibleUserUsername(): string
    {
        return $this->responsibleUserUsername;
    }

    /**
     * @deprecated
     */
    public function setResponsibleUserUsername(string $responsibleUserUsername): self
    {
        $this->initialized['responsibleUserUsername'] = true;
        $this->responsibleUserUsername = $responsibleUserUsername;

        return $this;
    }

    public function getSalesInvoiceEmailAddressesId(): string
    {
        return $this->salesInvoiceEmailAddressesId;
    }

    public function setSalesInvoiceEmailAddressesId(string $salesInvoiceEmailAddressesId): self
    {
        $this->initialized['salesInvoiceEmailAddressesId'] = true;
        $this->salesInvoiceEmailAddressesId = $salesInvoiceEmailAddressesId;

        return $this;
    }

    public function getSalesOrderEmailAddressesId(): string
    {
        return $this->salesOrderEmailAddressesId;
    }

    public function setSalesOrderEmailAddressesId(string $salesOrderEmailAddressesId): self
    {
        $this->initialized['salesOrderEmailAddressesId'] = true;
        $this->salesOrderEmailAddressesId = $salesOrderEmailAddressesId;

        return $this;
    }

    public function getSalesPartner(): bool
    {
        return $this->salesPartner;
    }

    public function setSalesPartner(bool $salesPartner): self
    {
        $this->initialized['salesPartner'] = true;
        $this->salesPartner = $salesPartner;

        return $this;
    }

    public function getSalesPartnerDefaultCommissionFix(): string
    {
        return $this->salesPartnerDefaultCommissionFix;
    }

    public function setSalesPartnerDefaultCommissionFix(string $salesPartnerDefaultCommissionFix): self
    {
        $this->initialized['salesPartnerDefaultCommissionFix'] = true;
        $this->salesPartnerDefaultCommissionFix = $salesPartnerDefaultCommissionFix;

        return $this;
    }

    public function getSalesPartnerDefaultCommissionPercentage(): string
    {
        return $this->salesPartnerDefaultCommissionPercentage;
    }

    public function setSalesPartnerDefaultCommissionPercentage(string $salesPartnerDefaultCommissionPercentage): self
    {
        $this->initialized['salesPartnerDefaultCommissionPercentage'] = true;
        $this->salesPartnerDefaultCommissionPercentage = $salesPartnerDefaultCommissionPercentage;

        return $this;
    }

    public function getSalesPartnerDefaultCommissionType(): string
    {
        return $this->salesPartnerDefaultCommissionType;
    }

    public function setSalesPartnerDefaultCommissionType(string $salesPartnerDefaultCommissionType): self
    {
        $this->initialized['salesPartnerDefaultCommissionType'] = true;
        $this->salesPartnerDefaultCommissionType = $salesPartnerDefaultCommissionType;

        return $this;
    }

    public function getSectorId(): string
    {
        return $this->sectorId;
    }

    public function setSectorId(string $sectorId): self
    {
        $this->initialized['sectorId'] = true;
        $this->sectorId = $sectorId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSectorName(): string
    {
        return $this->sectorName;
    }

    /**
     * @deprecated
     */
    public function setSectorName(string $sectorName): self
    {
        $this->initialized['sectorName'] = true;
        $this->sectorName = $sectorName;

        return $this;
    }

    public function getSupplier(): bool
    {
        return $this->supplier;
    }

    public function setSupplier(bool $supplier): self
    {
        $this->initialized['supplier'] = true;
        $this->supplier = $supplier;

        return $this;
    }

    public function getSupplierCreditorAccountId(): string
    {
        return $this->supplierCreditorAccountId;
    }

    public function setSupplierCreditorAccountId(string $supplierCreditorAccountId): self
    {
        $this->initialized['supplierCreditorAccountId'] = true;
        $this->supplierCreditorAccountId = $supplierCreditorAccountId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSupplierCreditorAccountNumber(): string
    {
        return $this->supplierCreditorAccountNumber;
    }

    /**
     * @deprecated
     */
    public function setSupplierCreditorAccountNumber(string $supplierCreditorAccountNumber): self
    {
        $this->initialized['supplierCreditorAccountNumber'] = true;
        $this->supplierCreditorAccountNumber = $supplierCreditorAccountNumber;

        return $this;
    }

    public function getSupplierCreditorAccountingCodeId(): string
    {
        return $this->supplierCreditorAccountingCodeId;
    }

    public function setSupplierCreditorAccountingCodeId(string $supplierCreditorAccountingCodeId): self
    {
        $this->initialized['supplierCreditorAccountingCodeId'] = true;
        $this->supplierCreditorAccountingCodeId = $supplierCreditorAccountingCodeId;

        return $this;
    }

    public function getSupplierCustomerNumberAtSupplier(): string
    {
        return $this->supplierCustomerNumberAtSupplier;
    }

    public function setSupplierCustomerNumberAtSupplier(string $supplierCustomerNumberAtSupplier): self
    {
        $this->initialized['supplierCustomerNumberAtSupplier'] = true;
        $this->supplierCustomerNumberAtSupplier = $supplierCustomerNumberAtSupplier;

        return $this;
    }

    public function getSupplierDefaultShippingCarrierId(): string
    {
        return $this->supplierDefaultShippingCarrierId;
    }

    public function setSupplierDefaultShippingCarrierId(string $supplierDefaultShippingCarrierId): self
    {
        $this->initialized['supplierDefaultShippingCarrierId'] = true;
        $this->supplierDefaultShippingCarrierId = $supplierDefaultShippingCarrierId;

        return $this;
    }

    public function getSupplierInternalNote(): string
    {
        return $this->supplierInternalNote;
    }

    public function setSupplierInternalNote(string $supplierInternalNote): self
    {
        $this->initialized['supplierInternalNote'] = true;
        $this->supplierInternalNote = $supplierInternalNote;

        return $this;
    }

    public function getSupplierMinimumPurchaseOrderAmount(): string
    {
        return $this->supplierMinimumPurchaseOrderAmount;
    }

    public function setSupplierMinimumPurchaseOrderAmount(string $supplierMinimumPurchaseOrderAmount): self
    {
        $this->initialized['supplierMinimumPurchaseOrderAmount'] = true;
        $this->supplierMinimumPurchaseOrderAmount = $supplierMinimumPurchaseOrderAmount;

        return $this;
    }

    public function getSupplierNonStandardTaxId(): string
    {
        return $this->supplierNonStandardTaxId;
    }

    public function setSupplierNonStandardTaxId(string $supplierNonStandardTaxId): self
    {
        $this->initialized['supplierNonStandardTaxId'] = true;
        $this->supplierNonStandardTaxId = $supplierNonStandardTaxId;

        return $this;
    }

    public function getSupplierNumber(): string
    {
        return $this->supplierNumber;
    }

    public function setSupplierNumber(string $supplierNumber): self
    {
        $this->initialized['supplierNumber'] = true;
        $this->supplierNumber = $supplierNumber;

        return $this;
    }

    public function getSupplierNumberOld(): string
    {
        return $this->supplierNumberOld;
    }

    public function setSupplierNumberOld(string $supplierNumberOld): self
    {
        $this->initialized['supplierNumberOld'] = true;
        $this->supplierNumberOld = $supplierNumberOld;

        return $this;
    }

    public function getSupplierOrderBlock(): bool
    {
        return $this->supplierOrderBlock;
    }

    public function setSupplierOrderBlock(bool $supplierOrderBlock): self
    {
        $this->initialized['supplierOrderBlock'] = true;
        $this->supplierOrderBlock = $supplierOrderBlock;

        return $this;
    }

    public function getSupplierPaymentMethodId(): string
    {
        return $this->supplierPaymentMethodId;
    }

    public function setSupplierPaymentMethodId(string $supplierPaymentMethodId): self
    {
        $this->initialized['supplierPaymentMethodId'] = true;
        $this->supplierPaymentMethodId = $supplierPaymentMethodId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSupplierPaymentMethodName(): string
    {
        return $this->supplierPaymentMethodName;
    }

    /**
     * @deprecated
     */
    public function setSupplierPaymentMethodName(string $supplierPaymentMethodName): self
    {
        $this->initialized['supplierPaymentMethodName'] = true;
        $this->supplierPaymentMethodName = $supplierPaymentMethodName;

        return $this;
    }

    public function getSupplierShipmentMethodId(): string
    {
        return $this->supplierShipmentMethodId;
    }

    public function setSupplierShipmentMethodId(string $supplierShipmentMethodId): self
    {
        $this->initialized['supplierShipmentMethodId'] = true;
        $this->supplierShipmentMethodId = $supplierShipmentMethodId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSupplierShipmentMethodName(): string
    {
        return $this->supplierShipmentMethodName;
    }

    /**
     * @deprecated
     */
    public function setSupplierShipmentMethodName(string $supplierShipmentMethodName): self
    {
        $this->initialized['supplierShipmentMethodName'] = true;
        $this->supplierShipmentMethodName = $supplierShipmentMethodName;

        return $this;
    }

    public function getSupplierTermOfPaymentId(): string
    {
        return $this->supplierTermOfPaymentId;
    }

    public function setSupplierTermOfPaymentId(string $supplierTermOfPaymentId): self
    {
        $this->initialized['supplierTermOfPaymentId'] = true;
        $this->supplierTermOfPaymentId = $supplierTermOfPaymentId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSupplierTermOfPaymentName(): string
    {
        return $this->supplierTermOfPaymentName;
    }

    /**
     * @deprecated
     */
    public function setSupplierTermOfPaymentName(string $supplierTermOfPaymentName): self
    {
        $this->initialized['supplierTermOfPaymentName'] = true;
        $this->supplierTermOfPaymentName = $supplierTermOfPaymentName;

        return $this;
    }

    public function getTaxId(): string
    {
        return $this->taxId;
    }

    public function setTaxId(string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;

        return $this;
    }

    /**
     * @deprecated
     *
     * @return list<Entity>
     */
    public function getTopics(): array
    {
        return $this->topics;
    }

    /**
     * @param  list<Entity>  $topics
     *
     * @deprecated
     */
    public function setTopics(array $topics): self
    {
        $this->initialized['topics'] = true;
        $this->topics = $topics;

        return $this;
    }

    public function getVatIdentificationNumber(): string
    {
        return $this->vatIdentificationNumber;
    }

    public function setVatIdentificationNumber(string $vatIdentificationNumber): self
    {
        $this->initialized['vatIdentificationNumber'] = true;
        $this->vatIdentificationNumber = $vatIdentificationNumber;

        return $this;
    }

    public function getXRechnungLeitwegId(): string
    {
        return $this->xRechnungLeitwegId;
    }

    public function setXRechnungLeitwegId(string $xRechnungLeitwegId): self
    {
        $this->initialized['xRechnungLeitwegId'] = true;
        $this->xRechnungLeitwegId = $xRechnungLeitwegId;

        return $this;
    }
}
