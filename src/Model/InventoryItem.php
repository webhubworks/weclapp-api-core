<?php

namespace Webhubworks\WeclappApiCore\Model;

class InventoryItem extends \ArrayObject
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
     * @var string|null
     */
    protected $batchNumber;

    /**
     * @var string|null
     */
    protected $comment;

    /**
     * @var string|null
     */
    protected $countedQuantity;

    /**
     * @var string|null
     */
    protected $expectedQuantity;

    /**
     * @var int|null
     */
    protected $expirationDate;

    /**
     * @var int|null
     */
    protected $inboundDate;

    /**
     * @var string|null
     */
    protected $inventoryId;

    /**
     * @var list<InventorySerialNumber>|null
     */
    protected $inventorySerialNumbers;

    /**
     * @var string|null
     */
    protected $inventoryTransportReferenceId;

    /**
     * @var bool|null
     */
    protected $manualPosition;

    /**
     * @var string|null
     */
    protected $orderItemId;

    /**
     * @var string|null
     */
    protected $positionNumber;

    /**
     * @var string|null
     */
    protected $replacementValue;

    /**
     * @var string|null
     */
    protected $storagePlaceId;

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

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;

        return $this;
    }

    public function getCountedQuantity(): ?string
    {
        return $this->countedQuantity;
    }

    public function setCountedQuantity(?string $countedQuantity): self
    {
        $this->initialized['countedQuantity'] = true;
        $this->countedQuantity = $countedQuantity;

        return $this;
    }

    public function getExpectedQuantity(): ?string
    {
        return $this->expectedQuantity;
    }

    public function setExpectedQuantity(?string $expectedQuantity): self
    {
        $this->initialized['expectedQuantity'] = true;
        $this->expectedQuantity = $expectedQuantity;

        return $this;
    }

    public function getExpirationDate(): ?int
    {
        return $this->expirationDate;
    }

    public function setExpirationDate(?int $expirationDate): self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;

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

    public function getInventoryId(): ?string
    {
        return $this->inventoryId;
    }

    public function setInventoryId(?string $inventoryId): self
    {
        $this->initialized['inventoryId'] = true;
        $this->inventoryId = $inventoryId;

        return $this;
    }

    /**
     * @return list<InventorySerialNumber>|null
     */
    public function getInventorySerialNumbers(): ?array
    {
        return $this->inventorySerialNumbers;
    }

    /**
     * @param  list<InventorySerialNumber>|null  $inventorySerialNumbers
     */
    public function setInventorySerialNumbers(?array $inventorySerialNumbers): self
    {
        $this->initialized['inventorySerialNumbers'] = true;
        $this->inventorySerialNumbers = $inventorySerialNumbers;

        return $this;
    }

    public function getInventoryTransportReferenceId(): ?string
    {
        return $this->inventoryTransportReferenceId;
    }

    public function setInventoryTransportReferenceId(?string $inventoryTransportReferenceId): self
    {
        $this->initialized['inventoryTransportReferenceId'] = true;
        $this->inventoryTransportReferenceId = $inventoryTransportReferenceId;

        return $this;
    }

    public function getManualPosition(): ?bool
    {
        return $this->manualPosition;
    }

    public function setManualPosition(?bool $manualPosition): self
    {
        $this->initialized['manualPosition'] = true;
        $this->manualPosition = $manualPosition;

        return $this;
    }

    public function getOrderItemId(): ?string
    {
        return $this->orderItemId;
    }

    public function setOrderItemId(?string $orderItemId): self
    {
        $this->initialized['orderItemId'] = true;
        $this->orderItemId = $orderItemId;

        return $this;
    }

    public function getPositionNumber(): ?string
    {
        return $this->positionNumber;
    }

    public function setPositionNumber(?string $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;

        return $this;
    }

    public function getReplacementValue(): ?string
    {
        return $this->replacementValue;
    }

    public function setReplacementValue(?string $replacementValue): self
    {
        $this->initialized['replacementValue'] = true;
        $this->replacementValue = $replacementValue;

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
}
