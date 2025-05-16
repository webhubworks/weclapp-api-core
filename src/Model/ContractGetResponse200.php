<?php

namespace Webhubworks\WeclappApiCore\Model;

class ContractGetResponse200 extends \ArrayObject
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
     * @var list<Contract>|null
     */
    protected $result;

    /**
     * @return list<Contract>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * @param  list<Contract>|null  $result
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
