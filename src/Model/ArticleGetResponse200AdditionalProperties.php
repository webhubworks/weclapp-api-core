<?php

namespace Webhubworks\WeclappApiCore\Model;

class ArticleGetResponse200AdditionalProperties extends \ArrayObject
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
     * @var list<list<AggregateStock>>|null
     */
    protected $aggregateStock;

    /**
     * @var list<Amount>|null
     */
    protected $averagePrice;

    /**
     * @var list<PriceData>|null
     */
    protected $currentSalesPrice;

    /**
     * @var list<list<WarehouseQuantity>>|null
     */
    protected $pickableStockQuantity;

    /**
     * @var list<list<WarehouseQuantity>>|null
     */
    protected $reservedStockQuantity;

    /**
     * @var list<list<WarehouseQuantity>>|null
     */
    protected $totalStockQuantity;

    /**
     * @return list<list<AggregateStock>>|null
     */
    public function getAggregateStock(): ?array
    {
        return $this->aggregateStock;
    }

    /**
     * @param  list<list<AggregateStock>>|null  $aggregateStock
     */
    public function setAggregateStock(?array $aggregateStock): self
    {
        $this->initialized['aggregateStock'] = true;
        $this->aggregateStock = $aggregateStock;

        return $this;
    }

    /**
     * @return list<Amount>|null
     */
    public function getAveragePrice(): ?array
    {
        return $this->averagePrice;
    }

    /**
     * @param  list<Amount>|null  $averagePrice
     */
    public function setAveragePrice(?array $averagePrice): self
    {
        $this->initialized['averagePrice'] = true;
        $this->averagePrice = $averagePrice;

        return $this;
    }

    /**
     * @return list<PriceData>|null
     */
    public function getCurrentSalesPrice(): ?array
    {
        return $this->currentSalesPrice;
    }

    /**
     * @param  list<PriceData>|null  $currentSalesPrice
     */
    public function setCurrentSalesPrice(?array $currentSalesPrice): self
    {
        $this->initialized['currentSalesPrice'] = true;
        $this->currentSalesPrice = $currentSalesPrice;

        return $this;
    }

    /**
     * @return list<list<WarehouseQuantity>>|null
     */
    public function getPickableStockQuantity(): ?array
    {
        return $this->pickableStockQuantity;
    }

    /**
     * @param  list<list<WarehouseQuantity>>|null  $pickableStockQuantity
     */
    public function setPickableStockQuantity(?array $pickableStockQuantity): self
    {
        $this->initialized['pickableStockQuantity'] = true;
        $this->pickableStockQuantity = $pickableStockQuantity;

        return $this;
    }

    /**
     * @return list<list<WarehouseQuantity>>|null
     */
    public function getReservedStockQuantity(): ?array
    {
        return $this->reservedStockQuantity;
    }

    /**
     * @param  list<list<WarehouseQuantity>>|null  $reservedStockQuantity
     */
    public function setReservedStockQuantity(?array $reservedStockQuantity): self
    {
        $this->initialized['reservedStockQuantity'] = true;
        $this->reservedStockQuantity = $reservedStockQuantity;

        return $this;
    }

    /**
     * @return list<list<WarehouseQuantity>>|null
     */
    public function getTotalStockQuantity(): ?array
    {
        return $this->totalStockQuantity;
    }

    /**
     * @param  list<list<WarehouseQuantity>>|null  $totalStockQuantity
     */
    public function setTotalStockQuantity(?array $totalStockQuantity): self
    {
        $this->initialized['totalStockQuantity'] = true;
        $this->totalStockQuantity = $totalStockQuantity;

        return $this;
    }
}
