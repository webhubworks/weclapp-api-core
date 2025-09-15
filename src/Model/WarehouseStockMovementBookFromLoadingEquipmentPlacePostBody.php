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
     * 
     *
     * @var list<WarehouseStockMovementBookFromLoadingEquipmentPlacePostBodyCustomAttributesItem>|null
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
     * @var string|null
     */
    protected $targetInternalTransportReferenceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $targetStoragePlaceId;
    /**
     * 
     *
     * @return list<WarehouseStockMovementBookFromLoadingEquipmentPlacePostBodyCustomAttributesItem>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<WarehouseStockMovementBookFromLoadingEquipmentPlacePostBodyCustomAttributesItem>|null $customAttributes
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