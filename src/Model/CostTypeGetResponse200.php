<?php

namespace Webhubworks\WeclappApiCore\Model;

class CostTypeGetResponse200 extends \ArrayObject
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
     * @var list<CostType>|null
     */
    protected $result;

    /**
     * @return list<CostType>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * @param  list<CostType>|null  $result
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
