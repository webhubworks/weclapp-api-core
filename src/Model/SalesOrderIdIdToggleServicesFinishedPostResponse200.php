<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrderIdIdToggleServicesFinishedPostResponse200 extends \ArrayObject
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
     * @var SalesOrder|null
     */
    protected $result;
    /**
     * 
     *
     * @return SalesOrder|null
     */
    public function getResult(): ?SalesOrder
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param SalesOrder|null $result
     *
     * @return self
     */
    public function setResult(?SalesOrder $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}