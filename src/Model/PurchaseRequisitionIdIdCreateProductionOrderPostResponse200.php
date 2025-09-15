<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseRequisitionIdIdCreateProductionOrderPostResponse200 extends \ArrayObject
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
     * @var ProductionOrder|null
     */
    protected $result;
    /**
     * 
     *
     * @return ProductionOrder|null
     */
    public function getResult(): ?ProductionOrder
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param ProductionOrder|null $result
     *
     * @return self
     */
    public function setResult(?ProductionOrder $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}