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
     * @var string|null
     */
    protected $articleId;
    /**
     * 
     *
     * @var string|null
     */
    protected $baseArticleQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $batchNumber;
    /**
     * 
     *
     * @var bool|null
     */
    protected $bookFromLoadingEquipmentPlace;
    /**
     * 
     *
     * @var bool|null
     */
    protected $bookLoadingEquipmentOnDissolveOfPreferred;
    /**
     * 
     *
     * @var list<WarehouseStockMovementBookOntoInternalTransportReferencePostBodyCustomAttributesItem>|null
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var string|null
     */
    protected $loadingEquipmentArticleId;
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
     * @var list<string>|null
     */
    protected $serialNumbers;
    /**
     * 
     *
     * @var string|null
     */
    protected $sourceInternalTransportReferenceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $sourceStoragePlaceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $targetInternalTransportReferenceId;
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
    public function getBaseArticleQuantity(): ?string
    {
        return $this->baseArticleQuantity;
    }
    /**
     * 
     *
     * @param string|null $baseArticleQuantity
     *
     * @return self
     */
    public function setBaseArticleQuantity(?string $baseArticleQuantity): self
    {
        $this->initialized['baseArticleQuantity'] = true;
        $this->baseArticleQuantity = $baseArticleQuantity;
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
     * @return bool|null
     */
    public function getBookFromLoadingEquipmentPlace(): ?bool
    {
        return $this->bookFromLoadingEquipmentPlace;
    }
    /**
     * 
     *
     * @param bool|null $bookFromLoadingEquipmentPlace
     *
     * @return self
     */
    public function setBookFromLoadingEquipmentPlace(?bool $bookFromLoadingEquipmentPlace): self
    {
        $this->initialized['bookFromLoadingEquipmentPlace'] = true;
        $this->bookFromLoadingEquipmentPlace = $bookFromLoadingEquipmentPlace;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getBookLoadingEquipmentOnDissolveOfPreferred(): ?bool
    {
        return $this->bookLoadingEquipmentOnDissolveOfPreferred;
    }
    /**
     * 
     *
     * @param bool|null $bookLoadingEquipmentOnDissolveOfPreferred
     *
     * @return self
     */
    public function setBookLoadingEquipmentOnDissolveOfPreferred(?bool $bookLoadingEquipmentOnDissolveOfPreferred): self
    {
        $this->initialized['bookLoadingEquipmentOnDissolveOfPreferred'] = true;
        $this->bookLoadingEquipmentOnDissolveOfPreferred = $bookLoadingEquipmentOnDissolveOfPreferred;
        return $this;
    }
    /**
     * 
     *
     * @return list<WarehouseStockMovementBookOntoInternalTransportReferencePostBodyCustomAttributesItem>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<WarehouseStockMovementBookOntoInternalTransportReferencePostBodyCustomAttributesItem>|null $customAttributes
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
    public function getLoadingEquipmentArticleId(): ?string
    {
        return $this->loadingEquipmentArticleId;
    }
    /**
     * 
     *
     * @param string|null $loadingEquipmentArticleId
     *
     * @return self
     */
    public function setLoadingEquipmentArticleId(?string $loadingEquipmentArticleId): self
    {
        $this->initialized['loadingEquipmentArticleId'] = true;
        $this->loadingEquipmentArticleId = $loadingEquipmentArticleId;
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
    public function getSourceInternalTransportReferenceId(): ?string
    {
        return $this->sourceInternalTransportReferenceId;
    }
    /**
     * 
     *
     * @param string|null $sourceInternalTransportReferenceId
     *
     * @return self
     */
    public function setSourceInternalTransportReferenceId(?string $sourceInternalTransportReferenceId): self
    {
        $this->initialized['sourceInternalTransportReferenceId'] = true;
        $this->sourceInternalTransportReferenceId = $sourceInternalTransportReferenceId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSourceStoragePlaceId(): ?string
    {
        return $this->sourceStoragePlaceId;
    }
    /**
     * 
     *
     * @param string|null $sourceStoragePlaceId
     *
     * @return self
     */
    public function setSourceStoragePlaceId(?string $sourceStoragePlaceId): self
    {
        $this->initialized['sourceStoragePlaceId'] = true;
        $this->sourceStoragePlaceId = $sourceStoragePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTargetInternalTransportReferenceId(): ?string
    {
        return $this->targetInternalTransportReferenceId;
    }
    /**
     * 
     *
     * @param string|null $targetInternalTransportReferenceId
     *
     * @return self
     */
    public function setTargetInternalTransportReferenceId(?string $targetInternalTransportReferenceId): self
    {
        $this->initialized['targetInternalTransportReferenceId'] = true;
        $this->targetInternalTransportReferenceId = $targetInternalTransportReferenceId;
        return $this;
    }
}