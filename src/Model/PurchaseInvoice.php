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
     * @var string|null
     */
    protected $id;

    /**
     * @var int|null
     */
    protected $createdDate;

    /**
     * @var int|null
     */
    protected $lastModifiedDate;

    /**
     * @var string|null
     */
    protected $version;

    /**
     * @var list<mixed>|null
     */
    protected $customAttributes;

    /**
     * @var string|null
     */
    protected $commercialLanguage;

    /**
     * @var string|null
     */
    protected $creatorId;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @deprecated
     *
     * @var bool|null
     */
    protected $disableEmailTemplate;

    /**
     * @var string|null
     */
    protected $recordComment;

    /**
     * @var string|null
     */
    protected $recordFreeText;

    /**
     * @var string|null
     */
    protected $recordOpening;

    /**
     * @var bool|null
     */
    protected $sentToRecipient;

    /**
     * @var list<string>|null
     */
    protected $tags;

    /**
     * @var int|null
     */
    protected $currencyConversionDate;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $currencyConversionRate;

    /**
     * @var string|null
     */
    protected $grossAmount;

    /**
     * @var string|null
     */
    protected $grossAmountInCompanyCurrency;

    /**
     * @var string|null
     */
    protected $headerDiscount;

    /**
     * @var string|null
     */
    protected $headerSurcharge;

    /**
     * @var string|null
     */
    protected $netAmount;

    /**
     * @var string|null
     */
    protected $netAmountInCompanyCurrency;

    /**
     * @var string|null
     */
    protected $nonStandardTaxId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $nonStandardTaxName;

    /**
     * @var string|null
     */
    protected $paymentMethodId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $paymentMethodName;

    /**
     * @var string|null
     */
    protected $recordCurrencyId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $recordCurrencyName;

    /**
     * @var string|null
     */
    protected $termOfPaymentId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $termOfPaymentName;

    /**
     * @var EmailAddresses|null
     */
    protected $recordEmailAddresses;

    /**
     * @var string|null
     */
    protected $responsibleUserId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $responsibleUserUsername;

    /**
     * @var int|null
     */
    protected $servicePeriodFrom;

    /**
     * @var int|null
     */
    protected $servicePeriodTo;

    /**
     * @var string|null
     */
    protected $supplierId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $supplierNumber;

    /**
     * @var int|null
     */
    protected $bookingDate;

    /**
     * @var string|null
     */
    protected $bookingText;

    /**
     * @var int|null
     */
    protected $cancellationDate;

    /**
     * @var string|null
     */
    protected $costCenterId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $costCenterNumber;

    /**
     * @var string|null
     */
    protected $costTypeId;

    /**
     * @var bool|null
     */
    protected $createdViaOcr;

    /**
     * @var bool|null
     */
    protected $creditResetsOrderState;

    /**
     * @var RecordAddress|null
     */
    protected $deliveryAddress;

    /**
     * @var int|null
     */
    protected $deliveryDate;

    /**
     * @var int|null
     */
    protected $dueDate;

    /**
     * @var string|null
     */
    protected $grossAmountOfHeaderTaxes;

    /**
     * @var string|null
     */
    protected $grossAmountOfHeaderTaxesInCompanyCurrency;

    /**
     * @var bool|null
     */
    protected $grossPrices;

    /**
     * @var string|null
     */
    protected $importSalesTaxAmount;

    /**
     * @var string|null
     */
    protected $importSalesTaxId;

    /**
     * @var string|null
     */
    protected $internalInvoiceNumber;

    /**
     * @var RecordAddress|null
     */
    protected $invoiceAddress;

    /**
     * @var int|null
     */
    protected $invoiceDate;

    /**
     * @var string|null
     */
    protected $invoiceNumber;

    /**
     * @var bool|null
     */
    protected $paymentBlock;

    /**
     * @var string|null
     */
    protected $paymentBlockNote;

    /**
     * @var string|null
     */
    protected $paymentStatus;

    /**
     * @var string|null
     */
    protected $precedingPurchaseInvoiceId;

    /**
     * @var int|null
     */
    protected $pricingDate;

    /**
     * @var list<PurchaseInvoiceItem>|null
     */
    protected $purchaseInvoiceItems;

    /**
     * @var string|null
     */
    protected $purchaseInvoiceType;

    /**
     * @var list<OnlyId>|null
     */
    protected $purchaseOrders;

    /**
     * @var RecordAddress|null
     */
    protected $recordAddress;

    /**
     * @var string|null
     */
    protected $senderCountryCode;

    /**
     * @var list<PurchaseInvoiceShippingCostItem>|null
     */
    protected $shippingCostItems;

    /**
     * @var int|null
     */
    protected $shippingDate;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var list<PurchaseInvoiceStatusHistory>|null
     */
    protected $statusHistory;

    /**
     * @var string|null
     */
    protected $supplierHabitualExporterLetterOfIntentId;

    /**
     * @var string|null
     */
    protected $vatRegistrationNumber;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    /**
     * @return list<mixed>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<mixed>|null  $customAttributes
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

        return $this;
    }

    public function getCommercialLanguage(): ?string
    {
        return $this->commercialLanguage;
    }

    public function setCommercialLanguage(?string $commercialLanguage): self
    {
        $this->initialized['commercialLanguage'] = true;
        $this->commercialLanguage = $commercialLanguage;

        return $this;
    }

    public function getCreatorId(): ?string
    {
        return $this->creatorId;
    }

    public function setCreatorId(?string $creatorId): self
    {
        $this->initialized['creatorId'] = true;
        $this->creatorId = $creatorId;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getDisableEmailTemplate(): ?bool
    {
        return $this->disableEmailTemplate;
    }

    /**
     * @deprecated
     */
    public function setDisableEmailTemplate(?bool $disableEmailTemplate): self
    {
        $this->initialized['disableEmailTemplate'] = true;
        $this->disableEmailTemplate = $disableEmailTemplate;

        return $this;
    }

    public function getRecordComment(): ?string
    {
        return $this->recordComment;
    }

    public function setRecordComment(?string $recordComment): self
    {
        $this->initialized['recordComment'] = true;
        $this->recordComment = $recordComment;

        return $this;
    }

    public function getRecordFreeText(): ?string
    {
        return $this->recordFreeText;
    }

    public function setRecordFreeText(?string $recordFreeText): self
    {
        $this->initialized['recordFreeText'] = true;
        $this->recordFreeText = $recordFreeText;

        return $this;
    }

    public function getRecordOpening(): ?string
    {
        return $this->recordOpening;
    }

    public function setRecordOpening(?string $recordOpening): self
    {
        $this->initialized['recordOpening'] = true;
        $this->recordOpening = $recordOpening;

        return $this;
    }

    public function getSentToRecipient(): ?bool
    {
        return $this->sentToRecipient;
    }

    public function setSentToRecipient(?bool $sentToRecipient): self
    {
        $this->initialized['sentToRecipient'] = true;
        $this->sentToRecipient = $sentToRecipient;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param  list<string>|null  $tags
     */
    public function setTags(?array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }

    public function getCurrencyConversionDate(): ?int
    {
        return $this->currencyConversionDate;
    }

    public function setCurrencyConversionDate(?int $currencyConversionDate): self
    {
        $this->initialized['currencyConversionDate'] = true;
        $this->currencyConversionDate = $currencyConversionDate;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCurrencyConversionRate(): ?string
    {
        return $this->currencyConversionRate;
    }

    /**
     * @deprecated
     */
    public function setCurrencyConversionRate(?string $currencyConversionRate): self
    {
        $this->initialized['currencyConversionRate'] = true;
        $this->currencyConversionRate = $currencyConversionRate;

        return $this;
    }

    public function getGrossAmount(): ?string
    {
        return $this->grossAmount;
    }

    public function setGrossAmount(?string $grossAmount): self
    {
        $this->initialized['grossAmount'] = true;
        $this->grossAmount = $grossAmount;

        return $this;
    }

    public function getGrossAmountInCompanyCurrency(): ?string
    {
        return $this->grossAmountInCompanyCurrency;
    }

    public function setGrossAmountInCompanyCurrency(?string $grossAmountInCompanyCurrency): self
    {
        $this->initialized['grossAmountInCompanyCurrency'] = true;
        $this->grossAmountInCompanyCurrency = $grossAmountInCompanyCurrency;

        return $this;
    }

    public function getHeaderDiscount(): ?string
    {
        return $this->headerDiscount;
    }

    public function setHeaderDiscount(?string $headerDiscount): self
    {
        $this->initialized['headerDiscount'] = true;
        $this->headerDiscount = $headerDiscount;

        return $this;
    }

    public function getHeaderSurcharge(): ?string
    {
        return $this->headerSurcharge;
    }

    public function setHeaderSurcharge(?string $headerSurcharge): self
    {
        $this->initialized['headerSurcharge'] = true;
        $this->headerSurcharge = $headerSurcharge;

        return $this;
    }

    public function getNetAmount(): ?string
    {
        return $this->netAmount;
    }

    public function setNetAmount(?string $netAmount): self
    {
        $this->initialized['netAmount'] = true;
        $this->netAmount = $netAmount;

        return $this;
    }

    public function getNetAmountInCompanyCurrency(): ?string
    {
        return $this->netAmountInCompanyCurrency;
    }

    public function setNetAmountInCompanyCurrency(?string $netAmountInCompanyCurrency): self
    {
        $this->initialized['netAmountInCompanyCurrency'] = true;
        $this->netAmountInCompanyCurrency = $netAmountInCompanyCurrency;

        return $this;
    }

    public function getNonStandardTaxId(): ?string
    {
        return $this->nonStandardTaxId;
    }

    public function setNonStandardTaxId(?string $nonStandardTaxId): self
    {
        $this->initialized['nonStandardTaxId'] = true;
        $this->nonStandardTaxId = $nonStandardTaxId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getNonStandardTaxName(): ?string
    {
        return $this->nonStandardTaxName;
    }

    /**
     * @deprecated
     */
    public function setNonStandardTaxName(?string $nonStandardTaxName): self
    {
        $this->initialized['nonStandardTaxName'] = true;
        $this->nonStandardTaxName = $nonStandardTaxName;

        return $this;
    }

    public function getPaymentMethodId(): ?string
    {
        return $this->paymentMethodId;
    }

    public function setPaymentMethodId(?string $paymentMethodId): self
    {
        $this->initialized['paymentMethodId'] = true;
        $this->paymentMethodId = $paymentMethodId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getPaymentMethodName(): ?string
    {
        return $this->paymentMethodName;
    }

    /**
     * @deprecated
     */
    public function setPaymentMethodName(?string $paymentMethodName): self
    {
        $this->initialized['paymentMethodName'] = true;
        $this->paymentMethodName = $paymentMethodName;

        return $this;
    }

    public function getRecordCurrencyId(): ?string
    {
        return $this->recordCurrencyId;
    }

    public function setRecordCurrencyId(?string $recordCurrencyId): self
    {
        $this->initialized['recordCurrencyId'] = true;
        $this->recordCurrencyId = $recordCurrencyId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getRecordCurrencyName(): ?string
    {
        return $this->recordCurrencyName;
    }

    /**
     * @deprecated
     */
    public function setRecordCurrencyName(?string $recordCurrencyName): self
    {
        $this->initialized['recordCurrencyName'] = true;
        $this->recordCurrencyName = $recordCurrencyName;

        return $this;
    }

    public function getTermOfPaymentId(): ?string
    {
        return $this->termOfPaymentId;
    }

    public function setTermOfPaymentId(?string $termOfPaymentId): self
    {
        $this->initialized['termOfPaymentId'] = true;
        $this->termOfPaymentId = $termOfPaymentId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getTermOfPaymentName(): ?string
    {
        return $this->termOfPaymentName;
    }

    /**
     * @deprecated
     */
    public function setTermOfPaymentName(?string $termOfPaymentName): self
    {
        $this->initialized['termOfPaymentName'] = true;
        $this->termOfPaymentName = $termOfPaymentName;

        return $this;
    }

    public function getRecordEmailAddresses(): ?EmailAddresses
    {
        return $this->recordEmailAddresses;
    }

    public function setRecordEmailAddresses(?EmailAddresses $recordEmailAddresses): self
    {
        $this->initialized['recordEmailAddresses'] = true;
        $this->recordEmailAddresses = $recordEmailAddresses;

        return $this;
    }

    public function getResponsibleUserId(): ?string
    {
        return $this->responsibleUserId;
    }

    public function setResponsibleUserId(?string $responsibleUserId): self
    {
        $this->initialized['responsibleUserId'] = true;
        $this->responsibleUserId = $responsibleUserId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getResponsibleUserUsername(): ?string
    {
        return $this->responsibleUserUsername;
    }

    /**
     * @deprecated
     */
    public function setResponsibleUserUsername(?string $responsibleUserUsername): self
    {
        $this->initialized['responsibleUserUsername'] = true;
        $this->responsibleUserUsername = $responsibleUserUsername;

        return $this;
    }

    public function getServicePeriodFrom(): ?int
    {
        return $this->servicePeriodFrom;
    }

    public function setServicePeriodFrom(?int $servicePeriodFrom): self
    {
        $this->initialized['servicePeriodFrom'] = true;
        $this->servicePeriodFrom = $servicePeriodFrom;

        return $this;
    }

    public function getServicePeriodTo(): ?int
    {
        return $this->servicePeriodTo;
    }

    public function setServicePeriodTo(?int $servicePeriodTo): self
    {
        $this->initialized['servicePeriodTo'] = true;
        $this->servicePeriodTo = $servicePeriodTo;

        return $this;
    }

    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }

    public function setSupplierId(?string $supplierId): self
    {
        $this->initialized['supplierId'] = true;
        $this->supplierId = $supplierId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSupplierNumber(): ?string
    {
        return $this->supplierNumber;
    }

    /**
     * @deprecated
     */
    public function setSupplierNumber(?string $supplierNumber): self
    {
        $this->initialized['supplierNumber'] = true;
        $this->supplierNumber = $supplierNumber;

        return $this;
    }

    public function getBookingDate(): ?int
    {
        return $this->bookingDate;
    }

    public function setBookingDate(?int $bookingDate): self
    {
        $this->initialized['bookingDate'] = true;
        $this->bookingDate = $bookingDate;

        return $this;
    }

    public function getBookingText(): ?string
    {
        return $this->bookingText;
    }

    public function setBookingText(?string $bookingText): self
    {
        $this->initialized['bookingText'] = true;
        $this->bookingText = $bookingText;

        return $this;
    }

    public function getCancellationDate(): ?int
    {
        return $this->cancellationDate;
    }

    public function setCancellationDate(?int $cancellationDate): self
    {
        $this->initialized['cancellationDate'] = true;
        $this->cancellationDate = $cancellationDate;

        return $this;
    }

    public function getCostCenterId(): ?string
    {
        return $this->costCenterId;
    }

    public function setCostCenterId(?string $costCenterId): self
    {
        $this->initialized['costCenterId'] = true;
        $this->costCenterId = $costCenterId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCostCenterNumber(): ?string
    {
        return $this->costCenterNumber;
    }

    /**
     * @deprecated
     */
    public function setCostCenterNumber(?string $costCenterNumber): self
    {
        $this->initialized['costCenterNumber'] = true;
        $this->costCenterNumber = $costCenterNumber;

        return $this;
    }

    public function getCostTypeId(): ?string
    {
        return $this->costTypeId;
    }

    public function setCostTypeId(?string $costTypeId): self
    {
        $this->initialized['costTypeId'] = true;
        $this->costTypeId = $costTypeId;

        return $this;
    }

    public function getCreatedViaOcr(): ?bool
    {
        return $this->createdViaOcr;
    }

    public function setCreatedViaOcr(?bool $createdViaOcr): self
    {
        $this->initialized['createdViaOcr'] = true;
        $this->createdViaOcr = $createdViaOcr;

        return $this;
    }

    public function getCreditResetsOrderState(): ?bool
    {
        return $this->creditResetsOrderState;
    }

    public function setCreditResetsOrderState(?bool $creditResetsOrderState): self
    {
        $this->initialized['creditResetsOrderState'] = true;
        $this->creditResetsOrderState = $creditResetsOrderState;

        return $this;
    }

    public function getDeliveryAddress(): ?RecordAddress
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(?RecordAddress $deliveryAddress): self
    {
        $this->initialized['deliveryAddress'] = true;
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    public function getDeliveryDate(): ?int
    {
        return $this->deliveryDate;
    }

    public function setDeliveryDate(?int $deliveryDate): self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    public function getDueDate(): ?int
    {
        return $this->dueDate;
    }

    public function setDueDate(?int $dueDate): self
    {
        $this->initialized['dueDate'] = true;
        $this->dueDate = $dueDate;

        return $this;
    }

    public function getGrossAmountOfHeaderTaxes(): ?string
    {
        return $this->grossAmountOfHeaderTaxes;
    }

    public function setGrossAmountOfHeaderTaxes(?string $grossAmountOfHeaderTaxes): self
    {
        $this->initialized['grossAmountOfHeaderTaxes'] = true;
        $this->grossAmountOfHeaderTaxes = $grossAmountOfHeaderTaxes;

        return $this;
    }

    public function getGrossAmountOfHeaderTaxesInCompanyCurrency(): ?string
    {
        return $this->grossAmountOfHeaderTaxesInCompanyCurrency;
    }

    public function setGrossAmountOfHeaderTaxesInCompanyCurrency(?string $grossAmountOfHeaderTaxesInCompanyCurrency): self
    {
        $this->initialized['grossAmountOfHeaderTaxesInCompanyCurrency'] = true;
        $this->grossAmountOfHeaderTaxesInCompanyCurrency = $grossAmountOfHeaderTaxesInCompanyCurrency;

        return $this;
    }

    public function getGrossPrices(): ?bool
    {
        return $this->grossPrices;
    }

    public function setGrossPrices(?bool $grossPrices): self
    {
        $this->initialized['grossPrices'] = true;
        $this->grossPrices = $grossPrices;

        return $this;
    }

    public function getImportSalesTaxAmount(): ?string
    {
        return $this->importSalesTaxAmount;
    }

    public function setImportSalesTaxAmount(?string $importSalesTaxAmount): self
    {
        $this->initialized['importSalesTaxAmount'] = true;
        $this->importSalesTaxAmount = $importSalesTaxAmount;

        return $this;
    }

    public function getImportSalesTaxId(): ?string
    {
        return $this->importSalesTaxId;
    }

    public function setImportSalesTaxId(?string $importSalesTaxId): self
    {
        $this->initialized['importSalesTaxId'] = true;
        $this->importSalesTaxId = $importSalesTaxId;

        return $this;
    }

    public function getInternalInvoiceNumber(): ?string
    {
        return $this->internalInvoiceNumber;
    }

    public function setInternalInvoiceNumber(?string $internalInvoiceNumber): self
    {
        $this->initialized['internalInvoiceNumber'] = true;
        $this->internalInvoiceNumber = $internalInvoiceNumber;

        return $this;
    }

    public function getInvoiceAddress(): ?RecordAddress
    {
        return $this->invoiceAddress;
    }

    public function setInvoiceAddress(?RecordAddress $invoiceAddress): self
    {
        $this->initialized['invoiceAddress'] = true;
        $this->invoiceAddress = $invoiceAddress;

        return $this;
    }

    public function getInvoiceDate(): ?int
    {
        return $this->invoiceDate;
    }

    public function setInvoiceDate(?int $invoiceDate): self
    {
        $this->initialized['invoiceDate'] = true;
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }

    public function setInvoiceNumber(?string $invoiceNumber): self
    {
        $this->initialized['invoiceNumber'] = true;
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    public function getPaymentBlock(): ?bool
    {
        return $this->paymentBlock;
    }

    public function setPaymentBlock(?bool $paymentBlock): self
    {
        $this->initialized['paymentBlock'] = true;
        $this->paymentBlock = $paymentBlock;

        return $this;
    }

    public function getPaymentBlockNote(): ?string
    {
        return $this->paymentBlockNote;
    }

    public function setPaymentBlockNote(?string $paymentBlockNote): self
    {
        $this->initialized['paymentBlockNote'] = true;
        $this->paymentBlockNote = $paymentBlockNote;

        return $this;
    }

    public function getPaymentStatus(): ?string
    {
        return $this->paymentStatus;
    }

    public function setPaymentStatus(?string $paymentStatus): self
    {
        $this->initialized['paymentStatus'] = true;
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    public function getPrecedingPurchaseInvoiceId(): ?string
    {
        return $this->precedingPurchaseInvoiceId;
    }

    public function setPrecedingPurchaseInvoiceId(?string $precedingPurchaseInvoiceId): self
    {
        $this->initialized['precedingPurchaseInvoiceId'] = true;
        $this->precedingPurchaseInvoiceId = $precedingPurchaseInvoiceId;

        return $this;
    }

    public function getPricingDate(): ?int
    {
        return $this->pricingDate;
    }

    public function setPricingDate(?int $pricingDate): self
    {
        $this->initialized['pricingDate'] = true;
        $this->pricingDate = $pricingDate;

        return $this;
    }

    /**
     * @return list<PurchaseInvoiceItem>|null
     */
    public function getPurchaseInvoiceItems(): ?array
    {
        return $this->purchaseInvoiceItems;
    }

    /**
     * @param  list<PurchaseInvoiceItem>|null  $purchaseInvoiceItems
     */
    public function setPurchaseInvoiceItems(?array $purchaseInvoiceItems): self
    {
        $this->initialized['purchaseInvoiceItems'] = true;
        $this->purchaseInvoiceItems = $purchaseInvoiceItems;

        return $this;
    }

    public function getPurchaseInvoiceType(): ?string
    {
        return $this->purchaseInvoiceType;
    }

    public function setPurchaseInvoiceType(?string $purchaseInvoiceType): self
    {
        $this->initialized['purchaseInvoiceType'] = true;
        $this->purchaseInvoiceType = $purchaseInvoiceType;

        return $this;
    }

    /**
     * @return list<OnlyId>|null
     */
    public function getPurchaseOrders(): ?array
    {
        return $this->purchaseOrders;
    }

    /**
     * @param  list<OnlyId>|null  $purchaseOrders
     */
    public function setPurchaseOrders(?array $purchaseOrders): self
    {
        $this->initialized['purchaseOrders'] = true;
        $this->purchaseOrders = $purchaseOrders;

        return $this;
    }

    public function getRecordAddress(): ?RecordAddress
    {
        return $this->recordAddress;
    }

    public function setRecordAddress(?RecordAddress $recordAddress): self
    {
        $this->initialized['recordAddress'] = true;
        $this->recordAddress = $recordAddress;

        return $this;
    }

    public function getSenderCountryCode(): ?string
    {
        return $this->senderCountryCode;
    }

    public function setSenderCountryCode(?string $senderCountryCode): self
    {
        $this->initialized['senderCountryCode'] = true;
        $this->senderCountryCode = $senderCountryCode;

        return $this;
    }

    /**
     * @return list<PurchaseInvoiceShippingCostItem>|null
     */
    public function getShippingCostItems(): ?array
    {
        return $this->shippingCostItems;
    }

    /**
     * @param  list<PurchaseInvoiceShippingCostItem>|null  $shippingCostItems
     */
    public function setShippingCostItems(?array $shippingCostItems): self
    {
        $this->initialized['shippingCostItems'] = true;
        $this->shippingCostItems = $shippingCostItems;

        return $this;
    }

    public function getShippingDate(): ?int
    {
        return $this->shippingDate;
    }

    public function setShippingDate(?int $shippingDate): self
    {
        $this->initialized['shippingDate'] = true;
        $this->shippingDate = $shippingDate;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * @return list<PurchaseInvoiceStatusHistory>|null
     */
    public function getStatusHistory(): ?array
    {
        return $this->statusHistory;
    }

    /**
     * @param  list<PurchaseInvoiceStatusHistory>|null  $statusHistory
     */
    public function setStatusHistory(?array $statusHistory): self
    {
        $this->initialized['statusHistory'] = true;
        $this->statusHistory = $statusHistory;

        return $this;
    }

    public function getSupplierHabitualExporterLetterOfIntentId(): ?string
    {
        return $this->supplierHabitualExporterLetterOfIntentId;
    }

    public function setSupplierHabitualExporterLetterOfIntentId(?string $supplierHabitualExporterLetterOfIntentId): self
    {
        $this->initialized['supplierHabitualExporterLetterOfIntentId'] = true;
        $this->supplierHabitualExporterLetterOfIntentId = $supplierHabitualExporterLetterOfIntentId;

        return $this;
    }

    public function getVatRegistrationNumber(): ?string
    {
        return $this->vatRegistrationNumber;
    }

    public function setVatRegistrationNumber(?string $vatRegistrationNumber): self
    {
        $this->initialized['vatRegistrationNumber'] = true;
        $this->vatRegistrationNumber = $vatRegistrationNumber;

        return $this;
    }
}
