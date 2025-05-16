<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderRequestGetResponse200 extends \ArrayObject
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
     * @var list<PurchaseOrderRequest>|null
     */
    protected $result;

    /**
     * @return list<PurchaseOrderRequest>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * @param  list<PurchaseOrderRequest>|null  $result
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
