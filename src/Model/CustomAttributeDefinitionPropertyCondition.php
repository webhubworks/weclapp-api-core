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
     * @var string
     */
    protected $conditionOperator;
    /**
     * 
     *
     * @var string
     */
    protected $propertyName;
    /**
     * 
     *
     * @var string
     */
    protected $propertyType;
    /**
     * 
     *
     * @var string
     */
    protected $propertyValue;
    /**
     * 
     *
     * @return string
     */
    public function getConditionOperator(): string
    {
        return $this->conditionOperator;
    }
    /**
     * 
     *
     * @param string $conditionOperator
     *
     * @return self
     */
    public function setConditionOperator(string $conditionOperator): self
    {
        $this->initialized['conditionOperator'] = true;
        $this->conditionOperator = $conditionOperator;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPropertyName(): string
    {
        return $this->propertyName;
    }
    /**
     * 
     *
     * @param string $propertyName
     *
     * @return self
     */
    public function setPropertyName(string $propertyName): self
    {
        $this->initialized['propertyName'] = true;
        $this->propertyName = $propertyName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPropertyType(): string
    {
        return $this->propertyType;
    }
    /**
     * 
     *
     * @param string $propertyType
     *
     * @return self
     */
    public function setPropertyType(string $propertyType): self
    {
        $this->initialized['propertyType'] = true;
        $this->propertyType = $propertyType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPropertyValue(): string
    {
        return $this->propertyValue;
    }
    /**
     * 
     *
     * @param string $propertyValue
     *
     * @return self
     */
    public function setPropertyValue(string $propertyValue): self
    {
        $this->initialized['propertyValue'] = true;
        $this->propertyValue = $propertyValue;
        return $this;
    }
}