<?php

namespace Webhubworks\WeclappApiCore\Model;

class MetaResourcesGetResponse200 extends \ArrayObject
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
     * @var array<string, mixed>
     */
    protected $result;
    /**
     * 
     *
     * @return array<string, mixed>
     */
    public function getResult(): iterable
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param array<string, mixed> $result
     *
     * @return self
     */
    public function setResult(iterable $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}