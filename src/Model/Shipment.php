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
     * @var string
     */
    protected $additionalDeliveryInformation;
    /**
     * 
     *
     * @var string
     */
    protected $availability;
    /**
     * 
     *
     * @var string
     */
    protected $availabilityForAllWarehouses;
    /**
     * 
     *
     * @var string
     */
    protected $consolidationStoragePlaceId;
    /**
     * 
     *
     * @var string
     */
    protected $customerPurchaseOrderNumber;
    /**
     * 
     *
     * @var string
     */
    protected $declaredValueAmount;
    /**
     * 
     *
     * @var string
     */
    protected $declaredValueAmountCurrencyId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $declaredValueAmountCurrencyName;
    /**
     * 
     *
     * @var int
     */
    protected $deliveryDate;
    /**
     * 
     *
     * @var string
     */
    protected $destinationStoragePlaceId;
    /**
     * 
     *
     * @var string
     */
    protected $destinationWarehouseId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $destinationWarehouseName;
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
    protected $invoiceRecipientId;
    /**
     * 
     *
     * @var int
     */
    protected $packageHeight;
    /**
     * 
     *
     * @var int
     */
    protected $packageLength;
    /**
     * 
     *
     * @var string
     */
    protected $packageReferenceNumber;
    /**
     * 
     *
     * @var string
     */
    protected $packageReturnTrackingNumber;
    /**
     * 
     *
     * @var string
     */
    protected $packageReturnTrackingUrl;
    /**
     * 
     *
     * @var string
     */
    protected $packageTrackingNumber;
    /**
     * 
     *
     * @var string
     */
    protected $packageTrackingUrl;
    /**
     * 
     *
     * @var string
     */
    protected $packageWeight;
    /**
     * 
     *
     * @var int
     */
    protected $packageWidth;
    /**
     * 
     *
     * @var string
     */
    protected $pickingInstructions;
    /**
     * 
     *
     * @var bool
     */
    protected $picksComplete;
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
    protected $recipientCustomerNumber;
    /**
     * 
     *
     * @var string
     */
    protected $recipientPartyId;
    /**
     * 
     *
     * @var string
     */
    protected $recipientSupplierNumber;
    /**
     * 
     *
     * @var EmailAddresses
     */
    protected $recordEmailAddresses;
    /**
     * 
     *
     * @var string
     */
    protected $responsibleUserId;
    /**
     * 
     *
     * @var EmailAddresses
     */
    protected $salesInvoiceEmailAddresses;
    /**
     * 
     *
     * @var list<ShipmentItem>
     */
    protected $shipmentItems;
    /**
     * 
     *
     * @var string
     */
    protected $shipmentMethodId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $shipmentMethodName;
    /**
     * 
     *
     * @var string
     */
    protected $shipmentNumber;
    /**
     * 
     *
     * @var string
     */
    protected $shipmentType;
    /**
     * 
     *
     * @var RecordAddress
     */
    protected $shippedFromAddress;
    /**
     * 
     *
     * @var string
     */
    protected $shippingCarrierId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $shippingCarrierName;
    /**
     * 
     *
     * @var int
     */
    protected $shippingDate;
    /**
     * 
     *
     * @var int
     */
    protected $shippingLabelsCount;
    /**
     * 
     *
     * @var string
     */
    protected $shippingReturnCarrierId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $shippingReturnCarrierName;
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
     * @return string
     */
    public function getAdditionalDeliveryInformation(): string
    {
        return $this->additionalDeliveryInformation;
    }
    /**
     * 
     *
     * @param string $additionalDeliveryInformation
     *
     * @return self
     */
    public function setAdditionalDeliveryInformation(string $additionalDeliveryInformation): self
    {
        $this->initialized['additionalDeliveryInformation'] = true;
        $this->additionalDeliveryInformation = $additionalDeliveryInformation;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAvailability(): string
    {
        return $this->availability;
    }
    /**
     * 
     *
     * @param string $availability
     *
     * @return self
     */
    public function setAvailability(string $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAvailabilityForAllWarehouses(): string
    {
        return $this->availabilityForAllWarehouses;
    }
    /**
     * 
     *
     * @param string $availabilityForAllWarehouses
     *
     * @return self
     */
    public function setAvailabilityForAllWarehouses(string $availabilityForAllWarehouses): self
    {
        $this->initialized['availabilityForAllWarehouses'] = true;
        $this->availabilityForAllWarehouses = $availabilityForAllWarehouses;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConsolidationStoragePlaceId(): string
    {
        return $this->consolidationStoragePlaceId;
    }
    /**
     * 
     *
     * @param string $consolidationStoragePlaceId
     *
     * @return self
     */
    public function setConsolidationStoragePlaceId(string $consolidationStoragePlaceId): self
    {
        $this->initialized['consolidationStoragePlaceId'] = true;
        $this->consolidationStoragePlaceId = $consolidationStoragePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerPurchaseOrderNumber(): string
    {
        return $this->customerPurchaseOrderNumber;
    }
    /**
     * 
     *
     * @param string $customerPurchaseOrderNumber
     *
     * @return self
     */
    public function setCustomerPurchaseOrderNumber(string $customerPurchaseOrderNumber): self
    {
        $this->initialized['customerPurchaseOrderNumber'] = true;
        $this->customerPurchaseOrderNumber = $customerPurchaseOrderNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeclaredValueAmount(): string
    {
        return $this->declaredValueAmount;
    }
    /**
     * 
     *
     * @param string $declaredValueAmount
     *
     * @return self
     */
    public function setDeclaredValueAmount(string $declaredValueAmount): self
    {
        $this->initialized['declaredValueAmount'] = true;
        $this->declaredValueAmount = $declaredValueAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeclaredValueAmountCurrencyId(): string
    {
        return $this->declaredValueAmountCurrencyId;
    }
    /**
     * 
     *
     * @param string $declaredValueAmountCurrencyId
     *
     * @return self
     */
    public function setDeclaredValueAmountCurrencyId(string $declaredValueAmountCurrencyId): self
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
     * @return string
     */
    public function getDeclaredValueAmountCurrencyName(): string
    {
        return $this->declaredValueAmountCurrencyName;
    }
    /**
     * 
     *
     * @param string $declaredValueAmountCurrencyName
     *
     * @deprecated
     *
     * @return self
     */
    public function setDeclaredValueAmountCurrencyName(string $declaredValueAmountCurrencyName): self
    {
        $this->initialized['declaredValueAmountCurrencyName'] = true;
        $this->declaredValueAmountCurrencyName = $declaredValueAmountCurrencyName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDeliveryDate(): int
    {
        return $this->deliveryDate;
    }
    /**
     * 
     *
     * @param int $deliveryDate
     *
     * @return self
     */
    public function setDeliveryDate(int $deliveryDate): self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDestinationStoragePlaceId(): string
    {
        return $this->destinationStoragePlaceId;
    }
    /**
     * 
     *
     * @param string $destinationStoragePlaceId
     *
     * @return self
     */
    public function setDestinationStoragePlaceId(string $destinationStoragePlaceId): self
    {
        $this->initialized['destinationStoragePlaceId'] = true;
        $this->destinationStoragePlaceId = $destinationStoragePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDestinationWarehouseId(): string
    {
        return $this->destinationWarehouseId;
    }
    /**
     * 
     *
     * @param string $destinationWarehouseId
     *
     * @return self
     */
    public function setDestinationWarehouseId(string $destinationWarehouseId): self
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
     * @return string
     */
    public function getDestinationWarehouseName(): string
    {
        return $this->destinationWarehouseName;
    }
    /**
     * 
     *
     * @param string $destinationWarehouseName
     *
     * @deprecated
     *
     * @return self
     */
    public function setDestinationWarehouseName(string $destinationWarehouseName): self
    {
        $this->initialized['destinationWarehouseName'] = true;
        $this->destinationWarehouseName = $destinationWarehouseName;
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
     * @return int
     */
    public function getPackageHeight(): int
    {
        return $this->packageHeight;
    }
    /**
     * 
     *
     * @param int $packageHeight
     *
     * @return self
     */
    public function setPackageHeight(int $packageHeight): self
    {
        $this->initialized['packageHeight'] = true;
        $this->packageHeight = $packageHeight;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPackageLength(): int
    {
        return $this->packageLength;
    }
    /**
     * 
     *
     * @param int $packageLength
     *
     * @return self
     */
    public function setPackageLength(int $packageLength): self
    {
        $this->initialized['packageLength'] = true;
        $this->packageLength = $packageLength;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPackageReferenceNumber(): string
    {
        return $this->packageReferenceNumber;
    }
    /**
     * 
     *
     * @param string $packageReferenceNumber
     *
     * @return self
     */
    public function setPackageReferenceNumber(string $packageReferenceNumber): self
    {
        $this->initialized['packageReferenceNumber'] = true;
        $this->packageReferenceNumber = $packageReferenceNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPackageReturnTrackingNumber(): string
    {
        return $this->packageReturnTrackingNumber;
    }
    /**
     * 
     *
     * @param string $packageReturnTrackingNumber
     *
     * @return self
     */
    public function setPackageReturnTrackingNumber(string $packageReturnTrackingNumber): self
    {
        $this->initialized['packageReturnTrackingNumber'] = true;
        $this->packageReturnTrackingNumber = $packageReturnTrackingNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPackageReturnTrackingUrl(): string
    {
        return $this->packageReturnTrackingUrl;
    }
    /**
     * 
     *
     * @param string $packageReturnTrackingUrl
     *
     * @return self
     */
    public function setPackageReturnTrackingUrl(string $packageReturnTrackingUrl): self
    {
        $this->initialized['packageReturnTrackingUrl'] = true;
        $this->packageReturnTrackingUrl = $packageReturnTrackingUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPackageTrackingNumber(): string
    {
        return $this->packageTrackingNumber;
    }
    /**
     * 
     *
     * @param string $packageTrackingNumber
     *
     * @return self
     */
    public function setPackageTrackingNumber(string $packageTrackingNumber): self
    {
        $this->initialized['packageTrackingNumber'] = true;
        $this->packageTrackingNumber = $packageTrackingNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPackageTrackingUrl(): string
    {
        return $this->packageTrackingUrl;
    }
    /**
     * 
     *
     * @param string $packageTrackingUrl
     *
     * @return self
     */
    public function setPackageTrackingUrl(string $packageTrackingUrl): self
    {
        $this->initialized['packageTrackingUrl'] = true;
        $this->packageTrackingUrl = $packageTrackingUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPackageWeight(): string
    {
        return $this->packageWeight;
    }
    /**
     * 
     *
     * @param string $packageWeight
     *
     * @return self
     */
    public function setPackageWeight(string $packageWeight): self
    {
        $this->initialized['packageWeight'] = true;
        $this->packageWeight = $packageWeight;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPackageWidth(): int
    {
        return $this->packageWidth;
    }
    /**
     * 
     *
     * @param int $packageWidth
     *
     * @return self
     */
    public function setPackageWidth(int $packageWidth): self
    {
        $this->initialized['packageWidth'] = true;
        $this->packageWidth = $packageWidth;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPickingInstructions(): string
    {
        return $this->pickingInstructions;
    }
    /**
     * 
     *
     * @param string $pickingInstructions
     *
     * @return self
     */
    public function setPickingInstructions(string $pickingInstructions): self
    {
        $this->initialized['pickingInstructions'] = true;
        $this->pickingInstructions = $pickingInstructions;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPicksComplete(): bool
    {
        return $this->picksComplete;
    }
    /**
     * 
     *
     * @param bool $picksComplete
     *
     * @return self
     */
    public function setPicksComplete(bool $picksComplete): self
    {
        $this->initialized['picksComplete'] = true;
        $this->picksComplete = $picksComplete;
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
    public function getRecipientCustomerNumber(): string
    {
        return $this->recipientCustomerNumber;
    }
    /**
     * 
     *
     * @param string $recipientCustomerNumber
     *
     * @return self
     */
    public function setRecipientCustomerNumber(string $recipientCustomerNumber): self
    {
        $this->initialized['recipientCustomerNumber'] = true;
        $this->recipientCustomerNumber = $recipientCustomerNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRecipientPartyId(): string
    {
        return $this->recipientPartyId;
    }
    /**
     * 
     *
     * @param string $recipientPartyId
     *
     * @return self
     */
    public function setRecipientPartyId(string $recipientPartyId): self
    {
        $this->initialized['recipientPartyId'] = true;
        $this->recipientPartyId = $recipientPartyId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRecipientSupplierNumber(): string
    {
        return $this->recipientSupplierNumber;
    }
    /**
     * 
     *
     * @param string $recipientSupplierNumber
     *
     * @return self
     */
    public function setRecipientSupplierNumber(string $recipientSupplierNumber): self
    {
        $this->initialized['recipientSupplierNumber'] = true;
        $this->recipientSupplierNumber = $recipientSupplierNumber;
        return $this;
    }
    /**
     * 
     *
     * @return EmailAddresses
     */
    public function getRecordEmailAddresses(): EmailAddresses
    {
        return $this->recordEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses $recordEmailAddresses
     *
     * @return self
     */
    public function setRecordEmailAddresses(EmailAddresses $recordEmailAddresses): self
    {
        $this->initialized['recordEmailAddresses'] = true;
        $this->recordEmailAddresses = $recordEmailAddresses;
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
     * @return EmailAddresses
     */
    public function getSalesInvoiceEmailAddresses(): EmailAddresses
    {
        return $this->salesInvoiceEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses $salesInvoiceEmailAddresses
     *
     * @return self
     */
    public function setSalesInvoiceEmailAddresses(EmailAddresses $salesInvoiceEmailAddresses): self
    {
        $this->initialized['salesInvoiceEmailAddresses'] = true;
        $this->salesInvoiceEmailAddresses = $salesInvoiceEmailAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return list<ShipmentItem>
     */
    public function getShipmentItems(): array
    {
        return $this->shipmentItems;
    }
    /**
     * 
     *
     * @param list<ShipmentItem> $shipmentItems
     *
     * @return self
     */
    public function setShipmentItems(array $shipmentItems): self
    {
        $this->initialized['shipmentItems'] = true;
        $this->shipmentItems = $shipmentItems;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShipmentMethodId(): string
    {
        return $this->shipmentMethodId;
    }
    /**
     * 
     *
     * @param string $shipmentMethodId
     *
     * @return self
     */
    public function setShipmentMethodId(string $shipmentMethodId): self
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
     * @return string
     */
    public function getShipmentMethodName(): string
    {
        return $this->shipmentMethodName;
    }
    /**
     * 
     *
     * @param string $shipmentMethodName
     *
     * @deprecated
     *
     * @return self
     */
    public function setShipmentMethodName(string $shipmentMethodName): self
    {
        $this->initialized['shipmentMethodName'] = true;
        $this->shipmentMethodName = $shipmentMethodName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShipmentNumber(): string
    {
        return $this->shipmentNumber;
    }
    /**
     * 
     *
     * @param string $shipmentNumber
     *
     * @return self
     */
    public function setShipmentNumber(string $shipmentNumber): self
    {
        $this->initialized['shipmentNumber'] = true;
        $this->shipmentNumber = $shipmentNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShipmentType(): string
    {
        return $this->shipmentType;
    }
    /**
     * 
     *
     * @param string $shipmentType
     *
     * @return self
     */
    public function setShipmentType(string $shipmentType): self
    {
        $this->initialized['shipmentType'] = true;
        $this->shipmentType = $shipmentType;
        return $this;
    }
    /**
     * 
     *
     * @return RecordAddress
     */
    public function getShippedFromAddress(): RecordAddress
    {
        return $this->shippedFromAddress;
    }
    /**
     * 
     *
     * @param RecordAddress $shippedFromAddress
     *
     * @return self
     */
    public function setShippedFromAddress(RecordAddress $shippedFromAddress): self
    {
        $this->initialized['shippedFromAddress'] = true;
        $this->shippedFromAddress = $shippedFromAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShippingCarrierId(): string
    {
        return $this->shippingCarrierId;
    }
    /**
     * 
     *
     * @param string $shippingCarrierId
     *
     * @return self
     */
    public function setShippingCarrierId(string $shippingCarrierId): self
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
     * @return string
     */
    public function getShippingCarrierName(): string
    {
        return $this->shippingCarrierName;
    }
    /**
     * 
     *
     * @param string $shippingCarrierName
     *
     * @deprecated
     *
     * @return self
     */
    public function setShippingCarrierName(string $shippingCarrierName): self
    {
        $this->initialized['shippingCarrierName'] = true;
        $this->shippingCarrierName = $shippingCarrierName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getShippingDate(): int
    {
        return $this->shippingDate;
    }
    /**
     * 
     *
     * @param int $shippingDate
     *
     * @return self
     */
    public function setShippingDate(int $shippingDate): self
    {
        $this->initialized['shippingDate'] = true;
        $this->shippingDate = $shippingDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getShippingLabelsCount(): int
    {
        return $this->shippingLabelsCount;
    }
    /**
     * 
     *
     * @param int $shippingLabelsCount
     *
     * @return self
     */
    public function setShippingLabelsCount(int $shippingLabelsCount): self
    {
        $this->initialized['shippingLabelsCount'] = true;
        $this->shippingLabelsCount = $shippingLabelsCount;
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
     * @deprecated
     *
     * @return string
     */
    public function getShippingReturnCarrierName(): string
    {
        return $this->shippingReturnCarrierName;
    }
    /**
     * 
     *
     * @param string $shippingReturnCarrierName
     *
     * @deprecated
     *
     * @return self
     */
    public function setShippingReturnCarrierName(string $shippingReturnCarrierName): self
    {
        $this->initialized['shippingReturnCarrierName'] = true;
        $this->shippingReturnCarrierName = $shippingReturnCarrierName;
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