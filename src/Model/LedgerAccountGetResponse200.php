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
     * @var list<LedgerAccount>
     */
    protected $result;

    /**
     * @return list<LedgerAccount>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<LedgerAccount>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
