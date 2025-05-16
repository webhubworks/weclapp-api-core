<?php

namespace Webhubworks\WeclappApiCore\Model;

class IncomingGoodsIdIdCreateSupplierReturnPostResponse200 extends \ArrayObject
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
     * @var Shipment|null
     */
    protected $result;

    public function getResult(): ?Shipment
    {
        return $this->result;
    }

    public function setResult(?Shipment $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
