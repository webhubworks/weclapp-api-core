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
     * @var string|null
     */
    protected $articleId;
    /**
     * 
     *
     * @var string|null
     */
    protected $batchNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $comment;
    /**
     * 
     *
     * @var string|null
     */
    protected $countedQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $expectedQuantity;
    /**
     * 
     *
     * @var int|null
     */
    protected $expirationDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $inboundDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $inventoryId;
    /**
     * 
     *
     * @var list<InventorySerialNumber>|null
     */
    protected $inventorySerialNumbers;
    /**
     * 
     *
     * @var string|null
     */
    protected $inventoryTransportReferenceId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $manualPosition;
    /**
     * 
     *
     * @var string|null
     */
    protected $orderItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $positionNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $replacementValue;
    /**
     * 
     *
     * @var string|null
     */
    protected $storagePlaceId;
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
    public function getBatchNumber(): ?string
    {
        return $this->batchNumber;
    }
    /**
     * 
     *
     * @param string|null $batchNumber
     *
     * @return self
     */
    public function setBatchNumber(?string $batchNumber): self
    {
        $this->initialized['batchNumber'] = true;
        $this->batchNumber = $batchNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCountedQuantity(): ?string
    {
        return $this->countedQuantity;
    }
    /**
     * 
     *
     * @param string|null $countedQuantity
     *
     * @return self
     */
    public function setCountedQuantity(?string $countedQuantity): self
    {
        $this->initialized['countedQuantity'] = true;
        $this->countedQuantity = $countedQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExpectedQuantity(): ?string
    {
        return $this->expectedQuantity;
    }
    /**
     * 
     *
     * @param string|null $expectedQuantity
     *
     * @return self
     */
    public function setExpectedQuantity(?string $expectedQuantity): self
    {
        $this->initialized['expectedQuantity'] = true;
        $this->expectedQuantity = $expectedQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExpirationDate(): ?int
    {
        return $this->expirationDate;
    }
    /**
     * 
     *
     * @param int|null $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(?int $expirationDate): self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getInboundDate(): ?int
    {
        return $this->inboundDate;
    }
    /**
     * 
     *
     * @param int|null $inboundDate
     *
     * @return self
     */
    public function setInboundDate(?int $inboundDate): self
    {
        $this->initialized['inboundDate'] = true;
        $this->inboundDate = $inboundDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInventoryId(): ?string
    {
        return $this->inventoryId;
    }
    /**
     * 
     *
     * @param string|null $inventoryId
     *
     * @return self
     */
    public function setInventoryId(?string $inventoryId): self
    {
        $this->initialized['inventoryId'] = true;
        $this->inventoryId = $inventoryId;
        return $this;
    }
    /**
     * 
     *
     * @return list<InventorySerialNumber>|null
     */
    public function getInventorySerialNumbers(): ?array
    {
        return $this->inventorySerialNumbers;
    }
    /**
     * 
     *
     * @param list<InventorySerialNumber>|null $inventorySerialNumbers
     *
     * @return self
     */
    public function setInventorySerialNumbers(?array $inventorySerialNumbers): self
    {
        $this->initialized['inventorySerialNumbers'] = true;
        $this->inventorySerialNumbers = $inventorySerialNumbers;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInventoryTransportReferenceId(): ?string
    {
        return $this->inventoryTransportReferenceId;
    }
    /**
     * 
     *
     * @param string|null $inventoryTransportReferenceId
     *
     * @return self
     */
    public function setInventoryTransportReferenceId(?string $inventoryTransportReferenceId): self
    {
        $this->initialized['inventoryTransportReferenceId'] = true;
        $this->inventoryTransportReferenceId = $inventoryTransportReferenceId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getManualPosition(): ?bool
    {
        return $this->manualPosition;
    }
    /**
     * 
     *
     * @param bool|null $manualPosition
     *
     * @return self
     */
    public function setManualPosition(?bool $manualPosition): self
    {
        $this->initialized['manualPosition'] = true;
        $this->manualPosition = $manualPosition;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOrderItemId(): ?string
    {
        return $this->orderItemId;
    }
    /**
     * 
     *
     * @param string|null $orderItemId
     *
     * @return self
     */
    public function setOrderItemId(?string $orderItemId): self
    {
        $this->initialized['orderItemId'] = true;
        $this->orderItemId = $orderItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPositionNumber(): ?string
    {
        return $this->positionNumber;
    }
    /**
     * 
     *
     * @param string|null $positionNumber
     *
     * @return self
     */
    public function setPositionNumber(?string $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReplacementValue(): ?string
    {
        return $this->replacementValue;
    }
    /**
     * 
     *
     * @param string|null $replacementValue
     *
     * @return self
     */
    public function setReplacementValue(?string $replacementValue): self
    {
        $this->initialized['replacementValue'] = true;
        $this->replacementValue = $replacementValue;
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
}