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
    protected $articleId;
    /**
     * 
     *
     * @var string|null
     */
    protected $batchNumberId;
    /**
     * 
     *
     * @var string|null
     */
    protected $costCenterId;
    /**
     * 
     *
     * @var string|null
     */
    protected $incomingGoodsItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $internalTransportReferenceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $movementNote;
    /**
     * 
     *
     * @var string|null
     */
    protected $movementNumber;
    /**
     * 
     *
     * @var int|null
     */
    protected $postingDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $productionOrderId;
    /**
     * 
     *
     * @var string|null
     */
    protected $quantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesOrderItemId;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $serialNumbers;
    /**
     * 
     *
     * @var string|null
     */
    protected $shipmentItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $stockMovementType;
    /**
     * 
     *
     * @var string|null
     */
    protected $storagePlaceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $transportationOrderId;
    /**
     * 
     *
     * @var string|null
     */
    protected $userId;
    /**
     * 
     *
     * @var string|null
     */
    protected $valuationPrice;
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
    public function getArticleId(): ?string
    {
        return $this->articleId;
    }
    /**
     * 
     *
     * @param string|null $articleId
     *
     * @return self
     */
    public function setArticleId(?string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBatchNumberId(): ?string
    {
        return $this->batchNumberId;
    }
    /**
     * 
     *
     * @param string|null $batchNumberId
     *
     * @return self
     */
    public function setBatchNumberId(?string $batchNumberId): self
    {
        $this->initialized['batchNumberId'] = true;
        $this->batchNumberId = $batchNumberId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCostCenterId(): ?string
    {
        return $this->costCenterId;
    }
    /**
     * 
     *
     * @param string|null $costCenterId
     *
     * @return self
     */
    public function setCostCenterId(?string $costCenterId): self
    {
        $this->initialized['costCenterId'] = true;
        $this->costCenterId = $costCenterId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIncomingGoodsItemId(): ?string
    {
        return $this->incomingGoodsItemId;
    }
    /**
     * 
     *
     * @param string|null $incomingGoodsItemId
     *
     * @return self
     */
    public function setIncomingGoodsItemId(?string $incomingGoodsItemId): self
    {
        $this->initialized['incomingGoodsItemId'] = true;
        $this->incomingGoodsItemId = $incomingGoodsItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInternalTransportReferenceId(): ?string
    {
        return $this->internalTransportReferenceId;
    }
    /**
     * 
     *
     * @param string|null $internalTransportReferenceId
     *
     * @return self
     */
    public function setInternalTransportReferenceId(?string $internalTransportReferenceId): self
    {
        $this->initialized['internalTransportReferenceId'] = true;
        $this->internalTransportReferenceId = $internalTransportReferenceId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMovementNote(): ?string
    {
        return $this->movementNote;
    }
    /**
     * 
     *
     * @param string|null $movementNote
     *
     * @return self
     */
    public function setMovementNote(?string $movementNote): self
    {
        $this->initialized['movementNote'] = true;
        $this->movementNote = $movementNote;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMovementNumber(): ?string
    {
        return $this->movementNumber;
    }
    /**
     * 
     *
     * @param string|null $movementNumber
     *
     * @return self
     */
    public function setMovementNumber(?string $movementNumber): self
    {
        $this->initialized['movementNumber'] = true;
        $this->movementNumber = $movementNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPostingDate(): ?int
    {
        return $this->postingDate;
    }
    /**
     * 
     *
     * @param int|null $postingDate
     *
     * @return self
     */
    public function setPostingDate(?int $postingDate): self
    {
        $this->initialized['postingDate'] = true;
        $this->postingDate = $postingDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProductionOrderId(): ?string
    {
        return $this->productionOrderId;
    }
    /**
     * 
     *
     * @param string|null $productionOrderId
     *
     * @return self
     */
    public function setProductionOrderId(?string $productionOrderId): self
    {
        $this->initialized['productionOrderId'] = true;
        $this->productionOrderId = $productionOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param string|null $quantity
     *
     * @return self
     */
    public function setQuantity(?string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesOrderItemId(): ?string
    {
        return $this->salesOrderItemId;
    }
    /**
     * 
     *
     * @param string|null $salesOrderItemId
     *
     * @return self
     */
    public function setSalesOrderItemId(?string $salesOrderItemId): self
    {
        $this->initialized['salesOrderItemId'] = true;
        $this->salesOrderItemId = $salesOrderItemId;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getSerialNumbers(): ?array
    {
        return $this->serialNumbers;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $serialNumbers
     *
     * @return self
     */
    public function setSerialNumbers(?array $serialNumbers): self
    {
        $this->initialized['serialNumbers'] = true;
        $this->serialNumbers = $serialNumbers;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShipmentItemId(): ?string
    {
        return $this->shipmentItemId;
    }
    /**
     * 
     *
     * @param string|null $shipmentItemId
     *
     * @return self
     */
    public function setShipmentItemId(?string $shipmentItemId): self
    {
        $this->initialized['shipmentItemId'] = true;
        $this->shipmentItemId = $shipmentItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStockMovementType(): ?string
    {
        return $this->stockMovementType;
    }
    /**
     * 
     *
     * @param string|null $stockMovementType
     *
     * @return self
     */
    public function setStockMovementType(?string $stockMovementType): self
    {
        $this->initialized['stockMovementType'] = true;
        $this->stockMovementType = $stockMovementType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStoragePlaceId(): ?string
    {
        return $this->storagePlaceId;
    }
    /**
     * 
     *
     * @param string|null $storagePlaceId
     *
     * @return self
     */
    public function setStoragePlaceId(?string $storagePlaceId): self
    {
        $this->initialized['storagePlaceId'] = true;
        $this->storagePlaceId = $storagePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTransportationOrderId(): ?string
    {
        return $this->transportationOrderId;
    }
    /**
     * 
     *
     * @param string|null $transportationOrderId
     *
     * @return self
     */
    public function setTransportationOrderId(?string $transportationOrderId): self
    {
        $this->initialized['transportationOrderId'] = true;
        $this->transportationOrderId = $transportationOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string|null $userId
     *
     * @return self
     */
    public function setUserId(?string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getValuationPrice(): ?string
    {
        return $this->valuationPrice;
    }
    /**
     * 
     *
     * @param string|null $valuationPrice
     *
     * @return self
     */
    public function setValuationPrice(?string $valuationPrice): self
    {
        $this->initialized['valuationPrice'] = true;
        $this->valuationPrice = $valuationPrice;
        return $this;
    }
}