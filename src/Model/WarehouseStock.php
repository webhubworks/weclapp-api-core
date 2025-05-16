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
     * @var string|null
     */
    protected $articleId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $articleNumber;

    /**
     * @var string|null
     */
    protected $batchNumber;

    /**
     * @var string|null
     */
    protected $batchNumberId;

    /**
     * @var int|null
     */
    protected $inboundDate;

    /**
     * @var string|null
     */
    protected $internalTransportReferenceId;

    /**
     * @var list<PackagingUnit>|null
     */
    protected $packagingUnits;

    /**
     * @var list<OnlyId>|null
     */
    protected $picks;

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
    protected $storagePlaceId;

    /**
     * @var string|null
     */
    protected $warehouseId;

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
    public function getArticleNumber(): ?string
    {
        return $this->articleNumber;
    }

    /**
     * @deprecated
     */
    public function setArticleNumber(?string $articleNumber): self
    {
        $this->initialized['articleNumber'] = true;
        $this->articleNumber = $articleNumber;

        return $this;
    }

    public function getBatchNumber(): ?string
    {
        return $this->batchNumber;
    }

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

    public function getInboundDate(): ?int
    {
        return $this->inboundDate;
    }

    public function setInboundDate(?int $inboundDate): self
    {
        $this->initialized['inboundDate'] = true;
        $this->inboundDate = $inboundDate;

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

    /**
     * @return list<PackagingUnit>|null
     */
    public function getPackagingUnits(): ?array
    {
        return $this->packagingUnits;
    }

    /**
     * @param  list<PackagingUnit>|null  $packagingUnits
     */
    public function setPackagingUnits(?array $packagingUnits): self
    {
        $this->initialized['packagingUnits'] = true;
        $this->packagingUnits = $packagingUnits;

        return $this;
    }

    /**
     * @return list<OnlyId>|null
     */
    public function getPicks(): ?array
    {
        return $this->picks;
    }

    /**
     * @param  list<OnlyId>|null  $picks
     */
    public function setPicks(?array $picks): self
    {
        $this->initialized['picks'] = true;
        $this->picks = $picks;

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
}
