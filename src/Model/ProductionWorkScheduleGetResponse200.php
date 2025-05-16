<?php

namespace Webhubworks\WeclappApiCore\Model;

class ProductionWorkScheduleGetResponse200 extends \ArrayObject
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
     * @var list<ProductionWorkSchedule>
     */
    protected $result;
    /**
     * 
     *
     * @return list<ProductionWorkSchedule>
     */
    public function getResult(): array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<ProductionWorkSchedule> $result
     *
     * @return self
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}