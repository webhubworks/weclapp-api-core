<?php

namespace Webhubworks\WeclappApiCore\Model;

class WarehouseIdIdDeactivatePostResponse200 extends \ArrayObject
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
     * @var Warehouse
     */
    protected $result;
    /**
     * 
     *
     * @return Warehouse
     */
    public function getResult(): Warehouse
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param Warehouse $result
     *
     * @return self
     */
    public function setResult(Warehouse $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}