<?php

namespace Webhubworks\WeclappApiCore\Model;

class ProductionOrderFastProductionBookingPostBody extends \ArrayObject
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
    protected $productionOrderNumber;
    /**
     * 
     *
     * @var string
     */
    protected $quantity;
    /**
     * 
     *
     * @return string
     */
    public function getProductionOrderNumber(): string
    {
        return $this->productionOrderNumber;
    }
    /**
     * 
     *
     * @param string $productionOrderNumber
     *
     * @return self
     */
    public function setProductionOrderNumber(string $productionOrderNumber): self
    {
        $this->initialized['productionOrderNumber'] = true;
        $this->productionOrderNumber = $productionOrderNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param string $quantity
     *
     * @return self
     */
    public function setQuantity(string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
}