<?php

namespace Webhubworks\WeclappApiCore\Model;

class ShippingCarrierGetResponse200 extends \ArrayObject
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
     * @var list<ShippingCarrier>|null
     */
    protected $result;

    /**
     * @return list<ShippingCarrier>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * @param  list<ShippingCarrier>|null  $result
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
