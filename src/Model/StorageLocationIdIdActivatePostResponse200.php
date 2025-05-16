<?php

namespace Webhubworks\WeclappApiCore\Model;

class StorageLocationIdIdActivatePostResponse200 extends \ArrayObject
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
     * @var StorageLocation|null
     */
    protected $result;

    public function getResult(): ?StorageLocation
    {
        return $this->result;
    }

    public function setResult(?StorageLocation $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
