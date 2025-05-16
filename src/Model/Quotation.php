<?php

namespace Webhubworks\WeclappApiCore\Model;

class Quotation extends \ArrayObject
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
     * @var string
     */
    protected $commercialLanguage;
    /**
     * 
     *
     * @var string
     */
    protected $creatorId;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @deprecated
     *
     * @var bool
     */
    protected $disableEmailTemplate;
    /**
     * 
     *
     * @var string
     */
    protected $recordComment;
    /**
     * 
     *
     * @var string
     */
    protected $recordFreeText;
    /**
     * 
     *
     * @var string
     */
    protected $recordOpening;
    /**
     * 
     *
     * @var bool
     */
    protected $sentToRecipient;
    /**
     * 
     *
     * @var list<string>
     */
    protected $tags;
    /**
     * 
     *
     * @var int
     */
    protected $currencyConversionDate;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $currencyConversionRate;
    /**
     * 
     *
     * @var string
     */
    protected $grossAmount;
    /**
     * 
     *
     * @var string
     */
    protected $grossAmountInCompanyCurrency;
    /**
     * 
     *
     * @var string
     */
    protected $headerDiscount;
    /**
     * 
     *
     * @var string
     */
    protected $headerSurcharge;
    /**
     * 
     *
     * @var string
     */
    protected $netAmount;
    /**
     * 
     *
     * @var string
     */
    protected $netAmountInCompanyCurrency;
    /**
     * 
     *
     * @var string
     */
    protected $nonStandardTaxId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $nonStandardTaxName;
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
    protected $recordCurrencyId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $recordCurrencyName;
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
    protected $commission;
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
    protected $customerId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $customerNumber;
    /**
     * 
     *
     * @var string
     */
    protected $dispatchCountryCode;
    /**
     * 
     *
     * @var bool
     */
    protected $factoring;
    /**
     * 
     *
     * @var int
     */
    protected $pricingDate;
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
    protected $salesChannel;
    /**
     * 
     *
     * @var int
     */
    protected $servicePeriodFrom;
    /**
     * 
     *
     * @var int
     */
    protected $servicePeriodTo;
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
    protected $defaultShippingCarrierId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $defaultShippingCarrierName;
    /**
     * 
     *
     * @var RecordAddress
     */
    protected $deliveryAddress;
    /**
     * 
     *
     * @var EmailAddresses
     */
    protected $deliveryEmailAddresses;
    /**
     * 
     *
     * @var RecordAddress
     */
    protected $invoiceAddress;
    /**
     * 
     *
     * @var int
     */
    protected $plannedDeliveryDate;
    /**
     * 
     *
     * @var int
     */
    protected $plannedShippingDate;
    /**
     * 
     *
     * @var RecordAddress
     */
    protected $recordAddress;
    /**
     * 
     *
     * @var EmailAddresses
     */
    protected $salesInvoiceEmailAddresses;
    /**
     * 
     *
     * @var bool
     */
    protected $activeVersion;
    /**
     * 
     *
     * @var int
     */
    protected $expectedSignatureDate;
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
    protected $mergedToQuotationId;
    /**
     * 
     *
     * @var string
     */
    protected $opportunityId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $opportunityNumber;
    /**
     * 
     *
     * @var string
     */
    protected $publicLink;
    /**
     * 
     *
     * @var int
     */
    protected $quotationDate;
    /**
     * 
     *
     * @var list<QuotationItem>
     */
    protected $quotationItems;
    /**
     * 
     *
     * @var string
     */
    protected $quotationNumber;
    /**
     * 
     *
     * @var string
     */
    protected $quotationType;
    /**
     * 
     *
     * @var int
     */
    protected $quotationVersion;
    /**
     * 
     *
     * @var bool
     */
    protected $recordCommentInheritance;
    /**
     * 
     *
     * @var EmailAddresses
     */
    protected $recordEmailAddresses;
    /**
     * 
     *
     * @var bool
     */
    protected $recordFreeTextInheritance;
    /**
     * 
     *
     * @var bool
     */
    protected $recordOpeningInheritance;
    /**
     * 
     *
     * @var string
     */
    protected $rejectionReason;
    /**
     * 
     *
     * @var int
     */
    protected $requestDate;
    /**
     * 
     *
     * @var EmailAddresses
     */
    protected $salesOrderEmailAddresses;
    /**
     * 
     *
     * @var int
     */
    protected $salesProbability;
    /**
     * 
     *
     * @var list<SalesStageHistory>
     */
    protected $salesStageHistory;
    /**
     * 
     *
     * @var string
     */
    protected $salesStageId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $salesStageName;
    /**
     * 
     *
     * @var list<QuotationShippingCostItem>
     */
    protected $shippingCostItems;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var list<QuotationStatusHistory>
     */
    protected $statusHistory;
    /**
     * 
     *
     * @var bool
     */
    protected $template;
    /**
     * 
     *
     * @var int
     */
    protected $validFrom;
    /**
     * 
     *
     * @var int
     */
    protected $validTo;
    /**
     * 
     *
     * @var string
     */
    protected $warehouseId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $warehouseName;
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
     * @return string
     */
    public function getCommercialLanguage(): string
    {
        return $this->commercialLanguage;
    }
    /**
     * 
     *
     * @param string $commercialLanguage
     *
     * @return self
     */
    public function setCommercialLanguage(string $commercialLanguage): self
    {
        $this->initialized['commercialLanguage'] = true;
        $this->commercialLanguage = $commercialLanguage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreatorId(): string
    {
        return $this->creatorId;
    }
    /**
     * 
     *
     * @param string $creatorId
     *
     * @return self
     */
    public function setCreatorId(string $creatorId): self
    {
        $this->initialized['creatorId'] = true;
        $this->creatorId = $creatorId;
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
     * @deprecated
     *
     * @return bool
     */
    public function getDisableEmailTemplate(): bool
    {
        return $this->disableEmailTemplate;
    }
    /**
     * 
     *
     * @param bool $disableEmailTemplate
     *
     * @deprecated
     *
     * @return self
     */
    public function setDisableEmailTemplate(bool $disableEmailTemplate): self
    {
        $this->initialized['disableEmailTemplate'] = true;
        $this->disableEmailTemplate = $disableEmailTemplate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRecordComment(): string
    {
        return $this->recordComment;
    }
    /**
     * 
     *
     * @param string $recordComment
     *
     * @return self
     */
    public function setRecordComment(string $recordComment): self
    {
        $this->initialized['recordComment'] = true;
        $this->recordComment = $recordComment;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRecordFreeText(): string
    {
        return $this->recordFreeText;
    }
    /**
     * 
     *
     * @param string $recordFreeText
     *
     * @return self
     */
    public function setRecordFreeText(string $recordFreeText): self
    {
        $this->initialized['recordFreeText'] = true;
        $this->recordFreeText = $recordFreeText;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRecordOpening(): string
    {
        return $this->recordOpening;
    }
    /**
     * 
     *
     * @param string $recordOpening
     *
     * @return self
     */
    public function setRecordOpening(string $recordOpening): self
    {
        $this->initialized['recordOpening'] = true;
        $this->recordOpening = $recordOpening;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSentToRecipient(): bool
    {
        return $this->sentToRecipient;
    }
    /**
     * 
     *
     * @param bool $sentToRecipient
     *
     * @return self
     */
    public function setSentToRecipient(bool $sentToRecipient): self
    {
        $this->initialized['sentToRecipient'] = true;
        $this->sentToRecipient = $sentToRecipient;
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
     * @return int
     */
    public function getCurrencyConversionDate(): int
    {
        return $this->currencyConversionDate;
    }
    /**
     * 
     *
     * @param int $currencyConversionDate
     *
     * @return self
     */
    public function setCurrencyConversionDate(int $currencyConversionDate): self
    {
        $this->initialized['currencyConversionDate'] = true;
        $this->currencyConversionDate = $currencyConversionDate;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getCurrencyConversionRate(): string
    {
        return $this->currencyConversionRate;
    }
    /**
     * 
     *
     * @param string $currencyConversionRate
     *
     * @deprecated
     *
     * @return self
     */
    public function setCurrencyConversionRate(string $currencyConversionRate): self
    {
        $this->initialized['currencyConversionRate'] = true;
        $this->currencyConversionRate = $currencyConversionRate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGrossAmount(): string
    {
        return $this->grossAmount;
    }
    /**
     * 
     *
     * @param string $grossAmount
     *
     * @return self
     */
    public function setGrossAmount(string $grossAmount): self
    {
        $this->initialized['grossAmount'] = true;
        $this->grossAmount = $grossAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGrossAmountInCompanyCurrency(): string
    {
        return $this->grossAmountInCompanyCurrency;
    }
    /**
     * 
     *
     * @param string $grossAmountInCompanyCurrency
     *
     * @return self
     */
    public function setGrossAmountInCompanyCurrency(string $grossAmountInCompanyCurrency): self
    {
        $this->initialized['grossAmountInCompanyCurrency'] = true;
        $this->grossAmountInCompanyCurrency = $grossAmountInCompanyCurrency;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHeaderDiscount(): string
    {
        return $this->headerDiscount;
    }
    /**
     * 
     *
     * @param string $headerDiscount
     *
     * @return self
     */
    public function setHeaderDiscount(string $headerDiscount): self
    {
        $this->initialized['headerDiscount'] = true;
        $this->headerDiscount = $headerDiscount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHeaderSurcharge(): string
    {
        return $this->headerSurcharge;
    }
    /**
     * 
     *
     * @param string $headerSurcharge
     *
     * @return self
     */
    public function setHeaderSurcharge(string $headerSurcharge): self
    {
        $this->initialized['headerSurcharge'] = true;
        $this->headerSurcharge = $headerSurcharge;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNetAmount(): string
    {
        return $this->netAmount;
    }
    /**
     * 
     *
     * @param string $netAmount
     *
     * @return self
     */
    public function setNetAmount(string $netAmount): self
    {
        $this->initialized['netAmount'] = true;
        $this->netAmount = $netAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNetAmountInCompanyCurrency(): string
    {
        return $this->netAmountInCompanyCurrency;
    }
    /**
     * 
     *
     * @param string $netAmountInCompanyCurrency
     *
     * @return self
     */
    public function setNetAmountInCompanyCurrency(string $netAmountInCompanyCurrency): self
    {
        $this->initialized['netAmountInCompanyCurrency'] = true;
        $this->netAmountInCompanyCurrency = $netAmountInCompanyCurrency;
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
     * @deprecated
     *
     * @return string
     */
    public function getNonStandardTaxName(): string
    {
        return $this->nonStandardTaxName;
    }
    /**
     * 
     *
     * @param string $nonStandardTaxName
     *
     * @deprecated
     *
     * @return self
     */
    public function setNonStandardTaxName(string $nonStandardTaxName): self
    {
        $this->initialized['nonStandardTaxName'] = true;
        $this->nonStandardTaxName = $nonStandardTaxName;
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
    public function getRecordCurrencyId(): string
    {
        return $this->recordCurrencyId;
    }
    /**
     * 
     *
     * @param string $recordCurrencyId
     *
     * @return self
     */
    public function setRecordCurrencyId(string $recordCurrencyId): self
    {
        $this->initialized['recordCurrencyId'] = true;
        $this->recordCurrencyId = $recordCurrencyId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getRecordCurrencyName(): string
    {
        return $this->recordCurrencyName;
    }
    /**
     * 
     *
     * @param string $recordCurrencyName
     *
     * @deprecated
     *
     * @return self
     */
    public function setRecordCurrencyName(string $recordCurrencyName): self
    {
        $this->initialized['recordCurrencyName'] = true;
        $this->recordCurrencyName = $recordCurrencyName;
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
    public function getCommission(): string
    {
        return $this->commission;
    }
    /**
     * 
     *
     * @param string $commission
     *
     * @return self
     */
    public function setCommission(string $commission): self
    {
        $this->initialized['commission'] = true;
        $this->commission = $commission;
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
    public function getCustomerId(): string
    {
        return $this->customerId;
    }
    /**
     * 
     *
     * @param string $customerId
     *
     * @return self
     */
    public function setCustomerId(string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
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
     * @deprecated
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
    public function getDispatchCountryCode(): string
    {
        return $this->dispatchCountryCode;
    }
    /**
     * 
     *
     * @param string $dispatchCountryCode
     *
     * @return self
     */
    public function setDispatchCountryCode(string $dispatchCountryCode): self
    {
        $this->initialized['dispatchCountryCode'] = true;
        $this->dispatchCountryCode = $dispatchCountryCode;
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
     * @return int
     */
    public function getPricingDate(): int
    {
        return $this->pricingDate;
    }
    /**
     * 
     *
     * @param int $pricingDate
     *
     * @return self
     */
    public function setPricingDate(int $pricingDate): self
    {
        $this->initialized['pricingDate'] = true;
        $this->pricingDate = $pricingDate;
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
    public function getSalesChannel(): string
    {
        return $this->salesChannel;
    }
    /**
     * 
     *
     * @param string $salesChannel
     *
     * @return self
     */
    public function setSalesChannel(string $salesChannel): self
    {
        $this->initialized['salesChannel'] = true;
        $this->salesChannel = $salesChannel;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getServicePeriodFrom(): int
    {
        return $this->servicePeriodFrom;
    }
    /**
     * 
     *
     * @param int $servicePeriodFrom
     *
     * @return self
     */
    public function setServicePeriodFrom(int $servicePeriodFrom): self
    {
        $this->initialized['servicePeriodFrom'] = true;
        $this->servicePeriodFrom = $servicePeriodFrom;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getServicePeriodTo(): int
    {
        return $this->servicePeriodTo;
    }
    /**
     * 
     *
     * @param int $servicePeriodTo
     *
     * @return self
     */
    public function setServicePeriodTo(int $servicePeriodTo): self
    {
        $this->initialized['servicePeriodTo'] = true;
        $this->servicePeriodTo = $servicePeriodTo;
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
    public function getDefaultShippingCarrierId(): string
    {
        return $this->defaultShippingCarrierId;
    }
    /**
     * 
     *
     * @param string $defaultShippingCarrierId
     *
     * @return self
     */
    public function setDefaultShippingCarrierId(string $defaultShippingCarrierId): self
    {
        $this->initialized['defaultShippingCarrierId'] = true;
        $this->defaultShippingCarrierId = $defaultShippingCarrierId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getDefaultShippingCarrierName(): string
    {
        return $this->defaultShippingCarrierName;
    }
    /**
     * 
     *
     * @param string $defaultShippingCarrierName
     *
     * @deprecated
     *
     * @return self
     */
    public function setDefaultShippingCarrierName(string $defaultShippingCarrierName): self
    {
        $this->initialized['defaultShippingCarrierName'] = true;
        $this->defaultShippingCarrierName = $defaultShippingCarrierName;
        return $this;
    }
    /**
     * 
     *
     * @return RecordAddress
     */
    public function getDeliveryAddress(): RecordAddress
    {
        return $this->deliveryAddress;
    }
    /**
     * 
     *
     * @param RecordAddress $deliveryAddress
     *
     * @return self
     */
    public function setDeliveryAddress(RecordAddress $deliveryAddress): self
    {
        $this->initialized['deliveryAddress'] = true;
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }
    /**
     * 
     *
     * @return EmailAddresses
     */
    public function getDeliveryEmailAddresses(): EmailAddresses
    {
        return $this->deliveryEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses $deliveryEmailAddresses
     *
     * @return self
     */
    public function setDeliveryEmailAddresses(EmailAddresses $deliveryEmailAddresses): self
    {
        $this->initialized['deliveryEmailAddresses'] = true;
        $this->deliveryEmailAddresses = $deliveryEmailAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return RecordAddress
     */
    public function getInvoiceAddress(): RecordAddress
    {
        return $this->invoiceAddress;
    }
    /**
     * 
     *
     * @param RecordAddress $invoiceAddress
     *
     * @return self
     */
    public function setInvoiceAddress(RecordAddress $invoiceAddress): self
    {
        $this->initialized['invoiceAddress'] = true;
        $this->invoiceAddress = $invoiceAddress;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlannedDeliveryDate(): int
    {
        return $this->plannedDeliveryDate;
    }
    /**
     * 
     *
     * @param int $plannedDeliveryDate
     *
     * @return self
     */
    public function setPlannedDeliveryDate(int $plannedDeliveryDate): self
    {
        $this->initialized['plannedDeliveryDate'] = true;
        $this->plannedDeliveryDate = $plannedDeliveryDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlannedShippingDate(): int
    {
        return $this->plannedShippingDate;
    }
    /**
     * 
     *
     * @param int $plannedShippingDate
     *
     * @return self
     */
    public function setPlannedShippingDate(int $plannedShippingDate): self
    {
        $this->initialized['plannedShippingDate'] = true;
        $this->plannedShippingDate = $plannedShippingDate;
        return $this;
    }
    /**
     * 
     *
     * @return RecordAddress
     */
    public function getRecordAddress(): RecordAddress
    {
        return $this->recordAddress;
    }
    /**
     * 
     *
     * @param RecordAddress $recordAddress
     *
     * @return self
     */
    public function setRecordAddress(RecordAddress $recordAddress): self
    {
        $this->initialized['recordAddress'] = true;
        $this->recordAddress = $recordAddress;
        return $this;
    }
    /**
     * 
     *
     * @return EmailAddresses
     */
    public function getSalesInvoiceEmailAddresses(): EmailAddresses
    {
        return $this->salesInvoiceEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses $salesInvoiceEmailAddresses
     *
     * @return self
     */
    public function setSalesInvoiceEmailAddresses(EmailAddresses $salesInvoiceEmailAddresses): self
    {
        $this->initialized['salesInvoiceEmailAddresses'] = true;
        $this->salesInvoiceEmailAddresses = $salesInvoiceEmailAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getActiveVersion(): bool
    {
        return $this->activeVersion;
    }
    /**
     * 
     *
     * @param bool $activeVersion
     *
     * @return self
     */
    public function setActiveVersion(bool $activeVersion): self
    {
        $this->initialized['activeVersion'] = true;
        $this->activeVersion = $activeVersion;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExpectedSignatureDate(): int
    {
        return $this->expectedSignatureDate;
    }
    /**
     * 
     *
     * @param int $expectedSignatureDate
     *
     * @return self
     */
    public function setExpectedSignatureDate(int $expectedSignatureDate): self
    {
        $this->initialized['expectedSignatureDate'] = true;
        $this->expectedSignatureDate = $expectedSignatureDate;
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
    public function getMergedToQuotationId(): string
    {
        return $this->mergedToQuotationId;
    }
    /**
     * 
     *
     * @param string $mergedToQuotationId
     *
     * @return self
     */
    public function setMergedToQuotationId(string $mergedToQuotationId): self
    {
        $this->initialized['mergedToQuotationId'] = true;
        $this->mergedToQuotationId = $mergedToQuotationId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOpportunityId(): string
    {
        return $this->opportunityId;
    }
    /**
     * 
     *
     * @param string $opportunityId
     *
     * @return self
     */
    public function setOpportunityId(string $opportunityId): self
    {
        $this->initialized['opportunityId'] = true;
        $this->opportunityId = $opportunityId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getOpportunityNumber(): string
    {
        return $this->opportunityNumber;
    }
    /**
     * 
     *
     * @param string $opportunityNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setOpportunityNumber(string $opportunityNumber): self
    {
        $this->initialized['opportunityNumber'] = true;
        $this->opportunityNumber = $opportunityNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPublicLink(): string
    {
        return $this->publicLink;
    }
    /**
     * 
     *
     * @param string $publicLink
     *
     * @return self
     */
    public function setPublicLink(string $publicLink): self
    {
        $this->initialized['publicLink'] = true;
        $this->publicLink = $publicLink;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getQuotationDate(): int
    {
        return $this->quotationDate;
    }
    /**
     * 
     *
     * @param int $quotationDate
     *
     * @return self
     */
    public function setQuotationDate(int $quotationDate): self
    {
        $this->initialized['quotationDate'] = true;
        $this->quotationDate = $quotationDate;
        return $this;
    }
    /**
     * 
     *
     * @return list<QuotationItem>
     */
    public function getQuotationItems(): array
    {
        return $this->quotationItems;
    }
    /**
     * 
     *
     * @param list<QuotationItem> $quotationItems
     *
     * @return self
     */
    public function setQuotationItems(array $quotationItems): self
    {
        $this->initialized['quotationItems'] = true;
        $this->quotationItems = $quotationItems;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQuotationNumber(): string
    {
        return $this->quotationNumber;
    }
    /**
     * 
     *
     * @param string $quotationNumber
     *
     * @return self
     */
    public function setQuotationNumber(string $quotationNumber): self
    {
        $this->initialized['quotationNumber'] = true;
        $this->quotationNumber = $quotationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQuotationType(): string
    {
        return $this->quotationType;
    }
    /**
     * 
     *
     * @param string $quotationType
     *
     * @return self
     */
    public function setQuotationType(string $quotationType): self
    {
        $this->initialized['quotationType'] = true;
        $this->quotationType = $quotationType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getQuotationVersion(): int
    {
        return $this->quotationVersion;
    }
    /**
     * 
     *
     * @param int $quotationVersion
     *
     * @return self
     */
    public function setQuotationVersion(int $quotationVersion): self
    {
        $this->initialized['quotationVersion'] = true;
        $this->quotationVersion = $quotationVersion;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRecordCommentInheritance(): bool
    {
        return $this->recordCommentInheritance;
    }
    /**
     * 
     *
     * @param bool $recordCommentInheritance
     *
     * @return self
     */
    public function setRecordCommentInheritance(bool $recordCommentInheritance): self
    {
        $this->initialized['recordCommentInheritance'] = true;
        $this->recordCommentInheritance = $recordCommentInheritance;
        return $this;
    }
    /**
     * 
     *
     * @return EmailAddresses
     */
    public function getRecordEmailAddresses(): EmailAddresses
    {
        return $this->recordEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses $recordEmailAddresses
     *
     * @return self
     */
    public function setRecordEmailAddresses(EmailAddresses $recordEmailAddresses): self
    {
        $this->initialized['recordEmailAddresses'] = true;
        $this->recordEmailAddresses = $recordEmailAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRecordFreeTextInheritance(): bool
    {
        return $this->recordFreeTextInheritance;
    }
    /**
     * 
     *
     * @param bool $recordFreeTextInheritance
     *
     * @return self
     */
    public function setRecordFreeTextInheritance(bool $recordFreeTextInheritance): self
    {
        $this->initialized['recordFreeTextInheritance'] = true;
        $this->recordFreeTextInheritance = $recordFreeTextInheritance;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRecordOpeningInheritance(): bool
    {
        return $this->recordOpeningInheritance;
    }
    /**
     * 
     *
     * @param bool $recordOpeningInheritance
     *
     * @return self
     */
    public function setRecordOpeningInheritance(bool $recordOpeningInheritance): self
    {
        $this->initialized['recordOpeningInheritance'] = true;
        $this->recordOpeningInheritance = $recordOpeningInheritance;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRejectionReason(): string
    {
        return $this->rejectionReason;
    }
    /**
     * 
     *
     * @param string $rejectionReason
     *
     * @return self
     */
    public function setRejectionReason(string $rejectionReason): self
    {
        $this->initialized['rejectionReason'] = true;
        $this->rejectionReason = $rejectionReason;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRequestDate(): int
    {
        return $this->requestDate;
    }
    /**
     * 
     *
     * @param int $requestDate
     *
     * @return self
     */
    public function setRequestDate(int $requestDate): self
    {
        $this->initialized['requestDate'] = true;
        $this->requestDate = $requestDate;
        return $this;
    }
    /**
     * 
     *
     * @return EmailAddresses
     */
    public function getSalesOrderEmailAddresses(): EmailAddresses
    {
        return $this->salesOrderEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses $salesOrderEmailAddresses
     *
     * @return self
     */
    public function setSalesOrderEmailAddresses(EmailAddresses $salesOrderEmailAddresses): self
    {
        $this->initialized['salesOrderEmailAddresses'] = true;
        $this->salesOrderEmailAddresses = $salesOrderEmailAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSalesProbability(): int
    {
        return $this->salesProbability;
    }
    /**
     * 
     *
     * @param int $salesProbability
     *
     * @return self
     */
    public function setSalesProbability(int $salesProbability): self
    {
        $this->initialized['salesProbability'] = true;
        $this->salesProbability = $salesProbability;
        return $this;
    }
    /**
     * 
     *
     * @return list<SalesStageHistory>
     */
    public function getSalesStageHistory(): array
    {
        return $this->salesStageHistory;
    }
    /**
     * 
     *
     * @param list<SalesStageHistory> $salesStageHistory
     *
     * @return self
     */
    public function setSalesStageHistory(array $salesStageHistory): self
    {
        $this->initialized['salesStageHistory'] = true;
        $this->salesStageHistory = $salesStageHistory;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalesStageId(): string
    {
        return $this->salesStageId;
    }
    /**
     * 
     *
     * @param string $salesStageId
     *
     * @return self
     */
    public function setSalesStageId(string $salesStageId): self
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
     * @return string
     */
    public function getSalesStageName(): string
    {
        return $this->salesStageName;
    }
    /**
     * 
     *
     * @param string $salesStageName
     *
     * @deprecated
     *
     * @return self
     */
    public function setSalesStageName(string $salesStageName): self
    {
        $this->initialized['salesStageName'] = true;
        $this->salesStageName = $salesStageName;
        return $this;
    }
    /**
     * 
     *
     * @return list<QuotationShippingCostItem>
     */
    public function getShippingCostItems(): array
    {
        return $this->shippingCostItems;
    }
    /**
     * 
     *
     * @param list<QuotationShippingCostItem> $shippingCostItems
     *
     * @return self
     */
    public function setShippingCostItems(array $shippingCostItems): self
    {
        $this->initialized['shippingCostItems'] = true;
        $this->shippingCostItems = $shippingCostItems;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return list<QuotationStatusHistory>
     */
    public function getStatusHistory(): array
    {
        return $this->statusHistory;
    }
    /**
     * 
     *
     * @param list<QuotationStatusHistory> $statusHistory
     *
     * @return self
     */
    public function setStatusHistory(array $statusHistory): self
    {
        $this->initialized['statusHistory'] = true;
        $this->statusHistory = $statusHistory;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getTemplate(): bool
    {
        return $this->template;
    }
    /**
     * 
     *
     * @param bool $template
     *
     * @return self
     */
    public function setTemplate(bool $template): self
    {
        $this->initialized['template'] = true;
        $this->template = $template;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getValidFrom(): int
    {
        return $this->validFrom;
    }
    /**
     * 
     *
     * @param int $validFrom
     *
     * @return self
     */
    public function setValidFrom(int $validFrom): self
    {
        $this->initialized['validFrom'] = true;
        $this->validFrom = $validFrom;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getValidTo(): int
    {
        return $this->validTo;
    }
    /**
     * 
     *
     * @param int $validTo
     *
     * @return self
     */
    public function setValidTo(int $validTo): self
    {
        $this->initialized['validTo'] = true;
        $this->validTo = $validTo;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWarehouseId(): string
    {
        return $this->warehouseId;
    }
    /**
     * 
     *
     * @param string $warehouseId
     *
     * @return self
     */
    public function setWarehouseId(string $warehouseId): self
    {
        $this->initialized['warehouseId'] = true;
        $this->warehouseId = $warehouseId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getWarehouseName(): string
    {
        return $this->warehouseName;
    }
    /**
     * 
     *
     * @param string $warehouseName
     *
     * @deprecated
     *
     * @return self
     */
    public function setWarehouseName(string $warehouseName): self
    {
        $this->initialized['warehouseName'] = true;
        $this->warehouseName = $warehouseName;
        return $this;
    }
}