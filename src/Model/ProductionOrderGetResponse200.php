<?php

namespace Webhubworks\WeclappApiCore\Model;

class ProductionOrderGetResponse200 extends \ArrayObject
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
     * @var ProductionOrderGetResponse200AdditionalProperties|null
     */
    protected $additionalProperties;
    /**
     * 
     *
     * @var list<ProductionOrder>|null
     */
    protected $result;
    /**
     * 
     *
     * @return ProductionOrderGetResponse200AdditionalProperties|null
     */
    public function getAdditionalProperties(): ?ProductionOrderGetResponse200AdditionalProperties
    {
        return $this->additionalProperties;
    }
    /**
     * 
     *
     * @param ProductionOrderGetResponse200AdditionalProperties|null $additionalProperties
     *
     * @return self
     */
    public function setAdditionalProperties(?ProductionOrderGetResponse200AdditionalProperties $additionalProperties): self
    {
        $this->initialized['additionalProperties'] = true;
        $this->additionalProperties = $additionalProperties;
        return $this;
    }
    /**
     * 
     *
     * @return list<ProductionOrder>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<ProductionOrder>|null $result
     *
     * @return self
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}