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
     * @var string|null
     */
    protected $articleId;
    /**
     * 
     *
     * @var string|null
     */
    protected $articleValuationPrice;
    /**
     * 
     *
     * @var string|null
     */
    protected $batchNumber;
    /**
     * 
     *
     * @var int|null
     */
    protected $batchNumberExpirationDate;
    /**
     * 
     *
     * @var list<WarehouseStockMovementBookIncomingMovementPostBodyCustomAttributesItem>|null
     */
    protected $customAttributes;
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
    protected $loadingEquipmentIdentifierId;
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
    protected $quantity;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $serialNumbers;
    /**
     * 
     *
     * @var string|null
     */
    protected $targetStoragePlaceId;
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
    public function getArticleValuationPrice(): ?string
    {
        return $this->articleValuationPrice;
    }
    /**
     * 
     *
     * @param string|null $articleValuationPrice
     *
     * @return self
     */
    public function setArticleValuationPrice(?string $articleValuationPrice): self
    {
        $this->initialized['articleValuationPrice'] = true;
        $this->articleValuationPrice = $articleValuationPrice;
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
     * @return int|null
     */
    public function getBatchNumberExpirationDate(): ?int
    {
        return $this->batchNumberExpirationDate;
    }
    /**
     * 
     *
     * @param int|null $batchNumberExpirationDate
     *
     * @return self
     */
    public function setBatchNumberExpirationDate(?int $batchNumberExpirationDate): self
    {
        $this->initialized['batchNumberExpirationDate'] = true;
        $this->batchNumberExpirationDate = $batchNumberExpirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return list<WarehouseStockMovementBookIncomingMovementPostBodyCustomAttributesItem>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<WarehouseStockMovementBookIncomingMovementPostBodyCustomAttributesItem>|null $customAttributes
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
    public function getLoadingEquipmentIdentifierId(): ?string
    {
        return $this->loadingEquipmentIdentifierId;
    }
    /**
     * 
     *
     * @param string|null $loadingEquipmentIdentifierId
     *
     * @return self
     */
    public function setLoadingEquipmentIdentifierId(?string $loadingEquipmentIdentifierId): self
    {
        $this->initialized['loadingEquipmentIdentifierId'] = true;
        $this->loadingEquipmentIdentifierId = $loadingEquipmentIdentifierId;
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
     * @return list<string>|null
     */
    public function getSerialNumbers(): ?array
    {
        return $this->serialNumbers;
    }
    /**
     * 
     *
     * @param list<string>|null $serialNumbers
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
    public function getTargetStoragePlaceId(): ?string
    {
        return $this->targetStoragePlaceId;
    }
    /**
     * 
     *
     * @param string|null $targetStoragePlaceId
     *
     * @return self
     */
    public function setTargetStoragePlaceId(?string $targetStoragePlaceId): self
    {
        $this->initialized['targetStoragePlaceId'] = true;
        $this->targetStoragePlaceId = $targetStoragePlaceId;
        return $this;
    }
}