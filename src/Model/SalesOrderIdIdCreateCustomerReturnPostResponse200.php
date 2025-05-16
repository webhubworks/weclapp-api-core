<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrderIdIdCreateCustomerReturnPostResponse200 extends \ArrayObject
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
     * @var IncomingGoods
     */
    protected $result;
    /**
     * 
     *
     * @return IncomingGoods
     */
    public function getResult(): IncomingGoods
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param IncomingGoods $result
     *
     * @return self
     */
    public function setResult(IncomingGoods $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}