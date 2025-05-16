<?php

namespace Webhubworks\WeclappApiCore\Model;

class IncomingGoodsIdIdCreateCompensationShipmentPostResponse200 extends \ArrayObject
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
     * @var Shipment|null
     */
    protected $result;
    /**
     * 
     *
     * @return Shipment|null
     */
    public function getResult(): ?Shipment
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param Shipment|null $result
     *
     * @return self
     */
    public function setResult(?Shipment $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}