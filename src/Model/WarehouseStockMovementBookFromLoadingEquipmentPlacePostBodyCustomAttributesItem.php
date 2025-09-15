<?php

namespace Webhubworks\WeclappApiCore\Model;

class WarehouseStockMovementBookFromLoadingEquipmentPlacePostBodyCustomAttributesItem extends \ArrayObject
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
    protected $attributeDefinitionId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $booleanValue;
    /**
     * 
     *
     * @var int|null
     */
    protected $dateValue;
    /**
     * 
     *
     * @var string|null
     */
    protected $entityId;
    /**
     * 
     *
     * @var list<EntityReference>|null
     */
    protected $entityReferences;
    /**
     * 
     *
     * @var string|null
     */
    protected $numberValue;
    /**
     * 
     *
     * @var string|null
     */
    protected $selectedValueId;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $selectedValues;
    /**
     * 
     *
     * @var string|null
     */
    protected $stringValue;
    /**
     * 
     *
     * @return string|null
     */
    public function getAttributeDefinitionId(): ?string
    {
        return $this->attributeDefinitionId;
    }
    /**
     * 
     *
     * @param string|null $attributeDefinitionId
     *
     * @return self
     */
    public function setAttributeDefinitionId(?string $attributeDefinitionId): self
    {
        $this->initialized['attributeDefinitionId'] = true;
        $this->attributeDefinitionId = $attributeDefinitionId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getBooleanValue(): ?bool
    {
        return $this->booleanValue;
    }
    /**
     * 
     *
     * @param bool|null $booleanValue
     *
     * @return self
     */
    public function setBooleanValue(?bool $booleanValue): self
    {
        $this->initialized['booleanValue'] = true;
        $this->booleanValue = $booleanValue;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDateValue(): ?int
    {
        return $this->dateValue;
    }
    /**
     * 
     *
     * @param int|null $dateValue
     *
     * @return self
     */
    public function setDateValue(?int $dateValue): self
    {
        $this->initialized['dateValue'] = true;
        $this->dateValue = $dateValue;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEntityId(): ?string
    {
        return $this->entityId;
    }
    /**
     * 
     *
     * @param string|null $entityId
     *
     * @return self
     */
    public function setEntityId(?string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * 
     *
     * @return list<EntityReference>|null
     */
    public function getEntityReferences(): ?array
    {
        return $this->entityReferences;
    }
    /**
     * 
     *
     * @param list<EntityReference>|null $entityReferences
     *
     * @return self
     */
    public function setEntityReferences(?array $entityReferences): self
    {
        $this->initialized['entityReferences'] = true;
        $this->entityReferences = $entityReferences;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNumberValue(): ?string
    {
        return $this->numberValue;
    }
    /**
     * 
     *
     * @param string|null $numberValue
     *
     * @return self
     */
    public function setNumberValue(?string $numberValue): self
    {
        $this->initialized['numberValue'] = true;
        $this->numberValue = $numberValue;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSelectedValueId(): ?string
    {
        return $this->selectedValueId;
    }
    /**
     * 
     *
     * @param string|null $selectedValueId
     *
     * @return self
     */
    public function setSelectedValueId(?string $selectedValueId): self
    {
        $this->initialized['selectedValueId'] = true;
        $this->selectedValueId = $selectedValueId;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getSelectedValues(): ?array
    {
        return $this->selectedValues;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $selectedValues
     *
     * @return self
     */
    public function setSelectedValues(?array $selectedValues): self
    {
        $this->initialized['selectedValues'] = true;
        $this->selectedValues = $selectedValues;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStringValue(): ?string
    {
        return $this->stringValue;
    }
    /**
     * 
     *
     * @param string|null $stringValue
     *
     * @return self
     */
    public function setStringValue(?string $stringValue): self
    {
        $this->initialized['stringValue'] = true;
        $this->stringValue = $stringValue;
        return $this;
    }
}