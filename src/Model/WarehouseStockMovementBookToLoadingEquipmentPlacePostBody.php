<?php

namespace Webhubworks\WeclappApiCore\Model;

class WarehouseStockMovementBookToLoadingEquipmentPlacePostBody extends \ArrayObject
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
     * @var list<WarehouseStockMovementBookToLoadingEquipmentPlacePostBodyCustomAttributesItem>|null
     */
    protected $customAttributes;

    /**
     * @var string|null
     */
    protected $loadingEquipmentArticleId;

    /**
     * @var string|null
     */
    protected $movementNote;

    /**
     * @var string|null
     */
    protected $quantity;

    /**
     * @var string|null
     */
    protected $sourceInternalTransportReferenceId;

    /**
     * @var string|null
     */
    protected $sourceStoragePlaceId;

    /**
     * @return list<WarehouseStockMovementBookToLoadingEquipmentPlacePostBodyCustomAttributesItem>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<WarehouseStockMovementBookToLoadingEquipmentPlacePostBodyCustomAttributesItem>|null  $customAttributes
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
}
