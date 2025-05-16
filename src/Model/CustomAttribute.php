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
     * @var string|null
     */
    protected $attributeDefinitionId;

    /**
     * @var bool|null
     */
    protected $booleanValue;

    /**
     * @var int|null
     */
    protected $dateValue;

    /**
     * @var string|null
     */
    protected $entityId;

    /**
     * @var list<EntityReference>|null
     */
    protected $entityReferences;

    /**
     * @var string|null
     */
    protected $numberValue;

    /**
     * @var string|null
     */
    protected $selectedValueId;

    /**
     * @var list<OnlyId>|null
     */
    protected $selectedValues;

    /**
     * @var string|null
     */
    protected $stringValue;

    public function getAttributeDefinitionId(): ?string
    {
        return $this->attributeDefinitionId;
    }

    public function setAttributeDefinitionId(?string $attributeDefinitionId): self
    {
        $this->initialized['attributeDefinitionId'] = true;
        $this->attributeDefinitionId = $attributeDefinitionId;

        return $this;
    }

    public function getBooleanValue(): ?bool
    {
        return $this->booleanValue;
    }

    public function setBooleanValue(?bool $booleanValue): self
    {
        $this->initialized['booleanValue'] = true;
        $this->booleanValue = $booleanValue;

        return $this;
    }

    public function getDateValue(): ?int
    {
        return $this->dateValue;
    }

    public function setDateValue(?int $dateValue): self
    {
        $this->initialized['dateValue'] = true;
        $this->dateValue = $dateValue;

        return $this;
    }

    public function getEntityId(): ?string
    {
        return $this->entityId;
    }

    public function setEntityId(?string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;

        return $this;
    }

    /**
     * @return list<EntityReference>|null
     */
    public function getEntityReferences(): ?array
    {
        return $this->entityReferences;
    }

    /**
     * @param  list<EntityReference>|null  $entityReferences
     */
    public function setEntityReferences(?array $entityReferences): self
    {
        $this->initialized['entityReferences'] = true;
        $this->entityReferences = $entityReferences;

        return $this;
    }

    public function getNumberValue(): ?string
    {
        return $this->numberValue;
    }

    public function setNumberValue(?string $numberValue): self
    {
        $this->initialized['numberValue'] = true;
        $this->numberValue = $numberValue;

        return $this;
    }

    public function getSelectedValueId(): ?string
    {
        return $this->selectedValueId;
    }

    public function setSelectedValueId(?string $selectedValueId): self
    {
        $this->initialized['selectedValueId'] = true;
        $this->selectedValueId = $selectedValueId;

        return $this;
    }

    /**
     * @return list<OnlyId>|null
     */
    public function getSelectedValues(): ?array
    {
        return $this->selectedValues;
    }

    /**
     * @param  list<OnlyId>|null  $selectedValues
     */
    public function setSelectedValues(?array $selectedValues): self
    {
        $this->initialized['selectedValues'] = true;
        $this->selectedValues = $selectedValues;

        return $this;
    }

    public function getStringValue(): ?string
    {
        return $this->stringValue;
    }

    public function setStringValue(?string $stringValue): self
    {
        $this->initialized['stringValue'] = true;
        $this->stringValue = $stringValue;

        return $this;
    }
}
