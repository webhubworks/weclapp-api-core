<?php

namespace Webhubworks\WeclappApiCore\Model;

class BlanketPurchaseOrder extends \ArrayObject
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
     * @var list<CustomAttribute>|null
     */
    protected $customAttributes;

    /**
     * @var string|null
     */
    protected $articleId;

    /**
     * @var string|null
     */
    protected $blanketPurchaseOrderNumber;

    /**
     * @var string|null
     */
    protected $calculationMode;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $comment;

    /**
     * @var string|null
     */
    protected $commercialLanguage;

    /**
     * @var string|null
     */
    protected $confirmationNumber;

    /**
     * @var string|null
     */
    protected $creatorId;

    /**
     * @var RecordAddress|null
     */
    protected $deliveryAddress;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $discountPercentage;

    /**
     * @var int|null
     */
    protected $endDate;

    /**
     * @var string|null
     */
    protected $formSettingsFromDistributionChannel;

    /**
     * @var string|null
     */
    protected $headerDiscount;

    /**
     * @var string|null
     */
    protected $headerSurcharge;

    /**
     * @var RecordAddress|null
     */
    protected $invoiceAddress;

    /**
     * @var string|null
     */
    protected $nonStandardTaxId;

    /**
     * @var int|null
     */
    protected $orderDate;

    /**
     * @var string|null
     */
    protected $orderQuantity;

    /**
     * @var string|null
     */
    protected $paymentMethodId;

    /**
     * @var string|null
     */
    protected $recipientCountryCode;

    /**
     * @var RecordAddress|null
     */
    protected $recordAddress;

    /**
     * @var string|null
     */
    protected $recordComment;

    /**
     * @var string|null
     */
    protected $recordCurrencyId;

    /**
     * @var EmailAddresses|null
     */
    protected $recordEmailAddresses;

    /**
     * @var string|null
     */
    protected $recordFreeText;

    /**
     * @var string|null
     */
    protected $recordOpening;

    /**
     * @var list<ReductionAdditionItem>|null
     */
    protected $reductionAdditionItems;

    /**
     * @var list<Releases>|null
     */
    protected $releases;

    /**
     * @var string|null
     */
    protected $residualQuantity;

    /**
     * @var string|null
     */
    protected $responsibleUserId;

    /**
     * @var string|null
     */
    protected $senderCountryCode;

    /**
     * @var bool|null
     */
    protected $sentToRecipient;

    /**
     * @var string|null
     */
    protected $shipmentMethodId;

    /**
     * @var int|null
     */
    protected $startDate;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var list<BlanketPurchaseOrderStatusHistory>|null
     */
    protected $statusHistory;

    /**
     * @var string|null
     */
    protected $supplierBlanketPurchaseOrderNumber;

    /**
     * @var string|null
     */
    protected $supplierId;

    /**
     * @var string|null
     */
    protected $supplierQuotationNumber;

    /**
     * @var list<string>|null
     */
    protected $tags;

    /**
     * @var string|null
     */
    protected $taxId;

    /**
     * @var string|null
     */
    protected $termOfPaymentId;

    /**
     * @var string|null
     */
    protected $unitPrice;

    /**
     * @var bool|null
     */
    protected $useManualUnitPrice;

    /**
     * @var string|null
     */
    protected $warehouseId;

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
     * @return list<CustomAttribute>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<CustomAttribute>|null  $customAttributes
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

        return $this;
    }

    public function getArticleId(): ?string
    {
        return $this->articleId;
    }

    public function setArticleId(?string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;

        return $this;
    }

    public function getBlanketPurchaseOrderNumber(): ?string
    {
        return $this->blanketPurchaseOrderNumber;
    }

    public function setBlanketPurchaseOrderNumber(?string $blanketPurchaseOrderNumber): self
    {
        $this->initialized['blanketPurchaseOrderNumber'] = true;
        $this->blanketPurchaseOrderNumber = $blanketPurchaseOrderNumber;

        return $this;
    }

    public function getCalculationMode(): ?string
    {
        return $this->calculationMode;
    }

    public function setCalculationMode(?string $calculationMode): self
    {
        $this->initialized['calculationMode'] = true;
        $this->calculationMode = $calculationMode;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @deprecated
     */
    public function setComment(?string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;

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

    public function getConfirmationNumber(): ?string
    {
        return $this->confirmationNumber;
    }

    public function setConfirmationNumber(?string $confirmationNumber): self
    {
        $this->initialized['confirmationNumber'] = true;
        $this->confirmationNumber = $confirmationNumber;

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

    public function getDiscountPercentage(): ?string
    {
        return $this->discountPercentage;
    }

    public function setDiscountPercentage(?string $discountPercentage): self
    {
        $this->initialized['discountPercentage'] = true;
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    public function getEndDate(): ?int
    {
        return $this->endDate;
    }

    public function setEndDate(?int $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

    public function getFormSettingsFromDistributionChannel(): ?string
    {
        return $this->formSettingsFromDistributionChannel;
    }

    public function setFormSettingsFromDistributionChannel(?string $formSettingsFromDistributionChannel): self
    {
        $this->initialized['formSettingsFromDistributionChannel'] = true;
        $this->formSettingsFromDistributionChannel = $formSettingsFromDistributionChannel;

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

    public function getOrderDate(): ?int
    {
        return $this->orderDate;
    }

    public function setOrderDate(?int $orderDate): self
    {
        $this->initialized['orderDate'] = true;
        $this->orderDate = $orderDate;

        return $this;
    }

    public function getOrderQuantity(): ?string
    {
        return $this->orderQuantity;
    }

    public function setOrderQuantity(?string $orderQuantity): self
    {
        $this->initialized['orderQuantity'] = true;
        $this->orderQuantity = $orderQuantity;

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

    public function getRecipientCountryCode(): ?string
    {
        return $this->recipientCountryCode;
    }

    public function setRecipientCountryCode(?string $recipientCountryCode): self
    {
        $this->initialized['recipientCountryCode'] = true;
        $this->recipientCountryCode = $recipientCountryCode;

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

    /**
     * @return list<ReductionAdditionItem>|null
     */
    public function getReductionAdditionItems(): ?array
    {
        return $this->reductionAdditionItems;
    }

    /**
     * @param  list<ReductionAdditionItem>|null  $reductionAdditionItems
     */
    public function setReductionAdditionItems(?array $reductionAdditionItems): self
    {
        $this->initialized['reductionAdditionItems'] = true;
        $this->reductionAdditionItems = $reductionAdditionItems;

        return $this;
    }

    /**
     * @return list<Releases>|null
     */
    public function getReleases(): ?array
    {
        return $this->releases;
    }

    /**
     * @param  list<Releases>|null  $releases
     */
    public function setReleases(?array $releases): self
    {
        $this->initialized['releases'] = true;
        $this->releases = $releases;

        return $this;
    }

    public function getResidualQuantity(): ?string
    {
        return $this->residualQuantity;
    }

    public function setResidualQuantity(?string $residualQuantity): self
    {
        $this->initialized['residualQuantity'] = true;
        $this->residualQuantity = $residualQuantity;

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

    public function getShipmentMethodId(): ?string
    {
        return $this->shipmentMethodId;
    }

    public function setShipmentMethodId(?string $shipmentMethodId): self
    {
        $this->initialized['shipmentMethodId'] = true;
        $this->shipmentMethodId = $shipmentMethodId;

        return $this;
    }

    public function getStartDate(): ?int
    {
        return $this->startDate;
    }

    public function setStartDate(?int $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

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
     * @return list<BlanketPurchaseOrderStatusHistory>|null
     */
    public function getStatusHistory(): ?array
    {
        return $this->statusHistory;
    }

    /**
     * @param  list<BlanketPurchaseOrderStatusHistory>|null  $statusHistory
     */
    public function setStatusHistory(?array $statusHistory): self
    {
        $this->initialized['statusHistory'] = true;
        $this->statusHistory = $statusHistory;

        return $this;
    }

    public function getSupplierBlanketPurchaseOrderNumber(): ?string
    {
        return $this->supplierBlanketPurchaseOrderNumber;
    }

    public function setSupplierBlanketPurchaseOrderNumber(?string $supplierBlanketPurchaseOrderNumber): self
    {
        $this->initialized['supplierBlanketPurchaseOrderNumber'] = true;
        $this->supplierBlanketPurchaseOrderNumber = $supplierBlanketPurchaseOrderNumber;

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

    public function getSupplierQuotationNumber(): ?string
    {
        return $this->supplierQuotationNumber;
    }

    public function setSupplierQuotationNumber(?string $supplierQuotationNumber): self
    {
        $this->initialized['supplierQuotationNumber'] = true;
        $this->supplierQuotationNumber = $supplierQuotationNumber;

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

    public function getTaxId(): ?string
    {
        return $this->taxId;
    }

    public function setTaxId(?string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;

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

    public function getUnitPrice(): ?string
    {
        return $this->unitPrice;
    }

    public function setUnitPrice(?string $unitPrice): self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;

        return $this;
    }

    public function getUseManualUnitPrice(): ?bool
    {
        return $this->useManualUnitPrice;
    }

    public function setUseManualUnitPrice(?bool $useManualUnitPrice): self
    {
        $this->initialized['useManualUnitPrice'] = true;
        $this->useManualUnitPrice = $useManualUnitPrice;

        return $this;
    }

    public function getWarehouseId(): ?string
    {
        return $this->warehouseId;
    }

    public function setWarehouseId(?string $warehouseId): self
    {
        $this->initialized['warehouseId'] = true;
        $this->warehouseId = $warehouseId;

        return $this;
    }
}
