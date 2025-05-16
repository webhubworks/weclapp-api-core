<?php

namespace Webhubworks\WeclappApiCore\Model;

class WarehouseStockMovementBookIncomingMovementPostBody extends \ArrayObject
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
    protected $articleId;
    /**
     * 
     *
     * @var string
     */
    protected $articleValuationPrice;
    /**
     * 
     *
     * @var string
     */
    protected $batchNumber;
    /**
     * 
     *
     * @var int
     */
    protected $batchNumberExpirationDate;
    /**
     * 
     *
     * @var list<WarehouseStockMovementBookIncomingMovementPostBodyCustomAttributesItem>
     */
    protected $customAttributes;
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
    protected $loadingEquipmentIdentifierId;
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
    protected $targetStoragePlaceId;
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
    public function getArticleValuationPrice(): string
    {
        return $this->articleValuationPrice;
    }
    /**
     * 
     *
     * @param string $articleValuationPrice
     *
     * @return self
     */
    public function setArticleValuationPrice(string $articleValuationPrice): self
    {
        $this->initialized['articleValuationPrice'] = true;
        $this->articleValuationPrice = $articleValuationPrice;
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
     * @return int
     */
    public function getBatchNumberExpirationDate(): int
    {
        return $this->batchNumberExpirationDate;
    }
    /**
     * 
     *
     * @param int $batchNumberExpirationDate
     *
     * @return self
     */
    public function setBatchNumberExpirationDate(int $batchNumberExpirationDate): self
    {
        $this->initialized['batchNumberExpirationDate'] = true;
        $this->batchNumberExpirationDate = $batchNumberExpirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return list<WarehouseStockMovementBookIncomingMovementPostBodyCustomAttributesItem>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<WarehouseStockMovementBookIncomingMovementPostBodyCustomAttributesItem> $customAttributes
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
    public function getLoadingEquipmentIdentifierId(): string
    {
        return $this->loadingEquipmentIdentifierId;
    }
    /**
     * 
     *
     * @param string $loadingEquipmentIdentifierId
     *
     * @return self
     */
    public function setLoadingEquipmentIdentifierId(string $loadingEquipmentIdentifierId): self
    {
        $this->initialized['loadingEquipmentIdentifierId'] = true;
        $this->loadingEquipmentIdentifierId = $loadingEquipmentIdentifierId;
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
    public function getTargetStoragePlaceId(): string
    {
        return $this->targetStoragePlaceId;
    }
    /**
     * 
     *
     * @param string $targetStoragePlaceId
     *
     * @return self
     */
    public function setTargetStoragePlaceId(string $targetStoragePlaceId): self
    {
        $this->initialized['targetStoragePlaceId'] = true;
        $this->targetStoragePlaceId = $targetStoragePlaceId;
        return $this;
    }
}