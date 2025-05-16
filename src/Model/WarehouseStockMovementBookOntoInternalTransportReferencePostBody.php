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
     * @var string|null
     */
    protected $articleId;

    /**
     * @var string|null
     */
    protected $baseArticleQuantity;

    /**
     * @var string|null
     */
    protected $batchNumber;

    /**
     * @var bool|null
     */
    protected $bookFromLoadingEquipmentPlace;

    /**
     * @var bool|null
     */
    protected $bookLoadingEquipmentOnDissolveOfPreferred;

    /**
     * @var list<WarehouseStockMovementBookOntoInternalTransportReferencePostBodyCustomAttributesItem>|null
     */
    protected $customAttributes;

    /**
     * @var string|null
     */
    protected $loadingEquipmentArticleId;

    /**
     * @var string|null
     */
    protected $loadingEquipmentIdentifierId;

    /**
     * @var string|null
     */
    protected $movementNote;

    /**
     * @var list<string>|null
     */
    protected $serialNumbers;

    /**
     * @var string|null
     */
    protected $sourceInternalTransportReferenceId;

    /**
     * @var string|null
     */
    protected $sourceStoragePlaceId;

    /**
     * @var string|null
     */
    protected $targetInternalTransportReferenceId;

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

    public function getBaseArticleQuantity(): ?string
    {
        return $this->baseArticleQuantity;
    }

    public function setBaseArticleQuantity(?string $baseArticleQuantity): self
    {
        $this->initialized['baseArticleQuantity'] = true;
        $this->baseArticleQuantity = $baseArticleQuantity;

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

    public function getBookFromLoadingEquipmentPlace(): ?bool
    {
        return $this->bookFromLoadingEquipmentPlace;
    }

    public function setBookFromLoadingEquipmentPlace(?bool $bookFromLoadingEquipmentPlace): self
    {
        $this->initialized['bookFromLoadingEquipmentPlace'] = true;
        $this->bookFromLoadingEquipmentPlace = $bookFromLoadingEquipmentPlace;

        return $this;
    }

    public function getBookLoadingEquipmentOnDissolveOfPreferred(): ?bool
    {
        return $this->bookLoadingEquipmentOnDissolveOfPreferred;
    }

    public function setBookLoadingEquipmentOnDissolveOfPreferred(?bool $bookLoadingEquipmentOnDissolveOfPreferred): self
    {
        $this->initialized['bookLoadingEquipmentOnDissolveOfPreferred'] = true;
        $this->bookLoadingEquipmentOnDissolveOfPreferred = $bookLoadingEquipmentOnDissolveOfPreferred;

        return $this;
    }

    /**
     * @return list<WarehouseStockMovementBookOntoInternalTransportReferencePostBodyCustomAttributesItem>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<WarehouseStockMovementBookOntoInternalTransportReferencePostBodyCustomAttributesItem>|null  $customAttributes
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

        return $this;
    }

    public function getLoadingEquipmentArticleId(): ?string
    {
        return $this->loadingEquipmentArticleId;
    }

    public function setLoadingEquipmentArticleId(?string $loadingEquipmentArticleId): self
    {
        $this->initialized['loadingEquipmentArticleId'] = true;
        $this->loadingEquipmentArticleId = $loadingEquipmentArticleId;

        return $this;
    }

    public function getLoadingEquipmentIdentifierId(): ?string
    {
        return $this->loadingEquipmentIdentifierId;
    }

    public function setLoadingEquipmentIdentifierId(?string $loadingEquipmentIdentifierId): self
    {
        $this->initialized['loadingEquipmentIdentifierId'] = true;
        $this->loadingEquipmentIdentifierId = $loadingEquipmentIdentifierId;

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

    /**
     * @return list<string>|null
     */
    public function getSerialNumbers(): ?array
    {
        return $this->serialNumbers;
    }

    /**
     * @param  list<string>|null  $serialNumbers
     */
    public function setSerialNumbers(?array $serialNumbers): self
    {
        $this->initialized['serialNumbers'] = true;
        $this->serialNumbers = $serialNumbers;

        return $this;
    }

    public function getSourceInternalTransportReferenceId(): ?string
    {
        return $this->sourceInternalTransportReferenceId;
    }

    public function setSourceInternalTransportReferenceId(?string $sourceInternalTransportReferenceId): self
    {
        $this->initialized['sourceInternalTransportReferenceId'] = true;
        $this->sourceInternalTransportReferenceId = $sourceInternalTransportReferenceId;

        return $this;
    }

    public function getSourceStoragePlaceId(): ?string
    {
        return $this->sourceStoragePlaceId;
    }

    public function setSourceStoragePlaceId(?string $sourceStoragePlaceId): self
    {
        $this->initialized['sourceStoragePlaceId'] = true;
        $this->sourceStoragePlaceId = $sourceStoragePlaceId;

        return $this;
    }

    public function getTargetInternalTransportReferenceId(): ?string
    {
        return $this->targetInternalTransportReferenceId;
    }

    public function setTargetInternalTransportReferenceId(?string $targetInternalTransportReferenceId): self
    {
        $this->initialized['targetInternalTransportReferenceId'] = true;
        $this->targetInternalTransportReferenceId = $targetInternalTransportReferenceId;

        return $this;
    }
}
