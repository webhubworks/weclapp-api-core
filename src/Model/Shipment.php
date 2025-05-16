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
     * @var string|null
     */
    protected $additionalDeliveryInformation;

    /**
     * @var string|null
     */
    protected $availability;

    /**
     * @var string|null
     */
    protected $availabilityForAllWarehouses;

    /**
     * @var string|null
     */
    protected $consolidationStoragePlaceId;

    /**
     * @var string|null
     */
    protected $customerPurchaseOrderNumber;

    /**
     * @var string|null
     */
    protected $declaredValueAmount;

    /**
     * @var string|null
     */
    protected $declaredValueAmountCurrencyId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $declaredValueAmountCurrencyName;

    /**
     * @var int|null
     */
    protected $deliveryDate;

    /**
     * @var string|null
     */
    protected $destinationStoragePlaceId;

    /**
     * @var string|null
     */
    protected $destinationWarehouseId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $destinationWarehouseName;

    /**
     * @var string|null
     */
    protected $dhlReceiverId;

    /**
     * @var string|null
     */
    protected $invoiceRecipientId;

    /**
     * @var int|null
     */
    protected $packageHeight;

    /**
     * @var int|null
     */
    protected $packageLength;

    /**
     * @var string|null
     */
    protected $packageReferenceNumber;

    /**
     * @var string|null
     */
    protected $packageReturnTrackingNumber;

    /**
     * @var string|null
     */
    protected $packageReturnTrackingUrl;

    /**
     * @var string|null
     */
    protected $packageTrackingNumber;

    /**
     * @var string|null
     */
    protected $packageTrackingUrl;

    /**
     * @var string|null
     */
    protected $packageWeight;

    /**
     * @var int|null
     */
    protected $packageWidth;

    /**
     * @var string|null
     */
    protected $pickingInstructions;

    /**
     * @var bool|null
     */
    protected $picksComplete;

    /**
     * @var list<OnlyId>|null
     */
    protected $purchaseOrders;

    /**
     * @var string|null
     */
    protected $recipientCustomerNumber;

    /**
     * @var string|null
     */
    protected $recipientPartyId;

    /**
     * @var string|null
     */
    protected $recipientSupplierNumber;

    /**
     * @var EmailAddresses|null
     */
    protected $recordEmailAddresses;

    /**
     * @var string|null
     */
    protected $responsibleUserId;

    /**
     * @var EmailAddresses|null
     */
    protected $salesInvoiceEmailAddresses;

    /**
     * @var list<ShipmentItem>|null
     */
    protected $shipmentItems;

    /**
     * @var string|null
     */
    protected $shipmentMethodId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $shipmentMethodName;

    /**
     * @var string|null
     */
    protected $shipmentNumber;

    /**
     * @var string|null
     */
    protected $shipmentType;

    /**
     * @var RecordAddress|null
     */
    protected $shippedFromAddress;

    /**
     * @var string|null
     */
    protected $shippingCarrierId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $shippingCarrierName;

    /**
     * @var int|null
     */
    protected $shippingDate;

    /**
     * @var int|null
     */
    protected $shippingLabelsCount;

    /**
     * @var string|null
     */
    protected $shippingReturnCarrierId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $shippingReturnCarrierName;

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

    public function getAdditionalDeliveryInformation(): ?string
    {
        return $this->additionalDeliveryInformation;
    }

    public function setAdditionalDeliveryInformation(?string $additionalDeliveryInformation): self
    {
        $this->initialized['additionalDeliveryInformation'] = true;
        $this->additionalDeliveryInformation = $additionalDeliveryInformation;

        return $this;
    }

    public function getAvailability(): ?string
    {
        return $this->availability;
    }

    public function setAvailability(?string $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;

        return $this;
    }

    public function getAvailabilityForAllWarehouses(): ?string
    {
        return $this->availabilityForAllWarehouses;
    }

    public function setAvailabilityForAllWarehouses(?string $availabilityForAllWarehouses): self
    {
        $this->initialized['availabilityForAllWarehouses'] = true;
        $this->availabilityForAllWarehouses = $availabilityForAllWarehouses;

        return $this;
    }

    public function getConsolidationStoragePlaceId(): ?string
    {
        return $this->consolidationStoragePlaceId;
    }

    public function setConsolidationStoragePlaceId(?string $consolidationStoragePlaceId): self
    {
        $this->initialized['consolidationStoragePlaceId'] = true;
        $this->consolidationStoragePlaceId = $consolidationStoragePlaceId;

        return $this;
    }

    public function getCustomerPurchaseOrderNumber(): ?string
    {
        return $this->customerPurchaseOrderNumber;
    }

    public function setCustomerPurchaseOrderNumber(?string $customerPurchaseOrderNumber): self
    {
        $this->initialized['customerPurchaseOrderNumber'] = true;
        $this->customerPurchaseOrderNumber = $customerPurchaseOrderNumber;

        return $this;
    }

    public function getDeclaredValueAmount(): ?string
    {
        return $this->declaredValueAmount;
    }

    public function setDeclaredValueAmount(?string $declaredValueAmount): self
    {
        $this->initialized['declaredValueAmount'] = true;
        $this->declaredValueAmount = $declaredValueAmount;

        return $this;
    }

    public function getDeclaredValueAmountCurrencyId(): ?string
    {
        return $this->declaredValueAmountCurrencyId;
    }

    public function setDeclaredValueAmountCurrencyId(?string $declaredValueAmountCurrencyId): self
    {
        $this->initialized['declaredValueAmountCurrencyId'] = true;
        $this->declaredValueAmountCurrencyId = $declaredValueAmountCurrencyId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getDeclaredValueAmountCurrencyName(): ?string
    {
        return $this->declaredValueAmountCurrencyName;
    }

    /**
     * @deprecated
     */
    public function setDeclaredValueAmountCurrencyName(?string $declaredValueAmountCurrencyName): self
    {
        $this->initialized['declaredValueAmountCurrencyName'] = true;
        $this->declaredValueAmountCurrencyName = $declaredValueAmountCurrencyName;

        return $this;
    }

    public function getDeliveryDate(): ?int
    {
        return $this->deliveryDate;
    }

    public function setDeliveryDate(?int $deliveryDate): self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    public function getDestinationStoragePlaceId(): ?string
    {
        return $this->destinationStoragePlaceId;
    }

    public function setDestinationStoragePlaceId(?string $destinationStoragePlaceId): self
    {
        $this->initialized['destinationStoragePlaceId'] = true;
        $this->destinationStoragePlaceId = $destinationStoragePlaceId;

        return $this;
    }

    public function getDestinationWarehouseId(): ?string
    {
        return $this->destinationWarehouseId;
    }

    public function setDestinationWarehouseId(?string $destinationWarehouseId): self
    {
        $this->initialized['destinationWarehouseId'] = true;
        $this->destinationWarehouseId = $destinationWarehouseId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getDestinationWarehouseName(): ?string
    {
        return $this->destinationWarehouseName;
    }

    /**
     * @deprecated
     */
    public function setDestinationWarehouseName(?string $destinationWarehouseName): self
    {
        $this->initialized['destinationWarehouseName'] = true;
        $this->destinationWarehouseName = $destinationWarehouseName;

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

    public function getPackageHeight(): ?int
    {
        return $this->packageHeight;
    }

    public function setPackageHeight(?int $packageHeight): self
    {
        $this->initialized['packageHeight'] = true;
        $this->packageHeight = $packageHeight;

        return $this;
    }

    public function getPackageLength(): ?int
    {
        return $this->packageLength;
    }

    public function setPackageLength(?int $packageLength): self
    {
        $this->initialized['packageLength'] = true;
        $this->packageLength = $packageLength;

        return $this;
    }

    public function getPackageReferenceNumber(): ?string
    {
        return $this->packageReferenceNumber;
    }

    public function setPackageReferenceNumber(?string $packageReferenceNumber): self
    {
        $this->initialized['packageReferenceNumber'] = true;
        $this->packageReferenceNumber = $packageReferenceNumber;

        return $this;
    }

    public function getPackageReturnTrackingNumber(): ?string
    {
        return $this->packageReturnTrackingNumber;
    }

    public function setPackageReturnTrackingNumber(?string $packageReturnTrackingNumber): self
    {
        $this->initialized['packageReturnTrackingNumber'] = true;
        $this->packageReturnTrackingNumber = $packageReturnTrackingNumber;

        return $this;
    }

    public function getPackageReturnTrackingUrl(): ?string
    {
        return $this->packageReturnTrackingUrl;
    }

    public function setPackageReturnTrackingUrl(?string $packageReturnTrackingUrl): self
    {
        $this->initialized['packageReturnTrackingUrl'] = true;
        $this->packageReturnTrackingUrl = $packageReturnTrackingUrl;

        return $this;
    }

    public function getPackageTrackingNumber(): ?string
    {
        return $this->packageTrackingNumber;
    }

    public function setPackageTrackingNumber(?string $packageTrackingNumber): self
    {
        $this->initialized['packageTrackingNumber'] = true;
        $this->packageTrackingNumber = $packageTrackingNumber;

        return $this;
    }

    public function getPackageTrackingUrl(): ?string
    {
        return $this->packageTrackingUrl;
    }

    public function setPackageTrackingUrl(?string $packageTrackingUrl): self
    {
        $this->initialized['packageTrackingUrl'] = true;
        $this->packageTrackingUrl = $packageTrackingUrl;

        return $this;
    }

    public function getPackageWeight(): ?string
    {
        return $this->packageWeight;
    }

    public function setPackageWeight(?string $packageWeight): self
    {
        $this->initialized['packageWeight'] = true;
        $this->packageWeight = $packageWeight;

        return $this;
    }

    public function getPackageWidth(): ?int
    {
        return $this->packageWidth;
    }

    public function setPackageWidth(?int $packageWidth): self
    {
        $this->initialized['packageWidth'] = true;
        $this->packageWidth = $packageWidth;

        return $this;
    }

    public function getPickingInstructions(): ?string
    {
        return $this->pickingInstructions;
    }

    public function setPickingInstructions(?string $pickingInstructions): self
    {
        $this->initialized['pickingInstructions'] = true;
        $this->pickingInstructions = $pickingInstructions;

        return $this;
    }

    public function getPicksComplete(): ?bool
    {
        return $this->picksComplete;
    }

    public function setPicksComplete(?bool $picksComplete): self
    {
        $this->initialized['picksComplete'] = true;
        $this->picksComplete = $picksComplete;

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

    public function getRecipientCustomerNumber(): ?string
    {
        return $this->recipientCustomerNumber;
    }

    public function setRecipientCustomerNumber(?string $recipientCustomerNumber): self
    {
        $this->initialized['recipientCustomerNumber'] = true;
        $this->recipientCustomerNumber = $recipientCustomerNumber;

        return $this;
    }

    public function getRecipientPartyId(): ?string
    {
        return $this->recipientPartyId;
    }

    public function setRecipientPartyId(?string $recipientPartyId): self
    {
        $this->initialized['recipientPartyId'] = true;
        $this->recipientPartyId = $recipientPartyId;

        return $this;
    }

    public function getRecipientSupplierNumber(): ?string
    {
        return $this->recipientSupplierNumber;
    }

    public function setRecipientSupplierNumber(?string $recipientSupplierNumber): self
    {
        $this->initialized['recipientSupplierNumber'] = true;
        $this->recipientSupplierNumber = $recipientSupplierNumber;

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

    public function getSalesInvoiceEmailAddresses(): ?EmailAddresses
    {
        return $this->salesInvoiceEmailAddresses;
    }

    public function setSalesInvoiceEmailAddresses(?EmailAddresses $salesInvoiceEmailAddresses): self
    {
        $this->initialized['salesInvoiceEmailAddresses'] = true;
        $this->salesInvoiceEmailAddresses = $salesInvoiceEmailAddresses;

        return $this;
    }

    /**
     * @return list<ShipmentItem>|null
     */
    public function getShipmentItems(): ?array
    {
        return $this->shipmentItems;
    }

    /**
     * @param  list<ShipmentItem>|null  $shipmentItems
     */
    public function setShipmentItems(?array $shipmentItems): self
    {
        $this->initialized['shipmentItems'] = true;
        $this->shipmentItems = $shipmentItems;

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

    /**
     * @deprecated
     */
    public function getShipmentMethodName(): ?string
    {
        return $this->shipmentMethodName;
    }

    /**
     * @deprecated
     */
    public function setShipmentMethodName(?string $shipmentMethodName): self
    {
        $this->initialized['shipmentMethodName'] = true;
        $this->shipmentMethodName = $shipmentMethodName;

        return $this;
    }

    public function getShipmentNumber(): ?string
    {
        return $this->shipmentNumber;
    }

    public function setShipmentNumber(?string $shipmentNumber): self
    {
        $this->initialized['shipmentNumber'] = true;
        $this->shipmentNumber = $shipmentNumber;

        return $this;
    }

    public function getShipmentType(): ?string
    {
        return $this->shipmentType;
    }

    public function setShipmentType(?string $shipmentType): self
    {
        $this->initialized['shipmentType'] = true;
        $this->shipmentType = $shipmentType;

        return $this;
    }

    public function getShippedFromAddress(): ?RecordAddress
    {
        return $this->shippedFromAddress;
    }

    public function setShippedFromAddress(?RecordAddress $shippedFromAddress): self
    {
        $this->initialized['shippedFromAddress'] = true;
        $this->shippedFromAddress = $shippedFromAddress;

        return $this;
    }

    public function getShippingCarrierId(): ?string
    {
        return $this->shippingCarrierId;
    }

    public function setShippingCarrierId(?string $shippingCarrierId): self
    {
        $this->initialized['shippingCarrierId'] = true;
        $this->shippingCarrierId = $shippingCarrierId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getShippingCarrierName(): ?string
    {
        return $this->shippingCarrierName;
    }

    /**
     * @deprecated
     */
    public function setShippingCarrierName(?string $shippingCarrierName): self
    {
        $this->initialized['shippingCarrierName'] = true;
        $this->shippingCarrierName = $shippingCarrierName;

        return $this;
    }

    public function getShippingDate(): ?int
    {
        return $this->shippingDate;
    }

    public function setShippingDate(?int $shippingDate): self
    {
        $this->initialized['shippingDate'] = true;
        $this->shippingDate = $shippingDate;

        return $this;
    }

    public function getShippingLabelsCount(): ?int
    {
        return $this->shippingLabelsCount;
    }

    public function setShippingLabelsCount(?int $shippingLabelsCount): self
    {
        $this->initialized['shippingLabelsCount'] = true;
        $this->shippingLabelsCount = $shippingLabelsCount;

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

    /**
     * @deprecated
     */
    public function getShippingReturnCarrierName(): ?string
    {
        return $this->shippingReturnCarrierName;
    }

    /**
     * @deprecated
     */
    public function setShippingReturnCarrierName(?string $shippingReturnCarrierName): self
    {
        $this->initialized['shippingReturnCarrierName'] = true;
        $this->shippingReturnCarrierName = $shippingReturnCarrierName;

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
