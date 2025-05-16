<?php

namespace Webhubworks\WeclappApiCore\Model;

class ShipmentReturnRectificationGetResponse200 extends \ArrayObject
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
     * @var list<ShipmentReturnDescription>
     */
    protected $result;
    /**
     * 
     *
     * @return list<ShipmentReturnDescription>
     */
    public function getResult(): array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<ShipmentReturnDescription> $result
     *
     * @return self
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}