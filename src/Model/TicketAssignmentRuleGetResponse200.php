<?php

namespace Webhubworks\WeclappApiCore\Model;

class TicketAssignmentRuleGetResponse200 extends \ArrayObject
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
     * @var list<TicketAssignmentRule>|null
     */
    protected $result;
    /**
     * 
     *
     * @return list<TicketAssignmentRule>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<TicketAssignmentRule>|null $result
     *
     * @return self
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}