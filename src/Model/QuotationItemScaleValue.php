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
     * @var string|null
     */
    protected $discountPercentage;
    /**
     * 
     *
     * @var bool|null
     */
    protected $fromSalesPrice;
    /**
     * 
     *
     * @var string|null
     */
    protected $price;
    /**
     * 
     *
     * @var string|null
     */
    protected $quantity;
    /**
     * 
     *
     * @var list<PriceDataReductionAdditionItem>|null
     */
    protected $reductionAdditionItems;
    /**
     * 
     *
     * @return string|null
     */
    public function getDiscountPercentage(): ?string
    {
        return $this->discountPercentage;
    }
    /**
     * 
     *
     * @param string|null $discountPercentage
     *
     * @return self
     */
    public function setDiscountPercentage(?string $discountPercentage): self
    {
        $this->initialized['discountPercentage'] = true;
        $this->discountPercentage = $discountPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getFromSalesPrice(): ?bool
    {
        return $this->fromSalesPrice;
    }
    /**
     * 
     *
     * @param bool|null $fromSalesPrice
     *
     * @return self
     */
    public function setFromSalesPrice(?bool $fromSalesPrice): self
    {
        $this->initialized['fromSalesPrice'] = true;
        $this->fromSalesPrice = $fromSalesPrice;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPrice(): ?string
    {
        return $this->price;
    }
    /**
     * 
     *
     * @param string|null $price
     *
     * @return self
     */
    public function setPrice(?string $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param string|null $quantity
     *
     * @return self
     */
    public function setQuantity(?string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * 
     *
     * @return list<PriceDataReductionAdditionItem>|null
     */
    public function getReductionAdditionItems(): ?array
    {
        return $this->reductionAdditionItems;
    }
    /**
     * 
     *
     * @param list<PriceDataReductionAdditionItem>|null $reductionAdditionItems
     *
     * @return self
     */
    public function setReductionAdditionItems(?array $reductionAdditionItems): self
    {
        $this->initialized['reductionAdditionItems'] = true;
        $this->reductionAdditionItems = $reductionAdditionItems;
        return $this;
    }
}