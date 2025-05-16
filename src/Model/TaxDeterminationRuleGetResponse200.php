<?php

namespace Webhubworks\WeclappApiCore\Model;

class TaxDeterminationRuleGetResponse200 extends \ArrayObject
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
     * @var list<TaxDeterminationRule>
     */
    protected $result;

    /**
     * @return list<TaxDeterminationRule>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<TaxDeterminationRule>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
