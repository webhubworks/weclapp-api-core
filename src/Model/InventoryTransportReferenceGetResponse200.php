<?php

namespace Webhubworks\WeclappApiCore\Model;

class InventoryTransportReferenceGetResponse200 extends \ArrayObject
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
     * @var list<InventoryTransportReference>
     */
    protected $result;

    /**
     * @return list<InventoryTransportReference>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<InventoryTransportReference>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
