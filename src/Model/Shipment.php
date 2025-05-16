<?php

namespace Webhubworks\WeclappApiCore\Model;

class Shipment extends \ArrayObject
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
     * @var string|null
     */
    protected $additionalDeliveryInformation;
    /**
     * 
     *
     * @var string|null
     */
    protected $availability;
    /**
     * 
     *
     * @var string|null
     */
    protected $availabilityForAllWarehouses;
    /**
     * 
     *
     * @var string|null
     */
    protected $consolidationStoragePlaceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerPurchaseOrderNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $declaredValueAmount;
    /**
     * 
     *
     * @var string|null
     */
    protected $declaredValueAmountCurrencyId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $declaredValueAmountCurrencyName;
    /**
     * 
     *
     * @var int|null
     */
    protected $deliveryDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $destinationStoragePlaceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $destinationWarehouseId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $destinationWarehouseName;
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
    protected $invoiceRecipientId;
    /**
     * 
     *
     * @var int|null
     */
    protected $packageHeight;
    /**
     * 
     *
     * @var int|null
     */
    protected $packageLength;
    /**
     * 
     *
     * @var string|null
     */
    protected $packageReferenceNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $packageReturnTrackingNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $packageReturnTrackingUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $packageTrackingNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $packageTrackingUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $packageWeight;
    /**
     * 
     *
     * @var int|null
     */
    protected $packageWidth;
    /**
     * 
     *
     * @var string|null
     */
    protected $pickingInstructions;
    /**
     * 
     *
     * @var bool|null
     */
    protected $picksComplete;
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
    protected $recipientCustomerNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $recipientPartyId;
    /**
     * 
     *
     * @var string|null
     */
    protected $recipientSupplierNumber;
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
    protected $responsibleUserId;
    /**
     * 
     *
     * @var EmailAddresses|null
     */
    protected $salesInvoiceEmailAddresses;
    /**
     * 
     *
     * @var list<ShipmentItem>|null
     */
    protected $shipmentItems;
    /**
     * 
     *
     * @var string|null
     */
    protected $shipmentMethodId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $shipmentMethodName;
    /**
     * 
     *
     * @var string|null
     */
    protected $shipmentNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $shipmentType;
    /**
     * 
     *
     * @var RecordAddress|null
     */
    protected $shippedFromAddress;
    /**
     * 
     *
     * @var string|null
     */
    protected $shippingCarrierId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $shippingCarrierName;
    /**
     * 
     *
     * @var int|null
     */
    protected $shippingDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $shippingLabelsCount;
    /**
     * 
     *
     * @var string|null
     */
    protected $shippingReturnCarrierId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $shippingReturnCarrierName;
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
     * @return string|null
     */
    public function getAdditionalDeliveryInformation(): ?string
    {
        return $this->additionalDeliveryInformation;
    }
    /**
     * 
     *
     * @param string|null $additionalDeliveryInformation
     *
     * @return self
     */
    public function setAdditionalDeliveryInformation(?string $additionalDeliveryInformation): self
    {
        $this->initialized['additionalDeliveryInformation'] = true;
        $this->additionalDeliveryInformation = $additionalDeliveryInformation;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAvailability(): ?string
    {
        return $this->availability;
    }
    /**
     * 
     *
     * @param string|null $availability
     *
     * @return self
     */
    public function setAvailability(?string $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAvailabilityForAllWarehouses(): ?string
    {
        return $this->availabilityForAllWarehouses;
    }
    /**
     * 
     *
     * @param string|null $availabilityForAllWarehouses
     *
     * @return self
     */
    public function setAvailabilityForAllWarehouses(?string $availabilityForAllWarehouses): self
    {
        $this->initialized['availabilityForAllWarehouses'] = true;
        $this->availabilityForAllWarehouses = $availabilityForAllWarehouses;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getConsolidationStoragePlaceId(): ?string
    {
        return $this->consolidationStoragePlaceId;
    }
    /**
     * 
     *
     * @param string|null $consolidationStoragePlaceId
     *
     * @return self
     */
    public function setConsolidationStoragePlaceId(?string $consolidationStoragePlaceId): self
    {
        $this->initialized['consolidationStoragePlaceId'] = true;
        $this->consolidationStoragePlaceId = $consolidationStoragePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerPurchaseOrderNumber(): ?string
    {
        return $this->customerPurchaseOrderNumber;
    }
    /**
     * 
     *
     * @param string|null $customerPurchaseOrderNumber
     *
     * @return self
     */
    public function setCustomerPurchaseOrderNumber(?string $customerPurchaseOrderNumber): self
    {
        $this->initialized['customerPurchaseOrderNumber'] = true;
        $this->customerPurchaseOrderNumber = $customerPurchaseOrderNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDeclaredValueAmount(): ?string
    {
        return $this->declaredValueAmount;
    }
    /**
     * 
     *
     * @param string|null $declaredValueAmount
     *
     * @return self
     */
    public function setDeclaredValueAmount(?string $declaredValueAmount): self
    {
        $this->initialized['declaredValueAmount'] = true;
        $this->declaredValueAmount = $declaredValueAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDeclaredValueAmountCurrencyId(): ?string
    {
        return $this->declaredValueAmountCurrencyId;
    }
    /**
     * 
     *
     * @param string|null $declaredValueAmountCurrencyId
     *
     * @return self
     */
    public function setDeclaredValueAmountCurrencyId(?string $declaredValueAmountCurrencyId): self
    {
        $this->initialized['declaredValueAmountCurrencyId'] = true;
        $this->declaredValueAmountCurrencyId = $declaredValueAmountCurrencyId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getDeclaredValueAmountCurrencyName(): ?string
    {
        return $this->declaredValueAmountCurrencyName;
    }
    /**
     * 
     *
     * @param string|null $declaredValueAmountCurrencyName
     *
     * @deprecated
     *
     * @return self
     */
    public function setDeclaredValueAmountCurrencyName(?string $declaredValueAmountCurrencyName): self
    {
        $this->initialized['declaredValueAmountCurrencyName'] = true;
        $this->declaredValueAmountCurrencyName = $declaredValueAmountCurrencyName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDeliveryDate(): ?int
    {
        return $this->deliveryDate;
    }
    /**
     * 
     *
     * @param int|null $deliveryDate
     *
     * @return self
     */
    public function setDeliveryDate(?int $deliveryDate): self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDestinationStoragePlaceId(): ?string
    {
        return $this->destinationStoragePlaceId;
    }
    /**
     * 
     *
     * @param string|null $destinationStoragePlaceId
     *
     * @return self
     */
    public function setDestinationStoragePlaceId(?string $destinationStoragePlaceId): self
    {
        $this->initialized['destinationStoragePlaceId'] = true;
        $this->destinationStoragePlaceId = $destinationStoragePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDestinationWarehouseId(): ?string
    {
        return $this->destinationWarehouseId;
    }
    /**
     * 
     *
     * @param string|null $destinationWarehouseId
     *
     * @return self
     */
    public function setDestinationWarehouseId(?string $destinationWarehouseId): self
    {
        $this->initialized['destinationWarehouseId'] = true;
        $this->destinationWarehouseId = $destinationWarehouseId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getDestinationWarehouseName(): ?string
    {
        return $this->destinationWarehouseName;
    }
    /**
     * 
     *
     * @param string|null $destinationWarehouseName
     *
     * @deprecated
     *
     * @return self
     */
    public function setDestinationWarehouseName(?string $destinationWarehouseName): self
    {
        $this->initialized['destinationWarehouseName'] = true;
        $this->destinationWarehouseName = $destinationWarehouseName;
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
     * @return int|null
     */
    public function getPackageHeight(): ?int
    {
        return $this->packageHeight;
    }
    /**
     * 
     *
     * @param int|null $packageHeight
     *
     * @return self
     */
    public function setPackageHeight(?int $packageHeight): self
    {
        $this->initialized['packageHeight'] = true;
        $this->packageHeight = $packageHeight;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPackageLength(): ?int
    {
        return $this->packageLength;
    }
    /**
     * 
     *
     * @param int|null $packageLength
     *
     * @return self
     */
    public function setPackageLength(?int $packageLength): self
    {
        $this->initialized['packageLength'] = true;
        $this->packageLength = $packageLength;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPackageReferenceNumber(): ?string
    {
        return $this->packageReferenceNumber;
    }
    /**
     * 
     *
     * @param string|null $packageReferenceNumber
     *
     * @return self
     */
    public function setPackageReferenceNumber(?string $packageReferenceNumber): self
    {
        $this->initialized['packageReferenceNumber'] = true;
        $this->packageReferenceNumber = $packageReferenceNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPackageReturnTrackingNumber(): ?string
    {
        return $this->packageReturnTrackingNumber;
    }
    /**
     * 
     *
     * @param string|null $packageReturnTrackingNumber
     *
     * @return self
     */
    public function setPackageReturnTrackingNumber(?string $packageReturnTrackingNumber): self
    {
        $this->initialized['packageReturnTrackingNumber'] = true;
        $this->packageReturnTrackingNumber = $packageReturnTrackingNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPackageReturnTrackingUrl(): ?string
    {
        return $this->packageReturnTrackingUrl;
    }
    /**
     * 
     *
     * @param string|null $packageReturnTrackingUrl
     *
     * @return self
     */
    public function setPackageReturnTrackingUrl(?string $packageReturnTrackingUrl): self
    {
        $this->initialized['packageReturnTrackingUrl'] = true;
        $this->packageReturnTrackingUrl = $packageReturnTrackingUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPackageTrackingNumber(): ?string
    {
        return $this->packageTrackingNumber;
    }
    /**
     * 
     *
     * @param string|null $packageTrackingNumber
     *
     * @return self
     */
    public function setPackageTrackingNumber(?string $packageTrackingNumber): self
    {
        $this->initialized['packageTrackingNumber'] = true;
        $this->packageTrackingNumber = $packageTrackingNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPackageTrackingUrl(): ?string
    {
        return $this->packageTrackingUrl;
    }
    /**
     * 
     *
     * @param string|null $packageTrackingUrl
     *
     * @return self
     */
    public function setPackageTrackingUrl(?string $packageTrackingUrl): self
    {
        $this->initialized['packageTrackingUrl'] = true;
        $this->packageTrackingUrl = $packageTrackingUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPackageWeight(): ?string
    {
        return $this->packageWeight;
    }
    /**
     * 
     *
     * @param string|null $packageWeight
     *
     * @return self
     */
    public function setPackageWeight(?string $packageWeight): self
    {
        $this->initialized['packageWeight'] = true;
        $this->packageWeight = $packageWeight;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPackageWidth(): ?int
    {
        return $this->packageWidth;
    }
    /**
     * 
     *
     * @param int|null $packageWidth
     *
     * @return self
     */
    public function setPackageWidth(?int $packageWidth): self
    {
        $this->initialized['packageWidth'] = true;
        $this->packageWidth = $packageWidth;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPickingInstructions(): ?string
    {
        return $this->pickingInstructions;
    }
    /**
     * 
     *
     * @param string|null $pickingInstructions
     *
     * @return self
     */
    public function setPickingInstructions(?string $pickingInstructions): self
    {
        $this->initialized['pickingInstructions'] = true;
        $this->pickingInstructions = $pickingInstructions;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getPicksComplete(): ?bool
    {
        return $this->picksComplete;
    }
    /**
     * 
     *
     * @param bool|null $picksComplete
     *
     * @return self
     */
    public function setPicksComplete(?bool $picksComplete): self
    {
        $this->initialized['picksComplete'] = true;
        $this->picksComplete = $picksComplete;
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
    public function getRecipientCustomerNumber(): ?string
    {
        return $this->recipientCustomerNumber;
    }
    /**
     * 
     *
     * @param string|null $recipientCustomerNumber
     *
     * @return self
     */
    public function setRecipientCustomerNumber(?string $recipientCustomerNumber): self
    {
        $this->initialized['recipientCustomerNumber'] = true;
        $this->recipientCustomerNumber = $recipientCustomerNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecipientPartyId(): ?string
    {
        return $this->recipientPartyId;
    }
    /**
     * 
     *
     * @param string|null $recipientPartyId
     *
     * @return self
     */
    public function setRecipientPartyId(?string $recipientPartyId): self
    {
        $this->initialized['recipientPartyId'] = true;
        $this->recipientPartyId = $recipientPartyId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecipientSupplierNumber(): ?string
    {
        return $this->recipientSupplierNumber;
    }
    /**
     * 
     *
     * @param string|null $recipientSupplierNumber
     *
     * @return self
     */
    public function setRecipientSupplierNumber(?string $recipientSupplierNumber): self
    {
        $this->initialized['recipientSupplierNumber'] = true;
        $this->recipientSupplierNumber = $recipientSupplierNumber;
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
     * @return EmailAddresses|null
     */
    public function getSalesInvoiceEmailAddresses(): ?EmailAddresses
    {
        return $this->salesInvoiceEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses|null $salesInvoiceEmailAddresses
     *
     * @return self
     */
    public function setSalesInvoiceEmailAddresses(?EmailAddresses $salesInvoiceEmailAddresses): self
    {
        $this->initialized['salesInvoiceEmailAddresses'] = true;
        $this->salesInvoiceEmailAddresses = $salesInvoiceEmailAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return list<ShipmentItem>|null
     */
    public function getShipmentItems(): ?array
    {
        return $this->shipmentItems;
    }
    /**
     * 
     *
     * @param list<ShipmentItem>|null $shipmentItems
     *
     * @return self
     */
    public function setShipmentItems(?array $shipmentItems): self
    {
        $this->initialized['shipmentItems'] = true;
        $this->shipmentItems = $shipmentItems;
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
     * @deprecated
     *
     * @return string|null
     */
    public function getShipmentMethodName(): ?string
    {
        return $this->shipmentMethodName;
    }
    /**
     * 
     *
     * @param string|null $shipmentMethodName
     *
     * @deprecated
     *
     * @return self
     */
    public function setShipmentMethodName(?string $shipmentMethodName): self
    {
        $this->initialized['shipmentMethodName'] = true;
        $this->shipmentMethodName = $shipmentMethodName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShipmentNumber(): ?string
    {
        return $this->shipmentNumber;
    }
    /**
     * 
     *
     * @param string|null $shipmentNumber
     *
     * @return self
     */
    public function setShipmentNumber(?string $shipmentNumber): self
    {
        $this->initialized['shipmentNumber'] = true;
        $this->shipmentNumber = $shipmentNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShipmentType(): ?string
    {
        return $this->shipmentType;
    }
    /**
     * 
     *
     * @param string|null $shipmentType
     *
     * @return self
     */
    public function setShipmentType(?string $shipmentType): self
    {
        $this->initialized['shipmentType'] = true;
        $this->shipmentType = $shipmentType;
        return $this;
    }
    /**
     * 
     *
     * @return RecordAddress|null
     */
    public function getShippedFromAddress(): ?RecordAddress
    {
        return $this->shippedFromAddress;
    }
    /**
     * 
     *
     * @param RecordAddress|null $shippedFromAddress
     *
     * @return self
     */
    public function setShippedFromAddress(?RecordAddress $shippedFromAddress): self
    {
        $this->initialized['shippedFromAddress'] = true;
        $this->shippedFromAddress = $shippedFromAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShippingCarrierId(): ?string
    {
        return $this->shippingCarrierId;
    }
    /**
     * 
     *
     * @param string|null $shippingCarrierId
     *
     * @return self
     */
    public function setShippingCarrierId(?string $shippingCarrierId): self
    {
        $this->initialized['shippingCarrierId'] = true;
        $this->shippingCarrierId = $shippingCarrierId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getShippingCarrierName(): ?string
    {
        return $this->shippingCarrierName;
    }
    /**
     * 
     *
     * @param string|null $shippingCarrierName
     *
     * @deprecated
     *
     * @return self
     */
    public function setShippingCarrierName(?string $shippingCarrierName): self
    {
        $this->initialized['shippingCarrierName'] = true;
        $this->shippingCarrierName = $shippingCarrierName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getShippingDate(): ?int
    {
        return $this->shippingDate;
    }
    /**
     * 
     *
     * @param int|null $shippingDate
     *
     * @return self
     */
    public function setShippingDate(?int $shippingDate): self
    {
        $this->initialized['shippingDate'] = true;
        $this->shippingDate = $shippingDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getShippingLabelsCount(): ?int
    {
        return $this->shippingLabelsCount;
    }
    /**
     * 
     *
     * @param int|null $shippingLabelsCount
     *
     * @return self
     */
    public function setShippingLabelsCount(?int $shippingLabelsCount): self
    {
        $this->initialized['shippingLabelsCount'] = true;
        $this->shippingLabelsCount = $shippingLabelsCount;
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
     * @deprecated
     *
     * @return string|null
     */
    public function getShippingReturnCarrierName(): ?string
    {
        return $this->shippingReturnCarrierName;
    }
    /**
     * 
     *
     * @param string|null $shippingReturnCarrierName
     *
     * @deprecated
     *
     * @return self
     */
    public function setShippingReturnCarrierName(?string $shippingReturnCarrierName): self
    {
        $this->initialized['shippingReturnCarrierName'] = true;
        $this->shippingReturnCarrierName = $shippingReturnCarrierName;
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