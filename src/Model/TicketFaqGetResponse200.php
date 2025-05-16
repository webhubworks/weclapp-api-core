<?php

namespace Webhubworks\WeclappApiCore\Model;

class TicketFaqGetResponse200 extends \ArrayObject
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
     * @var list<TicketFaq>
     */
    protected $result;

    /**
     * @return list<TicketFaq>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<TicketFaq>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
