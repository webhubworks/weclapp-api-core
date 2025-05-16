<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOpenItemIdIdUpdatePaymentStatePostResponse200 extends \ArrayObject
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
     * @var PurchaseOpenItem|null
     */
    protected $result;
    /**
     * 
     *
     * @return PurchaseOpenItem|null
     */
    public function getResult(): ?PurchaseOpenItem
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param PurchaseOpenItem|null $result
     *
     * @return self
     */
    public function setResult(?PurchaseOpenItem $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}