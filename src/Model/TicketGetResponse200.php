<?php

namespace Webhubworks\WeclappApiCore\Model;

class TicketGetResponse200 extends \ArrayObject
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
     * @var TicketGetResponse200AdditionalProperties|null
     */
    protected $additionalProperties;
    /**
     * 
     *
     * @var list<Ticket>|null
     */
    protected $result;
    /**
     * 
     *
     * @return TicketGetResponse200AdditionalProperties|null
     */
    public function getAdditionalProperties(): ?TicketGetResponse200AdditionalProperties
    {
        return $this->additionalProperties;
    }
    /**
     * 
     *
     * @param TicketGetResponse200AdditionalProperties|null $additionalProperties
     *
     * @return self
     */
    public function setAdditionalProperties(?TicketGetResponse200AdditionalProperties $additionalProperties): self
    {
        $this->initialized['additionalProperties'] = true;
        $this->additionalProperties = $additionalProperties;
        return $this;
    }
    /**
     * 
     *
     * @return list<Ticket>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<Ticket>|null $result
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