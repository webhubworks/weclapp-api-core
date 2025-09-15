<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesInvoice extends \ArrayObject
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
     * @var int|null
     */
    protected $bookingDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $bookingText;
    /**
     * 
     *
     * @var int|null
     */
    protected $cancellationDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $cancellationNumber;
    /**
     * 
     *
     * @var bool|null
     */
    protected $cancellationSlipCommissionBlock;
    /**
     * 
     *
     * @var bool|null
     */
    protected $cancellationSlipCommissionSettlementDone;
    /**
     * 
     *
     * @var string|null
     */
    protected $collectiveInvoicePositionPrintType;
    /**
     * 
     *
     * @var bool|null
     */
    protected $commissionBlock;
    /**
     * 
     *
     * @var bool|null
     */
    protected $commissionSettlementDone;
    /**
     * 
     *
     * @var string|null
     */
    protected $costCenterId;
    /**
     * 
     *
     * @var string|null
     */
    protected $costTypeId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $creditResetsOrderState;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerHabitualExporterLetterOfIntentId;
    /**
     * 
     *
     * @var RecordAddress|null
     */
    protected $deliveryAddress;
    /**
     * 
     *
     * @var int|null
     */
    protected $deliveryDate;
    /**
     * 
     *
     * @var bool|null
     */
    protected $directDebitFileCreated;
    /**
     * 
     *
     * @var int|null
     */
    protected $directDebitFileLatestDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $dueDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $dunningBlockDateUntilDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $dunningBlockNote;
    /**
     * 
     *
     * @var string|null
     */
    protected $dunningBlockState;
    /**
     * 
     *
     * @var int|null
     */
    protected $invoiceDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $invoiceNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $orderNumberAtCustomer;
    /**
     * 
     *
     * @var bool|null
     */
    protected $paid;
    /**
     * 
     *
     * @var string|null
     */
    protected $paymentStatus;
    /**
     * 
     *
     * @var string|null
     */
    protected $precedingSalesInvoiceId;
    /**
     * 
     *
     * @var RecordAddress|null
     */
    protected $recordAddress;
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
     * @var list<SalesInvoiceItem>|null
     */
    protected $salesInvoiceItems;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesInvoiceType;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesOrderId;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $salesOrders;
    /**
     * 
     *
     * @var string|null
     */
    protected $sepaDirectDebitMandateId;
    /**
     * 
     *
     * @var list<SalesInvoiceShippingCostItem>|null
     */
    protected $shippingCostItems;
    /**
     * 
     *
     * @var int|null
     */
    protected $shippingDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var list<SalesInvoiceStatusHistory>|null
     */
    protected $statusHistory;
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
     * @return int|null
     */
    public function getBookingDate(): ?int
    {
        return $this->bookingDate;
    }
    /**
     * 
     *
     * @param int|null $bookingDate
     *
     * @return self
     */
    public function setBookingDate(?int $bookingDate): self
    {
        $this->initialized['bookingDate'] = true;
        $this->bookingDate = $bookingDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBookingText(): ?string
    {
        return $this->bookingText;
    }
    /**
     * 
     *
     * @param string|null $bookingText
     *
     * @return self
     */
    public function setBookingText(?string $bookingText): self
    {
        $this->initialized['bookingText'] = true;
        $this->bookingText = $bookingText;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCancellationDate(): ?int
    {
        return $this->cancellationDate;
    }
    /**
     * 
     *
     * @param int|null $cancellationDate
     *
     * @return self
     */
    public function setCancellationDate(?int $cancellationDate): self
    {
        $this->initialized['cancellationDate'] = true;
        $this->cancellationDate = $cancellationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCancellationNumber(): ?string
    {
        return $this->cancellationNumber;
    }
    /**
     * 
     *
     * @param string|null $cancellationNumber
     *
     * @return self
     */
    public function setCancellationNumber(?string $cancellationNumber): self
    {
        $this->initialized['cancellationNumber'] = true;
        $this->cancellationNumber = $cancellationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCancellationSlipCommissionBlock(): ?bool
    {
        return $this->cancellationSlipCommissionBlock;
    }
    /**
     * 
     *
     * @param bool|null $cancellationSlipCommissionBlock
     *
     * @return self
     */
    public function setCancellationSlipCommissionBlock(?bool $cancellationSlipCommissionBlock): self
    {
        $this->initialized['cancellationSlipCommissionBlock'] = true;
        $this->cancellationSlipCommissionBlock = $cancellationSlipCommissionBlock;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCancellationSlipCommissionSettlementDone(): ?bool
    {
        return $this->cancellationSlipCommissionSettlementDone;
    }
    /**
     * 
     *
     * @param bool|null $cancellationSlipCommissionSettlementDone
     *
     * @return self
     */
    public function setCancellationSlipCommissionSettlementDone(?bool $cancellationSlipCommissionSettlementDone): self
    {
        $this->initialized['cancellationSlipCommissionSettlementDone'] = true;
        $this->cancellationSlipCommissionSettlementDone = $cancellationSlipCommissionSettlementDone;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCollectiveInvoicePositionPrintType(): ?string
    {
        return $this->collectiveInvoicePositionPrintType;
    }
    /**
     * 
     *
     * @param string|null $collectiveInvoicePositionPrintType
     *
     * @return self
     */
    public function setCollectiveInvoicePositionPrintType(?string $collectiveInvoicePositionPrintType): self
    {
        $this->initialized['collectiveInvoicePositionPrintType'] = true;
        $this->collectiveInvoicePositionPrintType = $collectiveInvoicePositionPrintType;
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
     * @return bool|null
     */
    public function getCommissionSettlementDone(): ?bool
    {
        return $this->commissionSettlementDone;
    }
    /**
     * 
     *
     * @param bool|null $commissionSettlementDone
     *
     * @return self
     */
    public function setCommissionSettlementDone(?bool $commissionSettlementDone): self
    {
        $this->initialized['commissionSettlementDone'] = true;
        $this->commissionSettlementDone = $commissionSettlementDone;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCostCenterId(): ?string
    {
        return $this->costCenterId;
    }
    /**
     * 
     *
     * @param string|null $costCenterId
     *
     * @return self
     */
    public function setCostCenterId(?string $costCenterId): self
    {
        $this->initialized['costCenterId'] = true;
        $this->costCenterId = $costCenterId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCostTypeId(): ?string
    {
        return $this->costTypeId;
    }
    /**
     * 
     *
     * @param string|null $costTypeId
     *
     * @return self
     */
    public function setCostTypeId(?string $costTypeId): self
    {
        $this->initialized['costTypeId'] = true;
        $this->costTypeId = $costTypeId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCreditResetsOrderState(): ?bool
    {
        return $this->creditResetsOrderState;
    }
    /**
     * 
     *
     * @param bool|null $creditResetsOrderState
     *
     * @return self
     */
    public function setCreditResetsOrderState(?bool $creditResetsOrderState): self
    {
        $this->initialized['creditResetsOrderState'] = true;
        $this->creditResetsOrderState = $creditResetsOrderState;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerHabitualExporterLetterOfIntentId(): ?string
    {
        return $this->customerHabitualExporterLetterOfIntentId;
    }
    /**
     * 
     *
     * @param string|null $customerHabitualExporterLetterOfIntentId
     *
     * @return self
     */
    public function setCustomerHabitualExporterLetterOfIntentId(?string $customerHabitualExporterLetterOfIntentId): self
    {
        $this->initialized['customerHabitualExporterLetterOfIntentId'] = true;
        $this->customerHabitualExporterLetterOfIntentId = $customerHabitualExporterLetterOfIntentId;
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
     * @return int|null
     */
    public function getDeliveryDate(): ?int
    {
        return $this->deliveryDate;
    }
    /**
     * 
     *
     * @param int|null $deliveryDate
     *
     * @return self
     */
    public function setDeliveryDate(?int $deliveryDate): self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDirectDebitFileCreated(): ?bool
    {
        return $this->directDebitFileCreated;
    }
    /**
     * 
     *
     * @param bool|null $directDebitFileCreated
     *
     * @return self
     */
    public function setDirectDebitFileCreated(?bool $directDebitFileCreated): self
    {
        $this->initialized['directDebitFileCreated'] = true;
        $this->directDebitFileCreated = $directDebitFileCreated;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDirectDebitFileLatestDate(): ?int
    {
        return $this->directDebitFileLatestDate;
    }
    /**
     * 
     *
     * @param int|null $directDebitFileLatestDate
     *
     * @return self
     */
    public function setDirectDebitFileLatestDate(?int $directDebitFileLatestDate): self
    {
        $this->initialized['directDebitFileLatestDate'] = true;
        $this->directDebitFileLatestDate = $directDebitFileLatestDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDueDate(): ?int
    {
        return $this->dueDate;
    }
    /**
     * 
     *
     * @param int|null $dueDate
     *
     * @return self
     */
    public function setDueDate(?int $dueDate): self
    {
        $this->initialized['dueDate'] = true;
        $this->dueDate = $dueDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDunningBlockDateUntilDate(): ?int
    {
        return $this->dunningBlockDateUntilDate;
    }
    /**
     * 
     *
     * @param int|null $dunningBlockDateUntilDate
     *
     * @return self
     */
    public function setDunningBlockDateUntilDate(?int $dunningBlockDateUntilDate): self
    {
        $this->initialized['dunningBlockDateUntilDate'] = true;
        $this->dunningBlockDateUntilDate = $dunningBlockDateUntilDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDunningBlockNote(): ?string
    {
        return $this->dunningBlockNote;
    }
    /**
     * 
     *
     * @param string|null $dunningBlockNote
     *
     * @return self
     */
    public function setDunningBlockNote(?string $dunningBlockNote): self
    {
        $this->initialized['dunningBlockNote'] = true;
        $this->dunningBlockNote = $dunningBlockNote;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDunningBlockState(): ?string
    {
        return $this->dunningBlockState;
    }
    /**
     * 
     *
     * @param string|null $dunningBlockState
     *
     * @return self
     */
    public function setDunningBlockState(?string $dunningBlockState): self
    {
        $this->initialized['dunningBlockState'] = true;
        $this->dunningBlockState = $dunningBlockState;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getInvoiceDate(): ?int
    {
        return $this->invoiceDate;
    }
    /**
     * 
     *
     * @param int|null $invoiceDate
     *
     * @return self
     */
    public function setInvoiceDate(?int $invoiceDate): self
    {
        $this->initialized['invoiceDate'] = true;
        $this->invoiceDate = $invoiceDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }
    /**
     * 
     *
     * @param string|null $invoiceNumber
     *
     * @return self
     */
    public function setInvoiceNumber(?string $invoiceNumber): self
    {
        $this->initialized['invoiceNumber'] = true;
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOrderNumberAtCustomer(): ?string
    {
        return $this->orderNumberAtCustomer;
    }
    /**
     * 
     *
     * @param string|null $orderNumberAtCustomer
     *
     * @return self
     */
    public function setOrderNumberAtCustomer(?string $orderNumberAtCustomer): self
    {
        $this->initialized['orderNumberAtCustomer'] = true;
        $this->orderNumberAtCustomer = $orderNumberAtCustomer;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getPaid(): ?bool
    {
        return $this->paid;
    }
    /**
     * 
     *
     * @param bool|null $paid
     *
     * @return self
     */
    public function setPaid(?bool $paid): self
    {
        $this->initialized['paid'] = true;
        $this->paid = $paid;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPaymentStatus(): ?string
    {
        return $this->paymentStatus;
    }
    /**
     * 
     *
     * @param string|null $paymentStatus
     *
     * @return self
     */
    public function setPaymentStatus(?string $paymentStatus): self
    {
        $this->initialized['paymentStatus'] = true;
        $this->paymentStatus = $paymentStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPrecedingSalesInvoiceId(): ?string
    {
        return $this->precedingSalesInvoiceId;
    }
    /**
     * 
     *
     * @param string|null $precedingSalesInvoiceId
     *
     * @return self
     */
    public function setPrecedingSalesInvoiceId(?string $precedingSalesInvoiceId): self
    {
        $this->initialized['precedingSalesInvoiceId'] = true;
        $this->precedingSalesInvoiceId = $precedingSalesInvoiceId;
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
     * @return list<SalesInvoiceItem>|null
     */
    public function getSalesInvoiceItems(): ?array
    {
        return $this->salesInvoiceItems;
    }
    /**
     * 
     *
     * @param list<SalesInvoiceItem>|null $salesInvoiceItems
     *
     * @return self
     */
    public function setSalesInvoiceItems(?array $salesInvoiceItems): self
    {
        $this->initialized['salesInvoiceItems'] = true;
        $this->salesInvoiceItems = $salesInvoiceItems;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesInvoiceType(): ?string
    {
        return $this->salesInvoiceType;
    }
    /**
     * 
     *
     * @param string|null $salesInvoiceType
     *
     * @return self
     */
    public function setSalesInvoiceType(?string $salesInvoiceType): self
    {
        $this->initialized['salesInvoiceType'] = true;
        $this->salesInvoiceType = $salesInvoiceType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesOrderId(): ?string
    {
        return $this->salesOrderId;
    }
    /**
     * 
     *
     * @param string|null $salesOrderId
     *
     * @return self
     */
    public function setSalesOrderId(?string $salesOrderId): self
    {
        $this->initialized['salesOrderId'] = true;
        $this->salesOrderId = $salesOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getSalesOrders(): ?array
    {
        return $this->salesOrders;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $salesOrders
     *
     * @return self
     */
    public function setSalesOrders(?array $salesOrders): self
    {
        $this->initialized['salesOrders'] = true;
        $this->salesOrders = $salesOrders;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSepaDirectDebitMandateId(): ?string
    {
        return $this->sepaDirectDebitMandateId;
    }
    /**
     * 
     *
     * @param string|null $sepaDirectDebitMandateId
     *
     * @return self
     */
    public function setSepaDirectDebitMandateId(?string $sepaDirectDebitMandateId): self
    {
        $this->initialized['sepaDirectDebitMandateId'] = true;
        $this->sepaDirectDebitMandateId = $sepaDirectDebitMandateId;
        return $this;
    }
    /**
     * 
     *
     * @return list<SalesInvoiceShippingCostItem>|null
     */
    public function getShippingCostItems(): ?array
    {
        return $this->shippingCostItems;
    }
    /**
     * 
     *
     * @param list<SalesInvoiceShippingCostItem>|null $shippingCostItems
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
     * @return int|null
     */
    public function getShippingDate(): ?int
    {
        return $this->shippingDate;
    }
    /**
     * 
     *
     * @param int|null $shippingDate
     *
     * @return self
     */
    public function setShippingDate(?int $shippingDate): self
    {
        $this->initialized['shippingDate'] = true;
        $this->shippingDate = $shippingDate;
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
     * @return list<SalesInvoiceStatusHistory>|null
     */
    public function getStatusHistory(): ?array
    {
        return $this->statusHistory;
    }
    /**
     * 
     *
     * @param list<SalesInvoiceStatusHistory>|null $statusHistory
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