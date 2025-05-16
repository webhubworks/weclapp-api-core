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
     * @var RecordAddress
     */
    protected $invoiceAddress;
    /**
     * 
     *
     * @var RecordAddress
     */
    protected $recipientAddress;
    /**
     * 
     *
     * @deprecated
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
     * @var list<OnlyId>
     */
    protected $salesOrders;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var list<ShipmentStatus>
     */
    protected $statusHistory;
    /**
     * 
     *
     * @var RecordAddress
     */
    protected $customerDeliveryAddress;
    /**
     * 
     *
     * @var RecordAddress
     */
    protected $customerInvoiceAddress;
    /**
     * 
     *
     * @var string
     */
    protected $deliveryNoteNumber;
    /**
     * 
     *
     * @var string
     */
    protected $dhlReceiverId;
    /**
     * 
     *
     * @var string
     */
    protected $dropshippingShipmentId;
    /**
     * 
     *
     * @var list<IncomingGoodsItem>
     */
    protected $incomingGoodsItems;
    /**
     * 
     *
     * @var string
     */
    protected $incomingGoodsNumber;
    /**
     * 
     *
     * @var string
     */
    protected $incomingGoodsType;
    /**
     * 
     *
     * @var string
     */
    protected $invoiceRecipientId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $purchaseOrderId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $purchaseOrderNumber;
    /**
     * 
     *
     * @var list<OnlyId>
     */
    protected $purchaseOrders;
    /**
     * 
     *
     * @var string
     */
    protected $relatedShipmentId;
    /**
     * 
     *
     * @var string
     */
    protected $responsibleUserId;
    /**
     * 
     *
     * @var RecordAddress
     */
    protected $returnAddress;
    /**
     * 
     *
     * @var string
     */
    protected $senderCustomerNumber;
    /**
     * 
     *
     * @var string
     */
    protected $senderPartyId;
    /**
     * 
     *
     * @var string
     */
    protected $senderSupplierNumber;
    /**
     * 
     *
     * @var string
     */
    protected $shippingReturnCarrierId;
    /**
     * 
     *
     * @var string
     */
    protected $sourceWarehouseId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $sourceWarehouseName;
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
     * @return RecordAddress
     */
    public function getRecipientAddress(): RecordAddress
    {
        return $this->recipientAddress;
    }
    /**
     * 
     *
     * @param RecordAddress $recipientAddress
     *
     * @return self
     */
    public function setRecipientAddress(RecordAddress $recipientAddress): self
    {
        $this->initialized['recipientAddress'] = true;
        $this->recipientAddress = $recipientAddress;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
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
     * @deprecated
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
     * @return list<OnlyId>
     */
    public function getSalesOrders(): array
    {
        return $this->salesOrders;
    }
    /**
     * 
     *
     * @param list<OnlyId> $salesOrders
     *
     * @return self
     */
    public function setSalesOrders(array $salesOrders): self
    {
        $this->initialized['salesOrders'] = true;
        $this->salesOrders = $salesOrders;
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
     * @return list<ShipmentStatus>
     */
    public function getStatusHistory(): array
    {
        return $this->statusHistory;
    }
    /**
     * 
     *
     * @param list<ShipmentStatus> $statusHistory
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
     * @return RecordAddress
     */
    public function getCustomerDeliveryAddress(): RecordAddress
    {
        return $this->customerDeliveryAddress;
    }
    /**
     * 
     *
     * @param RecordAddress $customerDeliveryAddress
     *
     * @return self
     */
    public function setCustomerDeliveryAddress(RecordAddress $customerDeliveryAddress): self
    {
        $this->initialized['customerDeliveryAddress'] = true;
        $this->customerDeliveryAddress = $customerDeliveryAddress;
        return $this;
    }
    /**
     * 
     *
     * @return RecordAddress
     */
    public function getCustomerInvoiceAddress(): RecordAddress
    {
        return $this->customerInvoiceAddress;
    }
    /**
     * 
     *
     * @param RecordAddress $customerInvoiceAddress
     *
     * @return self
     */
    public function setCustomerInvoiceAddress(RecordAddress $customerInvoiceAddress): self
    {
        $this->initialized['customerInvoiceAddress'] = true;
        $this->customerInvoiceAddress = $customerInvoiceAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeliveryNoteNumber(): string
    {
        return $this->deliveryNoteNumber;
    }
    /**
     * 
     *
     * @param string $deliveryNoteNumber
     *
     * @return self
     */
    public function setDeliveryNoteNumber(string $deliveryNoteNumber): self
    {
        $this->initialized['deliveryNoteNumber'] = true;
        $this->deliveryNoteNumber = $deliveryNoteNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDhlReceiverId(): string
    {
        return $this->dhlReceiverId;
    }
    /**
     * 
     *
     * @param string $dhlReceiverId
     *
     * @return self
     */
    public function setDhlReceiverId(string $dhlReceiverId): self
    {
        $this->initialized['dhlReceiverId'] = true;
        $this->dhlReceiverId = $dhlReceiverId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDropshippingShipmentId(): string
    {
        return $this->dropshippingShipmentId;
    }
    /**
     * 
     *
     * @param string $dropshippingShipmentId
     *
     * @return self
     */
    public function setDropshippingShipmentId(string $dropshippingShipmentId): self
    {
        $this->initialized['dropshippingShipmentId'] = true;
        $this->dropshippingShipmentId = $dropshippingShipmentId;
        return $this;
    }
    /**
     * 
     *
     * @return list<IncomingGoodsItem>
     */
    public function getIncomingGoodsItems(): array
    {
        return $this->incomingGoodsItems;
    }
    /**
     * 
     *
     * @param list<IncomingGoodsItem> $incomingGoodsItems
     *
     * @return self
     */
    public function setIncomingGoodsItems(array $incomingGoodsItems): self
    {
        $this->initialized['incomingGoodsItems'] = true;
        $this->incomingGoodsItems = $incomingGoodsItems;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIncomingGoodsNumber(): string
    {
        return $this->incomingGoodsNumber;
    }
    /**
     * 
     *
     * @param string $incomingGoodsNumber
     *
     * @return self
     */
    public function setIncomingGoodsNumber(string $incomingGoodsNumber): self
    {
        $this->initialized['incomingGoodsNumber'] = true;
        $this->incomingGoodsNumber = $incomingGoodsNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIncomingGoodsType(): string
    {
        return $this->incomingGoodsType;
    }
    /**
     * 
     *
     * @param string $incomingGoodsType
     *
     * @return self
     */
    public function setIncomingGoodsType(string $incomingGoodsType): self
    {
        $this->initialized['incomingGoodsType'] = true;
        $this->incomingGoodsType = $incomingGoodsType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInvoiceRecipientId(): string
    {
        return $this->invoiceRecipientId;
    }
    /**
     * 
     *
     * @param string $invoiceRecipientId
     *
     * @return self
     */
    public function setInvoiceRecipientId(string $invoiceRecipientId): self
    {
        $this->initialized['invoiceRecipientId'] = true;
        $this->invoiceRecipientId = $invoiceRecipientId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getPurchaseOrderId(): string
    {
        return $this->purchaseOrderId;
    }
    /**
     * 
     *
     * @param string $purchaseOrderId
     *
     * @deprecated
     *
     * @return self
     */
    public function setPurchaseOrderId(string $purchaseOrderId): self
    {
        $this->initialized['purchaseOrderId'] = true;
        $this->purchaseOrderId = $purchaseOrderId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getPurchaseOrderNumber(): string
    {
        return $this->purchaseOrderNumber;
    }
    /**
     * 
     *
     * @param string $purchaseOrderNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setPurchaseOrderNumber(string $purchaseOrderNumber): self
    {
        $this->initialized['purchaseOrderNumber'] = true;
        $this->purchaseOrderNumber = $purchaseOrderNumber;
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
     * @return string
     */
    public function getRelatedShipmentId(): string
    {
        return $this->relatedShipmentId;
    }
    /**
     * 
     *
     * @param string $relatedShipmentId
     *
     * @return self
     */
    public function setRelatedShipmentId(string $relatedShipmentId): self
    {
        $this->initialized['relatedShipmentId'] = true;
        $this->relatedShipmentId = $relatedShipmentId;
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
     * @return RecordAddress
     */
    public function getReturnAddress(): RecordAddress
    {
        return $this->returnAddress;
    }
    /**
     * 
     *
     * @param RecordAddress $returnAddress
     *
     * @return self
     */
    public function setReturnAddress(RecordAddress $returnAddress): self
    {
        $this->initialized['returnAddress'] = true;
        $this->returnAddress = $returnAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSenderCustomerNumber(): string
    {
        return $this->senderCustomerNumber;
    }
    /**
     * 
     *
     * @param string $senderCustomerNumber
     *
     * @return self
     */
    public function setSenderCustomerNumber(string $senderCustomerNumber): self
    {
        $this->initialized['senderCustomerNumber'] = true;
        $this->senderCustomerNumber = $senderCustomerNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSenderPartyId(): string
    {
        return $this->senderPartyId;
    }
    /**
     * 
     *
     * @param string $senderPartyId
     *
     * @return self
     */
    public function setSenderPartyId(string $senderPartyId): self
    {
        $this->initialized['senderPartyId'] = true;
        $this->senderPartyId = $senderPartyId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSenderSupplierNumber(): string
    {
        return $this->senderSupplierNumber;
    }
    /**
     * 
     *
     * @param string $senderSupplierNumber
     *
     * @return self
     */
    public function setSenderSupplierNumber(string $senderSupplierNumber): self
    {
        $this->initialized['senderSupplierNumber'] = true;
        $this->senderSupplierNumber = $senderSupplierNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShippingReturnCarrierId(): string
    {
        return $this->shippingReturnCarrierId;
    }
    /**
     * 
     *
     * @param string $shippingReturnCarrierId
     *
     * @return self
     */
    public function setShippingReturnCarrierId(string $shippingReturnCarrierId): self
    {
        $this->initialized['shippingReturnCarrierId'] = true;
        $this->shippingReturnCarrierId = $shippingReturnCarrierId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSourceWarehouseId(): string
    {
        return $this->sourceWarehouseId;
    }
    /**
     * 
     *
     * @param string $sourceWarehouseId
     *
     * @return self
     */
    public function setSourceWarehouseId(string $sourceWarehouseId): self
    {
        $this->initialized['sourceWarehouseId'] = true;
        $this->sourceWarehouseId = $sourceWarehouseId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getSourceWarehouseName(): string
    {
        return $this->sourceWarehouseName;
    }
    /**
     * 
     *
     * @param string $sourceWarehouseName
     *
     * @deprecated
     *
     * @return self
     */
    public function setSourceWarehouseName(string $sourceWarehouseName): self
    {
        $this->initialized['sourceWarehouseName'] = true;
        $this->sourceWarehouseName = $sourceWarehouseName;
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