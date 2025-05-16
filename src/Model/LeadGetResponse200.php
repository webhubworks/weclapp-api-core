<?php

namespace Webhubworks\WeclappApiCore\Model;

class LeadGetResponse200 extends \ArrayObject
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
     * @var list<Lead>
     */
    protected $result;

    /**
     * @return list<Lead>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<Lead>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
