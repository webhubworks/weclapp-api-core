<?php

namespace Webhubworks\WeclappApiCore\Model;

class LedgerAccountGetResponse200 extends \ArrayObject
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
     * @var list<LedgerAccount>|null
     */
    protected $result;
    /**
     * 
     *
     * @return list<LedgerAccount>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<LedgerAccount>|null $result
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