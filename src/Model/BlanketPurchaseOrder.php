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
     * @var list<CustomAttribute>|null
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var string|null
     */
    protected $articleId;
    /**
     * 
     *
     * @var string|null
     */
    protected $blanketPurchaseOrderNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $calculationMode;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $comment;
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
    protected $confirmationNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $creatorId;
    /**
     * 
     *
     * @var RecordAddress|null
     */
    protected $deliveryAddress;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $discountPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $endDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $formSettingsFromDistributionChannel;
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
     * @var RecordAddress|null
     */
    protected $invoiceAddress;
    /**
     * 
     *
     * @var string|null
     */
    protected $nonStandardTaxId;
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
    protected $orderQuantity;
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
    protected $recordComment;
    /**
     * 
     *
     * @var string|null
     */
    protected $recordCurrencyId;
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
     * @var list<ReductionAdditionItem>|null
     */
    protected $reductionAdditionItems;
    /**
     * 
     *
     * @var list<Releases>|null
     */
    protected $releases;
    /**
     * 
     *
     * @var string|null
     */
    protected $residualQuantity;
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
    protected $senderCountryCode;
    /**
     * 
     *
     * @var bool|null
     */
    protected $sentToRecipient;
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
    protected $startDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var list<BlanketPurchaseOrderStatusHistory>|null
     */
    protected $statusHistory;
    /**
     * 
     *
     * @var string|null
     */
    protected $supplierBlanketPurchaseOrderNumber;
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
    protected $supplierQuotationNumber;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $tags;
    /**
     * 
     *
     * @var string|null
     */
    protected $taxId;
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
    protected $unitPrice;
    /**
     * 
     *
     * @var bool|null
     */
    protected $useManualUnitPrice;
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
     * @return list<CustomAttribute>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<CustomAttribute>|null $customAttributes
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
    public function getArticleId(): ?string
    {
        return $this->articleId;
    }
    /**
     * 
     *
     * @param string|null $articleId
     *
     * @return self
     */
    public function setArticleId(?string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBlanketPurchaseOrderNumber(): ?string
    {
        return $this->blanketPurchaseOrderNumber;
    }
    /**
     * 
     *
     * @param string|null $blanketPurchaseOrderNumber
     *
     * @return self
     */
    public function setBlanketPurchaseOrderNumber(?string $blanketPurchaseOrderNumber): self
    {
        $this->initialized['blanketPurchaseOrderNumber'] = true;
        $this->blanketPurchaseOrderNumber = $blanketPurchaseOrderNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCalculationMode(): ?string
    {
        return $this->calculationMode;
    }
    /**
     * 
     *
     * @param string|null $calculationMode
     *
     * @return self
     */
    public function setCalculationMode(?string $calculationMode): self
    {
        $this->initialized['calculationMode'] = true;
        $this->calculationMode = $calculationMode;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string|null $comment
     *
     * @deprecated
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
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
     * @return string|null
     */
    public function getDiscountPercentage(): ?string
    {
        return $this->discountPercentage;
    }
    /**
     * 
     *
     * @param string|null $discountPercentage
     *
     * @return self
     */
    public function setDiscountPercentage(?string $discountPercentage): self
    {
        $this->initialized['discountPercentage'] = true;
        $this->discountPercentage = $discountPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getEndDate(): ?int
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param int|null $endDate
     *
     * @return self
     */
    public function setEndDate(?int $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFormSettingsFromDistributionChannel(): ?string
    {
        return $this->formSettingsFromDistributionChannel;
    }
    /**
     * 
     *
     * @param string|null $formSettingsFromDistributionChannel
     *
     * @return self
     */
    public function setFormSettingsFromDistributionChannel(?string $formSettingsFromDistributionChannel): self
    {
        $this->initialized['formSettingsFromDistributionChannel'] = true;
        $this->formSettingsFromDistributionChannel = $formSettingsFromDistributionChannel;
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
    public function getOrderQuantity(): ?string
    {
        return $this->orderQuantity;
    }
    /**
     * 
     *
     * @param string|null $orderQuantity
     *
     * @return self
     */
    public function setOrderQuantity(?string $orderQuantity): self
    {
        $this->initialized['orderQuantity'] = true;
        $this->orderQuantity = $orderQuantity;
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
     * @return list<ReductionAdditionItem>|null
     */
    public function getReductionAdditionItems(): ?array
    {
        return $this->reductionAdditionItems;
    }
    /**
     * 
     *
     * @param list<ReductionAdditionItem>|null $reductionAdditionItems
     *
     * @return self
     */
    public function setReductionAdditionItems(?array $reductionAdditionItems): self
    {
        $this->initialized['reductionAdditionItems'] = true;
        $this->reductionAdditionItems = $reductionAdditionItems;
        return $this;
    }
    /**
     * 
     *
     * @return list<Releases>|null
     */
    public function getReleases(): ?array
    {
        return $this->releases;
    }
    /**
     * 
     *
     * @param list<Releases>|null $releases
     *
     * @return self
     */
    public function setReleases(?array $releases): self
    {
        $this->initialized['releases'] = true;
        $this->releases = $releases;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getResidualQuantity(): ?string
    {
        return $this->residualQuantity;
    }
    /**
     * 
     *
     * @param string|null $residualQuantity
     *
     * @return self
     */
    public function setResidualQuantity(?string $residualQuantity): self
    {
        $this->initialized['residualQuantity'] = true;
        $this->residualQuantity = $residualQuantity;
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
    public function getStartDate(): ?int
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param int|null $startDate
     *
     * @return self
     */
    public function setStartDate(?int $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
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
     * @return list<BlanketPurchaseOrderStatusHistory>|null
     */
    public function getStatusHistory(): ?array
    {
        return $this->statusHistory;
    }
    /**
     * 
     *
     * @param list<BlanketPurchaseOrderStatusHistory>|null $statusHistory
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
    public function getSupplierBlanketPurchaseOrderNumber(): ?string
    {
        return $this->supplierBlanketPurchaseOrderNumber;
    }
    /**
     * 
     *
     * @param string|null $supplierBlanketPurchaseOrderNumber
     *
     * @return self
     */
    public function setSupplierBlanketPurchaseOrderNumber(?string $supplierBlanketPurchaseOrderNumber): self
    {
        $this->initialized['supplierBlanketPurchaseOrderNumber'] = true;
        $this->supplierBlanketPurchaseOrderNumber = $supplierBlanketPurchaseOrderNumber;
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
     * @return string|null
     */
    public function getTaxId(): ?string
    {
        return $this->taxId;
    }
    /**
     * 
     *
     * @param string|null $taxId
     *
     * @return self
     */
    public function setTaxId(?string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;
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
    public function getUnitPrice(): ?string
    {
        return $this->unitPrice;
    }
    /**
     * 
     *
     * @param string|null $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(?string $unitPrice): self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUseManualUnitPrice(): ?bool
    {
        return $this->useManualUnitPrice;
    }
    /**
     * 
     *
     * @param bool|null $useManualUnitPrice
     *
     * @return self
     */
    public function setUseManualUnitPrice(?bool $useManualUnitPrice): self
    {
        $this->initialized['useManualUnitPrice'] = true;
        $this->useManualUnitPrice = $useManualUnitPrice;
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