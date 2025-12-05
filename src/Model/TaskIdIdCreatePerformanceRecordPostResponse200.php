<?php

namespace Webhubworks\WeclappApiCore\Model;

class TaskIdIdCreatePerformanceRecordPostResponse200 extends \ArrayObject
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
     * @var PerformanceRecord|null
     */
    protected $result;
    /**
     * 
     *
     * @return PerformanceRecord|null
     */
    public function getResult(): ?PerformanceRecord
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param PerformanceRecord|null $result
     *
     * @return self
     */
    public function setResult(?PerformanceRecord $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}