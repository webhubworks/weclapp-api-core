<?php

namespace Webhubworks\WeclappApiCore\Model;

class MetaQuerySortPropertiesGetResponse200 extends \ArrayObject
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
     * @var list<array<string, mixed>>|null
     */
    protected $result;

    /**
     * @return list<array<string, mixed>>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * @param  list<array<string, mixed>>|null  $result
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
