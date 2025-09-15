<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrderIdIdCalculateSalesPricesPostBody extends \ArrayObject
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
     * @var string|null
     */
    protected $calculationMode;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $orderItemIds;
    /**
     * 
     *
     * @var string|null
     */
    protected $percentage;
    /**
     * 
     *
     * @return string|null
     */
    public function getCalculationMode(): ?string
    {
        return $this->calculationMode;
    }
    /**
     * 
     *
     * @param string|null $calculationMode
     *
     * @return self
     */
    public function setCalculationMode(?string $calculationMode): self
    {
        $this->initialized['calculationMode'] = true;
        $this->calculationMode = $calculationMode;
        return $this;
    }
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
     * @return string|null
     */
    public function getPercentage(): ?string
    {
        return $this->percentage;
    }
    /**
     * 
     *
     * @param string|null $percentage
     *
     * @return self
     */
    public function setPercentage(?string $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;
        return $this;
    }
}