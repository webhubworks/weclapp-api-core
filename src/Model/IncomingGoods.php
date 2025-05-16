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
     * @deprecated
     *
     * @var bool|null
     */
    protected $disableEmailTemplate;
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
     * @var RecordAddress|null
     */
    protected $invoiceAddress;
    /**
     * 
     *
     * @var RecordAddress|null
     */
    protected $recipientAddress;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $salesOrderId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $salesOrderNumber;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $salesOrders;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var list<ShipmentStatus>|null
     */
    protected $statusHistory;
    /**
     * 
     *
     * @var RecordAddress|null
     */
    protected $customerDeliveryAddress;
    /**
     * 
     *
     * @var RecordAddress|null
     */
    protected $customerInvoiceAddress;
    /**
     * 
     *
     * @var string|null
     */
    protected $deliveryNoteNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $dhlReceiverId;
    /**
     * 
     *
     * @var string|null
     */
    protected $dropshippingShipmentId;
    /**
     * 
     *
     * @var list<IncomingGoodsItem>|null
     */
    protected $incomingGoodsItems;
    /**
     * 
     *
     * @var string|null
     */
    protected $incomingGoodsNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $incomingGoodsType;
    /**
     * 
     *
     * @var string|null
     */
    protected $invoiceRecipientId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $purchaseOrderId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $purchaseOrderNumber;
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
    protected $relatedShipmentId;
    /**
     * 
     *
     * @var string|null
     */
    protected $responsibleUserId;
    /**
     * 
     *
     * @var RecordAddress|null
     */
    protected $returnAddress;
    /**
     * 
     *
     * @var string|null
     */
    protected $senderCustomerNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $senderPartyId;
    /**
     * 
     *
     * @var string|null
     */
    protected $senderSupplierNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $shippingReturnCarrierId;
    /**
     * 
     *
     * @var string|null
     */
    protected $sourceWarehouseId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $sourceWarehouseName;
    /**
     * 
     *
     * @var string|null
     */
    protected $warehouseId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $warehouseName;
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
     * @deprecated
     *
     * @return bool|null
     */
    public function getDisableEmailTemplate(): ?bool
    {
        return $this->disableEmailTemplate;
    }
    /**
     * 
     *
     * @param bool|null $disableEmailTemplate
     *
     * @deprecated
     *
     * @return self
     */
    public function setDisableEmailTemplate(?bool $disableEmailTemplate): self
    {
        $this->initialized['disableEmailTemplate'] = true;
        $this->disableEmailTemplate = $disableEmailTemplate;
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
     * @return RecordAddress|null
     */
    public function getRecipientAddress(): ?RecordAddress
    {
        return $this->recipientAddress;
    }
    /**
     * 
     *
     * @param RecordAddress|null $recipientAddress
     *
     * @return self
     */
    public function setRecipientAddress(?RecordAddress $recipientAddress): self
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
     * @return string|null
     */
    public function getSalesOrderId(): ?string
    {
        return $this->salesOrderId;
    }
    /**
     * 
     *
     * @param string|null $salesOrderId
     *
     * @deprecated
     *
     * @return self
     */
    public function setSalesOrderId(?string $salesOrderId): self
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
     * @return string|null
     */
    public function getSalesOrderNumber(): ?string
    {
        return $this->salesOrderNumber;
    }
    /**
     * 
     *
     * @param string|null $salesOrderNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setSalesOrderNumber(?string $salesOrderNumber): self
    {
        $this->initialized['salesOrderNumber'] = true;
        $this->salesOrderNumber = $salesOrderNumber;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getSalesOrders(): ?array
    {
        return $this->salesOrders;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $salesOrders
     *
     * @return self
     */
    public function setSalesOrders(?array $salesOrders): self
    {
        $this->initialized['salesOrders'] = true;
        $this->salesOrders = $salesOrders;
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
     * @return list<ShipmentStatus>|null
     */
    public function getStatusHistory(): ?array
    {
        return $this->statusHistory;
    }
    /**
     * 
     *
     * @param list<ShipmentStatus>|null $statusHistory
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
     * @return RecordAddress|null
     */
    public function getCustomerDeliveryAddress(): ?RecordAddress
    {
        return $this->customerDeliveryAddress;
    }
    /**
     * 
     *
     * @param RecordAddress|null $customerDeliveryAddress
     *
     * @return self
     */
    public function setCustomerDeliveryAddress(?RecordAddress $customerDeliveryAddress): self
    {
        $this->initialized['customerDeliveryAddress'] = true;
        $this->customerDeliveryAddress = $customerDeliveryAddress;
        return $this;
    }
    /**
     * 
     *
     * @return RecordAddress|null
     */
    public function getCustomerInvoiceAddress(): ?RecordAddress
    {
        return $this->customerInvoiceAddress;
    }
    /**
     * 
     *
     * @param RecordAddress|null $customerInvoiceAddress
     *
     * @return self
     */
    public function setCustomerInvoiceAddress(?RecordAddress $customerInvoiceAddress): self
    {
        $this->initialized['customerInvoiceAddress'] = true;
        $this->customerInvoiceAddress = $customerInvoiceAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDeliveryNoteNumber(): ?string
    {
        return $this->deliveryNoteNumber;
    }
    /**
     * 
     *
     * @param string|null $deliveryNoteNumber
     *
     * @return self
     */
    public function setDeliveryNoteNumber(?string $deliveryNoteNumber): self
    {
        $this->initialized['deliveryNoteNumber'] = true;
        $this->deliveryNoteNumber = $deliveryNoteNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDhlReceiverId(): ?string
    {
        return $this->dhlReceiverId;
    }
    /**
     * 
     *
     * @param string|null $dhlReceiverId
     *
     * @return self
     */
    public function setDhlReceiverId(?string $dhlReceiverId): self
    {
        $this->initialized['dhlReceiverId'] = true;
        $this->dhlReceiverId = $dhlReceiverId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDropshippingShipmentId(): ?string
    {
        return $this->dropshippingShipmentId;
    }
    /**
     * 
     *
     * @param string|null $dropshippingShipmentId
     *
     * @return self
     */
    public function setDropshippingShipmentId(?string $dropshippingShipmentId): self
    {
        $this->initialized['dropshippingShipmentId'] = true;
        $this->dropshippingShipmentId = $dropshippingShipmentId;
        return $this;
    }
    /**
     * 
     *
     * @return list<IncomingGoodsItem>|null
     */
    public function getIncomingGoodsItems(): ?array
    {
        return $this->incomingGoodsItems;
    }
    /**
     * 
     *
     * @param list<IncomingGoodsItem>|null $incomingGoodsItems
     *
     * @return self
     */
    public function setIncomingGoodsItems(?array $incomingGoodsItems): self
    {
        $this->initialized['incomingGoodsItems'] = true;
        $this->incomingGoodsItems = $incomingGoodsItems;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIncomingGoodsNumber(): ?string
    {
        return $this->incomingGoodsNumber;
    }
    /**
     * 
     *
     * @param string|null $incomingGoodsNumber
     *
     * @return self
     */
    public function setIncomingGoodsNumber(?string $incomingGoodsNumber): self
    {
        $this->initialized['incomingGoodsNumber'] = true;
        $this->incomingGoodsNumber = $incomingGoodsNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIncomingGoodsType(): ?string
    {
        return $this->incomingGoodsType;
    }
    /**
     * 
     *
     * @param string|null $incomingGoodsType
     *
     * @return self
     */
    public function setIncomingGoodsType(?string $incomingGoodsType): self
    {
        $this->initialized['incomingGoodsType'] = true;
        $this->incomingGoodsType = $incomingGoodsType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInvoiceRecipientId(): ?string
    {
        return $this->invoiceRecipientId;
    }
    /**
     * 
     *
     * @param string|null $invoiceRecipientId
     *
     * @return self
     */
    public function setInvoiceRecipientId(?string $invoiceRecipientId): self
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
     * @return string|null
     */
    public function getPurchaseOrderId(): ?string
    {
        return $this->purchaseOrderId;
    }
    /**
     * 
     *
     * @param string|null $purchaseOrderId
     *
     * @deprecated
     *
     * @return self
     */
    public function setPurchaseOrderId(?string $purchaseOrderId): self
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
     * @return string|null
     */
    public function getPurchaseOrderNumber(): ?string
    {
        return $this->purchaseOrderNumber;
    }
    /**
     * 
     *
     * @param string|null $purchaseOrderNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setPurchaseOrderNumber(?string $purchaseOrderNumber): self
    {
        $this->initialized['purchaseOrderNumber'] = true;
        $this->purchaseOrderNumber = $purchaseOrderNumber;
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
    public function getRelatedShipmentId(): ?string
    {
        return $this->relatedShipmentId;
    }
    /**
     * 
     *
     * @param string|null $relatedShipmentId
     *
     * @return self
     */
    public function setRelatedShipmentId(?string $relatedShipmentId): self
    {
        $this->initialized['relatedShipmentId'] = true;
        $this->relatedShipmentId = $relatedShipmentId;
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
     * @return RecordAddress|null
     */
    public function getReturnAddress(): ?RecordAddress
    {
        return $this->returnAddress;
    }
    /**
     * 
     *
     * @param RecordAddress|null $returnAddress
     *
     * @return self
     */
    public function setReturnAddress(?RecordAddress $returnAddress): self
    {
        $this->initialized['returnAddress'] = true;
        $this->returnAddress = $returnAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSenderCustomerNumber(): ?string
    {
        return $this->senderCustomerNumber;
    }
    /**
     * 
     *
     * @param string|null $senderCustomerNumber
     *
     * @return self
     */
    public function setSenderCustomerNumber(?string $senderCustomerNumber): self
    {
        $this->initialized['senderCustomerNumber'] = true;
        $this->senderCustomerNumber = $senderCustomerNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSenderPartyId(): ?string
    {
        return $this->senderPartyId;
    }
    /**
     * 
     *
     * @param string|null $senderPartyId
     *
     * @return self
     */
    public function setSenderPartyId(?string $senderPartyId): self
    {
        $this->initialized['senderPartyId'] = true;
        $this->senderPartyId = $senderPartyId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSenderSupplierNumber(): ?string
    {
        return $this->senderSupplierNumber;
    }
    /**
     * 
     *
     * @param string|null $senderSupplierNumber
     *
     * @return self
     */
    public function setSenderSupplierNumber(?string $senderSupplierNumber): self
    {
        $this->initialized['senderSupplierNumber'] = true;
        $this->senderSupplierNumber = $senderSupplierNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShippingReturnCarrierId(): ?string
    {
        return $this->shippingReturnCarrierId;
    }
    /**
     * 
     *
     * @param string|null $shippingReturnCarrierId
     *
     * @return self
     */
    public function setShippingReturnCarrierId(?string $shippingReturnCarrierId): self
    {
        $this->initialized['shippingReturnCarrierId'] = true;
        $this->shippingReturnCarrierId = $shippingReturnCarrierId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSourceWarehouseId(): ?string
    {
        return $this->sourceWarehouseId;
    }
    /**
     * 
     *
     * @param string|null $sourceWarehouseId
     *
     * @return self
     */
    public function setSourceWarehouseId(?string $sourceWarehouseId): self
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
     * @return string|null
     */
    public function getSourceWarehouseName(): ?string
    {
        return $this->sourceWarehouseName;
    }
    /**
     * 
     *
     * @param string|null $sourceWarehouseName
     *
     * @deprecated
     *
     * @return self
     */
    public function setSourceWarehouseName(?string $sourceWarehouseName): self
    {
        $this->initialized['sourceWarehouseName'] = true;
        $this->sourceWarehouseName = $sourceWarehouseName;
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
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getWarehouseName(): ?string
    {
        return $this->warehouseName;
    }
    /**
     * 
     *
     * @param string|null $warehouseName
     *
     * @deprecated
     *
     * @return self
     */
    public function setWarehouseName(?string $warehouseName): self
    {
        $this->initialized['warehouseName'] = true;
        $this->warehouseName = $warehouseName;
        return $this;
    }
}