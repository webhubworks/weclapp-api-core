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
    protected $confirmationDeadline;

    /**
     * @var RecordAddress|null
     */
    protected $deliveryAddress;

    /**
     * @var RecordAddress|null
     */
    protected $invoiceAddress;

    /**
     * @var int|null
     */
    protected $plannedDeliveryDate;

    /**
     * @var list<PurchaseOrderRequestItem>|null
     */
    protected $purchaseOrderRequestItems;

    /**
     * @var string|null
     */
    protected $purchaseOrderRequestNumber;

    /**
     * @var list<PurchaseOrderRequestOffer>|null
     */
    protected $purchaseOrderRequestOffers;

    /**
     * @var string|null
     */
    protected $purchaseOrderRequestType;

    /**
     * @var string|null
     */
    protected $quotationId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $quotationNumber;

    /**
     * @var RecordAddress|null
     */
    protected $recordAddress;

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
     * @var string|null
     */
    protected $salesOrderId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $salesOrderNumber;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var list<PurchaseOrderRequestStatusHistory>|null
     */
    protected $statusHistory;

    /**
     * @var string|null
     */
    protected $warehouseId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $warehouseName;

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

    public function getConfirmationDeadline(): ?int
    {
        return $this->confirmationDeadline;
    }

    public function setConfirmationDeadline(?int $confirmationDeadline): self
    {
        $this->initialized['confirmationDeadline'] = true;
        $this->confirmationDeadline = $confirmationDeadline;

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

    public function getPlannedDeliveryDate(): ?int
    {
        return $this->plannedDeliveryDate;
    }

    public function setPlannedDeliveryDate(?int $plannedDeliveryDate): self
    {
        $this->initialized['plannedDeliveryDate'] = true;
        $this->plannedDeliveryDate = $plannedDeliveryDate;

        return $this;
    }

    /**
     * @return list<PurchaseOrderRequestItem>|null
     */
    public function getPurchaseOrderRequestItems(): ?array
    {
        return $this->purchaseOrderRequestItems;
    }

    /**
     * @param  list<PurchaseOrderRequestItem>|null  $purchaseOrderRequestItems
     */
    public function setPurchaseOrderRequestItems(?array $purchaseOrderRequestItems): self
    {
        $this->initialized['purchaseOrderRequestItems'] = true;
        $this->purchaseOrderRequestItems = $purchaseOrderRequestItems;

        return $this;
    }

    public function getPurchaseOrderRequestNumber(): ?string
    {
        return $this->purchaseOrderRequestNumber;
    }

    public function setPurchaseOrderRequestNumber(?string $purchaseOrderRequestNumber): self
    {
        $this->initialized['purchaseOrderRequestNumber'] = true;
        $this->purchaseOrderRequestNumber = $purchaseOrderRequestNumber;

        return $this;
    }

    /**
     * @return list<PurchaseOrderRequestOffer>|null
     */
    public function getPurchaseOrderRequestOffers(): ?array
    {
        return $this->purchaseOrderRequestOffers;
    }

    /**
     * @param  list<PurchaseOrderRequestOffer>|null  $purchaseOrderRequestOffers
     */
    public function setPurchaseOrderRequestOffers(?array $purchaseOrderRequestOffers): self
    {
        $this->initialized['purchaseOrderRequestOffers'] = true;
        $this->purchaseOrderRequestOffers = $purchaseOrderRequestOffers;

        return $this;
    }

    public function getPurchaseOrderRequestType(): ?string
    {
        return $this->purchaseOrderRequestType;
    }

    public function setPurchaseOrderRequestType(?string $purchaseOrderRequestType): self
    {
        $this->initialized['purchaseOrderRequestType'] = true;
        $this->purchaseOrderRequestType = $purchaseOrderRequestType;

        return $this;
    }

    public function getQuotationId(): ?string
    {
        return $this->quotationId;
    }

    public function setQuotationId(?string $quotationId): self
    {
        $this->initialized['quotationId'] = true;
        $this->quotationId = $quotationId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getQuotationNumber(): ?string
    {
        return $this->quotationNumber;
    }

    /**
     * @deprecated
     */
    public function setQuotationNumber(?string $quotationNumber): self
    {
        $this->initialized['quotationNumber'] = true;
        $this->quotationNumber = $quotationNumber;

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

    public function getSalesOrderId(): ?string
    {
        return $this->salesOrderId;
    }

    public function setSalesOrderId(?string $salesOrderId): self
    {
        $this->initialized['salesOrderId'] = true;
        $this->salesOrderId = $salesOrderId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSalesOrderNumber(): ?string
    {
        return $this->salesOrderNumber;
    }

    /**
     * @deprecated
     */
    public function setSalesOrderNumber(?string $salesOrderNumber): self
    {
        $this->initialized['salesOrderNumber'] = true;
        $this->salesOrderNumber = $salesOrderNumber;

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
     * @return list<PurchaseOrderRequestStatusHistory>|null
     */
    public function getStatusHistory(): ?array
    {
        return $this->statusHistory;
    }

    /**
     * @param  list<PurchaseOrderRequestStatusHistory>|null  $statusHistory
     */
    public function setStatusHistory(?array $statusHistory): self
    {
        $this->initialized['statusHistory'] = true;
        $this->statusHistory = $statusHistory;

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

    /**
     * @deprecated
     */
    public function getWarehouseName(): ?string
    {
        return $this->warehouseName;
    }

    /**
     * @deprecated
     */
    public function setWarehouseName(?string $warehouseName): self
    {
        $this->initialized['warehouseName'] = true;
        $this->warehouseName = $warehouseName;

        return $this;
    }
}
