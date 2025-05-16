<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseRequisitionGetResponse200 extends \ArrayObject
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
     * @var list<PurchaseRequisition>|null
     */
    protected $result;

    /**
     * @return list<PurchaseRequisition>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * @param  list<PurchaseRequisition>|null  $result
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
