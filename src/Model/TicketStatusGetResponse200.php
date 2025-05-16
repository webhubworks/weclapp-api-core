<?php

namespace Webhubworks\WeclappApiCore\Model;

class TicketStatusGetResponse200 extends \ArrayObject
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
     * @var list<TicketStatus>
     */
    protected $result;

    /**
     * @return list<TicketStatus>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<TicketStatus>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
