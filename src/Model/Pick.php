<?php

namespace Webhubworks\WeclappApiCore\Model;

class Pick extends \ArrayObject
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
     * @var string
     */
    protected $batchNumber;
    /**
     * 
     *
     * @var string
     */
    protected $confirmedByUserId;
    /**
     * 
     *
     * @var int
     */
    protected $confirmedDate;
    /**
     * 
     *
     * @var string
     */
    protected $internalTransportReferenceId;
    /**
     * 
     *
     * @var string
     */
    protected $quantity;
    /**
     * 
     *
     * @var list<string>
     */
    protected $serialNumbers;
    /**
     * 
     *
     * @var string
     */
    protected $storagePlaceId;
    /**
     * 
     *
     * @var int
     */
    protected $bookedDate;
    /**
     * 
     *
     * @var string
     */
    protected $orderItemId;
    /**
     * 
     *
     * @var string
     */
    protected $sourceInternalTransportReferenceId;
    /**
     * 
     *
     * @var string
     */
    protected $sourceStoragePlaceId;
    /**
     * 
     *
     * @var string
     */
    protected $packagingUnitBaseArticleId;
    /**
     * 
     *
     * @var int
     */
    protected $positionNumber;
    /**
     * 
     *
     * @var string
     */
    protected $productionOrderItemId;
    /**
     * 
     *
     * @var string
     */
    protected $salesOrderItemId;
    /**
     * 
     *
     * @var string
     */
    protected $shipmentItemId;
    /**
     * 
     *
     * @var string
     */
    protected $transportationOrderId;
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
     * @return string
     */
    public function getBatchNumber(): string
    {
        return $this->batchNumber;
    }
    /**
     * 
     *
     * @param string $batchNumber
     *
     * @return self
     */
    public function setBatchNumber(string $batchNumber): self
    {
        $this->initialized['batchNumber'] = true;
        $this->batchNumber = $batchNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConfirmedByUserId(): string
    {
        return $this->confirmedByUserId;
    }
    /**
     * 
     *
     * @param string $confirmedByUserId
     *
     * @return self
     */
    public function setConfirmedByUserId(string $confirmedByUserId): self
    {
        $this->initialized['confirmedByUserId'] = true;
        $this->confirmedByUserId = $confirmedByUserId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConfirmedDate(): int
    {
        return $this->confirmedDate;
    }
    /**
     * 
     *
     * @param int $confirmedDate
     *
     * @return self
     */
    public function setConfirmedDate(int $confirmedDate): self
    {
        $this->initialized['confirmedDate'] = true;
        $this->confirmedDate = $confirmedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInternalTransportReferenceId(): string
    {
        return $this->internalTransportReferenceId;
    }
    /**
     * 
     *
     * @param string $internalTransportReferenceId
     *
     * @return self
     */
    public function setInternalTransportReferenceId(string $internalTransportReferenceId): self
    {
        $this->initialized['internalTransportReferenceId'] = true;
        $this->internalTransportReferenceId = $internalTransportReferenceId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param string $quantity
     *
     * @return self
     */
    public function setQuantity(string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getSerialNumbers(): array
    {
        return $this->serialNumbers;
    }
    /**
     * 
     *
     * @param list<string> $serialNumbers
     *
     * @return self
     */
    public function setSerialNumbers(array $serialNumbers): self
    {
        $this->initialized['serialNumbers'] = true;
        $this->serialNumbers = $serialNumbers;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStoragePlaceId(): string
    {
        return $this->storagePlaceId;
    }
    /**
     * 
     *
     * @param string $storagePlaceId
     *
     * @return self
     */
    public function setStoragePlaceId(string $storagePlaceId): self
    {
        $this->initialized['storagePlaceId'] = true;
        $this->storagePlaceId = $storagePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBookedDate(): int
    {
        return $this->bookedDate;
    }
    /**
     * 
     *
     * @param int $bookedDate
     *
     * @return self
     */
    public function setBookedDate(int $bookedDate): self
    {
        $this->initialized['bookedDate'] = true;
        $this->bookedDate = $bookedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrderItemId(): string
    {
        return $this->orderItemId;
    }
    /**
     * 
     *
     * @param string $orderItemId
     *
     * @return self
     */
    public function setOrderItemId(string $orderItemId): self
    {
        $this->initialized['orderItemId'] = true;
        $this->orderItemId = $orderItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSourceInternalTransportReferenceId(): string
    {
        return $this->sourceInternalTransportReferenceId;
    }
    /**
     * 
     *
     * @param string $sourceInternalTransportReferenceId
     *
     * @return self
     */
    public function setSourceInternalTransportReferenceId(string $sourceInternalTransportReferenceId): self
    {
        $this->initialized['sourceInternalTransportReferenceId'] = true;
        $this->sourceInternalTransportReferenceId = $sourceInternalTransportReferenceId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSourceStoragePlaceId(): string
    {
        return $this->sourceStoragePlaceId;
    }
    /**
     * 
     *
     * @param string $sourceStoragePlaceId
     *
     * @return self
     */
    public function setSourceStoragePlaceId(string $sourceStoragePlaceId): self
    {
        $this->initialized['sourceStoragePlaceId'] = true;
        $this->sourceStoragePlaceId = $sourceStoragePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPackagingUnitBaseArticleId(): string
    {
        return $this->packagingUnitBaseArticleId;
    }
    /**
     * 
     *
     * @param string $packagingUnitBaseArticleId
     *
     * @return self
     */
    public function setPackagingUnitBaseArticleId(string $packagingUnitBaseArticleId): self
    {
        $this->initialized['packagingUnitBaseArticleId'] = true;
        $this->packagingUnitBaseArticleId = $packagingUnitBaseArticleId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPositionNumber(): int
    {
        return $this->positionNumber;
    }
    /**
     * 
     *
     * @param int $positionNumber
     *
     * @return self
     */
    public function setPositionNumber(int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProductionOrderItemId(): string
    {
        return $this->productionOrderItemId;
    }
    /**
     * 
     *
     * @param string $productionOrderItemId
     *
     * @return self
     */
    public function setProductionOrderItemId(string $productionOrderItemId): self
    {
        $this->initialized['productionOrderItemId'] = true;
        $this->productionOrderItemId = $productionOrderItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalesOrderItemId(): string
    {
        return $this->salesOrderItemId;
    }
    /**
     * 
     *
     * @param string $salesOrderItemId
     *
     * @return self
     */
    public function setSalesOrderItemId(string $salesOrderItemId): self
    {
        $this->initialized['salesOrderItemId'] = true;
        $this->salesOrderItemId = $salesOrderItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShipmentItemId(): string
    {
        return $this->shipmentItemId;
    }
    /**
     * 
     *
     * @param string $shipmentItemId
     *
     * @return self
     */
    public function setShipmentItemId(string $shipmentItemId): self
    {
        $this->initialized['shipmentItemId'] = true;
        $this->shipmentItemId = $shipmentItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransportationOrderId(): string
    {
        return $this->transportationOrderId;
    }
    /**
     * 
     *
     * @param string $transportationOrderId
     *
     * @return self
     */
    public function setTransportationOrderId(string $transportationOrderId): self
    {
        $this->initialized['transportationOrderId'] = true;
        $this->transportationOrderId = $transportationOrderId;
        return $this;
    }
}