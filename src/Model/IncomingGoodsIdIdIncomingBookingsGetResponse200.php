<?php

namespace Webhubworks\WeclappApiCore\Model;

class IncomingGoodsIdIdIncomingBookingsGetResponse200 extends \ArrayObject
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
     * @var list<IncomingBooking>
     */
    protected $result;
    /**
     * 
     *
     * @return list<IncomingBooking>
     */
    public function getResult(): array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<IncomingBooking> $result
     *
     * @return self
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}