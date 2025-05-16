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
    protected $articleId;
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
    protected $comment;
    /**
     * 
     *
     * @var string
     */
    protected $countedQuantity;
    /**
     * 
     *
     * @var string
     */
    protected $expectedQuantity;
    /**
     * 
     *
     * @var int
     */
    protected $expirationDate;
    /**
     * 
     *
     * @var int
     */
    protected $inboundDate;
    /**
     * 
     *
     * @var string
     */
    protected $inventoryId;
    /**
     * 
     *
     * @var list<InventorySerialNumber>
     */
    protected $inventorySerialNumbers;
    /**
     * 
     *
     * @var string
     */
    protected $inventoryTransportReferenceId;
    /**
     * 
     *
     * @var bool
     */
    protected $manualPosition;
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
    protected $positionNumber;
    /**
     * 
     *
     * @var string
     */
    protected $replacementValue;
    /**
     * 
     *
     * @var string
     */
    protected $storagePlaceId;
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
    public function getComment(): string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCountedQuantity(): string
    {
        return $this->countedQuantity;
    }
    /**
     * 
     *
     * @param string $countedQuantity
     *
     * @return self
     */
    public function setCountedQuantity(string $countedQuantity): self
    {
        $this->initialized['countedQuantity'] = true;
        $this->countedQuantity = $countedQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExpectedQuantity(): string
    {
        return $this->expectedQuantity;
    }
    /**
     * 
     *
     * @param string $expectedQuantity
     *
     * @return self
     */
    public function setExpectedQuantity(string $expectedQuantity): self
    {
        $this->initialized['expectedQuantity'] = true;
        $this->expectedQuantity = $expectedQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }
    /**
     * 
     *
     * @param int $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(int $expirationDate): self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInboundDate(): int
    {
        return $this->inboundDate;
    }
    /**
     * 
     *
     * @param int $inboundDate
     *
     * @return self
     */
    public function setInboundDate(int $inboundDate): self
    {
        $this->initialized['inboundDate'] = true;
        $this->inboundDate = $inboundDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInventoryId(): string
    {
        return $this->inventoryId;
    }
    /**
     * 
     *
     * @param string $inventoryId
     *
     * @return self
     */
    public function setInventoryId(string $inventoryId): self
    {
        $this->initialized['inventoryId'] = true;
        $this->inventoryId = $inventoryId;
        return $this;
    }
    /**
     * 
     *
     * @return list<InventorySerialNumber>
     */
    public function getInventorySerialNumbers(): array
    {
        return $this->inventorySerialNumbers;
    }
    /**
     * 
     *
     * @param list<InventorySerialNumber> $inventorySerialNumbers
     *
     * @return self
     */
    public function setInventorySerialNumbers(array $inventorySerialNumbers): self
    {
        $this->initialized['inventorySerialNumbers'] = true;
        $this->inventorySerialNumbers = $inventorySerialNumbers;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInventoryTransportReferenceId(): string
    {
        return $this->inventoryTransportReferenceId;
    }
    /**
     * 
     *
     * @param string $inventoryTransportReferenceId
     *
     * @return self
     */
    public function setInventoryTransportReferenceId(string $inventoryTransportReferenceId): self
    {
        $this->initialized['inventoryTransportReferenceId'] = true;
        $this->inventoryTransportReferenceId = $inventoryTransportReferenceId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getManualPosition(): bool
    {
        return $this->manualPosition;
    }
    /**
     * 
     *
     * @param bool $manualPosition
     *
     * @return self
     */
    public function setManualPosition(bool $manualPosition): self
    {
        $this->initialized['manualPosition'] = true;
        $this->manualPosition = $manualPosition;
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
    public function getPositionNumber(): string
    {
        return $this->positionNumber;
    }
    /**
     * 
     *
     * @param string $positionNumber
     *
     * @return self
     */
    public function setPositionNumber(string $positionNumber): self
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
    public function getReplacementValue(): string
    {
        return $this->replacementValue;
    }
    /**
     * 
     *
     * @param string $replacementValue
     *
     * @return self
     */
    public function setReplacementValue(string $replacementValue): self
    {
        $this->initialized['replacementValue'] = true;
        $this->replacementValue = $replacementValue;
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
}