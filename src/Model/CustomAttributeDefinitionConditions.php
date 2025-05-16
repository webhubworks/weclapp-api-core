<?php

namespace Webhubworks\WeclappApiCore\Model;

class CustomAttributeDefinitionConditions extends \ArrayObject
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
     * @var list<ConditionsForEntityType>
     */
    protected $conditionsForEntityType;
    /**
     * 
     *
     * @var bool
     */
    protected $ignoreConditionsIfValueIsSet;
    /**
     * 
     *
     * @return list<ConditionsForEntityType>
     */
    public function getConditionsForEntityType(): array
    {
        return $this->conditionsForEntityType;
    }
    /**
     * 
     *
     * @param list<ConditionsForEntityType> $conditionsForEntityType
     *
     * @return self
     */
    public function setConditionsForEntityType(array $conditionsForEntityType): self
    {
        $this->initialized['conditionsForEntityType'] = true;
        $this->conditionsForEntityType = $conditionsForEntityType;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIgnoreConditionsIfValueIsSet(): bool
    {
        return $this->ignoreConditionsIfValueIsSet;
    }
    /**
     * 
     *
     * @param bool $ignoreConditionsIfValueIsSet
     *
     * @return self
     */
    public function setIgnoreConditionsIfValueIsSet(bool $ignoreConditionsIfValueIsSet): self
    {
        $this->initialized['ignoreConditionsIfValueIsSet'] = true;
        $this->ignoreConditionsIfValueIsSet = $ignoreConditionsIfValueIsSet;
        return $this;
    }
}