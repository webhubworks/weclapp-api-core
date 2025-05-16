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
     * @var list<TicketStatus>|null
     */
    protected $result;

    /**
     * @return list<TicketStatus>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * @param  list<TicketStatus>|null  $result
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
