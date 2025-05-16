<?php

namespace Webhubworks\WeclappApiCore\Model;

class WarehouseStock extends \ArrayObject
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
     * @var string
     */
    protected $id;

    /**
     * @var int
     */
    protected $createdDate;

    /**
     * @var int
     */
    protected $lastModifiedDate;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $articleId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $articleNumber;

    /**
     * @var string
     */
    protected $batchNumber;

    /**
     * @var string
     */
    protected $batchNumberId;

    /**
     * @var int
     */
    protected $inboundDate;

    /**
     * @var string
     */
    protected $internalTransportReferenceId;

    /**
     * @var list<PackagingUnit>
     */
    protected $packagingUnits;

    /**
     * @var list<OnlyId>
     */
    protected $picks;

    /**
     * @var string
     */
    protected $quantity;

    /**
     * @var string
     */
    protected $salesOrderItemId;

    /**
     * @var list<OnlyId>
     */
    protected $serialNumbers;

    /**
     * @var string
     */
    protected $storagePlaceId;

    /**
     * @var string
     */
    protected $warehouseId;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    public function getArticleId(): string
    {
        return $this->articleId;
    }

    public function setArticleId(string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getArticleNumber(): string
    {
        return $this->articleNumber;
    }

    /**
     * @deprecated
     */
    public function setArticleNumber(string $articleNumber): self
    {
        $this->initialized['articleNumber'] = true;
        $this->articleNumber = $articleNumber;

        return $this;
    }

    public function getBatchNumber(): string
    {
        return $this->batchNumber;
    }

    public function setBatchNumber(string $batchNumber): self
    {
        $this->initialized['batchNumber'] = true;
        $this->batchNumber = $batchNumber;

        return $this;
    }

    public function getBatchNumberId(): string
    {
        return $this->batchNumberId;
    }

    public function setBatchNumberId(string $batchNumberId): self
    {
        $this->initialized['batchNumberId'] = true;
        $this->batchNumberId = $batchNumberId;

        return $this;
    }

    public function getInboundDate(): int
    {
        return $this->inboundDate;
    }

    public function setInboundDate(int $inboundDate): self
    {
        $this->initialized['inboundDate'] = true;
        $this->inboundDate = $inboundDate;

        return $this;
    }

    public function getInternalTransportReferenceId(): string
    {
        return $this->internalTransportReferenceId;
    }

    public function setInternalTransportReferenceId(string $internalTransportReferenceId): self
    {
        $this->initialized['internalTransportReferenceId'] = true;
        $this->internalTransportReferenceId = $internalTransportReferenceId;

        return $this;
    }

    /**
     * @return list<PackagingUnit>
     */
    public function getPackagingUnits(): array
    {
        return $this->packagingUnits;
    }

    /**
     * @param  list<PackagingUnit>  $packagingUnits
     */
    public function setPackagingUnits(array $packagingUnits): self
    {
        $this->initialized['packagingUnits'] = true;
        $this->packagingUnits = $packagingUnits;

        return $this;
    }

    /**
     * @return list<OnlyId>
     */
    public function getPicks(): array
    {
        return $this->picks;
    }

    /**
     * @param  list<OnlyId>  $picks
     */
    public function setPicks(array $picks): self
    {
        $this->initialized['picks'] = true;
        $this->picks = $picks;

        return $this;
    }

    public function getQuantity(): string
    {
        return $this->quantity;
    }

    public function setQuantity(string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function getSalesOrderItemId(): string
    {
        return $this->salesOrderItemId;
    }

    public function setSalesOrderItemId(string $salesOrderItemId): self
    {
        $this->initialized['salesOrderItemId'] = true;
        $this->salesOrderItemId = $salesOrderItemId;

        return $this;
    }

    /**
     * @return list<OnlyId>
     */
    public function getSerialNumbers(): array
    {
        return $this->serialNumbers;
    }

    /**
     * @param  list<OnlyId>  $serialNumbers
     */
    public function setSerialNumbers(array $serialNumbers): self
    {
        $this->initialized['serialNumbers'] = true;
        $this->serialNumbers = $serialNumbers;

        return $this;
    }

    public function getStoragePlaceId(): string
    {
        return $this->storagePlaceId;
    }

    public function setStoragePlaceId(string $storagePlaceId): self
    {
        $this->initialized['storagePlaceId'] = true;
        $this->storagePlaceId = $storagePlaceId;

        return $this;
    }

    public function getWarehouseId(): string
    {
        return $this->warehouseId;
    }

    public function setWarehouseId(string $warehouseId): self
    {
        $this->initialized['warehouseId'] = true;
        $this->warehouseId = $warehouseId;

        return $this;
    }
}
