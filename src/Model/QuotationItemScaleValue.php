<?php

namespace Webhubworks\WeclappApiCore\Model;

class QuotationItemScaleValue extends \ArrayObject
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
    protected $discountPercentage;
    /**
     * 
     *
     * @var bool
     */
    protected $fromSalesPrice;
    /**
     * 
     *
     * @var string
     */
    protected $price;
    /**
     * 
     *
     * @var string
     */
    protected $quantity;
    /**
     * 
     *
     * @var list<PriceDataReductionAdditionItem>
     */
    protected $reductionAdditionItems;
    /**
     * 
     *
     * @return string
     */
    public function getDiscountPercentage(): string
    {
        return $this->discountPercentage;
    }
    /**
     * 
     *
     * @param string $discountPercentage
     *
     * @return self
     */
    public function setDiscountPercentage(string $discountPercentage): self
    {
        $this->initialized['discountPercentage'] = true;
        $this->discountPercentage = $discountPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFromSalesPrice(): bool
    {
        return $this->fromSalesPrice;
    }
    /**
     * 
     *
     * @param bool $fromSalesPrice
     *
     * @return self
     */
    public function setFromSalesPrice(bool $fromSalesPrice): self
    {
        $this->initialized['fromSalesPrice'] = true;
        $this->fromSalesPrice = $fromSalesPrice;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }
    /**
     * 
     *
     * @param string $price
     *
     * @return self
     */
    public function setPrice(string $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
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
    /**
     * 
     *
     * @return list<PriceDataReductionAdditionItem>
     */
    public function getReductionAdditionItems(): array
    {
        return $this->reductionAdditionItems;
    }
    /**
     * 
     *
     * @param list<PriceDataReductionAdditionItem> $reductionAdditionItems
     *
     * @return self
     */
    public function setReductionAdditionItems(array $reductionAdditionItems): self
    {
        $this->initialized['reductionAdditionItems'] = true;
        $this->reductionAdditionItems = $reductionAdditionItems;
        return $this;
    }
}