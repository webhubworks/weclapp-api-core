<?php

namespace Webhubworks\WeclappApiCore\Model;

class OpportunityGetResponse200 extends \ArrayObject
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
     * @var list<Opportunity>
     */
    protected $result;

    /**
     * @return list<Opportunity>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<Opportunity>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
