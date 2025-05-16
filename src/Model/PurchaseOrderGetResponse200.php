<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderGetResponse200 extends \ArrayObject
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
     * @var list<PurchaseOrder>|null
     */
    protected $result;

    /**
     * @return list<PurchaseOrder>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * @param  list<PurchaseOrder>|null  $result
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
