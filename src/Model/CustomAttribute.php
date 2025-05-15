<?php

namespace Webhubworks\WeclappApiCore\Model;

class CustomAttribute extends \ArrayObject
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
    protected $attributeDefinitionId;
    /**
     * 
     *
     * @var bool
     */
    protected $booleanValue;
    /**
     * 
     *
     * @var int
     */
    protected $dateValue;
    /**
     * 
     *
     * @var string
     */
    protected $entityId;
    /**
     * 
     *
     * @var list<EntityReference>
     */
    protected $entityReferences;
    /**
     * 
     *
     * @var string
     */
    protected $numberValue;
    /**
     * 
     *
     * @var string
     */
    protected $selectedValueId;
    /**
     * 
     *
     * @var list<OnlyId>
     */
    protected $selectedValues;
    /**
     * 
     *
     * @var string
     */
    protected $stringValue;
    /**
     * 
     *
     * @return string
     */
    public function getAttributeDefinitionId(): string
    {
        return $this->attributeDefinitionId;
    }
    /**
     * 
     *
     * @param string $attributeDefinitionId
     *
     * @return self
     */
    public function setAttributeDefinitionId(string $attributeDefinitionId): self
    {
        $this->initialized['attributeDefinitionId'] = true;
        $this->attributeDefinitionId = $attributeDefinitionId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBooleanValue(): bool
    {
        return $this->booleanValue;
    }
    /**
     * 
     *
     * @param bool $booleanValue
     *
     * @return self
     */
    public function setBooleanValue(bool $booleanValue): self
    {
        $this->initialized['booleanValue'] = true;
        $this->booleanValue = $booleanValue;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDateValue(): int
    {
        return $this->dateValue;
    }
    /**
     * 
     *
     * @param int $dateValue
     *
     * @return self
     */
    public function setDateValue(int $dateValue): self
    {
        $this->initialized['dateValue'] = true;
        $this->dateValue = $dateValue;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEntityId(): string
    {
        return $this->entityId;
    }
    /**
     * 
     *
     * @param string $entityId
     *
     * @return self
     */
    public function setEntityId(string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * 
     *
     * @return list<EntityReference>
     */
    public function getEntityReferences(): array
    {
        return $this->entityReferences;
    }
    /**
     * 
     *
     * @param list<EntityReference> $entityReferences
     *
     * @return self
     */
    public function setEntityReferences(array $entityReferences): self
    {
        $this->initialized['entityReferences'] = true;
        $this->entityReferences = $entityReferences;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNumberValue(): string
    {
        return $this->numberValue;
    }
    /**
     * 
     *
     * @param string $numberValue
     *
     * @return self
     */
    public function setNumberValue(string $numberValue): self
    {
        $this->initialized['numberValue'] = true;
        $this->numberValue = $numberValue;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSelectedValueId(): string
    {
        return $this->selectedValueId;
    }
    /**
     * 
     *
     * @param string $selectedValueId
     *
     * @return self
     */
    public function setSelectedValueId(string $selectedValueId): self
    {
        $this->initialized['selectedValueId'] = true;
        $this->selectedValueId = $selectedValueId;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>
     */
    public function getSelectedValues(): array
    {
        return $this->selectedValues;
    }
    /**
     * 
     *
     * @param list<OnlyId> $selectedValues
     *
     * @return self
     */
    public function setSelectedValues(array $selectedValues): self
    {
        $this->initialized['selectedValues'] = true;
        $this->selectedValues = $selectedValues;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStringValue(): string
    {
        return $this->stringValue;
    }
    /**
     * 
     *
     * @param string $stringValue
     *
     * @return self
     */
    public function setStringValue(string $stringValue): self
    {
        $this->initialized['stringValue'] = true;
        $this->stringValue = $stringValue;
        return $this;
    }
}