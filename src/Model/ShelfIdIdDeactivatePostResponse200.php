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
     * @var Shelf
     */
    protected $result;
    /**
     * 
     *
     * @return Shelf
     */
    public function getResult(): Shelf
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param Shelf $result
     *
     * @return self
     */
    public function setResult(Shelf $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}