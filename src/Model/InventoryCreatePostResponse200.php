<?php

namespace Webhubworks\WeclappApiCore\Model;

class InventoryCreatePostResponse200 extends \ArrayObject
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
     * @var Inventory|null
     */
    protected $result;
    /**
     * 
     *
     * @return Inventory|null
     */
    public function getResult(): ?Inventory
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param Inventory|null $result
     *
     * @return self
     */
    public function setResult(?Inventory $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}