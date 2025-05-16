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
     * @var string
     */
    protected $id;

    /**
     * @var int
     */
    protected $createdDate;

    /**
     * @var int
     */
    protected $lastModifiedDate;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var list<mixed>
     */
    protected $customAttributes;

    /**
     * @var string
     */
    protected $commercialLanguage;

    /**
     * @var string
     */
    protected $creatorId;

    /**
     * @var string
     */
    protected $description;

    /**
     * @deprecated
     *
     * @var bool
     */
    protected $disableEmailTemplate;

    /**
     * @var string
     */
    protected $recordComment;

    /**
     * @var string
     */
    protected $recordFreeText;

    /**
     * @var string
     */
    protected $recordOpening;

    /**
     * @var bool
     */
    protected $sentToRecipient;

    /**
     * @var list<string>
     */
    protected $tags;

    /**
     * @var int
     */
    protected $confirmationDeadline;

    /**
     * @var RecordAddress
     */
    protected $deliveryAddress;

    /**
     * @var RecordAddress
     */
    protected $invoiceAddress;

    /**
     * @var int
     */
    protected $plannedDeliveryDate;

    /**
     * @var list<PurchaseOrderRequestItem>
     */
    protected $purchaseOrderRequestItems;

    /**
     * @var string
     */
    protected $purchaseOrderRequestNumber;

    /**
     * @var list<PurchaseOrderRequestOffer>
     */
    protected $purchaseOrderRequestOffers;

    /**
     * @var string
     */
    protected $purchaseOrderRequestType;

    /**
     * @var string
     */
    protected $quotationId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $quotationNumber;

    /**
     * @var RecordAddress
     */
    protected $recordAddress;

    /**
     * @var string
     */
    protected $responsibleUserId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $responsibleUserUsername;

    /**
     * @var string
     */
    protected $salesOrderId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $salesOrderNumber;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var list<PurchaseOrderRequestStatusHistory>
     */
    protected $statusHistory;

    /**
     * @var string
     */
    protected $warehouseId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $warehouseName;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    /**
     * @return list<mixed>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<mixed>  $customAttributes
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

        return $this;
    }

    public function getCommercialLanguage(): string
    {
        return $this->commercialLanguage;
    }

    public function setCommercialLanguage(string $commercialLanguage): self
    {
        $this->initialized['commercialLanguage'] = true;
        $this->commercialLanguage = $commercialLanguage;

        return $this;
    }

    public function getCreatorId(): string
    {
        return $this->creatorId;
    }

    public function setCreatorId(string $creatorId): self
    {
        $this->initialized['creatorId'] = true;
        $this->creatorId = $creatorId;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getDisableEmailTemplate(): bool
    {
        return $this->disableEmailTemplate;
    }

    /**
     * @deprecated
     */
    public function setDisableEmailTemplate(bool $disableEmailTemplate): self
    {
        $this->initialized['disableEmailTemplate'] = true;
        $this->disableEmailTemplate = $disableEmailTemplate;

        return $this;
    }

    public function getRecordComment(): string
    {
        return $this->recordComment;
    }

    public function setRecordComment(string $recordComment): self
    {
        $this->initialized['recordComment'] = true;
        $this->recordComment = $recordComment;

        return $this;
    }

    public function getRecordFreeText(): string
    {
        return $this->recordFreeText;
    }

    public function setRecordFreeText(string $recordFreeText): self
    {
        $this->initialized['recordFreeText'] = true;
        $this->recordFreeText = $recordFreeText;

        return $this;
    }

    public function getRecordOpening(): string
    {
        return $this->recordOpening;
    }

    public function setRecordOpening(string $recordOpening): self
    {
        $this->initialized['recordOpening'] = true;
        $this->recordOpening = $recordOpening;

        return $this;
    }

    public function getSentToRecipient(): bool
    {
        return $this->sentToRecipient;
    }

    public function setSentToRecipient(bool $sentToRecipient): self
    {
        $this->initialized['sentToRecipient'] = true;
        $this->sentToRecipient = $sentToRecipient;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param  list<string>  $tags
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }

    public function getConfirmationDeadline(): int
    {
        return $this->confirmationDeadline;
    }

    public function setConfirmationDeadline(int $confirmationDeadline): self
    {
        $this->initialized['confirmationDeadline'] = true;
        $this->confirmationDeadline = $confirmationDeadline;

        return $this;
    }

    public function getDeliveryAddress(): RecordAddress
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(RecordAddress $deliveryAddress): self
    {
        $this->initialized['deliveryAddress'] = true;
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    public function getInvoiceAddress(): RecordAddress
    {
        return $this->invoiceAddress;
    }

    public function setInvoiceAddress(RecordAddress $invoiceAddress): self
    {
        $this->initialized['invoiceAddress'] = true;
        $this->invoiceAddress = $invoiceAddress;

        return $this;
    }

    public function getPlannedDeliveryDate(): int
    {
        return $this->plannedDeliveryDate;
    }

    public function setPlannedDeliveryDate(int $plannedDeliveryDate): self
    {
        $this->initialized['plannedDeliveryDate'] = true;
        $this->plannedDeliveryDate = $plannedDeliveryDate;

        return $this;
    }

    /**
     * @return list<PurchaseOrderRequestItem>
     */
    public function getPurchaseOrderRequestItems(): array
    {
        return $this->purchaseOrderRequestItems;
    }

    /**
     * @param  list<PurchaseOrderRequestItem>  $purchaseOrderRequestItems
     */
    public function setPurchaseOrderRequestItems(array $purchaseOrderRequestItems): self
    {
        $this->initialized['purchaseOrderRequestItems'] = true;
        $this->purchaseOrderRequestItems = $purchaseOrderRequestItems;

        return $this;
    }

    public function getPurchaseOrderRequestNumber(): string
    {
        return $this->purchaseOrderRequestNumber;
    }

    public function setPurchaseOrderRequestNumber(string $purchaseOrderRequestNumber): self
    {
        $this->initialized['purchaseOrderRequestNumber'] = true;
        $this->purchaseOrderRequestNumber = $purchaseOrderRequestNumber;

        return $this;
    }

    /**
     * @return list<PurchaseOrderRequestOffer>
     */
    public function getPurchaseOrderRequestOffers(): array
    {
        return $this->purchaseOrderRequestOffers;
    }

    /**
     * @param  list<PurchaseOrderRequestOffer>  $purchaseOrderRequestOffers
     */
    public function setPurchaseOrderRequestOffers(array $purchaseOrderRequestOffers): self
    {
        $this->initialized['purchaseOrderRequestOffers'] = true;
        $this->purchaseOrderRequestOffers = $purchaseOrderRequestOffers;

        return $this;
    }

    public function getPurchaseOrderRequestType(): string
    {
        return $this->purchaseOrderRequestType;
    }

    public function setPurchaseOrderRequestType(string $purchaseOrderRequestType): self
    {
        $this->initialized['purchaseOrderRequestType'] = true;
        $this->purchaseOrderRequestType = $purchaseOrderRequestType;

        return $this;
    }

    public function getQuotationId(): string
    {
        return $this->quotationId;
    }

    public function setQuotationId(string $quotationId): self
    {
        $this->initialized['quotationId'] = true;
        $this->quotationId = $quotationId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getQuotationNumber(): string
    {
        return $this->quotationNumber;
    }

    /**
     * @deprecated
     */
    public function setQuotationNumber(string $quotationNumber): self
    {
        $this->initialized['quotationNumber'] = true;
        $this->quotationNumber = $quotationNumber;

        return $this;
    }

    public function getRecordAddress(): RecordAddress
    {
        return $this->recordAddress;
    }

    public function setRecordAddress(RecordAddress $recordAddress): self
    {
        $this->initialized['recordAddress'] = true;
        $this->recordAddress = $recordAddress;

        return $this;
    }

    public function getResponsibleUserId(): string
    {
        return $this->responsibleUserId;
    }

    public function setResponsibleUserId(string $responsibleUserId): self
    {
        $this->initialized['responsibleUserId'] = true;
        $this->responsibleUserId = $responsibleUserId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getResponsibleUserUsername(): string
    {
        return $this->responsibleUserUsername;
    }

    /**
     * @deprecated
     */
    public function setResponsibleUserUsername(string $responsibleUserUsername): self
    {
        $this->initialized['responsibleUserUsername'] = true;
        $this->responsibleUserUsername = $responsibleUserUsername;

        return $this;
    }

    public function getSalesOrderId(): string
    {
        return $this->salesOrderId;
    }

    public function setSalesOrderId(string $salesOrderId): self
    {
        $this->initialized['salesOrderId'] = true;
        $this->salesOrderId = $salesOrderId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSalesOrderNumber(): string
    {
        return $this->salesOrderNumber;
    }

    /**
     * @deprecated
     */
    public function setSalesOrderNumber(string $salesOrderNumber): self
    {
        $this->initialized['salesOrderNumber'] = true;
        $this->salesOrderNumber = $salesOrderNumber;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * @return list<PurchaseOrderRequestStatusHistory>
     */
    public function getStatusHistory(): array
    {
        return $this->statusHistory;
    }

    /**
     * @param  list<PurchaseOrderRequestStatusHistory>  $statusHistory
     */
    public function setStatusHistory(array $statusHistory): self
    {
        $this->initialized['statusHistory'] = true;
        $this->statusHistory = $statusHistory;

        return $this;
    }

    public function getWarehouseId(): string
    {
        return $this->warehouseId;
    }

    public function setWarehouseId(string $warehouseId): self
    {
        $this->initialized['warehouseId'] = true;
        $this->warehouseId = $warehouseId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getWarehouseName(): string
    {
        return $this->warehouseName;
    }

    /**
     * @deprecated
     */
    public function setWarehouseName(string $warehouseName): self
    {
        $this->initialized['warehouseName'] = true;
        $this->warehouseName = $warehouseName;

        return $this;
    }
}
