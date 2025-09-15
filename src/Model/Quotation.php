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
     * @var string|null
     */
    protected $commercialLanguage;
    /**
     * 
     *
     * @var string|null
     */
    protected $creatorId;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var bool|null
     */
    protected $disableRecordEmailingRule;
    /**
     * 
     *
     * @var string|null
     */
    protected $recordComment;
    /**
     * 
     *
     * @var string|null
     */
    protected $recordFreeText;
    /**
     * 
     *
     * @var string|null
     */
    protected $recordOpening;
    /**
     * 
     *
     * @var bool|null
     */
    protected $sentToRecipient;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $tags;
    /**
     * 
     *
     * @var int|null
     */
    protected $currencyConversionDate;
    /**
     * 
     *
     * @var bool|null
     */
    protected $currencyConversionLocked;
    /**
     * 
     *
     * @var string|null
     */
    protected $currencyConversionRate;
    /**
     * 
     *
     * @var string|null
     */
    protected $grossAmount;
    /**
     * 
     *
     * @var string|null
     */
    protected $grossAmountInCompanyCurrency;
    /**
     * 
     *
     * @var string|null
     */
    protected $headerDiscount;
    /**
     * 
     *
     * @var string|null
     */
    protected $headerSurcharge;
    /**
     * 
     *
     * @var string|null
     */
    protected $netAmount;
    /**
     * 
     *
     * @var string|null
     */
    protected $netAmountInCompanyCurrency;
    /**
     * 
     *
     * @var string|null
     */
    protected $nonStandardTaxId;
    /**
     * 
     *
     * @var string|null
     */
    protected $paymentMethodId;
    /**
     * 
     *
     * @var string|null
     */
    protected $recordCurrencyId;
    /**
     * 
     *
     * @var string|null
     */
    protected $termOfPaymentId;
    /**
     * 
     *
     * @var string|null
     */
    protected $commission;
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
    protected $customerId;
    /**
     * 
     *
     * @var string|null
     */
    protected $dispatchCountryCode;
    /**
     * 
     *
     * @var bool|null
     */
    protected $factoring;
    /**
     * 
     *
     * @var int|null
     */
    protected $pricingDate;
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
    protected $salesChannel;
    /**
     * 
     *
     * @var int|null
     */
    protected $servicePeriodFrom;
    /**
     * 
     *
     * @var int|null
     */
    protected $servicePeriodTo;
    /**
     * 
     *
     * @var string|null
     */
    protected $shipmentMethodId;
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultShippingCarrierId;
    /**
     * 
     *
     * @var RecordAddress|null
     */
    protected $deliveryAddress;
    /**
     * 
     *
     * @var EmailAddresses|null
     */
    protected $deliveryEmailAddresses;
    /**
     * 
     *
     * @var RecordAddress|null
     */
    protected $invoiceAddress;
    /**
     * 
     *
     * @var int|null
     */
    protected $plannedDeliveryDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $plannedShippingDate;
    /**
     * 
     *
     * @var RecordAddress|null
     */
    protected $recordAddress;
    /**
     * 
     *
     * @var EmailAddresses|null
     */
    protected $salesInvoiceEmailAddresses;
    /**
     * 
     *
     * @var bool|null
     */
    protected $activeVersion;
    /**
     * 
     *
     * @var int|null
     */
    protected $expectedSignatureDate;
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
    protected $mergedToQuotationId;
    /**
     * 
     *
     * @var string|null
     */
    protected $opportunityId;
    /**
     * 
     *
     * @var string|null
     */
    protected $publicLink;
    /**
     * 
     *
     * @var int|null
     */
    protected $quotationDate;
    /**
     * 
     *
     * @var list<QuotationItem>|null
     */
    protected $quotationItems;
    /**
     * 
     *
     * @var string|null
     */
    protected $quotationNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $quotationType;
    /**
     * 
     *
     * @var int|null
     */
    protected $quotationVersion;
    /**
     * 
     *
     * @var bool|null
     */
    protected $recordCommentInheritance;
    /**
     * 
     *
     * @var EmailAddresses|null
     */
    protected $recordEmailAddresses;
    /**
     * 
     *
     * @var bool|null
     */
    protected $recordFreeTextInheritance;
    /**
     * 
     *
     * @var bool|null
     */
    protected $recordOpeningInheritance;
    /**
     * 
     *
     * @var string|null
     */
    protected $rejectionReason;
    /**
     * 
     *
     * @var int|null
     */
    protected $requestDate;
    /**
     * 
     *
     * @var EmailAddresses|null
     */
    protected $salesOrderEmailAddresses;
    /**
     * 
     *
     * @var int|null
     */
    protected $salesProbability;
    /**
     * 
     *
     * @var list<SalesStageHistory>|null
     */
    protected $salesStageHistory;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesStageId;
    /**
     * 
     *
     * @var list<QuotationShippingCostItem>|null
     */
    protected $shippingCostItems;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var list<QuotationStatusHistory>|null
     */
    protected $statusHistory;
    /**
     * 
     *
     * @var bool|null
     */
    protected $template;
    /**
     * 
     *
     * @var int|null
     */
    protected $validFrom;
    /**
     * 
     *
     * @var int|null
     */
    protected $validTo;
    /**
     * 
     *
     * @var string|null
     */
    protected $warehouseId;
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
     * @return string|null
     */
    public function getCommercialLanguage(): ?string
    {
        return $this->commercialLanguage;
    }
    /**
     * 
     *
     * @param string|null $commercialLanguage
     *
     * @return self
     */
    public function setCommercialLanguage(?string $commercialLanguage): self
    {
        $this->initialized['commercialLanguage'] = true;
        $this->commercialLanguage = $commercialLanguage;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreatorId(): ?string
    {
        return $this->creatorId;
    }
    /**
     * 
     *
     * @param string|null $creatorId
     *
     * @return self
     */
    public function setCreatorId(?string $creatorId): self
    {
        $this->initialized['creatorId'] = true;
        $this->creatorId = $creatorId;
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
     * @return bool|null
     */
    public function getDisableRecordEmailingRule(): ?bool
    {
        return $this->disableRecordEmailingRule;
    }
    /**
     * 
     *
     * @param bool|null $disableRecordEmailingRule
     *
     * @return self
     */
    public function setDisableRecordEmailingRule(?bool $disableRecordEmailingRule): self
    {
        $this->initialized['disableRecordEmailingRule'] = true;
        $this->disableRecordEmailingRule = $disableRecordEmailingRule;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecordComment(): ?string
    {
        return $this->recordComment;
    }
    /**
     * 
     *
     * @param string|null $recordComment
     *
     * @return self
     */
    public function setRecordComment(?string $recordComment): self
    {
        $this->initialized['recordComment'] = true;
        $this->recordComment = $recordComment;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecordFreeText(): ?string
    {
        return $this->recordFreeText;
    }
    /**
     * 
     *
     * @param string|null $recordFreeText
     *
     * @return self
     */
    public function setRecordFreeText(?string $recordFreeText): self
    {
        $this->initialized['recordFreeText'] = true;
        $this->recordFreeText = $recordFreeText;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecordOpening(): ?string
    {
        return $this->recordOpening;
    }
    /**
     * 
     *
     * @param string|null $recordOpening
     *
     * @return self
     */
    public function setRecordOpening(?string $recordOpening): self
    {
        $this->initialized['recordOpening'] = true;
        $this->recordOpening = $recordOpening;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSentToRecipient(): ?bool
    {
        return $this->sentToRecipient;
    }
    /**
     * 
     *
     * @param bool|null $sentToRecipient
     *
     * @return self
     */
    public function setSentToRecipient(?bool $sentToRecipient): self
    {
        $this->initialized['sentToRecipient'] = true;
        $this->sentToRecipient = $sentToRecipient;
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
     * @return int|null
     */
    public function getCurrencyConversionDate(): ?int
    {
        return $this->currencyConversionDate;
    }
    /**
     * 
     *
     * @param int|null $currencyConversionDate
     *
     * @return self
     */
    public function setCurrencyConversionDate(?int $currencyConversionDate): self
    {
        $this->initialized['currencyConversionDate'] = true;
        $this->currencyConversionDate = $currencyConversionDate;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCurrencyConversionLocked(): ?bool
    {
        return $this->currencyConversionLocked;
    }
    /**
     * 
     *
     * @param bool|null $currencyConversionLocked
     *
     * @return self
     */
    public function setCurrencyConversionLocked(?bool $currencyConversionLocked): self
    {
        $this->initialized['currencyConversionLocked'] = true;
        $this->currencyConversionLocked = $currencyConversionLocked;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCurrencyConversionRate(): ?string
    {
        return $this->currencyConversionRate;
    }
    /**
     * 
     *
     * @param string|null $currencyConversionRate
     *
     * @return self
     */
    public function setCurrencyConversionRate(?string $currencyConversionRate): self
    {
        $this->initialized['currencyConversionRate'] = true;
        $this->currencyConversionRate = $currencyConversionRate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGrossAmount(): ?string
    {
        return $this->grossAmount;
    }
    /**
     * 
     *
     * @param string|null $grossAmount
     *
     * @return self
     */
    public function setGrossAmount(?string $grossAmount): self
    {
        $this->initialized['grossAmount'] = true;
        $this->grossAmount = $grossAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGrossAmountInCompanyCurrency(): ?string
    {
        return $this->grossAmountInCompanyCurrency;
    }
    /**
     * 
     *
     * @param string|null $grossAmountInCompanyCurrency
     *
     * @return self
     */
    public function setGrossAmountInCompanyCurrency(?string $grossAmountInCompanyCurrency): self
    {
        $this->initialized['grossAmountInCompanyCurrency'] = true;
        $this->grossAmountInCompanyCurrency = $grossAmountInCompanyCurrency;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHeaderDiscount(): ?string
    {
        return $this->headerDiscount;
    }
    /**
     * 
     *
     * @param string|null $headerDiscount
     *
     * @return self
     */
    public function setHeaderDiscount(?string $headerDiscount): self
    {
        $this->initialized['headerDiscount'] = true;
        $this->headerDiscount = $headerDiscount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHeaderSurcharge(): ?string
    {
        return $this->headerSurcharge;
    }
    /**
     * 
     *
     * @param string|null $headerSurcharge
     *
     * @return self
     */
    public function setHeaderSurcharge(?string $headerSurcharge): self
    {
        $this->initialized['headerSurcharge'] = true;
        $this->headerSurcharge = $headerSurcharge;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNetAmount(): ?string
    {
        return $this->netAmount;
    }
    /**
     * 
     *
     * @param string|null $netAmount
     *
     * @return self
     */
    public function setNetAmount(?string $netAmount): self
    {
        $this->initialized['netAmount'] = true;
        $this->netAmount = $netAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNetAmountInCompanyCurrency(): ?string
    {
        return $this->netAmountInCompanyCurrency;
    }
    /**
     * 
     *
     * @param string|null $netAmountInCompanyCurrency
     *
     * @return self
     */
    public function setNetAmountInCompanyCurrency(?string $netAmountInCompanyCurrency): self
    {
        $this->initialized['netAmountInCompanyCurrency'] = true;
        $this->netAmountInCompanyCurrency = $netAmountInCompanyCurrency;
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
     * @return string|null
     */
    public function getRecordCurrencyId(): ?string
    {
        return $this->recordCurrencyId;
    }
    /**
     * 
     *
     * @param string|null $recordCurrencyId
     *
     * @return self
     */
    public function setRecordCurrencyId(?string $recordCurrencyId): self
    {
        $this->initialized['recordCurrencyId'] = true;
        $this->recordCurrencyId = $recordCurrencyId;
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
     * @return string|null
     */
    public function getCommission(): ?string
    {
        return $this->commission;
    }
    /**
     * 
     *
     * @param string|null $commission
     *
     * @return self
     */
    public function setCommission(?string $commission): self
    {
        $this->initialized['commission'] = true;
        $this->commission = $commission;
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
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * 
     *
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDispatchCountryCode(): ?string
    {
        return $this->dispatchCountryCode;
    }
    /**
     * 
     *
     * @param string|null $dispatchCountryCode
     *
     * @return self
     */
    public function setDispatchCountryCode(?string $dispatchCountryCode): self
    {
        $this->initialized['dispatchCountryCode'] = true;
        $this->dispatchCountryCode = $dispatchCountryCode;
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
     * @return int|null
     */
    public function getPricingDate(): ?int
    {
        return $this->pricingDate;
    }
    /**
     * 
     *
     * @param int|null $pricingDate
     *
     * @return self
     */
    public function setPricingDate(?int $pricingDate): self
    {
        $this->initialized['pricingDate'] = true;
        $this->pricingDate = $pricingDate;
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
     * @return int|null
     */
    public function getServicePeriodFrom(): ?int
    {
        return $this->servicePeriodFrom;
    }
    /**
     * 
     *
     * @param int|null $servicePeriodFrom
     *
     * @return self
     */
    public function setServicePeriodFrom(?int $servicePeriodFrom): self
    {
        $this->initialized['servicePeriodFrom'] = true;
        $this->servicePeriodFrom = $servicePeriodFrom;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getServicePeriodTo(): ?int
    {
        return $this->servicePeriodTo;
    }
    /**
     * 
     *
     * @param int|null $servicePeriodTo
     *
     * @return self
     */
    public function setServicePeriodTo(?int $servicePeriodTo): self
    {
        $this->initialized['servicePeriodTo'] = true;
        $this->servicePeriodTo = $servicePeriodTo;
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
     * @return string|null
     */
    public function getDefaultShippingCarrierId(): ?string
    {
        return $this->defaultShippingCarrierId;
    }
    /**
     * 
     *
     * @param string|null $defaultShippingCarrierId
     *
     * @return self
     */
    public function setDefaultShippingCarrierId(?string $defaultShippingCarrierId): self
    {
        $this->initialized['defaultShippingCarrierId'] = true;
        $this->defaultShippingCarrierId = $defaultShippingCarrierId;
        return $this;
    }
    /**
     * 
     *
     * @return RecordAddress|null
     */
    public function getDeliveryAddress(): ?RecordAddress
    {
        return $this->deliveryAddress;
    }
    /**
     * 
     *
     * @param RecordAddress|null $deliveryAddress
     *
     * @return self
     */
    public function setDeliveryAddress(?RecordAddress $deliveryAddress): self
    {
        $this->initialized['deliveryAddress'] = true;
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }
    /**
     * 
     *
     * @return EmailAddresses|null
     */
    public function getDeliveryEmailAddresses(): ?EmailAddresses
    {
        return $this->deliveryEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses|null $deliveryEmailAddresses
     *
     * @return self
     */
    public function setDeliveryEmailAddresses(?EmailAddresses $deliveryEmailAddresses): self
    {
        $this->initialized['deliveryEmailAddresses'] = true;
        $this->deliveryEmailAddresses = $deliveryEmailAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return RecordAddress|null
     */
    public function getInvoiceAddress(): ?RecordAddress
    {
        return $this->invoiceAddress;
    }
    /**
     * 
     *
     * @param RecordAddress|null $invoiceAddress
     *
     * @return self
     */
    public function setInvoiceAddress(?RecordAddress $invoiceAddress): self
    {
        $this->initialized['invoiceAddress'] = true;
        $this->invoiceAddress = $invoiceAddress;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlannedDeliveryDate(): ?int
    {
        return $this->plannedDeliveryDate;
    }
    /**
     * 
     *
     * @param int|null $plannedDeliveryDate
     *
     * @return self
     */
    public function setPlannedDeliveryDate(?int $plannedDeliveryDate): self
    {
        $this->initialized['plannedDeliveryDate'] = true;
        $this->plannedDeliveryDate = $plannedDeliveryDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlannedShippingDate(): ?int
    {
        return $this->plannedShippingDate;
    }
    /**
     * 
     *
     * @param int|null $plannedShippingDate
     *
     * @return self
     */
    public function setPlannedShippingDate(?int $plannedShippingDate): self
    {
        $this->initialized['plannedShippingDate'] = true;
        $this->plannedShippingDate = $plannedShippingDate;
        return $this;
    }
    /**
     * 
     *
     * @return RecordAddress|null
     */
    public function getRecordAddress(): ?RecordAddress
    {
        return $this->recordAddress;
    }
    /**
     * 
     *
     * @param RecordAddress|null $recordAddress
     *
     * @return self
     */
    public function setRecordAddress(?RecordAddress $recordAddress): self
    {
        $this->initialized['recordAddress'] = true;
        $this->recordAddress = $recordAddress;
        return $this;
    }
    /**
     * 
     *
     * @return EmailAddresses|null
     */
    public function getSalesInvoiceEmailAddresses(): ?EmailAddresses
    {
        return $this->salesInvoiceEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses|null $salesInvoiceEmailAddresses
     *
     * @return self
     */
    public function setSalesInvoiceEmailAddresses(?EmailAddresses $salesInvoiceEmailAddresses): self
    {
        $this->initialized['salesInvoiceEmailAddresses'] = true;
        $this->salesInvoiceEmailAddresses = $salesInvoiceEmailAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getActiveVersion(): ?bool
    {
        return $this->activeVersion;
    }
    /**
     * 
     *
     * @param bool|null $activeVersion
     *
     * @return self
     */
    public function setActiveVersion(?bool $activeVersion): self
    {
        $this->initialized['activeVersion'] = true;
        $this->activeVersion = $activeVersion;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExpectedSignatureDate(): ?int
    {
        return $this->expectedSignatureDate;
    }
    /**
     * 
     *
     * @param int|null $expectedSignatureDate
     *
     * @return self
     */
    public function setExpectedSignatureDate(?int $expectedSignatureDate): self
    {
        $this->initialized['expectedSignatureDate'] = true;
        $this->expectedSignatureDate = $expectedSignatureDate;
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
    public function getMergedToQuotationId(): ?string
    {
        return $this->mergedToQuotationId;
    }
    /**
     * 
     *
     * @param string|null $mergedToQuotationId
     *
     * @return self
     */
    public function setMergedToQuotationId(?string $mergedToQuotationId): self
    {
        $this->initialized['mergedToQuotationId'] = true;
        $this->mergedToQuotationId = $mergedToQuotationId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOpportunityId(): ?string
    {
        return $this->opportunityId;
    }
    /**
     * 
     *
     * @param string|null $opportunityId
     *
     * @return self
     */
    public function setOpportunityId(?string $opportunityId): self
    {
        $this->initialized['opportunityId'] = true;
        $this->opportunityId = $opportunityId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPublicLink(): ?string
    {
        return $this->publicLink;
    }
    /**
     * 
     *
     * @param string|null $publicLink
     *
     * @return self
     */
    public function setPublicLink(?string $publicLink): self
    {
        $this->initialized['publicLink'] = true;
        $this->publicLink = $publicLink;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getQuotationDate(): ?int
    {
        return $this->quotationDate;
    }
    /**
     * 
     *
     * @param int|null $quotationDate
     *
     * @return self
     */
    public function setQuotationDate(?int $quotationDate): self
    {
        $this->initialized['quotationDate'] = true;
        $this->quotationDate = $quotationDate;
        return $this;
    }
    /**
     * 
     *
     * @return list<QuotationItem>|null
     */
    public function getQuotationItems(): ?array
    {
        return $this->quotationItems;
    }
    /**
     * 
     *
     * @param list<QuotationItem>|null $quotationItems
     *
     * @return self
     */
    public function setQuotationItems(?array $quotationItems): self
    {
        $this->initialized['quotationItems'] = true;
        $this->quotationItems = $quotationItems;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getQuotationNumber(): ?string
    {
        return $this->quotationNumber;
    }
    /**
     * 
     *
     * @param string|null $quotationNumber
     *
     * @return self
     */
    public function setQuotationNumber(?string $quotationNumber): self
    {
        $this->initialized['quotationNumber'] = true;
        $this->quotationNumber = $quotationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getQuotationType(): ?string
    {
        return $this->quotationType;
    }
    /**
     * 
     *
     * @param string|null $quotationType
     *
     * @return self
     */
    public function setQuotationType(?string $quotationType): self
    {
        $this->initialized['quotationType'] = true;
        $this->quotationType = $quotationType;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getQuotationVersion(): ?int
    {
        return $this->quotationVersion;
    }
    /**
     * 
     *
     * @param int|null $quotationVersion
     *
     * @return self
     */
    public function setQuotationVersion(?int $quotationVersion): self
    {
        $this->initialized['quotationVersion'] = true;
        $this->quotationVersion = $quotationVersion;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getRecordCommentInheritance(): ?bool
    {
        return $this->recordCommentInheritance;
    }
    /**
     * 
     *
     * @param bool|null $recordCommentInheritance
     *
     * @return self
     */
    public function setRecordCommentInheritance(?bool $recordCommentInheritance): self
    {
        $this->initialized['recordCommentInheritance'] = true;
        $this->recordCommentInheritance = $recordCommentInheritance;
        return $this;
    }
    /**
     * 
     *
     * @return EmailAddresses|null
     */
    public function getRecordEmailAddresses(): ?EmailAddresses
    {
        return $this->recordEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses|null $recordEmailAddresses
     *
     * @return self
     */
    public function setRecordEmailAddresses(?EmailAddresses $recordEmailAddresses): self
    {
        $this->initialized['recordEmailAddresses'] = true;
        $this->recordEmailAddresses = $recordEmailAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getRecordFreeTextInheritance(): ?bool
    {
        return $this->recordFreeTextInheritance;
    }
    /**
     * 
     *
     * @param bool|null $recordFreeTextInheritance
     *
     * @return self
     */
    public function setRecordFreeTextInheritance(?bool $recordFreeTextInheritance): self
    {
        $this->initialized['recordFreeTextInheritance'] = true;
        $this->recordFreeTextInheritance = $recordFreeTextInheritance;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getRecordOpeningInheritance(): ?bool
    {
        return $this->recordOpeningInheritance;
    }
    /**
     * 
     *
     * @param bool|null $recordOpeningInheritance
     *
     * @return self
     */
    public function setRecordOpeningInheritance(?bool $recordOpeningInheritance): self
    {
        $this->initialized['recordOpeningInheritance'] = true;
        $this->recordOpeningInheritance = $recordOpeningInheritance;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRejectionReason(): ?string
    {
        return $this->rejectionReason;
    }
    /**
     * 
     *
     * @param string|null $rejectionReason
     *
     * @return self
     */
    public function setRejectionReason(?string $rejectionReason): self
    {
        $this->initialized['rejectionReason'] = true;
        $this->rejectionReason = $rejectionReason;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRequestDate(): ?int
    {
        return $this->requestDate;
    }
    /**
     * 
     *
     * @param int|null $requestDate
     *
     * @return self
     */
    public function setRequestDate(?int $requestDate): self
    {
        $this->initialized['requestDate'] = true;
        $this->requestDate = $requestDate;
        return $this;
    }
    /**
     * 
     *
     * @return EmailAddresses|null
     */
    public function getSalesOrderEmailAddresses(): ?EmailAddresses
    {
        return $this->salesOrderEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses|null $salesOrderEmailAddresses
     *
     * @return self
     */
    public function setSalesOrderEmailAddresses(?EmailAddresses $salesOrderEmailAddresses): self
    {
        $this->initialized['salesOrderEmailAddresses'] = true;
        $this->salesOrderEmailAddresses = $salesOrderEmailAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSalesProbability(): ?int
    {
        return $this->salesProbability;
    }
    /**
     * 
     *
     * @param int|null $salesProbability
     *
     * @return self
     */
    public function setSalesProbability(?int $salesProbability): self
    {
        $this->initialized['salesProbability'] = true;
        $this->salesProbability = $salesProbability;
        return $this;
    }
    /**
     * 
     *
     * @return list<SalesStageHistory>|null
     */
    public function getSalesStageHistory(): ?array
    {
        return $this->salesStageHistory;
    }
    /**
     * 
     *
     * @param list<SalesStageHistory>|null $salesStageHistory
     *
     * @return self
     */
    public function setSalesStageHistory(?array $salesStageHistory): self
    {
        $this->initialized['salesStageHistory'] = true;
        $this->salesStageHistory = $salesStageHistory;
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
     * @return list<QuotationShippingCostItem>|null
     */
    public function getShippingCostItems(): ?array
    {
        return $this->shippingCostItems;
    }
    /**
     * 
     *
     * @param list<QuotationShippingCostItem>|null $shippingCostItems
     *
     * @return self
     */
    public function setShippingCostItems(?array $shippingCostItems): self
    {
        $this->initialized['shippingCostItems'] = true;
        $this->shippingCostItems = $shippingCostItems;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return list<QuotationStatusHistory>|null
     */
    public function getStatusHistory(): ?array
    {
        return $this->statusHistory;
    }
    /**
     * 
     *
     * @param list<QuotationStatusHistory>|null $statusHistory
     *
     * @return self
     */
    public function setStatusHistory(?array $statusHistory): self
    {
        $this->initialized['statusHistory'] = true;
        $this->statusHistory = $statusHistory;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getTemplate(): ?bool
    {
        return $this->template;
    }
    /**
     * 
     *
     * @param bool|null $template
     *
     * @return self
     */
    public function setTemplate(?bool $template): self
    {
        $this->initialized['template'] = true;
        $this->template = $template;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getValidFrom(): ?int
    {
        return $this->validFrom;
    }
    /**
     * 
     *
     * @param int|null $validFrom
     *
     * @return self
     */
    public function setValidFrom(?int $validFrom): self
    {
        $this->initialized['validFrom'] = true;
        $this->validFrom = $validFrom;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getValidTo(): ?int
    {
        return $this->validTo;
    }
    /**
     * 
     *
     * @param int|null $validTo
     *
     * @return self
     */
    public function setValidTo(?int $validTo): self
    {
        $this->initialized['validTo'] = true;
        $this->validTo = $validTo;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWarehouseId(): ?string
    {
        return $this->warehouseId;
    }
    /**
     * 
     *
     * @param string|null $warehouseId
     *
     * @return self
     */
    public function setWarehouseId(?string $warehouseId): self
    {
        $this->initialized['warehouseId'] = true;
        $this->warehouseId = $warehouseId;
        return $this;
    }
}