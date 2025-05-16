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
     * @var Inventory
     */
    protected $result;

    public function getResult(): Inventory
    {
        return $this->result;
    }

    public function setResult(Inventory $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
