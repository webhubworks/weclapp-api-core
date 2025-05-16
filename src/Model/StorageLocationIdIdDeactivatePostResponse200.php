<?php

namespace Webhubworks\WeclappApiCore\Model;

class StorageLocationIdIdDeactivatePostResponse200 extends \ArrayObject
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
     * @var StorageLocation
     */
    protected $result;

    public function getResult(): StorageLocation
    {
        return $this->result;
    }

    public function setResult(StorageLocation $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
