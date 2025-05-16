<?php

namespace Webhubworks\WeclappApiCore\Model;

class ExternalConnectionGetResponse200 extends \ArrayObject
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
     * @var list<ExternalConnection>
     */
    protected $result;

    /**
     * @return list<ExternalConnection>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<ExternalConnection>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
