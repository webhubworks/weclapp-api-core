<?php

namespace Webhubworks\WeclappApiCore\Model;

class ProductionOrderFastProductionBookingPostResponse200 extends \ArrayObject
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
     * @var FastProductionBookingResult
     */
    protected $result;
    /**
     * 
     *
     * @return FastProductionBookingResult
     */
    public function getResult(): FastProductionBookingResult
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param FastProductionBookingResult $result
     *
     * @return self
     */
    public function setResult(FastProductionBookingResult $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}