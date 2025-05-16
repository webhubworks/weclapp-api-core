<?php

namespace Webhubworks\WeclappApiCore\Model;

class IncomingGoods extends \ArrayObject
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
     * @var RecordAddress|null
     */
    protected $invoiceAddress;

    /**
     * @var RecordAddress|null
     */
    protected $recipientAddress;

    /**
     * @deprecated
     *
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
     * @var list<OnlyId>|null
     */
    protected $salesOrders;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var list<ShipmentStatus>|null
     */
    protected $statusHistory;

    /**
     * @var RecordAddress|null
     */
    protected $customerDeliveryAddress;

    /**
     * @var RecordAddress|null
     */
    protected $customerInvoiceAddress;

    /**
     * @var string|null
     */
    protected $deliveryNoteNumber;

    /**
     * @var string|null
     */
    protected $dhlReceiverId;

    /**
     * @var string|null
     */
    protected $dropshippingShipmentId;

    /**
     * @var list<IncomingGoodsItem>|null
     */
    protected $incomingGoodsItems;

    /**
     * @var string|null
     */
    protected $incomingGoodsNumber;

    /**
     * @var string|null
     */
    protected $incomingGoodsType;

    /**
     * @var string|null
     */
    protected $invoiceRecipientId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $purchaseOrderId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $purchaseOrderNumber;

    /**
     * @var list<OnlyId>|null
     */
    protected $purchaseOrders;

    /**
     * @var string|null
     */
    protected $relatedShipmentId;

    /**
     * @var string|null
     */
    protected $responsibleUserId;

    /**
     * @var RecordAddress|null
     */
    protected $returnAddress;

    /**
     * @var string|null
     */
    protected $senderCustomerNumber;

    /**
     * @var string|null
     */
    protected $senderPartyId;

    /**
     * @var string|null
     */
    protected $senderSupplierNumber;

    /**
     * @var string|null
     */
    protected $shippingReturnCarrierId;

    /**
     * @var string|null
     */
    protected $sourceWarehouseId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $sourceWarehouseName;

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

    public function getRecipientAddress(): ?RecordAddress
    {
        return $this->recipientAddress;
    }

    public function setRecipientAddress(?RecordAddress $recipientAddress): self
    {
        $this->initialized['recipientAddress'] = true;
        $this->recipientAddress = $recipientAddress;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSalesOrderId(): ?string
    {
        return $this->salesOrderId;
    }

    /**
     * @deprecated
     */
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

    /**
     * @return list<OnlyId>|null
     */
    public function getSalesOrders(): ?array
    {
        return $this->salesOrders;
    }

    /**
     * @param  list<OnlyId>|null  $salesOrders
     */
    public function setSalesOrders(?array $salesOrders): self
    {
        $this->initialized['salesOrders'] = true;
        $this->salesOrders = $salesOrders;

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
     * @return list<ShipmentStatus>|null
     */
    public function getStatusHistory(): ?array
    {
        return $this->statusHistory;
    }

    /**
     * @param  list<ShipmentStatus>|null  $statusHistory
     */
    public function setStatusHistory(?array $statusHistory): self
    {
        $this->initialized['statusHistory'] = true;
        $this->statusHistory = $statusHistory;

        return $this;
    }

    public function getCustomerDeliveryAddress(): ?RecordAddress
    {
        return $this->customerDeliveryAddress;
    }

    public function setCustomerDeliveryAddress(?RecordAddress $customerDeliveryAddress): self
    {
        $this->initialized['customerDeliveryAddress'] = true;
        $this->customerDeliveryAddress = $customerDeliveryAddress;

        return $this;
    }

    public function getCustomerInvoiceAddress(): ?RecordAddress
    {
        return $this->customerInvoiceAddress;
    }

    public function setCustomerInvoiceAddress(?RecordAddress $customerInvoiceAddress): self
    {
        $this->initialized['customerInvoiceAddress'] = true;
        $this->customerInvoiceAddress = $customerInvoiceAddress;

        return $this;
    }

    public function getDeliveryNoteNumber(): ?string
    {
        return $this->deliveryNoteNumber;
    }

    public function setDeliveryNoteNumber(?string $deliveryNoteNumber): self
    {
        $this->initialized['deliveryNoteNumber'] = true;
        $this->deliveryNoteNumber = $deliveryNoteNumber;

        return $this;
    }

    public function getDhlReceiverId(): ?string
    {
        return $this->dhlReceiverId;
    }

    public function setDhlReceiverId(?string $dhlReceiverId): self
    {
        $this->initialized['dhlReceiverId'] = true;
        $this->dhlReceiverId = $dhlReceiverId;

        return $this;
    }

    public function getDropshippingShipmentId(): ?string
    {
        return $this->dropshippingShipmentId;
    }

    public function setDropshippingShipmentId(?string $dropshippingShipmentId): self
    {
        $this->initialized['dropshippingShipmentId'] = true;
        $this->dropshippingShipmentId = $dropshippingShipmentId;

        return $this;
    }

    /**
     * @return list<IncomingGoodsItem>|null
     */
    public function getIncomingGoodsItems(): ?array
    {
        return $this->incomingGoodsItems;
    }

    /**
     * @param  list<IncomingGoodsItem>|null  $incomingGoodsItems
     */
    public function setIncomingGoodsItems(?array $incomingGoodsItems): self
    {
        $this->initialized['incomingGoodsItems'] = true;
        $this->incomingGoodsItems = $incomingGoodsItems;

        return $this;
    }

    public function getIncomingGoodsNumber(): ?string
    {
        return $this->incomingGoodsNumber;
    }

    public function setIncomingGoodsNumber(?string $incomingGoodsNumber): self
    {
        $this->initialized['incomingGoodsNumber'] = true;
        $this->incomingGoodsNumber = $incomingGoodsNumber;

        return $this;
    }

    public function getIncomingGoodsType(): ?string
    {
        return $this->incomingGoodsType;
    }

    public function setIncomingGoodsType(?string $incomingGoodsType): self
    {
        $this->initialized['incomingGoodsType'] = true;
        $this->incomingGoodsType = $incomingGoodsType;

        return $this;
    }

    public function getInvoiceRecipientId(): ?string
    {
        return $this->invoiceRecipientId;
    }

    public function setInvoiceRecipientId(?string $invoiceRecipientId): self
    {
        $this->initialized['invoiceRecipientId'] = true;
        $this->invoiceRecipientId = $invoiceRecipientId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getPurchaseOrderId(): ?string
    {
        return $this->purchaseOrderId;
    }

    /**
     * @deprecated
     */
    public function setPurchaseOrderId(?string $purchaseOrderId): self
    {
        $this->initialized['purchaseOrderId'] = true;
        $this->purchaseOrderId = $purchaseOrderId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getPurchaseOrderNumber(): ?string
    {
        return $this->purchaseOrderNumber;
    }

    /**
     * @deprecated
     */
    public function setPurchaseOrderNumber(?string $purchaseOrderNumber): self
    {
        $this->initialized['purchaseOrderNumber'] = true;
        $this->purchaseOrderNumber = $purchaseOrderNumber;

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

    public function getRelatedShipmentId(): ?string
    {
        return $this->relatedShipmentId;
    }

    public function setRelatedShipmentId(?string $relatedShipmentId): self
    {
        $this->initialized['relatedShipmentId'] = true;
        $this->relatedShipmentId = $relatedShipmentId;

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

    public function getReturnAddress(): ?RecordAddress
    {
        return $this->returnAddress;
    }

    public function setReturnAddress(?RecordAddress $returnAddress): self
    {
        $this->initialized['returnAddress'] = true;
        $this->returnAddress = $returnAddress;

        return $this;
    }

    public function getSenderCustomerNumber(): ?string
    {
        return $this->senderCustomerNumber;
    }

    public function setSenderCustomerNumber(?string $senderCustomerNumber): self
    {
        $this->initialized['senderCustomerNumber'] = true;
        $this->senderCustomerNumber = $senderCustomerNumber;

        return $this;
    }

    public function getSenderPartyId(): ?string
    {
        return $this->senderPartyId;
    }

    public function setSenderPartyId(?string $senderPartyId): self
    {
        $this->initialized['senderPartyId'] = true;
        $this->senderPartyId = $senderPartyId;

        return $this;
    }

    public function getSenderSupplierNumber(): ?string
    {
        return $this->senderSupplierNumber;
    }

    public function setSenderSupplierNumber(?string $senderSupplierNumber): self
    {
        $this->initialized['senderSupplierNumber'] = true;
        $this->senderSupplierNumber = $senderSupplierNumber;

        return $this;
    }

    public function getShippingReturnCarrierId(): ?string
    {
        return $this->shippingReturnCarrierId;
    }

    public function setShippingReturnCarrierId(?string $shippingReturnCarrierId): self
    {
        $this->initialized['shippingReturnCarrierId'] = true;
        $this->shippingReturnCarrierId = $shippingReturnCarrierId;

        return $this;
    }

    public function getSourceWarehouseId(): ?string
    {
        return $this->sourceWarehouseId;
    }

    public function setSourceWarehouseId(?string $sourceWarehouseId): self
    {
        $this->initialized['sourceWarehouseId'] = true;
        $this->sourceWarehouseId = $sourceWarehouseId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSourceWarehouseName(): ?string
    {
        return $this->sourceWarehouseName;
    }

    /**
     * @deprecated
     */
    public function setSourceWarehouseName(?string $sourceWarehouseName): self
    {
        $this->initialized['sourceWarehouseName'] = true;
        $this->sourceWarehouseName = $sourceWarehouseName;

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
