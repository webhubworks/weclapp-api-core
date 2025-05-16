<?php

namespace Webhubworks\WeclappApiCore\Model;

class WarehouseStockMovement extends \ArrayObject
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
    protected $articleId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $batchNumber;
    /**
     * 
     *
     * @var string
     */
    protected $batchNumberId;
    /**
     * 
     *
     * @var string
     */
    protected $costCenterId;
    /**
     * 
     *
     * @var string
     */
    protected $incomingGoodsItemId;
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
    protected $movementNote;
    /**
     * 
     *
     * @var string
     */
    protected $movementNumber;
    /**
     * 
     *
     * @var int
     */
    protected $postingDate;
    /**
     * 
     *
     * @var string
     */
    protected $productionOrderId;
    /**
     * 
     *
     * @var string
     */
    protected $quantity;
    /**
     * 
     *
     * @var string
     */
    protected $salesOrderItemId;
    /**
     * 
     *
     * @var list<OnlyId>
     */
    protected $serialNumbers;
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
    protected $stockMovementType;
    /**
     * 
     *
     * @var string
     */
    protected $storagePlaceId;
    /**
     * 
     *
     * @var string
     */
    protected $transportationOrderId;
    /**
     * 
     *
     * @var string
     */
    protected $userId;
    /**
     * 
     *
     * @var string
     */
    protected $valuationPrice;
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
    public function getArticleId(): string
    {
        return $this->articleId;
    }
    /**
     * 
     *
     * @param string $articleId
     *
     * @return self
     */
    public function setArticleId(string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
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
     * @deprecated
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
    public function getBatchNumberId(): string
    {
        return $this->batchNumberId;
    }
    /**
     * 
     *
     * @param string $batchNumberId
     *
     * @return self
     */
    public function setBatchNumberId(string $batchNumberId): self
    {
        $this->initialized['batchNumberId'] = true;
        $this->batchNumberId = $batchNumberId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCostCenterId(): string
    {
        return $this->costCenterId;
    }
    /**
     * 
     *
     * @param string $costCenterId
     *
     * @return self
     */
    public function setCostCenterId(string $costCenterId): self
    {
        $this->initialized['costCenterId'] = true;
        $this->costCenterId = $costCenterId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIncomingGoodsItemId(): string
    {
        return $this->incomingGoodsItemId;
    }
    /**
     * 
     *
     * @param string $incomingGoodsItemId
     *
     * @return self
     */
    public function setIncomingGoodsItemId(string $incomingGoodsItemId): self
    {
        $this->initialized['incomingGoodsItemId'] = true;
        $this->incomingGoodsItemId = $incomingGoodsItemId;
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
    public function getMovementNote(): string
    {
        return $this->movementNote;
    }
    /**
     * 
     *
     * @param string $movementNote
     *
     * @return self
     */
    public function setMovementNote(string $movementNote): self
    {
        $this->initialized['movementNote'] = true;
        $this->movementNote = $movementNote;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMovementNumber(): string
    {
        return $this->movementNumber;
    }
    /**
     * 
     *
     * @param string $movementNumber
     *
     * @return self
     */
    public function setMovementNumber(string $movementNumber): self
    {
        $this->initialized['movementNumber'] = true;
        $this->movementNumber = $movementNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPostingDate(): int
    {
        return $this->postingDate;
    }
    /**
     * 
     *
     * @param int $postingDate
     *
     * @return self
     */
    public function setPostingDate(int $postingDate): self
    {
        $this->initialized['postingDate'] = true;
        $this->postingDate = $postingDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProductionOrderId(): string
    {
        return $this->productionOrderId;
    }
    /**
     * 
     *
     * @param string $productionOrderId
     *
     * @return self
     */
    public function setProductionOrderId(string $productionOrderId): self
    {
        $this->initialized['productionOrderId'] = true;
        $this->productionOrderId = $productionOrderId;
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
     * @return list<OnlyId>
     */
    public function getSerialNumbers(): array
    {
        return $this->serialNumbers;
    }
    /**
     * 
     *
     * @param list<OnlyId> $serialNumbers
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
    public function getStockMovementType(): string
    {
        return $this->stockMovementType;
    }
    /**
     * 
     *
     * @param string $stockMovementType
     *
     * @return self
     */
    public function setStockMovementType(string $stockMovementType): self
    {
        $this->initialized['stockMovementType'] = true;
        $this->stockMovementType = $stockMovementType;
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
    /**
     * 
     *
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getValuationPrice(): string
    {
        return $this->valuationPrice;
    }
    /**
     * 
     *
     * @param string $valuationPrice
     *
     * @return self
     */
    public function setValuationPrice(string $valuationPrice): self
    {
        $this->initialized['valuationPrice'] = true;
        $this->valuationPrice = $valuationPrice;
        return $this;
    }
}