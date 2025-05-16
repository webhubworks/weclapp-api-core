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
     * @var list<IncomingBooking>|null
     */
    protected $result;

    /**
     * @return list<IncomingBooking>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * @param  list<IncomingBooking>|null  $result
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
