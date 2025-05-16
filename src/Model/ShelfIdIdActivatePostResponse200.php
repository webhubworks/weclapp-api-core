<?php

namespace Webhubworks\WeclappApiCore\Model;

class ShelfIdIdActivatePostResponse200 extends \ArrayObject
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
     * @var Shelf|null
     */
    protected $result;

    public function getResult(): ?Shelf
    {
        return $this->result;
    }

    public function setResult(?Shelf $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
