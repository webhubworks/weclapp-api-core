<?php

namespace Webhubworks\WeclappApiCore\Model;

class TransportationOrderIdIdCreatePickPostResponse200 extends \ArrayObject
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
     * @var TransportationOrder
     */
    protected $result;
    /**
     * 
     *
     * @return TransportationOrder
     */
    public function getResult(): TransportationOrder
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param TransportationOrder $result
     *
     * @return self
     */
    public function setResult(TransportationOrder $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}