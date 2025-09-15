<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseInvoice extends \ArrayObject
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
    protected $createdViaOcr;
    /**
     * 
     *
     * @var bool|null
     */
    protected $creditResetsOrderState;
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
     * @var int|null
     */
    protected $dueDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $grossAmountOfHeaderTaxes;
    /**
     * 
     *
     * @var string|null
     */
    protected $grossAmountOfHeaderTaxesInCompanyCurrency;
    /**
     * 
     *
     * @var bool|null
     */
    protected $grossPrices;
    /**
     * 
     *
     * @var string|null
     */
    protected $importSalesTaxAmount;
    /**
     * 
     *
     * @var string|null
     */
    protected $importSalesTaxId;
    /**
     * 
     *
     * @var string|null
     */
    protected $internalInvoiceNumber;
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
     * @var bool|null
     */
    protected $paymentBlock;
    /**
     * 
     *
     * @var string|null
     */
    protected $paymentBlockNote;
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
    protected $precedingPurchaseInvoiceId;
    /**
     * 
     *
     * @var int|null
     */
    protected $pricingDate;
    /**
     * 
     *
     * @var list<PurchaseInvoiceItem>|null
     */
    protected $purchaseInvoiceItems;
    /**
     * 
     *
     * @var string|null
     */
    protected $purchaseInvoiceType;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $purchaseOrders;
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
    protected $senderCountryCode;
    /**
     * 
     *
     * @var list<PurchaseInvoiceShippingCostItem>|null
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
     * @var list<PurchaseInvoiceStatusHistory>|null
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
    public function getCreatedViaOcr(): ?bool
    {
        return $this->createdViaOcr;
    }
    /**
     * 
     *
     * @param bool|null $createdViaOcr
     *
     * @return self
     */
    public function setCreatedViaOcr(?bool $createdViaOcr): self
    {
        $this->initialized['createdViaOcr'] = true;
        $this->createdViaOcr = $createdViaOcr;
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
     * @return string|null
     */
    public function getGrossAmountOfHeaderTaxes(): ?string
    {
        return $this->grossAmountOfHeaderTaxes;
    }
    /**
     * 
     *
     * @param string|null $grossAmountOfHeaderTaxes
     *
     * @return self
     */
    public function setGrossAmountOfHeaderTaxes(?string $grossAmountOfHeaderTaxes): self
    {
        $this->initialized['grossAmountOfHeaderTaxes'] = true;
        $this->grossAmountOfHeaderTaxes = $grossAmountOfHeaderTaxes;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGrossAmountOfHeaderTaxesInCompanyCurrency(): ?string
    {
        return $this->grossAmountOfHeaderTaxesInCompanyCurrency;
    }
    /**
     * 
     *
     * @param string|null $grossAmountOfHeaderTaxesInCompanyCurrency
     *
     * @return self
     */
    public function setGrossAmountOfHeaderTaxesInCompanyCurrency(?string $grossAmountOfHeaderTaxesInCompanyCurrency): self
    {
        $this->initialized['grossAmountOfHeaderTaxesInCompanyCurrency'] = true;
        $this->grossAmountOfHeaderTaxesInCompanyCurrency = $grossAmountOfHeaderTaxesInCompanyCurrency;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getGrossPrices(): ?bool
    {
        return $this->grossPrices;
    }
    /**
     * 
     *
     * @param bool|null $grossPrices
     *
     * @return self
     */
    public function setGrossPrices(?bool $grossPrices): self
    {
        $this->initialized['grossPrices'] = true;
        $this->grossPrices = $grossPrices;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getImportSalesTaxAmount(): ?string
    {
        return $this->importSalesTaxAmount;
    }
    /**
     * 
     *
     * @param string|null $importSalesTaxAmount
     *
     * @return self
     */
    public function setImportSalesTaxAmount(?string $importSalesTaxAmount): self
    {
        $this->initialized['importSalesTaxAmount'] = true;
        $this->importSalesTaxAmount = $importSalesTaxAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getImportSalesTaxId(): ?string
    {
        return $this->importSalesTaxId;
    }
    /**
     * 
     *
     * @param string|null $importSalesTaxId
     *
     * @return self
     */
    public function setImportSalesTaxId(?string $importSalesTaxId): self
    {
        $this->initialized['importSalesTaxId'] = true;
        $this->importSalesTaxId = $importSalesTaxId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInternalInvoiceNumber(): ?string
    {
        return $this->internalInvoiceNumber;
    }
    /**
     * 
     *
     * @param string|null $internalInvoiceNumber
     *
     * @return self
     */
    public function setInternalInvoiceNumber(?string $internalInvoiceNumber): self
    {
        $this->initialized['internalInvoiceNumber'] = true;
        $this->internalInvoiceNumber = $internalInvoiceNumber;
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
     * @return bool|null
     */
    public function getPaymentBlock(): ?bool
    {
        return $this->paymentBlock;
    }
    /**
     * 
     *
     * @param bool|null $paymentBlock
     *
     * @return self
     */
    public function setPaymentBlock(?bool $paymentBlock): self
    {
        $this->initialized['paymentBlock'] = true;
        $this->paymentBlock = $paymentBlock;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPaymentBlockNote(): ?string
    {
        return $this->paymentBlockNote;
    }
    /**
     * 
     *
     * @param string|null $paymentBlockNote
     *
     * @return self
     */
    public function setPaymentBlockNote(?string $paymentBlockNote): self
    {
        $this->initialized['paymentBlockNote'] = true;
        $this->paymentBlockNote = $paymentBlockNote;
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
    public function getPrecedingPurchaseInvoiceId(): ?string
    {
        return $this->precedingPurchaseInvoiceId;
    }
    /**
     * 
     *
     * @param string|null $precedingPurchaseInvoiceId
     *
     * @return self
     */
    public function setPrecedingPurchaseInvoiceId(?string $precedingPurchaseInvoiceId): self
    {
        $this->initialized['precedingPurchaseInvoiceId'] = true;
        $this->precedingPurchaseInvoiceId = $precedingPurchaseInvoiceId;
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
     * @return list<PurchaseInvoiceItem>|null
     */
    public function getPurchaseInvoiceItems(): ?array
    {
        return $this->purchaseInvoiceItems;
    }
    /**
     * 
     *
     * @param list<PurchaseInvoiceItem>|null $purchaseInvoiceItems
     *
     * @return self
     */
    public function setPurchaseInvoiceItems(?array $purchaseInvoiceItems): self
    {
        $this->initialized['purchaseInvoiceItems'] = true;
        $this->purchaseInvoiceItems = $purchaseInvoiceItems;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPurchaseInvoiceType(): ?string
    {
        return $this->purchaseInvoiceType;
    }
    /**
     * 
     *
     * @param string|null $purchaseInvoiceType
     *
     * @return self
     */
    public function setPurchaseInvoiceType(?string $purchaseInvoiceType): self
    {
        $this->initialized['purchaseInvoiceType'] = true;
        $this->purchaseInvoiceType = $purchaseInvoiceType;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getPurchaseOrders(): ?array
    {
        return $this->purchaseOrders;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $purchaseOrders
     *
     * @return self
     */
    public function setPurchaseOrders(?array $purchaseOrders): self
    {
        $this->initialized['purchaseOrders'] = true;
        $this->purchaseOrders = $purchaseOrders;
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
     * @return list<PurchaseInvoiceShippingCostItem>|null
     */
    public function getShippingCostItems(): ?array
    {
        return $this->shippingCostItems;
    }
    /**
     * 
     *
     * @param list<PurchaseInvoiceShippingCostItem>|null $shippingCostItems
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
     * @return list<PurchaseInvoiceStatusHistory>|null
     */
    public function getStatusHistory(): ?array
    {
        return $this->statusHistory;
    }
    /**
     * 
     *
     * @param list<PurchaseInvoiceStatusHistory>|null $statusHistory
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