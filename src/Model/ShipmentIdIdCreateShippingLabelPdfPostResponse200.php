<?php

namespace Webhubworks\WeclappApiCore\Model;

class ShipmentIdIdCreateShippingLabelPdfPostResponse200 extends \ArrayObject
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
     * @var SuccessResponse|null
     */
    protected $result;
    /**
     * 
     *
     * @return SuccessResponse|null
     */
    public function getResult(): ?SuccessResponse
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param SuccessResponse|null $result
     *
     * @return self
     */
    public function setResult(?SuccessResponse $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}