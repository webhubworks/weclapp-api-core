<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrderIdIdSetCostsForItemsWithoutCostPostBody extends \ArrayObject
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
    protected $costUpdateMode;
    /**
     * 
     *
     * @return string
     */
    public function getCostUpdateMode(): string
    {
        return $this->costUpdateMode;
    }
    /**
     * 
     *
     * @param string $costUpdateMode
     *
     * @return self
     */
    public function setCostUpdateMode(string $costUpdateMode): self
    {
        $this->initialized['costUpdateMode'] = true;
        $this->costUpdateMode = $costUpdateMode;
        return $this;
    }
}