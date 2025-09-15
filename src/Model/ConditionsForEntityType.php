<?php

namespace Webhubworks\WeclappApiCore\Model;

class ConditionsForEntityType extends \ArrayObject
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
    protected $entityType;
    /**
     * 
     *
     * @var list<CustomAttributeDefinitionPropertyCondition>|null
     */
    protected $propertyConditions;
    /**
     * 
     *
     * @return string|null
     */
    public function getEntityType(): ?string
    {
        return $this->entityType;
    }
    /**
     * 
     *
     * @param string|null $entityType
     *
     * @return self
     */
    public function setEntityType(?string $entityType): self
    {
        $this->initialized['entityType'] = true;
        $this->entityType = $entityType;
        return $this;
    }
    /**
     * 
     *
     * @return list<CustomAttributeDefinitionPropertyCondition>|null
     */
    public function getPropertyConditions(): ?array
    {
        return $this->propertyConditions;
    }
    /**
     * 
     *
     * @param list<CustomAttributeDefinitionPropertyCondition>|null $propertyConditions
     *
     * @return self
     */
    public function setPropertyConditions(?array $propertyConditions): self
    {
        $this->initialized['propertyConditions'] = true;
        $this->propertyConditions = $propertyConditions;
        return $this;
    }
}