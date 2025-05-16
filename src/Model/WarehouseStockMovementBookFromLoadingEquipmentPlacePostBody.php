<?php

namespace Webhubworks\WeclappApiCore\Model;

class WarehouseStockMovementBookFromLoadingEquipmentPlacePostBody extends \ArrayObject
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
     * @var list<WarehouseStockMovementBookFromLoadingEquipmentPlacePostBodyCustomAttributesItem>|null
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
    protected $targetInternalTransportReferenceId;

    /**
     * @var string|null
     */
    protected $targetStoragePlaceId;

    /**
     * @return list<WarehouseStockMovementBookFromLoadingEquipmentPlacePostBodyCustomAttributesItem>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<WarehouseStockMovementBookFromLoadingEquipmentPlacePostBodyCustomAttributesItem>|null  $customAttributes
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

    public function getTargetStoragePlaceId(): ?string
    {
        return $this->targetStoragePlaceId;
    }

    public function setTargetStoragePlaceId(?string $targetStoragePlaceId): self
    {
        $this->initialized['targetStoragePlaceId'] = true;
        $this->targetStoragePlaceId = $targetStoragePlaceId;

        return $this;
    }
}
