<?php

namespace Webhubworks\WeclappApiCore\Model;

class StorageLocationGetResponse200 extends \ArrayObject
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
     * @var list<StorageLocation>|null
     */
    protected $result;

    /**
     * @return list<StorageLocation>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * @param  list<StorageLocation>|null  $result
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
