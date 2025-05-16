<?php

namespace Webhubworks\WeclappApiCore\Model;

class TransportationOrderGetResponse200 extends \ArrayObject
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
     * @var list<TransportationOrder>
     */
    protected $result;

    /**
     * @return list<TransportationOrder>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<TransportationOrder>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
