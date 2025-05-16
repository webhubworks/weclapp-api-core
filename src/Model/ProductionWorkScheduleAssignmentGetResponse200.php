<?php

namespace Webhubworks\WeclappApiCore\Model;

class ProductionWorkScheduleAssignmentGetResponse200 extends \ArrayObject
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
     * @var list<ProductionWorkScheduleAssignment>|null
     */
    protected $result;
    /**
     * 
     *
     * @return list<ProductionWorkScheduleAssignment>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<ProductionWorkScheduleAssignment>|null $result
     *
     * @return self
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}