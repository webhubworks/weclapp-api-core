<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrderIdIdCreateProductionOrdersPostResponse200 extends \ArrayObject
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
     * @var list<ProductionOrder>
     */
    protected $result;

    /**
     * @return list<ProductionOrder>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<ProductionOrder>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
