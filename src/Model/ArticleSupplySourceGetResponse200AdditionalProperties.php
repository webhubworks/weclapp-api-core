<?php

namespace Webhubworks\WeclappApiCore\Model;

class ArticleSupplySourceGetResponse200AdditionalProperties extends \ArrayObject
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
     * @var list<PriceData>
     */
    protected $currentPurchasePrice;
    /**
     * 
     *
     * @var list<Amount>
     */
    protected $currentPurchasePriceInCompanyCurrency;
    /**
     * 
     *
     * @var list<int>
     */
    protected $lastPurchaseOrderDate;
    /**
     * 
     *
     * @return list<PriceData>
     */
    public function getCurrentPurchasePrice(): array
    {
        return $this->currentPurchasePrice;
    }
    /**
     * 
     *
     * @param list<PriceData> $currentPurchasePrice
     *
     * @return self
     */
    public function setCurrentPurchasePrice(array $currentPurchasePrice): self
    {
        $this->initialized['currentPurchasePrice'] = true;
        $this->currentPurchasePrice = $currentPurchasePrice;
        return $this;
    }
    /**
     * 
     *
     * @return list<Amount>
     */
    public function getCurrentPurchasePriceInCompanyCurrency(): array
    {
        return $this->currentPurchasePriceInCompanyCurrency;
    }
    /**
     * 
     *
     * @param list<Amount> $currentPurchasePriceInCompanyCurrency
     *
     * @return self
     */
    public function setCurrentPurchasePriceInCompanyCurrency(array $currentPurchasePriceInCompanyCurrency): self
    {
        $this->initialized['currentPurchasePriceInCompanyCurrency'] = true;
        $this->currentPurchasePriceInCompanyCurrency = $currentPurchasePriceInCompanyCurrency;
        return $this;
    }
    /**
     * 
     *
     * @return list<int>
     */
    public function getLastPurchaseOrderDate(): array
    {
        return $this->lastPurchaseOrderDate;
    }
    /**
     * 
     *
     * @param list<int> $lastPurchaseOrderDate
     *
     * @return self
     */
    public function setLastPurchaseOrderDate(array $lastPurchaseOrderDate): self
    {
        $this->initialized['lastPurchaseOrderDate'] = true;
        $this->lastPurchaseOrderDate = $lastPurchaseOrderDate;
        return $this;
    }
}