<?php

namespace Webhubworks\WeclappApiCore\Model;

class PerformanceRecordGetResponse200AdditionalProperties extends \ArrayObject
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
     * @var list<bool>|null
     */
    protected $invoiced;
    /**
     * 
     *
     * @return list<bool>|null
     */
    public function getInvoiced(): ?array
    {
        return $this->invoiced;
    }
    /**
     * 
     *
     * @param list<bool>|null $invoiced
     *
     * @return self
     */
    public function setInvoiced(?array $invoiced): self
    {
        $this->initialized['invoiced'] = true;
        $this->invoiced = $invoiced;
        return $this;
    }
}