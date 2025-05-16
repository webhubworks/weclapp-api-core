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
     * @var Warehouse|null
     */
    protected $result;

    public function getResult(): ?Warehouse
    {
        return $this->result;
    }

    public function setResult(?Warehouse $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
