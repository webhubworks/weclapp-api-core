<?php

namespace Webhubworks\WeclappApiCore\Model;

class RecordEmailingRuleGetResponse200 extends \ArrayObject
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
     * @var list<RecordEmailingRule>
     */
    protected $result;
    /**
     * 
     *
     * @return list<RecordEmailingRule>
     */
    public function getResult(): array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<RecordEmailingRule> $result
     *
     * @return self
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}