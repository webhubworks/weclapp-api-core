<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrder extends \ArrayObject
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
     * @var string
     */
    protected $advancePaymentAmount;
    /**
     * 
     *
     * @var string
     */
    protected $advancePaymentStatus;
    /**
     * 
     *
     * @var bool
     */
    protected $applyShippingCostsOnlyOnce;
    /**
     * 
     *
     * @var string
     */
    protected $availability;
    /**
     * 
     *
     * @var string
     */
    protected $availabilityForAllWarehouses;
    /**
     * 
     *
     * @var string
     */
    protected $cashAccountId;
    /**
     * 
     *
     * @var string
     */
    protected $customerHabitualExporterLetterOfIntentId;
    /**
     * 
     *
     * @var string
     */
    protected $defaultShippingReturnCarrierId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $defaultShippingReturnCarrierName;
    /**
     * 
     *
     * @var EcommerceOrder
     */
    protected $ecommerceOrder;
    /**
     * 
     *
     * @var string
     */
    protected $fulfillmentProviderId;
    /**
     * 
     *
     * @var string
     */
    protected $invoiceRecipientId;
    /**
     * 
     *
     * @var bool
     */
    protected $invoiced;
    /**
     * 
     *
     * @var string
     */
    protected $note;
    /**
     * 
     *
     * @var bool
     */
    protected $onlyServices;
    /**
     * 
     *
     * @var int
     */
    protected $orderDate;
    /**
     * 
     *
     * @var list<SalesOrderItem>
     */
    protected $orderItems;
    /**
     * 
     *
     * @var string
     */
    protected $orderNumber;
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
     * @var list<SalesOrderPayment>
     */
    protected $payments;
    /**
     * 
     *
     * @var int
     */
    protected $plannedProjectEndDate;
    /**
     * 
     *
     * @var int
     */
    protected $plannedProjectStartDate;
    /**
     * 
     *
     * @var string
     */
    protected $projectGoals;
    /**
     * 
     *
     * @var list<ProjectMembers>
     */
    protected $projectMembers;
    /**
     * 
     *
     * @var bool
     */
    protected $projectModeActive;
    /**
     * 
     *
     * @var string
     */
    protected $quotationId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $quotationNumber;
    /**
     * 
     *
     * @var string
     */
    protected $recordAsn;
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
    protected $salesOrderPaymentType;
    /**
     * 
     *
     * @var string
     */
    protected $sepaDirectDebitMandateId;
    /**
     * 
     *
     * @var bool
     */
    protected $servicesFinished;
    /**
     * 
     *
     * @var bool
     */
    protected $shipped;
    /**
     * 
     *
     * @var list<SalesOrderShippingCostItem>
     */
    protected $shippingCostItems;
    /**
     * 
     *
     * @var int
     */
    protected $shippingLabelsCount;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var list<SalesOrderStatusHistory>
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
     * @return string
     */
    public function getAdvancePaymentAmount(): string
    {
        return $this->advancePaymentAmount;
    }
    /**
     * 
     *
     * @param string $advancePaymentAmount
     *
     * @return self
     */
    public function setAdvancePaymentAmount(string $advancePaymentAmount): self
    {
        $this->initialized['advancePaymentAmount'] = true;
        $this->advancePaymentAmount = $advancePaymentAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAdvancePaymentStatus(): string
    {
        return $this->advancePaymentStatus;
    }
    /**
     * 
     *
     * @param string $advancePaymentStatus
     *
     * @return self
     */
    public function setAdvancePaymentStatus(string $advancePaymentStatus): self
    {
        $this->initialized['advancePaymentStatus'] = true;
        $this->advancePaymentStatus = $advancePaymentStatus;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getApplyShippingCostsOnlyOnce(): bool
    {
        return $this->applyShippingCostsOnlyOnce;
    }
    /**
     * 
     *
     * @param bool $applyShippingCostsOnlyOnce
     *
     * @return self
     */
    public function setApplyShippingCostsOnlyOnce(bool $applyShippingCostsOnlyOnce): self
    {
        $this->initialized['applyShippingCostsOnlyOnce'] = true;
        $this->applyShippingCostsOnlyOnce = $applyShippingCostsOnlyOnce;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAvailability(): string
    {
        return $this->availability;
    }
    /**
     * 
     *
     * @param string $availability
     *
     * @return self
     */
    public function setAvailability(string $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAvailabilityForAllWarehouses(): string
    {
        return $this->availabilityForAllWarehouses;
    }
    /**
     * 
     *
     * @param string $availabilityForAllWarehouses
     *
     * @return self
     */
    public function setAvailabilityForAllWarehouses(string $availabilityForAllWarehouses): self
    {
        $this->initialized['availabilityForAllWarehouses'] = true;
        $this->availabilityForAllWarehouses = $availabilityForAllWarehouses;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCashAccountId(): string
    {
        return $this->cashAccountId;
    }
    /**
     * 
     *
     * @param string $cashAccountId
     *
     * @return self
     */
    public function setCashAccountId(string $cashAccountId): self
    {
        $this->initialized['cashAccountId'] = true;
        $this->cashAccountId = $cashAccountId;
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
     * @return string
     */
    public function getDefaultShippingReturnCarrierId(): string
    {
        return $this->defaultShippingReturnCarrierId;
    }
    /**
     * 
     *
     * @param string $defaultShippingReturnCarrierId
     *
     * @return self
     */
    public function setDefaultShippingReturnCarrierId(string $defaultShippingReturnCarrierId): self
    {
        $this->initialized['defaultShippingReturnCarrierId'] = true;
        $this->defaultShippingReturnCarrierId = $defaultShippingReturnCarrierId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getDefaultShippingReturnCarrierName(): string
    {
        return $this->defaultShippingReturnCarrierName;
    }
    /**
     * 
     *
     * @param string $defaultShippingReturnCarrierName
     *
     * @deprecated
     *
     * @return self
     */
    public function setDefaultShippingReturnCarrierName(string $defaultShippingReturnCarrierName): self
    {
        $this->initialized['defaultShippingReturnCarrierName'] = true;
        $this->defaultShippingReturnCarrierName = $defaultShippingReturnCarrierName;
        return $this;
    }
    /**
     * 
     *
     * @return EcommerceOrder
     */
    public function getEcommerceOrder(): EcommerceOrder
    {
        return $this->ecommerceOrder;
    }
    /**
     * 
     *
     * @param EcommerceOrder $ecommerceOrder
     *
     * @return self
     */
    public function setEcommerceOrder(EcommerceOrder $ecommerceOrder): self
    {
        $this->initialized['ecommerceOrder'] = true;
        $this->ecommerceOrder = $ecommerceOrder;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFulfillmentProviderId(): string
    {
        return $this->fulfillmentProviderId;
    }
    /**
     * 
     *
     * @param string $fulfillmentProviderId
     *
     * @return self
     */
    public function setFulfillmentProviderId(string $fulfillmentProviderId): self
    {
        $this->initialized['fulfillmentProviderId'] = true;
        $this->fulfillmentProviderId = $fulfillmentProviderId;
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
     * @return bool
     */
    public function getInvoiced(): bool
    {
        return $this->invoiced;
    }
    /**
     * 
     *
     * @param bool $invoiced
     *
     * @return self
     */
    public function setInvoiced(bool $invoiced): self
    {
        $this->initialized['invoiced'] = true;
        $this->invoiced = $invoiced;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }
    /**
     * 
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote(string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOnlyServices(): bool
    {
        return $this->onlyServices;
    }
    /**
     * 
     *
     * @param bool $onlyServices
     *
     * @return self
     */
    public function setOnlyServices(bool $onlyServices): self
    {
        $this->initialized['onlyServices'] = true;
        $this->onlyServices = $onlyServices;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOrderDate(): int
    {
        return $this->orderDate;
    }
    /**
     * 
     *
     * @param int $orderDate
     *
     * @return self
     */
    public function setOrderDate(int $orderDate): self
    {
        $this->initialized['orderDate'] = true;
        $this->orderDate = $orderDate;
        return $this;
    }
    /**
     * 
     *
     * @return list<SalesOrderItem>
     */
    public function getOrderItems(): array
    {
        return $this->orderItems;
    }
    /**
     * 
     *
     * @param list<SalesOrderItem> $orderItems
     *
     * @return self
     */
    public function setOrderItems(array $orderItems): self
    {
        $this->initialized['orderItems'] = true;
        $this->orderItems = $orderItems;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }
    /**
     * 
     *
     * @param string $orderNumber
     *
     * @return self
     */
    public function setOrderNumber(string $orderNumber): self
    {
        $this->initialized['orderNumber'] = true;
        $this->orderNumber = $orderNumber;
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
     * @return list<SalesOrderPayment>
     */
    public function getPayments(): array
    {
        return $this->payments;
    }
    /**
     * 
     *
     * @param list<SalesOrderPayment> $payments
     *
     * @return self
     */
    public function setPayments(array $payments): self
    {
        $this->initialized['payments'] = true;
        $this->payments = $payments;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlannedProjectEndDate(): int
    {
        return $this->plannedProjectEndDate;
    }
    /**
     * 
     *
     * @param int $plannedProjectEndDate
     *
     * @return self
     */
    public function setPlannedProjectEndDate(int $plannedProjectEndDate): self
    {
        $this->initialized['plannedProjectEndDate'] = true;
        $this->plannedProjectEndDate = $plannedProjectEndDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlannedProjectStartDate(): int
    {
        return $this->plannedProjectStartDate;
    }
    /**
     * 
     *
     * @param int $plannedProjectStartDate
     *
     * @return self
     */
    public function setPlannedProjectStartDate(int $plannedProjectStartDate): self
    {
        $this->initialized['plannedProjectStartDate'] = true;
        $this->plannedProjectStartDate = $plannedProjectStartDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProjectGoals(): string
    {
        return $this->projectGoals;
    }
    /**
     * 
     *
     * @param string $projectGoals
     *
     * @return self
     */
    public function setProjectGoals(string $projectGoals): self
    {
        $this->initialized['projectGoals'] = true;
        $this->projectGoals = $projectGoals;
        return $this;
    }
    /**
     * 
     *
     * @return list<ProjectMembers>
     */
    public function getProjectMembers(): array
    {
        return $this->projectMembers;
    }
    /**
     * 
     *
     * @param list<ProjectMembers> $projectMembers
     *
     * @return self
     */
    public function setProjectMembers(array $projectMembers): self
    {
        $this->initialized['projectMembers'] = true;
        $this->projectMembers = $projectMembers;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getProjectModeActive(): bool
    {
        return $this->projectModeActive;
    }
    /**
     * 
     *
     * @param bool $projectModeActive
     *
     * @return self
     */
    public function setProjectModeActive(bool $projectModeActive): self
    {
        $this->initialized['projectModeActive'] = true;
        $this->projectModeActive = $projectModeActive;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQuotationId(): string
    {
        return $this->quotationId;
    }
    /**
     * 
     *
     * @param string $quotationId
     *
     * @return self
     */
    public function setQuotationId(string $quotationId): self
    {
        $this->initialized['quotationId'] = true;
        $this->quotationId = $quotationId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
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
     * @deprecated
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
    public function getRecordAsn(): string
    {
        return $this->recordAsn;
    }
    /**
     * 
     *
     * @param string $recordAsn
     *
     * @return self
     */
    public function setRecordAsn(string $recordAsn): self
    {
        $this->initialized['recordAsn'] = true;
        $this->recordAsn = $recordAsn;
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
    public function getSalesOrderPaymentType(): string
    {
        return $this->salesOrderPaymentType;
    }
    /**
     * 
     *
     * @param string $salesOrderPaymentType
     *
     * @return self
     */
    public function setSalesOrderPaymentType(string $salesOrderPaymentType): self
    {
        $this->initialized['salesOrderPaymentType'] = true;
        $this->salesOrderPaymentType = $salesOrderPaymentType;
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
     * @return bool
     */
    public function getServicesFinished(): bool
    {
        return $this->servicesFinished;
    }
    /**
     * 
     *
     * @param bool $servicesFinished
     *
     * @return self
     */
    public function setServicesFinished(bool $servicesFinished): self
    {
        $this->initialized['servicesFinished'] = true;
        $this->servicesFinished = $servicesFinished;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getShipped(): bool
    {
        return $this->shipped;
    }
    /**
     * 
     *
     * @param bool $shipped
     *
     * @return self
     */
    public function setShipped(bool $shipped): self
    {
        $this->initialized['shipped'] = true;
        $this->shipped = $shipped;
        return $this;
    }
    /**
     * 
     *
     * @return list<SalesOrderShippingCostItem>
     */
    public function getShippingCostItems(): array
    {
        return $this->shippingCostItems;
    }
    /**
     * 
     *
     * @param list<SalesOrderShippingCostItem> $shippingCostItems
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
    public function getShippingLabelsCount(): int
    {
        return $this->shippingLabelsCount;
    }
    /**
     * 
     *
     * @param int $shippingLabelsCount
     *
     * @return self
     */
    public function setShippingLabelsCount(int $shippingLabelsCount): self
    {
        $this->initialized['shippingLabelsCount'] = true;
        $this->shippingLabelsCount = $shippingLabelsCount;
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
     * @return list<SalesOrderStatusHistory>
     */
    public function getStatusHistory(): array
    {
        return $this->statusHistory;
    }
    /**
     * 
     *
     * @param list<SalesOrderStatusHistory> $statusHistory
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