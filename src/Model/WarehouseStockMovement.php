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
    protected $articleId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $batchNumber;

    /**
     * @var string|null
     */
    protected $batchNumberId;

    /**
     * @var string|null
     */
    protected $costCenterId;

    /**
     * @var string|null
     */
    protected $incomingGoodsItemId;

    /**
     * @var string|null
     */
    protected $internalTransportReferenceId;

    /**
     * @var string|null
     */
    protected $movementNote;

    /**
     * @var string|null
     */
    protected $movementNumber;

    /**
     * @var int|null
     */
    protected $postingDate;

    /**
     * @var string|null
     */
    protected $productionOrderId;

    /**
     * @var string|null
     */
    protected $quantity;

    /**
     * @var string|null
     */
    protected $salesOrderItemId;

    /**
     * @var list<OnlyId>|null
     */
    protected $serialNumbers;

    /**
     * @var string|null
     */
    protected $shipmentItemId;

    /**
     * @var string|null
     */
    protected $stockMovementType;

    /**
     * @var string|null
     */
    protected $storagePlaceId;

    /**
     * @var string|null
     */
    protected $transportationOrderId;

    /**
     * @var string|null
     */
    protected $userId;

    /**
     * @var string|null
     */
    protected $valuationPrice;

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

    public function getArticleId(): ?string
    {
        return $this->articleId;
    }

    public function setArticleId(?string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getBatchNumber(): ?string
    {
        return $this->batchNumber;
    }

    /**
     * @deprecated
     */
    public function setBatchNumber(?string $batchNumber): self
    {
        $this->initialized['batchNumber'] = true;
        $this->batchNumber = $batchNumber;

        return $this;
    }

    public function getBatchNumberId(): ?string
    {
        return $this->batchNumberId;
    }

    public function setBatchNumberId(?string $batchNumberId): self
    {
        $this->initialized['batchNumberId'] = true;
        $this->batchNumberId = $batchNumberId;

        return $this;
    }

    public function getCostCenterId(): ?string
    {
        return $this->costCenterId;
    }

    public function setCostCenterId(?string $costCenterId): self
    {
        $this->initialized['costCenterId'] = true;
        $this->costCenterId = $costCenterId;

        return $this;
    }

    public function getIncomingGoodsItemId(): ?string
    {
        return $this->incomingGoodsItemId;
    }

    public function setIncomingGoodsItemId(?string $incomingGoodsItemId): self
    {
        $this->initialized['incomingGoodsItemId'] = true;
        $this->incomingGoodsItemId = $incomingGoodsItemId;

        return $this;
    }

    public function getInternalTransportReferenceId(): ?string
    {
        return $this->internalTransportReferenceId;
    }

    public function setInternalTransportReferenceId(?string $internalTransportReferenceId): self
    {
        $this->initialized['internalTransportReferenceId'] = true;
        $this->internalTransportReferenceId = $internalTransportReferenceId;

        return $this;
    }

    public function getMovementNote(): ?string
    {
        return $this->movementNote;
    }

    public function setMovementNote(?string $movementNote): self
    {
        $this->initialized['movementNote'] = true;
        $this->movementNote = $movementNote;

        return $this;
    }

    public function getMovementNumber(): ?string
    {
        return $this->movementNumber;
    }

    public function setMovementNumber(?string $movementNumber): self
    {
        $this->initialized['movementNumber'] = true;
        $this->movementNumber = $movementNumber;

        return $this;
    }

    public function getPostingDate(): ?int
    {
        return $this->postingDate;
    }

    public function setPostingDate(?int $postingDate): self
    {
        $this->initialized['postingDate'] = true;
        $this->postingDate = $postingDate;

        return $this;
    }

    public function getProductionOrderId(): ?string
    {
        return $this->productionOrderId;
    }

    public function setProductionOrderId(?string $productionOrderId): self
    {
        $this->initialized['productionOrderId'] = true;
        $this->productionOrderId = $productionOrderId;

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    public function setQuantity(?string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function getSalesOrderItemId(): ?string
    {
        return $this->salesOrderItemId;
    }

    public function setSalesOrderItemId(?string $salesOrderItemId): self
    {
        $this->initialized['salesOrderItemId'] = true;
        $this->salesOrderItemId = $salesOrderItemId;

        return $this;
    }

    /**
     * @return list<OnlyId>|null
     */
    public function getSerialNumbers(): ?array
    {
        return $this->serialNumbers;
    }

    /**
     * @param  list<OnlyId>|null  $serialNumbers
     */
    public function setSerialNumbers(?array $serialNumbers): self
    {
        $this->initialized['serialNumbers'] = true;
        $this->serialNumbers = $serialNumbers;

        return $this;
    }

    public function getShipmentItemId(): ?string
    {
        return $this->shipmentItemId;
    }

    public function setShipmentItemId(?string $shipmentItemId): self
    {
        $this->initialized['shipmentItemId'] = true;
        $this->shipmentItemId = $shipmentItemId;

        return $this;
    }

    public function getStockMovementType(): ?string
    {
        return $this->stockMovementType;
    }

    public function setStockMovementType(?string $stockMovementType): self
    {
        $this->initialized['stockMovementType'] = true;
        $this->stockMovementType = $stockMovementType;

        return $this;
    }

    public function getStoragePlaceId(): ?string
    {
        return $this->storagePlaceId;
    }

    public function setStoragePlaceId(?string $storagePlaceId): self
    {
        $this->initialized['storagePlaceId'] = true;
        $this->storagePlaceId = $storagePlaceId;

        return $this;
    }

    public function getTransportationOrderId(): ?string
    {
        return $this->transportationOrderId;
    }

    public function setTransportationOrderId(?string $transportationOrderId): self
    {
        $this->initialized['transportationOrderId'] = true;
        $this->transportationOrderId = $transportationOrderId;

        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;

        return $this;
    }

    public function getValuationPrice(): ?string
    {
        return $this->valuationPrice;
    }

    public function setValuationPrice(?string $valuationPrice): self
    {
        $this->initialized['valuationPrice'] = true;
        $this->valuationPrice = $valuationPrice;

        return $this;
    }
}
