<?php

namespace Webhubworks\WeclappApiCore\Model;

class IncomingGoodsGetResponse200 extends \ArrayObject
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
     * @var list<IncomingGoods>
     */
    protected $result;

    /**
     * @return list<IncomingGoods>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<IncomingGoods>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
