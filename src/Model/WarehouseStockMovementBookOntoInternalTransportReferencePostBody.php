<?php

namespace Webhubworks\WeclappApiCore\Model;

class WarehouseStockMovementBookOntoInternalTransportReferencePostBody extends \ArrayObject
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
    protected $baseArticleQuantity;
    /**
     * 
     *
     * @var string
     */
    protected $batchNumber;
    /**
     * 
     *
     * @var bool
     */
    protected $bookFromLoadingEquipmentPlace;
    /**
     * 
     *
     * @var bool
     */
    protected $bookLoadingEquipmentOnDissolveOfPreferred;
    /**
     * 
     *
     * @var list<WarehouseStockMovementBookOntoInternalTransportReferencePostBodyCustomAttributesItem>
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var string
     */
    protected $loadingEquipmentArticleId;
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
     * @var list<string>
     */
    protected $serialNumbers;
    /**
     * 
     *
     * @var string
     */
    protected $sourceInternalTransportReferenceId;
    /**
     * 
     *
     * @var string
     */
    protected $sourceStoragePlaceId;
    /**
     * 
     *
     * @var string
     */
    protected $targetInternalTransportReferenceId;
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
    public function getBaseArticleQuantity(): string
    {
        return $this->baseArticleQuantity;
    }
    /**
     * 
     *
     * @param string $baseArticleQuantity
     *
     * @return self
     */
    public function setBaseArticleQuantity(string $baseArticleQuantity): self
    {
        $this->initialized['baseArticleQuantity'] = true;
        $this->baseArticleQuantity = $baseArticleQuantity;
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
     * @return bool
     */
    public function getBookFromLoadingEquipmentPlace(): bool
    {
        return $this->bookFromLoadingEquipmentPlace;
    }
    /**
     * 
     *
     * @param bool $bookFromLoadingEquipmentPlace
     *
     * @return self
     */
    public function setBookFromLoadingEquipmentPlace(bool $bookFromLoadingEquipmentPlace): self
    {
        $this->initialized['bookFromLoadingEquipmentPlace'] = true;
        $this->bookFromLoadingEquipmentPlace = $bookFromLoadingEquipmentPlace;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBookLoadingEquipmentOnDissolveOfPreferred(): bool
    {
        return $this->bookLoadingEquipmentOnDissolveOfPreferred;
    }
    /**
     * 
     *
     * @param bool $bookLoadingEquipmentOnDissolveOfPreferred
     *
     * @return self
     */
    public function setBookLoadingEquipmentOnDissolveOfPreferred(bool $bookLoadingEquipmentOnDissolveOfPreferred): self
    {
        $this->initialized['bookLoadingEquipmentOnDissolveOfPreferred'] = true;
        $this->bookLoadingEquipmentOnDissolveOfPreferred = $bookLoadingEquipmentOnDissolveOfPreferred;
        return $this;
    }
    /**
     * 
     *
     * @return list<WarehouseStockMovementBookOntoInternalTransportReferencePostBodyCustomAttributesItem>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<WarehouseStockMovementBookOntoInternalTransportReferencePostBodyCustomAttributesItem> $customAttributes
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
    public function getLoadingEquipmentArticleId(): string
    {
        return $this->loadingEquipmentArticleId;
    }
    /**
     * 
     *
     * @param string $loadingEquipmentArticleId
     *
     * @return self
     */
    public function setLoadingEquipmentArticleId(string $loadingEquipmentArticleId): self
    {
        $this->initialized['loadingEquipmentArticleId'] = true;
        $this->loadingEquipmentArticleId = $loadingEquipmentArticleId;
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
    public function getSourceInternalTransportReferenceId(): string
    {
        return $this->sourceInternalTransportReferenceId;
    }
    /**
     * 
     *
     * @param string $sourceInternalTransportReferenceId
     *
     * @return self
     */
    public function setSourceInternalTransportReferenceId(string $sourceInternalTransportReferenceId): self
    {
        $this->initialized['sourceInternalTransportReferenceId'] = true;
        $this->sourceInternalTransportReferenceId = $sourceInternalTransportReferenceId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSourceStoragePlaceId(): string
    {
        return $this->sourceStoragePlaceId;
    }
    /**
     * 
     *
     * @param string $sourceStoragePlaceId
     *
     * @return self
     */
    public function setSourceStoragePlaceId(string $sourceStoragePlaceId): self
    {
        $this->initialized['sourceStoragePlaceId'] = true;
        $this->sourceStoragePlaceId = $sourceStoragePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTargetInternalTransportReferenceId(): string
    {
        return $this->targetInternalTransportReferenceId;
    }
    /**
     * 
     *
     * @param string $targetInternalTransportReferenceId
     *
     * @return self
     */
    public function setTargetInternalTransportReferenceId(string $targetInternalTransportReferenceId): self
    {
        $this->initialized['targetInternalTransportReferenceId'] = true;
        $this->targetInternalTransportReferenceId = $targetInternalTransportReferenceId;
        return $this;
    }
}