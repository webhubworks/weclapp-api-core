<?php

namespace Webhubworks\WeclappApiCore\Model;

class TicketIdIdLinkSalesOrderPostResponse200 extends \ArrayObject
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
     * @var Ticket|null
     */
    protected $result;
    /**
     * 
     *
     * @return Ticket|null
     */
    public function getResult(): ?Ticket
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param Ticket|null $result
     *
     * @return self
     */
    public function setResult(?Ticket $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}