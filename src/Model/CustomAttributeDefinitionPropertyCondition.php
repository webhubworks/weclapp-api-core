<?php

namespace Webhubworks\WeclappApiCore\Model;

class CustomAttributeDefinitionPropertyCondition extends \ArrayObject
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
     * @var string
     */
    protected $conditionOperator;

    /**
     * @var string
     */
    protected $propertyName;

    /**
     * @var string
     */
    protected $propertyType;

    /**
     * @var string
     */
    protected $propertyValue;

    public function getConditionOperator(): string
    {
        return $this->conditionOperator;
    }

    public function setConditionOperator(string $conditionOperator): self
    {
        $this->initialized['conditionOperator'] = true;
        $this->conditionOperator = $conditionOperator;

        return $this;
    }

    public function getPropertyName(): string
    {
        return $this->propertyName;
    }

    public function setPropertyName(string $propertyName): self
    {
        $this->initialized['propertyName'] = true;
        $this->propertyName = $propertyName;

        return $this;
    }

    public function getPropertyType(): string
    {
        return $this->propertyType;
    }

    public function setPropertyType(string $propertyType): self
    {
        $this->initialized['propertyType'] = true;
        $this->propertyType = $propertyType;

        return $this;
    }

    public function getPropertyValue(): string
    {
        return $this->propertyValue;
    }

    public function setPropertyValue(string $propertyValue): self
    {
        $this->initialized['propertyValue'] = true;
        $this->propertyValue = $propertyValue;

        return $this;
    }
}
