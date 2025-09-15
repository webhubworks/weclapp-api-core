<?php

namespace Webhubworks\WeclappApiCore\Model;

class ShelfIdIdDeactivatePostResponse200 extends \ArrayObject
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
     * @var Shelf|null
     */
    protected $result;
    /**
     * 
     *
     * @return Shelf|null
     */
    public function getResult(): ?Shelf
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param Shelf|null $result
     *
     * @return self
     */
    public function setResult(?Shelf $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}