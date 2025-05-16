<?php

namespace Webhubworks\WeclappApiCore\Model;

class TicketIdIdUnlinkSalesOrderPostResponse200 extends \ArrayObject
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
     * @var Ticket
     */
    protected $result;
    /**
     * 
     *
     * @return Ticket
     */
    public function getResult(): Ticket
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param Ticket $result
     *
     * @return self
     */
    public function setResult(Ticket $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}