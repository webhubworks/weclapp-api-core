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
     * @var string|null
     */
    protected $discountPercentage;

    /**
     * @var bool|null
     */
    protected $fromSalesPrice;

    /**
     * @var string|null
     */
    protected $price;

    /**
     * @var string|null
     */
    protected $quantity;

    /**
     * @var list<PriceDataReductionAdditionItem>|null
     */
    protected $reductionAdditionItems;

    public function getDiscountPercentage(): ?string
    {
        return $this->discountPercentage;
    }

    public function setDiscountPercentage(?string $discountPercentage): self
    {
        $this->initialized['discountPercentage'] = true;
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    public function getFromSalesPrice(): ?bool
    {
        return $this->fromSalesPrice;
    }

    public function setFromSalesPrice(?bool $fromSalesPrice): self
    {
        $this->initialized['fromSalesPrice'] = true;
        $this->fromSalesPrice = $fromSalesPrice;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    public function setQuantity(?string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return list<PriceDataReductionAdditionItem>|null
     */
    public function getReductionAdditionItems(): ?array
    {
        return $this->reductionAdditionItems;
    }

    /**
     * @param  list<PriceDataReductionAdditionItem>|null  $reductionAdditionItems
     */
    public function setReductionAdditionItems(?array $reductionAdditionItems): self
    {
        $this->initialized['reductionAdditionItems'] = true;
        $this->reductionAdditionItems = $reductionAdditionItems;

        return $this;
    }
}
