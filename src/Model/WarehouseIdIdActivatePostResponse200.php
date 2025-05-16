<?php

namespace Webhubworks\WeclappApiCore\Model;

class WarehouseIdIdActivatePostResponse200 extends \ArrayObject
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
     * @var Warehouse|null
     */
    protected $result;
    /**
     * 
     *
     * @return Warehouse|null
     */
    public function getResult(): ?Warehouse
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param Warehouse|null $result
     *
     * @return self
     */
    public function setResult(?Warehouse $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}