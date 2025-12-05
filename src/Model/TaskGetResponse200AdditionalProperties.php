<?php

namespace Webhubworks\WeclappApiCore\Model;

class TaskGetResponse200AdditionalProperties extends \ArrayObject
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
     * @var list<Duration>|null
     */
    protected $bookedBillableWork;
    /**
     * 
     *
     * @var list<Duration>|null
     */
    protected $bookedWork;
    /**
     * 
     *
     * @var list<Amount>|null
     */
    protected $costOfServices;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $fullPositionNumber;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $orderItemNumber;
    /**
     * 
     *
     * @return list<Duration>|null
     */
    public function getBookedBillableWork(): ?array
    {
        return $this->bookedBillableWork;
    }
    /**
     * 
     *
     * @param list<Duration>|null $bookedBillableWork
     *
     * @return self
     */
    public function setBookedBillableWork(?array $bookedBillableWork): self
    {
        $this->initialized['bookedBillableWork'] = true;
        $this->bookedBillableWork = $bookedBillableWork;
        return $this;
    }
    /**
     * 
     *
     * @return list<Duration>|null
     */
    public function getBookedWork(): ?array
    {
        return $this->bookedWork;
    }
    /**
     * 
     *
     * @param list<Duration>|null $bookedWork
     *
     * @return self
     */
    public function setBookedWork(?array $bookedWork): self
    {
        $this->initialized['bookedWork'] = true;
        $this->bookedWork = $bookedWork;
        return $this;
    }
    /**
     * 
     *
     * @return list<Amount>|null
     */
    public function getCostOfServices(): ?array
    {
        return $this->costOfServices;
    }
    /**
     * 
     *
     * @param list<Amount>|null $costOfServices
     *
     * @return self
     */
    public function setCostOfServices(?array $costOfServices): self
    {
        $this->initialized['costOfServices'] = true;
        $this->costOfServices = $costOfServices;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getFullPositionNumber(): ?array
    {
        return $this->fullPositionNumber;
    }
    /**
     * 
     *
     * @param list<string>|null $fullPositionNumber
     *
     * @return self
     */
    public function setFullPositionNumber(?array $fullPositionNumber): self
    {
        $this->initialized['fullPositionNumber'] = true;
        $this->fullPositionNumber = $fullPositionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getOrderItemNumber(): ?array
    {
        return $this->orderItemNumber;
    }
    /**
     * 
     *
     * @param list<string>|null $orderItemNumber
     *
     * @return self
     */
    public function setOrderItemNumber(?array $orderItemNumber): self
    {
        $this->initialized['orderItemNumber'] = true;
        $this->orderItemNumber = $orderItemNumber;
        return $this;
    }
}