<?php

namespace Webhubworks\WeclappApiCore\Model;

class PerformanceRecordIdIdAddToPerformanceRecordPostBody extends \ArrayObject
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
     * @var list<string>|null
     */
    protected $orderItemIds;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $taskIds;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $timeRecordIds;
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getOrderItemIds(): ?array
    {
        return $this->orderItemIds;
    }
    /**
     * 
     *
     * @param list<string>|null $orderItemIds
     *
     * @return self
     */
    public function setOrderItemIds(?array $orderItemIds): self
    {
        $this->initialized['orderItemIds'] = true;
        $this->orderItemIds = $orderItemIds;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getTaskIds(): ?array
    {
        return $this->taskIds;
    }
    /**
     * 
     *
     * @param list<string>|null $taskIds
     *
     * @return self
     */
    public function setTaskIds(?array $taskIds): self
    {
        $this->initialized['taskIds'] = true;
        $this->taskIds = $taskIds;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getTimeRecordIds(): ?array
    {
        return $this->timeRecordIds;
    }
    /**
     * 
     *
     * @param list<string>|null $timeRecordIds
     *
     * @return self
     */
    public function setTimeRecordIds(?array $timeRecordIds): self
    {
        $this->initialized['timeRecordIds'] = true;
        $this->timeRecordIds = $timeRecordIds;
        return $this;
    }
}