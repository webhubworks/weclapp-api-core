<?php

namespace Webhubworks\WeclappApiCore\Model;

class CashAccountTransactionGetResponse200 extends \ArrayObject
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
     * @var list<CashAccountTransaction>|null
     */
    protected $result;
    /**
     * 
     *
     * @return list<CashAccountTransaction>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<CashAccountTransaction>|null $result
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