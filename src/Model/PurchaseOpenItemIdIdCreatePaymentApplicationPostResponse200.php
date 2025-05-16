<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOpenItemIdIdCreatePaymentApplicationPostResponse200 extends \ArrayObject
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
     * @var PurchaseOpenItem
     */
    protected $result;

    public function getResult(): PurchaseOpenItem
    {
        return $this->result;
    }

    public function setResult(PurchaseOpenItem $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
