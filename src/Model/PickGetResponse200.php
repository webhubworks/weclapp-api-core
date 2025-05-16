<?php

namespace Webhubworks\WeclappApiCore\Model;

class PickGetResponse200 extends \ArrayObject
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
     * @var list<Pick>
     */
    protected $result;

    /**
     * @return list<Pick>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<Pick>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
