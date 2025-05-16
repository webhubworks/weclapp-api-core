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
     * @deprecated
     *
     * @var bool|null
     */
    protected $disableEmailTemplate;
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
     * @deprecated
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
     * @deprecated
     *
     * @var string|null
     */
    protected $nonStandardTaxName;
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
    protected $recordCurrencyId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $recordCurrencyName;
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
     * @deprecated
     *
     * @var string|null
     */
    protected $customerNumber;
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
    protected $defaultShippingCarrierId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $defaultShippingCarrierName;
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
     * @var string|null
     */
    protected $advancePaymentAmount;
    /**
     * 
     *
     * @var string|null
     */
    protected $advancePaymentStatus;
    /**
     * 
     *
     * @var bool|null
     */
    protected $applyShippingCostsOnlyOnce;
    /**
     * 
     *
     * @var string|null
     */
    protected $availability;
    /**
     * 
     *
     * @var string|null
     */
    protected $availabilityForAllWarehouses;
    /**
     * 
     *
     * @var string|null
     */
    protected $cashAccountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerHabitualExporterLetterOfIntentId;
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultShippingReturnCarrierId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $defaultShippingReturnCarrierName;
    /**
     * 
     *
     * @var EcommerceOrder|null
     */
    protected $ecommerceOrder;
    /**
     * 
     *
     * @var string|null
     */
    protected $fulfillmentProviderId;
    /**
     * 
     *
     * @var string|null
     */
    protected $invoiceRecipientId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $invoiced;
    /**
     * 
     *
     * @var string|null
     */
    protected $note;
    /**
     * 
     *
     * @var bool|null
     */
    protected $onlyServices;
    /**
     * 
     *
     * @var int|null
     */
    protected $orderDate;
    /**
     * 
     *
     * @var list<SalesOrderItem>|null
     */
    protected $orderItems;
    /**
     * 
     *
     * @var string|null
     */
    protected $orderNumber;
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
     * @var list<SalesOrderPayment>|null
     */
    protected $payments;
    /**
     * 
     *
     * @var int|null
     */
    protected $plannedProjectEndDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $plannedProjectStartDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $projectGoals;
    /**
     * 
     *
     * @var list<ProjectMembers>|null
     */
    protected $projectMembers;
    /**
     * 
     *
     * @var bool|null
     */
    protected $projectModeActive;
    /**
     * 
     *
     * @var string|null
     */
    protected $quotationId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $quotationNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $recordAsn;
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
    protected $salesOrderPaymentType;
    /**
     * 
     *
     * @var string|null
     */
    protected $sepaDirectDebitMandateId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $servicesFinished;
    /**
     * 
     *
     * @var bool|null
     */
    protected $shipped;
    /**
     * 
     *
     * @var list<SalesOrderShippingCostItem>|null
     */
    protected $shippingCostItems;
    /**
     * 
     *
     * @var int|null
     */
    protected $shippingLabelsCount;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var list<SalesOrderStatusHistory>|null
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
     * @var string|null
     */
    protected $warehouseId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $warehouseName;
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
     * @deprecated
     *
     * @return bool|null
     */
    public function getDisableEmailTemplate(): ?bool
    {
        return $this->disableEmailTemplate;
    }
    /**
     * 
     *
     * @param bool|null $disableEmailTemplate
     *
     * @deprecated
     *
     * @return self
     */
    public function setDisableEmailTemplate(?bool $disableEmailTemplate): self
    {
        $this->initialized['disableEmailTemplate'] = true;
        $this->disableEmailTemplate = $disableEmailTemplate;
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
     * @deprecated
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
     * @deprecated
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
     * @deprecated
     *
     * @return string|null
     */
    public function getNonStandardTaxName(): ?string
    {
        return $this->nonStandardTaxName;
    }
    /**
     * 
     *
     * @param string|null $nonStandardTaxName
     *
     * @deprecated
     *
     * @return self
     */
    public function setNonStandardTaxName(?string $nonStandardTaxName): self
    {
        $this->initialized['nonStandardTaxName'] = true;
        $this->nonStandardTaxName = $nonStandardTaxName;
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
     * @deprecated
     *
     * @return string|null
     */
    public function getRecordCurrencyName(): ?string
    {
        return $this->recordCurrencyName;
    }
    /**
     * 
     *
     * @param string|null $recordCurrencyName
     *
     * @deprecated
     *
     * @return self
     */
    public function setRecordCurrencyName(?string $recordCurrencyName): self
    {
        $this->initialized['recordCurrencyName'] = true;
        $this->recordCurrencyName = $recordCurrencyName;
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
     * @deprecated
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
     * @deprecated
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
     * @deprecated
     *
     * @return string|null
     */
    public function getDefaultShippingCarrierName(): ?string
    {
        return $this->defaultShippingCarrierName;
    }
    /**
     * 
     *
     * @param string|null $defaultShippingCarrierName
     *
     * @deprecated
     *
     * @return self
     */
    public function setDefaultShippingCarrierName(?string $defaultShippingCarrierName): self
    {
        $this->initialized['defaultShippingCarrierName'] = true;
        $this->defaultShippingCarrierName = $defaultShippingCarrierName;
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
     * @return string|null
     */
    public function getAdvancePaymentAmount(): ?string
    {
        return $this->advancePaymentAmount;
    }
    /**
     * 
     *
     * @param string|null $advancePaymentAmount
     *
     * @return self
     */
    public function setAdvancePaymentAmount(?string $advancePaymentAmount): self
    {
        $this->initialized['advancePaymentAmount'] = true;
        $this->advancePaymentAmount = $advancePaymentAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAdvancePaymentStatus(): ?string
    {
        return $this->advancePaymentStatus;
    }
    /**
     * 
     *
     * @param string|null $advancePaymentStatus
     *
     * @return self
     */
    public function setAdvancePaymentStatus(?string $advancePaymentStatus): self
    {
        $this->initialized['advancePaymentStatus'] = true;
        $this->advancePaymentStatus = $advancePaymentStatus;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getApplyShippingCostsOnlyOnce(): ?bool
    {
        return $this->applyShippingCostsOnlyOnce;
    }
    /**
     * 
     *
     * @param bool|null $applyShippingCostsOnlyOnce
     *
     * @return self
     */
    public function setApplyShippingCostsOnlyOnce(?bool $applyShippingCostsOnlyOnce): self
    {
        $this->initialized['applyShippingCostsOnlyOnce'] = true;
        $this->applyShippingCostsOnlyOnce = $applyShippingCostsOnlyOnce;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAvailability(): ?string
    {
        return $this->availability;
    }
    /**
     * 
     *
     * @param string|null $availability
     *
     * @return self
     */
    public function setAvailability(?string $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAvailabilityForAllWarehouses(): ?string
    {
        return $this->availabilityForAllWarehouses;
    }
    /**
     * 
     *
     * @param string|null $availabilityForAllWarehouses
     *
     * @return self
     */
    public function setAvailabilityForAllWarehouses(?string $availabilityForAllWarehouses): self
    {
        $this->initialized['availabilityForAllWarehouses'] = true;
        $this->availabilityForAllWarehouses = $availabilityForAllWarehouses;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCashAccountId(): ?string
    {
        return $this->cashAccountId;
    }
    /**
     * 
     *
     * @param string|null $cashAccountId
     *
     * @return self
     */
    public function setCashAccountId(?string $cashAccountId): self
    {
        $this->initialized['cashAccountId'] = true;
        $this->cashAccountId = $cashAccountId;
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
     * @return string|null
     */
    public function getDefaultShippingReturnCarrierId(): ?string
    {
        return $this->defaultShippingReturnCarrierId;
    }
    /**
     * 
     *
     * @param string|null $defaultShippingReturnCarrierId
     *
     * @return self
     */
    public function setDefaultShippingReturnCarrierId(?string $defaultShippingReturnCarrierId): self
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
     * @return string|null
     */
    public function getDefaultShippingReturnCarrierName(): ?string
    {
        return $this->defaultShippingReturnCarrierName;
    }
    /**
     * 
     *
     * @param string|null $defaultShippingReturnCarrierName
     *
     * @deprecated
     *
     * @return self
     */
    public function setDefaultShippingReturnCarrierName(?string $defaultShippingReturnCarrierName): self
    {
        $this->initialized['defaultShippingReturnCarrierName'] = true;
        $this->defaultShippingReturnCarrierName = $defaultShippingReturnCarrierName;
        return $this;
    }
    /**
     * 
     *
     * @return EcommerceOrder|null
     */
    public function getEcommerceOrder(): ?EcommerceOrder
    {
        return $this->ecommerceOrder;
    }
    /**
     * 
     *
     * @param EcommerceOrder|null $ecommerceOrder
     *
     * @return self
     */
    public function setEcommerceOrder(?EcommerceOrder $ecommerceOrder): self
    {
        $this->initialized['ecommerceOrder'] = true;
        $this->ecommerceOrder = $ecommerceOrder;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFulfillmentProviderId(): ?string
    {
        return $this->fulfillmentProviderId;
    }
    /**
     * 
     *
     * @param string|null $fulfillmentProviderId
     *
     * @return self
     */
    public function setFulfillmentProviderId(?string $fulfillmentProviderId): self
    {
        $this->initialized['fulfillmentProviderId'] = true;
        $this->fulfillmentProviderId = $fulfillmentProviderId;
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
     * @return bool|null
     */
    public function getInvoiced(): ?bool
    {
        return $this->invoiced;
    }
    /**
     * 
     *
     * @param bool|null $invoiced
     *
     * @return self
     */
    public function setInvoiced(?bool $invoiced): self
    {
        $this->initialized['invoiced'] = true;
        $this->invoiced = $invoiced;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * 
     *
     * @param string|null $note
     *
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getOnlyServices(): ?bool
    {
        return $this->onlyServices;
    }
    /**
     * 
     *
     * @param bool|null $onlyServices
     *
     * @return self
     */
    public function setOnlyServices(?bool $onlyServices): self
    {
        $this->initialized['onlyServices'] = true;
        $this->onlyServices = $onlyServices;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOrderDate(): ?int
    {
        return $this->orderDate;
    }
    /**
     * 
     *
     * @param int|null $orderDate
     *
     * @return self
     */
    public function setOrderDate(?int $orderDate): self
    {
        $this->initialized['orderDate'] = true;
        $this->orderDate = $orderDate;
        return $this;
    }
    /**
     * 
     *
     * @return list<SalesOrderItem>|null
     */
    public function getOrderItems(): ?array
    {
        return $this->orderItems;
    }
    /**
     * 
     *
     * @param list<SalesOrderItem>|null $orderItems
     *
     * @return self
     */
    public function setOrderItems(?array $orderItems): self
    {
        $this->initialized['orderItems'] = true;
        $this->orderItems = $orderItems;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }
    /**
     * 
     *
     * @param string|null $orderNumber
     *
     * @return self
     */
    public function setOrderNumber(?string $orderNumber): self
    {
        $this->initialized['orderNumber'] = true;
        $this->orderNumber = $orderNumber;
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
     * @return list<SalesOrderPayment>|null
     */
    public function getPayments(): ?array
    {
        return $this->payments;
    }
    /**
     * 
     *
     * @param list<SalesOrderPayment>|null $payments
     *
     * @return self
     */
    public function setPayments(?array $payments): self
    {
        $this->initialized['payments'] = true;
        $this->payments = $payments;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlannedProjectEndDate(): ?int
    {
        return $this->plannedProjectEndDate;
    }
    /**
     * 
     *
     * @param int|null $plannedProjectEndDate
     *
     * @return self
     */
    public function setPlannedProjectEndDate(?int $plannedProjectEndDate): self
    {
        $this->initialized['plannedProjectEndDate'] = true;
        $this->plannedProjectEndDate = $plannedProjectEndDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlannedProjectStartDate(): ?int
    {
        return $this->plannedProjectStartDate;
    }
    /**
     * 
     *
     * @param int|null $plannedProjectStartDate
     *
     * @return self
     */
    public function setPlannedProjectStartDate(?int $plannedProjectStartDate): self
    {
        $this->initialized['plannedProjectStartDate'] = true;
        $this->plannedProjectStartDate = $plannedProjectStartDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProjectGoals(): ?string
    {
        return $this->projectGoals;
    }
    /**
     * 
     *
     * @param string|null $projectGoals
     *
     * @return self
     */
    public function setProjectGoals(?string $projectGoals): self
    {
        $this->initialized['projectGoals'] = true;
        $this->projectGoals = $projectGoals;
        return $this;
    }
    /**
     * 
     *
     * @return list<ProjectMembers>|null
     */
    public function getProjectMembers(): ?array
    {
        return $this->projectMembers;
    }
    /**
     * 
     *
     * @param list<ProjectMembers>|null $projectMembers
     *
     * @return self
     */
    public function setProjectMembers(?array $projectMembers): self
    {
        $this->initialized['projectMembers'] = true;
        $this->projectMembers = $projectMembers;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getProjectModeActive(): ?bool
    {
        return $this->projectModeActive;
    }
    /**
     * 
     *
     * @param bool|null $projectModeActive
     *
     * @return self
     */
    public function setProjectModeActive(?bool $projectModeActive): self
    {
        $this->initialized['projectModeActive'] = true;
        $this->projectModeActive = $projectModeActive;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getQuotationId(): ?string
    {
        return $this->quotationId;
    }
    /**
     * 
     *
     * @param string|null $quotationId
     *
     * @return self
     */
    public function setQuotationId(?string $quotationId): self
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
     * @deprecated
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
    public function getRecordAsn(): ?string
    {
        return $this->recordAsn;
    }
    /**
     * 
     *
     * @param string|null $recordAsn
     *
     * @return self
     */
    public function setRecordAsn(?string $recordAsn): self
    {
        $this->initialized['recordAsn'] = true;
        $this->recordAsn = $recordAsn;
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
    public function getSalesOrderPaymentType(): ?string
    {
        return $this->salesOrderPaymentType;
    }
    /**
     * 
     *
     * @param string|null $salesOrderPaymentType
     *
     * @return self
     */
    public function setSalesOrderPaymentType(?string $salesOrderPaymentType): self
    {
        $this->initialized['salesOrderPaymentType'] = true;
        $this->salesOrderPaymentType = $salesOrderPaymentType;
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
     * @return bool|null
     */
    public function getServicesFinished(): ?bool
    {
        return $this->servicesFinished;
    }
    /**
     * 
     *
     * @param bool|null $servicesFinished
     *
     * @return self
     */
    public function setServicesFinished(?bool $servicesFinished): self
    {
        $this->initialized['servicesFinished'] = true;
        $this->servicesFinished = $servicesFinished;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getShipped(): ?bool
    {
        return $this->shipped;
    }
    /**
     * 
     *
     * @param bool|null $shipped
     *
     * @return self
     */
    public function setShipped(?bool $shipped): self
    {
        $this->initialized['shipped'] = true;
        $this->shipped = $shipped;
        return $this;
    }
    /**
     * 
     *
     * @return list<SalesOrderShippingCostItem>|null
     */
    public function getShippingCostItems(): ?array
    {
        return $this->shippingCostItems;
    }
    /**
     * 
     *
     * @param list<SalesOrderShippingCostItem>|null $shippingCostItems
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
    public function getShippingLabelsCount(): ?int
    {
        return $this->shippingLabelsCount;
    }
    /**
     * 
     *
     * @param int|null $shippingLabelsCount
     *
     * @return self
     */
    public function setShippingLabelsCount(?int $shippingLabelsCount): self
    {
        $this->initialized['shippingLabelsCount'] = true;
        $this->shippingLabelsCount = $shippingLabelsCount;
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
     * @return list<SalesOrderStatusHistory>|null
     */
    public function getStatusHistory(): ?array
    {
        return $this->statusHistory;
    }
    /**
     * 
     *
     * @param list<SalesOrderStatusHistory>|null $statusHistory
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
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getWarehouseName(): ?string
    {
        return $this->warehouseName;
    }
    /**
     * 
     *
     * @param string|null $warehouseName
     *
     * @deprecated
     *
     * @return self
     */
    public function setWarehouseName(?string $warehouseName): self
    {
        $this->initialized['warehouseName'] = true;
        $this->warehouseName = $warehouseName;
        return $this;
    }
}