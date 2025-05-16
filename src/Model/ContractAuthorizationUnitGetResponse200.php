<?php

namespace Webhubworks\WeclappApiCore\Model;

class ContractAuthorizationUnitGetResponse200 extends \ArrayObject
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
     * @var list<ContractAuthorizationUnit>
     */
    protected $result;

    /**
     * @return list<ContractAuthorizationUnit>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<ContractAuthorizationUnit>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
