<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOpenItemGetResponse200 extends \ArrayObject
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
     * @var list<PurchaseOpenItem>
     */
    protected $result;

    /**
     * @return list<PurchaseOpenItem>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<PurchaseOpenItem>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
