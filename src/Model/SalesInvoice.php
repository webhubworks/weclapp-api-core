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
     * @var int
     */
    protected $bookingDate;
    /**
     * 
     *
     * @var string
     */
    protected $bookingText;
    /**
     * 
     *
     * @var int
     */
    protected $cancellationDate;
    /**
     * 
     *
     * @var string
     */
    protected $cancellationNumber;
    /**
     * 
     *
     * @var bool
     */
    protected $cancellationSlipCommissionBlock;
    /**
     * 
     *
     * @var bool
     */
    protected $cancellationSlipCommissionSettlementDone;
    /**
     * 
     *
     * @var string
     */
    protected $collectiveInvoicePositionPrintType;
    /**
     * 
     *
     * @var bool
     */
    protected $commissionBlock;
    /**
     * 
     *
     * @var bool
     */
    protected $commissionSettlementDone;
    /**
     * 
     *
     * @var string
     */
    protected $costCenterId;
    /**
     * 
     *
     * @var string
     */
    protected $costTypeId;
    /**
     * 
     *
     * @var bool
     */
    protected $creditResetsOrderState;
    /**
     * 
     *
     * @var string
     */
    protected $customerHabitualExporterLetterOfIntentId;
    /**
     * 
     *
     * @var RecordAddress
     */
    protected $deliveryAddress;
    /**
     * 
     *
     * @var int
     */
    protected $deliveryDate;
    /**
     * 
     *
     * @var bool
     */
    protected $directDebitFileCreated;
    /**
     * 
     *
     * @var int
     */
    protected $directDebitFileLatestDate;
    /**
     * 
     *
     * @var int
     */
    protected $dueDate;
    /**
     * 
     *
     * @var int
     */
    protected $dunningBlockDateUntilDate;
    /**
     * 
     *
     * @var string
     */
    protected $dunningBlockNote;
    /**
     * 
     *
     * @var string
     */
    protected $dunningBlockState;
    /**
     * 
     *
     * @var int
     */
    protected $invoiceDate;
    /**
     * 
     *
     * @var string
     */
    protected $invoiceNumber;
    /**
     * 
     *
     * @var string
     */
    protected $orderNumberAtCustomer;
    /**
     * 
     *
     * @var bool
     */
    protected $paid;
    /**
     * 
     *
     * @var string
     */
    protected $paymentStatus;
    /**
     * 
     *
     * @var string
     */
    protected $precedingSalesInvoiceId;
    /**
     * 
     *
     * @var RecordAddress
     */
    protected $recordAddress;
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
     * @var list<SalesInvoiceItem>
     */
    protected $salesInvoiceItems;
    /**
     * 
     *
     * @var string
     */
    protected $salesInvoiceType;
    /**
     * 
     *
     * @var string
     */
    protected $salesOrderId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $salesOrderNumber;
    /**
     * 
     *
     * @var list<OnlyId>
     */
    protected $salesOrders;
    /**
     * 
     *
     * @var string
     */
    protected $sepaDirectDebitMandateId;
    /**
     * 
     *
     * @var list<SalesInvoiceShippingCostItem>
     */
    protected $shippingCostItems;
    /**
     * 
     *
     * @var int
     */
    protected $shippingDate;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var list<SalesInvoiceStatusHistory>
     */
    protected $statusHistory;
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
     * @return int
     */
    public function getBookingDate(): int
    {
        return $this->bookingDate;
    }
    /**
     * 
     *
     * @param int $bookingDate
     *
     * @return self
     */
    public function setBookingDate(int $bookingDate): self
    {
        $this->initialized['bookingDate'] = true;
        $this->bookingDate = $bookingDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBookingText(): string
    {
        return $this->bookingText;
    }
    /**
     * 
     *
     * @param string $bookingText
     *
     * @return self
     */
    public function setBookingText(string $bookingText): self
    {
        $this->initialized['bookingText'] = true;
        $this->bookingText = $bookingText;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCancellationDate(): int
    {
        return $this->cancellationDate;
    }
    /**
     * 
     *
     * @param int $cancellationDate
     *
     * @return self
     */
    public function setCancellationDate(int $cancellationDate): self
    {
        $this->initialized['cancellationDate'] = true;
        $this->cancellationDate = $cancellationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCancellationNumber(): string
    {
        return $this->cancellationNumber;
    }
    /**
     * 
     *
     * @param string $cancellationNumber
     *
     * @return self
     */
    public function setCancellationNumber(string $cancellationNumber): self
    {
        $this->initialized['cancellationNumber'] = true;
        $this->cancellationNumber = $cancellationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCancellationSlipCommissionBlock(): bool
    {
        return $this->cancellationSlipCommissionBlock;
    }
    /**
     * 
     *
     * @param bool $cancellationSlipCommissionBlock
     *
     * @return self
     */
    public function setCancellationSlipCommissionBlock(bool $cancellationSlipCommissionBlock): self
    {
        $this->initialized['cancellationSlipCommissionBlock'] = true;
        $this->cancellationSlipCommissionBlock = $cancellationSlipCommissionBlock;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCancellationSlipCommissionSettlementDone(): bool
    {
        return $this->cancellationSlipCommissionSettlementDone;
    }
    /**
     * 
     *
     * @param bool $cancellationSlipCommissionSettlementDone
     *
     * @return self
     */
    public function setCancellationSlipCommissionSettlementDone(bool $cancellationSlipCommissionSettlementDone): self
    {
        $this->initialized['cancellationSlipCommissionSettlementDone'] = true;
        $this->cancellationSlipCommissionSettlementDone = $cancellationSlipCommissionSettlementDone;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCollectiveInvoicePositionPrintType(): string
    {
        return $this->collectiveInvoicePositionPrintType;
    }
    /**
     * 
     *
     * @param string $collectiveInvoicePositionPrintType
     *
     * @return self
     */
    public function setCollectiveInvoicePositionPrintType(string $collectiveInvoicePositionPrintType): self
    {
        $this->initialized['collectiveInvoicePositionPrintType'] = true;
        $this->collectiveInvoicePositionPrintType = $collectiveInvoicePositionPrintType;
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
     * @return bool
     */
    public function getCommissionSettlementDone(): bool
    {
        return $this->commissionSettlementDone;
    }
    /**
     * 
     *
     * @param bool $commissionSettlementDone
     *
     * @return self
     */
    public function setCommissionSettlementDone(bool $commissionSettlementDone): self
    {
        $this->initialized['commissionSettlementDone'] = true;
        $this->commissionSettlementDone = $commissionSettlementDone;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCostCenterId(): string
    {
        return $this->costCenterId;
    }
    /**
     * 
     *
     * @param string $costCenterId
     *
     * @return self
     */
    public function setCostCenterId(string $costCenterId): self
    {
        $this->initialized['costCenterId'] = true;
        $this->costCenterId = $costCenterId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCostTypeId(): string
    {
        return $this->costTypeId;
    }
    /**
     * 
     *
     * @param string $costTypeId
     *
     * @return self
     */
    public function setCostTypeId(string $costTypeId): self
    {
        $this->initialized['costTypeId'] = true;
        $this->costTypeId = $costTypeId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCreditResetsOrderState(): bool
    {
        return $this->creditResetsOrderState;
    }
    /**
     * 
     *
     * @param bool $creditResetsOrderState
     *
     * @return self
     */
    public function setCreditResetsOrderState(bool $creditResetsOrderState): self
    {
        $this->initialized['creditResetsOrderState'] = true;
        $this->creditResetsOrderState = $creditResetsOrderState;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerHabitualExporterLetterOfIntentId(): string
    {
        return $this->customerHabitualExporterLetterOfIntentId;
    }
    /**
     * 
     *
     * @param string $customerHabitualExporterLetterOfIntentId
     *
     * @return self
     */
    public function setCustomerHabitualExporterLetterOfIntentId(string $customerHabitualExporterLetterOfIntentId): self
    {
        $this->initialized['customerHabitualExporterLetterOfIntentId'] = true;
        $this->customerHabitualExporterLetterOfIntentId = $customerHabitualExporterLetterOfIntentId;
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
     * @return int
     */
    public function getDeliveryDate(): int
    {
        return $this->deliveryDate;
    }
    /**
     * 
     *
     * @param int $deliveryDate
     *
     * @return self
     */
    public function setDeliveryDate(int $deliveryDate): self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDirectDebitFileCreated(): bool
    {
        return $this->directDebitFileCreated;
    }
    /**
     * 
     *
     * @param bool $directDebitFileCreated
     *
     * @return self
     */
    public function setDirectDebitFileCreated(bool $directDebitFileCreated): self
    {
        $this->initialized['directDebitFileCreated'] = true;
        $this->directDebitFileCreated = $directDebitFileCreated;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDirectDebitFileLatestDate(): int
    {
        return $this->directDebitFileLatestDate;
    }
    /**
     * 
     *
     * @param int $directDebitFileLatestDate
     *
     * @return self
     */
    public function setDirectDebitFileLatestDate(int $directDebitFileLatestDate): self
    {
        $this->initialized['directDebitFileLatestDate'] = true;
        $this->directDebitFileLatestDate = $directDebitFileLatestDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDueDate(): int
    {
        return $this->dueDate;
    }
    /**
     * 
     *
     * @param int $dueDate
     *
     * @return self
     */
    public function setDueDate(int $dueDate): self
    {
        $this->initialized['dueDate'] = true;
        $this->dueDate = $dueDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDunningBlockDateUntilDate(): int
    {
        return $this->dunningBlockDateUntilDate;
    }
    /**
     * 
     *
     * @param int $dunningBlockDateUntilDate
     *
     * @return self
     */
    public function setDunningBlockDateUntilDate(int $dunningBlockDateUntilDate): self
    {
        $this->initialized['dunningBlockDateUntilDate'] = true;
        $this->dunningBlockDateUntilDate = $dunningBlockDateUntilDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDunningBlockNote(): string
    {
        return $this->dunningBlockNote;
    }
    /**
     * 
     *
     * @param string $dunningBlockNote
     *
     * @return self
     */
    public function setDunningBlockNote(string $dunningBlockNote): self
    {
        $this->initialized['dunningBlockNote'] = true;
        $this->dunningBlockNote = $dunningBlockNote;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDunningBlockState(): string
    {
        return $this->dunningBlockState;
    }
    /**
     * 
     *
     * @param string $dunningBlockState
     *
     * @return self
     */
    public function setDunningBlockState(string $dunningBlockState): self
    {
        $this->initialized['dunningBlockState'] = true;
        $this->dunningBlockState = $dunningBlockState;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInvoiceDate(): int
    {
        return $this->invoiceDate;
    }
    /**
     * 
     *
     * @param int $invoiceDate
     *
     * @return self
     */
    public function setInvoiceDate(int $invoiceDate): self
    {
        $this->initialized['invoiceDate'] = true;
        $this->invoiceDate = $invoiceDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInvoiceNumber(): string
    {
        return $this->invoiceNumber;
    }
    /**
     * 
     *
     * @param string $invoiceNumber
     *
     * @return self
     */
    public function setInvoiceNumber(string $invoiceNumber): self
    {
        $this->initialized['invoiceNumber'] = true;
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrderNumberAtCustomer(): string
    {
        return $this->orderNumberAtCustomer;
    }
    /**
     * 
     *
     * @param string $orderNumberAtCustomer
     *
     * @return self
     */
    public function setOrderNumberAtCustomer(string $orderNumberAtCustomer): self
    {
        $this->initialized['orderNumberAtCustomer'] = true;
        $this->orderNumberAtCustomer = $orderNumberAtCustomer;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPaid(): bool
    {
        return $this->paid;
    }
    /**
     * 
     *
     * @param bool $paid
     *
     * @return self
     */
    public function setPaid(bool $paid): self
    {
        $this->initialized['paid'] = true;
        $this->paid = $paid;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentStatus(): string
    {
        return $this->paymentStatus;
    }
    /**
     * 
     *
     * @param string $paymentStatus
     *
     * @return self
     */
    public function setPaymentStatus(string $paymentStatus): self
    {
        $this->initialized['paymentStatus'] = true;
        $this->paymentStatus = $paymentStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPrecedingSalesInvoiceId(): string
    {
        return $this->precedingSalesInvoiceId;
    }
    /**
     * 
     *
     * @param string $precedingSalesInvoiceId
     *
     * @return self
     */
    public function setPrecedingSalesInvoiceId(string $precedingSalesInvoiceId): self
    {
        $this->initialized['precedingSalesInvoiceId'] = true;
        $this->precedingSalesInvoiceId = $precedingSalesInvoiceId;
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
     * @return list<SalesInvoiceItem>
     */
    public function getSalesInvoiceItems(): array
    {
        return $this->salesInvoiceItems;
    }
    /**
     * 
     *
     * @param list<SalesInvoiceItem> $salesInvoiceItems
     *
     * @return self
     */
    public function setSalesInvoiceItems(array $salesInvoiceItems): self
    {
        $this->initialized['salesInvoiceItems'] = true;
        $this->salesInvoiceItems = $salesInvoiceItems;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalesInvoiceType(): string
    {
        return $this->salesInvoiceType;
    }
    /**
     * 
     *
     * @param string $salesInvoiceType
     *
     * @return self
     */
    public function setSalesInvoiceType(string $salesInvoiceType): self
    {
        $this->initialized['salesInvoiceType'] = true;
        $this->salesInvoiceType = $salesInvoiceType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalesOrderId(): string
    {
        return $this->salesOrderId;
    }
    /**
     * 
     *
     * @param string $salesOrderId
     *
     * @return self
     */
    public function setSalesOrderId(string $salesOrderId): self
    {
        $this->initialized['salesOrderId'] = true;
        $this->salesOrderId = $salesOrderId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getSalesOrderNumber(): string
    {
        return $this->salesOrderNumber;
    }
    /**
     * 
     *
     * @param string $salesOrderNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setSalesOrderNumber(string $salesOrderNumber): self
    {
        $this->initialized['salesOrderNumber'] = true;
        $this->salesOrderNumber = $salesOrderNumber;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>
     */
    public function getSalesOrders(): array
    {
        return $this->salesOrders;
    }
    /**
     * 
     *
     * @param list<OnlyId> $salesOrders
     *
     * @return self
     */
    public function setSalesOrders(array $salesOrders): self
    {
        $this->initialized['salesOrders'] = true;
        $this->salesOrders = $salesOrders;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSepaDirectDebitMandateId(): string
    {
        return $this->sepaDirectDebitMandateId;
    }
    /**
     * 
     *
     * @param string $sepaDirectDebitMandateId
     *
     * @return self
     */
    public function setSepaDirectDebitMandateId(string $sepaDirectDebitMandateId): self
    {
        $this->initialized['sepaDirectDebitMandateId'] = true;
        $this->sepaDirectDebitMandateId = $sepaDirectDebitMandateId;
        return $this;
    }
    /**
     * 
     *
     * @return list<SalesInvoiceShippingCostItem>
     */
    public function getShippingCostItems(): array
    {
        return $this->shippingCostItems;
    }
    /**
     * 
     *
     * @param list<SalesInvoiceShippingCostItem> $shippingCostItems
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
     * @return int
     */
    public function getShippingDate(): int
    {
        return $this->shippingDate;
    }
    /**
     * 
     *
     * @param int $shippingDate
     *
     * @return self
     */
    public function setShippingDate(int $shippingDate): self
    {
        $this->initialized['shippingDate'] = true;
        $this->shippingDate = $shippingDate;
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
     * @return list<SalesInvoiceStatusHistory>
     */
    public function getStatusHistory(): array
    {
        return $this->statusHistory;
    }
    /**
     * 
     *
     * @param list<SalesInvoiceStatusHistory> $statusHistory
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