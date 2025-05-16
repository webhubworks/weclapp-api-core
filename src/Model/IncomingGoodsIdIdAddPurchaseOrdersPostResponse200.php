<?php

namespace Webhubworks\WeclappApiCore\Model;

class IncomingGoodsIdIdAddPurchaseOrdersPostResponse200 extends \ArrayObject
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
     * @var IncomingGoods|null
     */
    protected $result;

    public function getResult(): ?IncomingGoods
    {
        return $this->result;
    }

    public function setResult(?IncomingGoods $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
