<?php

namespace Webhubworks\WeclappApiCore\Model;

class StoragePlaceGetResponse200 extends \ArrayObject
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
     * @var list<StoragePlace>
     */
    protected $result;

    /**
     * @return list<StoragePlace>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<StoragePlace>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
