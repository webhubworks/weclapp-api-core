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
     * 
     *
     * @var IncomingGoods|null
     */
    protected $result;
    /**
     * 
     *
     * @return IncomingGoods|null
     */
    public function getResult(): ?IncomingGoods
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param IncomingGoods|null $result
     *
     * @return self
     */
    public function setResult(?IncomingGoods $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}