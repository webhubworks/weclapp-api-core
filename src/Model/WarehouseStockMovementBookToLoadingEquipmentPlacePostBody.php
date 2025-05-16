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
     * 
     *
     * @var list<WarehouseStockMovementBookToLoadingEquipmentPlacePostBodyCustomAttributesItem>|null
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
     * @return list<WarehouseStockMovementBookToLoadingEquipmentPlacePostBodyCustomAttributesItem>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<WarehouseStockMovementBookToLoadingEquipmentPlacePostBodyCustomAttributesItem>|null $customAttributes
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
}