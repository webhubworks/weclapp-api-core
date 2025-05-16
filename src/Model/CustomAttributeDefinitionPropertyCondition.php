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
     * 
     *
     * @var string|null
     */
    protected $conditionOperator;
    /**
     * 
     *
     * @var string|null
     */
    protected $propertyName;
    /**
     * 
     *
     * @var string|null
     */
    protected $propertyType;
    /**
     * 
     *
     * @var string|null
     */
    protected $propertyValue;
    /**
     * 
     *
     * @return string|null
     */
    public function getConditionOperator(): ?string
    {
        return $this->conditionOperator;
    }
    /**
     * 
     *
     * @param string|null $conditionOperator
     *
     * @return self
     */
    public function setConditionOperator(?string $conditionOperator): self
    {
        $this->initialized['conditionOperator'] = true;
        $this->conditionOperator = $conditionOperator;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPropertyName(): ?string
    {
        return $this->propertyName;
    }
    /**
     * 
     *
     * @param string|null $propertyName
     *
     * @return self
     */
    public function setPropertyName(?string $propertyName): self
    {
        $this->initialized['propertyName'] = true;
        $this->propertyName = $propertyName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPropertyType(): ?string
    {
        return $this->propertyType;
    }
    /**
     * 
     *
     * @param string|null $propertyType
     *
     * @return self
     */
    public function setPropertyType(?string $propertyType): self
    {
        $this->initialized['propertyType'] = true;
        $this->propertyType = $propertyType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPropertyValue(): ?string
    {
        return $this->propertyValue;
    }
    /**
     * 
     *
     * @param string|null $propertyValue
     *
     * @return self
     */
    public function setPropertyValue(?string $propertyValue): self
    {
        $this->initialized['propertyValue'] = true;
        $this->propertyValue = $propertyValue;
        return $this;
    }
}