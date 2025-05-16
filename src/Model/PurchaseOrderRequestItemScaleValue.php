<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderRequestItemScaleValue extends \ArrayObject
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
     * @var string
     */
    protected $scale;
    /**
     * 
     *
     * @return string
     */
    public function getScale(): string
    {
        return $this->scale;
    }
    /**
     * 
     *
     * @param string $scale
     *
     * @return self
     */
    public function setScale(string $scale): self
    {
        $this->initialized['scale'] = true;
        $this->scale = $scale;
        return $this;
    }
}