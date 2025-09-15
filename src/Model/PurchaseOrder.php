<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrder extends \ArrayObject
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
     * @var EmailAddresses|null
     */
    protected $recordEmailAddresses;
    /**
     * 
     *
     * @var string|null
     */
    protected $responsibleUserId;
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
    protected $supplierId;
    /**
     * 
     *
     * @var string|null
     */
    protected $advancePaymentStatus;
    /**
     * 
     *
     * @var string|null
     */
    protected $commercialLanguageCustomer;
    /**
     * 
     *
     * @var string|null
     */
    protected $commission;
    /**
     * 
     *
     * @var string|null
     */
    protected $confirmationNumber;
    /**
     * 
     *
     * @var RecordAddress|null
     */
    protected $deliveryAddress;
    /**
     * 
     *
     * @var DropshippingDeliveryNoteFormTextBlockData|null
     */
    protected $dropshippingDeliveryNoteFormTexts;
    /**
     * 
     *
     * @var string|null
     */
    protected $externalPurchaseOrderNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $formSettingsFromSalesChannel;
    /**
     * 
     *
     * @var RecordAddress|null
     */
    protected $invoiceAddress;
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
    protected $mergedToPurchaseOrderId;
    /**
     * 
     *
     * @var string|null
     */
    protected $note;
    /**
     * 
     *
     * @var int|null
     */
    protected $orderDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $packageTrackingNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $packageTrackingUrl;
    /**
     * 
     *
     * @var bool|null
     */
    protected $paid;
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
     * @var list<PurchaseOrderItem>|null
     */
    protected $purchaseOrderItems;
    /**
     * 
     *
     * @var string|null
     */
    protected $purchaseOrderNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $purchaseOrderRequestId;
    /**
     * 
     *
     * @var string|null
     */
    protected $purchaseOrderType;
    /**
     * 
     *
     * @var bool|null
     */
    protected $received;
    /**
     * 
     *
     * @var string|null
     */
    protected $recipientCountryCode;
    /**
     * 
     *
     * @var RecordAddress|null
     */
    protected $recordAddress;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesOrderId;
    /**
     * 
     *
     * @var string|null
     */
    protected $senderCountryCode;
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
    protected $shippingCarrierId;
    /**
     * 
     *
     * @var list<PurchaseOrderShippingCostItem>|null
     */
    protected $shippingCostItems;
    /**
     * 
     *
     * @var int|null
     */
    protected $shippingNotificationDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var list<PurchaseOrderStatusHistory>|null
     */
    protected $statusHistory;
    /**
     * 
     *
     * @var string|null
     */
    protected $supplierHabitualExporterLetterOfIntentId;
    /**
     * 
     *
     * @var string|null
     */
    protected $supplierQuotationNumber;
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
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * 
     *
     * @param string|null $supplierId
     *
     * @return self
     */
    public function setSupplierId(?string $supplierId): self
    {
        $this->initialized['supplierId'] = true;
        $this->supplierId = $supplierId;
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
     * @return string|null
     */
    public function getCommercialLanguageCustomer(): ?string
    {
        return $this->commercialLanguageCustomer;
    }
    /**
     * 
     *
     * @param string|null $commercialLanguageCustomer
     *
     * @return self
     */
    public function setCommercialLanguageCustomer(?string $commercialLanguageCustomer): self
    {
        $this->initialized['commercialLanguageCustomer'] = true;
        $this->commercialLanguageCustomer = $commercialLanguageCustomer;
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
     * @return string|null
     */
    public function getConfirmationNumber(): ?string
    {
        return $this->confirmationNumber;
    }
    /**
     * 
     *
     * @param string|null $confirmationNumber
     *
     * @return self
     */
    public function setConfirmationNumber(?string $confirmationNumber): self
    {
        $this->initialized['confirmationNumber'] = true;
        $this->confirmationNumber = $confirmationNumber;
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
     * @return DropshippingDeliveryNoteFormTextBlockData|null
     */
    public function getDropshippingDeliveryNoteFormTexts(): ?DropshippingDeliveryNoteFormTextBlockData
    {
        return $this->dropshippingDeliveryNoteFormTexts;
    }
    /**
     * 
     *
     * @param DropshippingDeliveryNoteFormTextBlockData|null $dropshippingDeliveryNoteFormTexts
     *
     * @return self
     */
    public function setDropshippingDeliveryNoteFormTexts(?DropshippingDeliveryNoteFormTextBlockData $dropshippingDeliveryNoteFormTexts): self
    {
        $this->initialized['dropshippingDeliveryNoteFormTexts'] = true;
        $this->dropshippingDeliveryNoteFormTexts = $dropshippingDeliveryNoteFormTexts;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExternalPurchaseOrderNumber(): ?string
    {
        return $this->externalPurchaseOrderNumber;
    }
    /**
     * 
     *
     * @param string|null $externalPurchaseOrderNumber
     *
     * @return self
     */
    public function setExternalPurchaseOrderNumber(?string $externalPurchaseOrderNumber): self
    {
        $this->initialized['externalPurchaseOrderNumber'] = true;
        $this->externalPurchaseOrderNumber = $externalPurchaseOrderNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFormSettingsFromSalesChannel(): ?string
    {
        return $this->formSettingsFromSalesChannel;
    }
    /**
     * 
     *
     * @param string|null $formSettingsFromSalesChannel
     *
     * @return self
     */
    public function setFormSettingsFromSalesChannel(?string $formSettingsFromSalesChannel): self
    {
        $this->initialized['formSettingsFromSalesChannel'] = true;
        $this->formSettingsFromSalesChannel = $formSettingsFromSalesChannel;
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
    public function getMergedToPurchaseOrderId(): ?string
    {
        return $this->mergedToPurchaseOrderId;
    }
    /**
     * 
     *
     * @param string|null $mergedToPurchaseOrderId
     *
     * @return self
     */
    public function setMergedToPurchaseOrderId(?string $mergedToPurchaseOrderId): self
    {
        $this->initialized['mergedToPurchaseOrderId'] = true;
        $this->mergedToPurchaseOrderId = $mergedToPurchaseOrderId;
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
     * @return string|null
     */
    public function getPackageTrackingNumber(): ?string
    {
        return $this->packageTrackingNumber;
    }
    /**
     * 
     *
     * @param string|null $packageTrackingNumber
     *
     * @return self
     */
    public function setPackageTrackingNumber(?string $packageTrackingNumber): self
    {
        $this->initialized['packageTrackingNumber'] = true;
        $this->packageTrackingNumber = $packageTrackingNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPackageTrackingUrl(): ?string
    {
        return $this->packageTrackingUrl;
    }
    /**
     * 
     *
     * @param string|null $packageTrackingUrl
     *
     * @return self
     */
    public function setPackageTrackingUrl(?string $packageTrackingUrl): self
    {
        $this->initialized['packageTrackingUrl'] = true;
        $this->packageTrackingUrl = $packageTrackingUrl;
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
     * @return list<PurchaseOrderItem>|null
     */
    public function getPurchaseOrderItems(): ?array
    {
        return $this->purchaseOrderItems;
    }
    /**
     * 
     *
     * @param list<PurchaseOrderItem>|null $purchaseOrderItems
     *
     * @return self
     */
    public function setPurchaseOrderItems(?array $purchaseOrderItems): self
    {
        $this->initialized['purchaseOrderItems'] = true;
        $this->purchaseOrderItems = $purchaseOrderItems;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPurchaseOrderNumber(): ?string
    {
        return $this->purchaseOrderNumber;
    }
    /**
     * 
     *
     * @param string|null $purchaseOrderNumber
     *
     * @return self
     */
    public function setPurchaseOrderNumber(?string $purchaseOrderNumber): self
    {
        $this->initialized['purchaseOrderNumber'] = true;
        $this->purchaseOrderNumber = $purchaseOrderNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPurchaseOrderRequestId(): ?string
    {
        return $this->purchaseOrderRequestId;
    }
    /**
     * 
     *
     * @param string|null $purchaseOrderRequestId
     *
     * @return self
     */
    public function setPurchaseOrderRequestId(?string $purchaseOrderRequestId): self
    {
        $this->initialized['purchaseOrderRequestId'] = true;
        $this->purchaseOrderRequestId = $purchaseOrderRequestId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPurchaseOrderType(): ?string
    {
        return $this->purchaseOrderType;
    }
    /**
     * 
     *
     * @param string|null $purchaseOrderType
     *
     * @return self
     */
    public function setPurchaseOrderType(?string $purchaseOrderType): self
    {
        $this->initialized['purchaseOrderType'] = true;
        $this->purchaseOrderType = $purchaseOrderType;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getReceived(): ?bool
    {
        return $this->received;
    }
    /**
     * 
     *
     * @param bool|null $received
     *
     * @return self
     */
    public function setReceived(?bool $received): self
    {
        $this->initialized['received'] = true;
        $this->received = $received;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecipientCountryCode(): ?string
    {
        return $this->recipientCountryCode;
    }
    /**
     * 
     *
     * @param string|null $recipientCountryCode
     *
     * @return self
     */
    public function setRecipientCountryCode(?string $recipientCountryCode): self
    {
        $this->initialized['recipientCountryCode'] = true;
        $this->recipientCountryCode = $recipientCountryCode;
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
     * @return string|null
     */
    public function getSenderCountryCode(): ?string
    {
        return $this->senderCountryCode;
    }
    /**
     * 
     *
     * @param string|null $senderCountryCode
     *
     * @return self
     */
    public function setSenderCountryCode(?string $senderCountryCode): self
    {
        $this->initialized['senderCountryCode'] = true;
        $this->senderCountryCode = $senderCountryCode;
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
    public function getShippingCarrierId(): ?string
    {
        return $this->shippingCarrierId;
    }
    /**
     * 
     *
     * @param string|null $shippingCarrierId
     *
     * @return self
     */
    public function setShippingCarrierId(?string $shippingCarrierId): self
    {
        $this->initialized['shippingCarrierId'] = true;
        $this->shippingCarrierId = $shippingCarrierId;
        return $this;
    }
    /**
     * 
     *
     * @return list<PurchaseOrderShippingCostItem>|null
     */
    public function getShippingCostItems(): ?array
    {
        return $this->shippingCostItems;
    }
    /**
     * 
     *
     * @param list<PurchaseOrderShippingCostItem>|null $shippingCostItems
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
    public function getShippingNotificationDate(): ?int
    {
        return $this->shippingNotificationDate;
    }
    /**
     * 
     *
     * @param int|null $shippingNotificationDate
     *
     * @return self
     */
    public function setShippingNotificationDate(?int $shippingNotificationDate): self
    {
        $this->initialized['shippingNotificationDate'] = true;
        $this->shippingNotificationDate = $shippingNotificationDate;
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
     * @return list<PurchaseOrderStatusHistory>|null
     */
    public function getStatusHistory(): ?array
    {
        return $this->statusHistory;
    }
    /**
     * 
     *
     * @param list<PurchaseOrderStatusHistory>|null $statusHistory
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
    public function getSupplierHabitualExporterLetterOfIntentId(): ?string
    {
        return $this->supplierHabitualExporterLetterOfIntentId;
    }
    /**
     * 
     *
     * @param string|null $supplierHabitualExporterLetterOfIntentId
     *
     * @return self
     */
    public function setSupplierHabitualExporterLetterOfIntentId(?string $supplierHabitualExporterLetterOfIntentId): self
    {
        $this->initialized['supplierHabitualExporterLetterOfIntentId'] = true;
        $this->supplierHabitualExporterLetterOfIntentId = $supplierHabitualExporterLetterOfIntentId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSupplierQuotationNumber(): ?string
    {
        return $this->supplierQuotationNumber;
    }
    /**
     * 
     *
     * @param string|null $supplierQuotationNumber
     *
     * @return self
     */
    public function setSupplierQuotationNumber(?string $supplierQuotationNumber): self
    {
        $this->initialized['supplierQuotationNumber'] = true;
        $this->supplierQuotationNumber = $supplierQuotationNumber;
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