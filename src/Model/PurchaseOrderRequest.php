<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderRequest extends \ArrayObject
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
    protected $confirmationDeadline;
    /**
     * 
     *
     * @var RecordAddress
     */
    protected $deliveryAddress;
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
     * @var list<PurchaseOrderRequestItem>
     */
    protected $purchaseOrderRequestItems;
    /**
     * 
     *
     * @var string
     */
    protected $purchaseOrderRequestNumber;
    /**
     * 
     *
     * @var list<PurchaseOrderRequestOffer>
     */
    protected $purchaseOrderRequestOffers;
    /**
     * 
     *
     * @var string
     */
    protected $purchaseOrderRequestType;
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
     * @var RecordAddress
     */
    protected $recordAddress;
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
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var list<PurchaseOrderRequestStatusHistory>
     */
    protected $statusHistory;
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
    public function getConfirmationDeadline(): int
    {
        return $this->confirmationDeadline;
    }
    /**
     * 
     *
     * @param int $confirmationDeadline
     *
     * @return self
     */
    public function setConfirmationDeadline(int $confirmationDeadline): self
    {
        $this->initialized['confirmationDeadline'] = true;
        $this->confirmationDeadline = $confirmationDeadline;
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
     * @return list<PurchaseOrderRequestItem>
     */
    public function getPurchaseOrderRequestItems(): array
    {
        return $this->purchaseOrderRequestItems;
    }
    /**
     * 
     *
     * @param list<PurchaseOrderRequestItem> $purchaseOrderRequestItems
     *
     * @return self
     */
    public function setPurchaseOrderRequestItems(array $purchaseOrderRequestItems): self
    {
        $this->initialized['purchaseOrderRequestItems'] = true;
        $this->purchaseOrderRequestItems = $purchaseOrderRequestItems;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPurchaseOrderRequestNumber(): string
    {
        return $this->purchaseOrderRequestNumber;
    }
    /**
     * 
     *
     * @param string $purchaseOrderRequestNumber
     *
     * @return self
     */
    public function setPurchaseOrderRequestNumber(string $purchaseOrderRequestNumber): self
    {
        $this->initialized['purchaseOrderRequestNumber'] = true;
        $this->purchaseOrderRequestNumber = $purchaseOrderRequestNumber;
        return $this;
    }
    /**
     * 
     *
     * @return list<PurchaseOrderRequestOffer>
     */
    public function getPurchaseOrderRequestOffers(): array
    {
        return $this->purchaseOrderRequestOffers;
    }
    /**
     * 
     *
     * @param list<PurchaseOrderRequestOffer> $purchaseOrderRequestOffers
     *
     * @return self
     */
    public function setPurchaseOrderRequestOffers(array $purchaseOrderRequestOffers): self
    {
        $this->initialized['purchaseOrderRequestOffers'] = true;
        $this->purchaseOrderRequestOffers = $purchaseOrderRequestOffers;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPurchaseOrderRequestType(): string
    {
        return $this->purchaseOrderRequestType;
    }
    /**
     * 
     *
     * @param string $purchaseOrderRequestType
     *
     * @return self
     */
    public function setPurchaseOrderRequestType(string $purchaseOrderRequestType): self
    {
        $this->initialized['purchaseOrderRequestType'] = true;
        $this->purchaseOrderRequestType = $purchaseOrderRequestType;
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
     * @return list<PurchaseOrderRequestStatusHistory>
     */
    public function getStatusHistory(): array
    {
        return $this->statusHistory;
    }
    /**
     * 
     *
     * @param list<PurchaseOrderRequestStatusHistory> $statusHistory
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