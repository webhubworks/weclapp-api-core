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
     * @var FastProductionBookingResult|null
     */
    protected $result;

    public function getResult(): ?FastProductionBookingResult
    {
        return $this->result;
    }

    public function setResult(?FastProductionBookingResult $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
