<?php

namespace Webhub\Weclapp\Model;

class PriceData extends \ArrayObject
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
     * @var string
     */
    protected $articleUnitPrice;

    /**
     * @var string
     */
    protected $currencyId;

    /**
     * @var int
     */
    protected $endDate;

    /**
     * @var int
     */
    protected $lastModifiedDate;

    /**
     * @var string
     */
    protected $quantity;

    /**
     * @var list<PriceDataReductionAdditionItem>
     */
    protected $reductionAdditionItems;

    /**
     * @var int
     */
    protected $startDate;

    public function getArticleUnitPrice(): string
    {
        return $this->articleUnitPrice;
    }

    public function setArticleUnitPrice(string $articleUnitPrice): self
    {
        $this->initialized['articleUnitPrice'] = true;
        $this->articleUnitPrice = $articleUnitPrice;

        return $this;
    }

    public function getCurrencyId(): string
    {
        return $this->currencyId;
    }

    public function setCurrencyId(string $currencyId): self
    {
        $this->initialized['currencyId'] = true;
        $this->currencyId = $currencyId;

        return $this;
    }

    public function getEndDate(): int
    {
        return $this->endDate;
    }

    public function setEndDate(int $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getQuantity(): string
    {
        return $this->quantity;
    }

    public function setQuantity(string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return list<PriceDataReductionAdditionItem>
     */
    public function getReductionAdditionItems(): array
    {
        return $this->reductionAdditionItems;
    }

    /**
     * @param  list<PriceDataReductionAdditionItem>  $reductionAdditionItems
     */
    public function setReductionAdditionItems(array $reductionAdditionItems): self
    {
        $this->initialized['reductionAdditionItems'] = true;
        $this->reductionAdditionItems = $reductionAdditionItems;

        return $this;
    }

    public function getStartDate(): int
    {
        return $this->startDate;
    }

    public function setStartDate(int $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

        return $this;
    }
}
