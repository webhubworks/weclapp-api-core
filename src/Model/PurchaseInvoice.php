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
     * @var EmailAddresses
     */
    protected $recordEmailAddresses;
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
    protected $supplierId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $supplierNumber;
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
    protected $costCenterId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $costCenterNumber;
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
    protected $createdViaOcr;
    /**
     * 
     *
     * @var bool
     */
    protected $creditResetsOrderState;
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
     * @var int
     */
    protected $dueDate;
    /**
     * 
     *
     * @var string
     */
    protected $grossAmountOfHeaderTaxes;
    /**
     * 
     *
     * @var string
     */
    protected $grossAmountOfHeaderTaxesInCompanyCurrency;
    /**
     * 
     *
     * @var bool
     */
    protected $grossPrices;
    /**
     * 
     *
     * @var string
     */
    protected $importSalesTaxAmount;
    /**
     * 
     *
     * @var string
     */
    protected $importSalesTaxId;
    /**
     * 
     *
     * @var string
     */
    protected $internalInvoiceNumber;
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
     * @var bool
     */
    protected $paymentBlock;
    /**
     * 
     *
     * @var string
     */
    protected $paymentBlockNote;
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
    protected $precedingPurchaseInvoiceId;
    /**
     * 
     *
     * @var int
     */
    protected $pricingDate;
    /**
     * 
     *
     * @var list<PurchaseInvoiceItem>
     */
    protected $purchaseInvoiceItems;
    /**
     * 
     *
     * @var string
     */
    protected $purchaseInvoiceType;
    /**
     * 
     *
     * @var list<OnlyId>
     */
    protected $purchaseOrders;
    /**
     * 
     *
     * @var RecordAddress
     */
    protected $recordAddress;
    /**
     * 
     *
     * @var string
     */
    protected $senderCountryCode;
    /**
     * 
     *
     * @var list<PurchaseInvoiceShippingCostItem>
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
     * @var list<PurchaseInvoiceStatusHistory>
     */
    protected $statusHistory;
    /**
     * 
     *
     * @var string
     */
    protected $supplierHabitualExporterLetterOfIntentId;
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
    public function getSupplierId(): string
    {
        return $this->supplierId;
    }
    /**
     * 
     *
     * @param string $supplierId
     *
     * @return self
     */
    public function setSupplierId(string $supplierId): self
    {
        $this->initialized['supplierId'] = true;
        $this->supplierId = $supplierId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
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
     * @deprecated
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
     * @deprecated
     *
     * @return string
     */
    public function getCostCenterNumber(): string
    {
        return $this->costCenterNumber;
    }
    /**
     * 
     *
     * @param string $costCenterNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setCostCenterNumber(string $costCenterNumber): self
    {
        $this->initialized['costCenterNumber'] = true;
        $this->costCenterNumber = $costCenterNumber;
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
    public function getCreatedViaOcr(): bool
    {
        return $this->createdViaOcr;
    }
    /**
     * 
     *
     * @param bool $createdViaOcr
     *
     * @return self
     */
    public function setCreatedViaOcr(bool $createdViaOcr): self
    {
        $this->initialized['createdViaOcr'] = true;
        $this->createdViaOcr = $createdViaOcr;
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
     * @return string
     */
    public function getGrossAmountOfHeaderTaxes(): string
    {
        return $this->grossAmountOfHeaderTaxes;
    }
    /**
     * 
     *
     * @param string $grossAmountOfHeaderTaxes
     *
     * @return self
     */
    public function setGrossAmountOfHeaderTaxes(string $grossAmountOfHeaderTaxes): self
    {
        $this->initialized['grossAmountOfHeaderTaxes'] = true;
        $this->grossAmountOfHeaderTaxes = $grossAmountOfHeaderTaxes;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGrossAmountOfHeaderTaxesInCompanyCurrency(): string
    {
        return $this->grossAmountOfHeaderTaxesInCompanyCurrency;
    }
    /**
     * 
     *
     * @param string $grossAmountOfHeaderTaxesInCompanyCurrency
     *
     * @return self
     */
    public function setGrossAmountOfHeaderTaxesInCompanyCurrency(string $grossAmountOfHeaderTaxesInCompanyCurrency): self
    {
        $this->initialized['grossAmountOfHeaderTaxesInCompanyCurrency'] = true;
        $this->grossAmountOfHeaderTaxesInCompanyCurrency = $grossAmountOfHeaderTaxesInCompanyCurrency;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getGrossPrices(): bool
    {
        return $this->grossPrices;
    }
    /**
     * 
     *
     * @param bool $grossPrices
     *
     * @return self
     */
    public function setGrossPrices(bool $grossPrices): self
    {
        $this->initialized['grossPrices'] = true;
        $this->grossPrices = $grossPrices;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImportSalesTaxAmount(): string
    {
        return $this->importSalesTaxAmount;
    }
    /**
     * 
     *
     * @param string $importSalesTaxAmount
     *
     * @return self
     */
    public function setImportSalesTaxAmount(string $importSalesTaxAmount): self
    {
        $this->initialized['importSalesTaxAmount'] = true;
        $this->importSalesTaxAmount = $importSalesTaxAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImportSalesTaxId(): string
    {
        return $this->importSalesTaxId;
    }
    /**
     * 
     *
     * @param string $importSalesTaxId
     *
     * @return self
     */
    public function setImportSalesTaxId(string $importSalesTaxId): self
    {
        $this->initialized['importSalesTaxId'] = true;
        $this->importSalesTaxId = $importSalesTaxId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInternalInvoiceNumber(): string
    {
        return $this->internalInvoiceNumber;
    }
    /**
     * 
     *
     * @param string $internalInvoiceNumber
     *
     * @return self
     */
    public function setInternalInvoiceNumber(string $internalInvoiceNumber): self
    {
        $this->initialized['internalInvoiceNumber'] = true;
        $this->internalInvoiceNumber = $internalInvoiceNumber;
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
     * @return bool
     */
    public function getPaymentBlock(): bool
    {
        return $this->paymentBlock;
    }
    /**
     * 
     *
     * @param bool $paymentBlock
     *
     * @return self
     */
    public function setPaymentBlock(bool $paymentBlock): self
    {
        $this->initialized['paymentBlock'] = true;
        $this->paymentBlock = $paymentBlock;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentBlockNote(): string
    {
        return $this->paymentBlockNote;
    }
    /**
     * 
     *
     * @param string $paymentBlockNote
     *
     * @return self
     */
    public function setPaymentBlockNote(string $paymentBlockNote): self
    {
        $this->initialized['paymentBlockNote'] = true;
        $this->paymentBlockNote = $paymentBlockNote;
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
    public function getPrecedingPurchaseInvoiceId(): string
    {
        return $this->precedingPurchaseInvoiceId;
    }
    /**
     * 
     *
     * @param string $precedingPurchaseInvoiceId
     *
     * @return self
     */
    public function setPrecedingPurchaseInvoiceId(string $precedingPurchaseInvoiceId): self
    {
        $this->initialized['precedingPurchaseInvoiceId'] = true;
        $this->precedingPurchaseInvoiceId = $precedingPurchaseInvoiceId;
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
     * @return list<PurchaseInvoiceItem>
     */
    public function getPurchaseInvoiceItems(): array
    {
        return $this->purchaseInvoiceItems;
    }
    /**
     * 
     *
     * @param list<PurchaseInvoiceItem> $purchaseInvoiceItems
     *
     * @return self
     */
    public function setPurchaseInvoiceItems(array $purchaseInvoiceItems): self
    {
        $this->initialized['purchaseInvoiceItems'] = true;
        $this->purchaseInvoiceItems = $purchaseInvoiceItems;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPurchaseInvoiceType(): string
    {
        return $this->purchaseInvoiceType;
    }
    /**
     * 
     *
     * @param string $purchaseInvoiceType
     *
     * @return self
     */
    public function setPurchaseInvoiceType(string $purchaseInvoiceType): self
    {
        $this->initialized['purchaseInvoiceType'] = true;
        $this->purchaseInvoiceType = $purchaseInvoiceType;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>
     */
    public function getPurchaseOrders(): array
    {
        return $this->purchaseOrders;
    }
    /**
     * 
     *
     * @param list<OnlyId> $purchaseOrders
     *
     * @return self
     */
    public function setPurchaseOrders(array $purchaseOrders): self
    {
        $this->initialized['purchaseOrders'] = true;
        $this->purchaseOrders = $purchaseOrders;
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
     * @return string
     */
    public function getSenderCountryCode(): string
    {
        return $this->senderCountryCode;
    }
    /**
     * 
     *
     * @param string $senderCountryCode
     *
     * @return self
     */
    public function setSenderCountryCode(string $senderCountryCode): self
    {
        $this->initialized['senderCountryCode'] = true;
        $this->senderCountryCode = $senderCountryCode;
        return $this;
    }
    /**
     * 
     *
     * @return list<PurchaseInvoiceShippingCostItem>
     */
    public function getShippingCostItems(): array
    {
        return $this->shippingCostItems;
    }
    /**
     * 
     *
     * @param list<PurchaseInvoiceShippingCostItem> $shippingCostItems
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
     * @return list<PurchaseInvoiceStatusHistory>
     */
    public function getStatusHistory(): array
    {
        return $this->statusHistory;
    }
    /**
     * 
     *
     * @param list<PurchaseInvoiceStatusHistory> $statusHistory
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
    public function getSupplierHabitualExporterLetterOfIntentId(): string
    {
        return $this->supplierHabitualExporterLetterOfIntentId;
    }
    /**
     * 
     *
     * @param string $supplierHabitualExporterLetterOfIntentId
     *
     * @return self
     */
    public function setSupplierHabitualExporterLetterOfIntentId(string $supplierHabitualExporterLetterOfIntentId): self
    {
        $this->initialized['supplierHabitualExporterLetterOfIntentId'] = true;
        $this->supplierHabitualExporterLetterOfIntentId = $supplierHabitualExporterLetterOfIntentId;
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