<?php

namespace Webhubworks\WeclappApiCore\Model;

class BankAccountGetResponse200 extends \ArrayObject
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
     * @var list<BankAccount>|null
     */
    protected $result;

    /**
     * @return list<BankAccount>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * @param  list<BankAccount>|null  $result
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
