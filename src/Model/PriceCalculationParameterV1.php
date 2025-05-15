<?php

namespace Webhub\Weclapp\Model;

class PriceCalculationParameterV1 extends \ArrayObject
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
    protected $id;

    /**
     * @var int
     */
    protected $createdDate;

    /**
     * @var int
     */
    protected $lastModifiedDate;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $fixSurcharge;

    /**
     * @var string
     */
    protected $fromScale;

    /**
     * @var string
     */
    protected $lowerPurchasePriceBound;

    /**
     * @var string
     */
    protected $margin;

    /**
     * @var string
     */
    protected $percentSurcharge;

    /**
     * @var string
     */
    protected $profit;

    /**
     * @var string
     */
    protected $salesChannel;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

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

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    public function getFixSurcharge(): string
    {
        return $this->fixSurcharge;
    }

    public function setFixSurcharge(string $fixSurcharge): self
    {
        $this->initialized['fixSurcharge'] = true;
        $this->fixSurcharge = $fixSurcharge;

        return $this;
    }

    public function getFromScale(): string
    {
        return $this->fromScale;
    }

    public function setFromScale(string $fromScale): self
    {
        $this->initialized['fromScale'] = true;
        $this->fromScale = $fromScale;

        return $this;
    }

    public function getLowerPurchasePriceBound(): string
    {
        return $this->lowerPurchasePriceBound;
    }

    public function setLowerPurchasePriceBound(string $lowerPurchasePriceBound): self
    {
        $this->initialized['lowerPurchasePriceBound'] = true;
        $this->lowerPurchasePriceBound = $lowerPurchasePriceBound;

        return $this;
    }

    public function getMargin(): string
    {
        return $this->margin;
    }

    public function setMargin(string $margin): self
    {
        $this->initialized['margin'] = true;
        $this->margin = $margin;

        return $this;
    }

    public function getPercentSurcharge(): string
    {
        return $this->percentSurcharge;
    }

    public function setPercentSurcharge(string $percentSurcharge): self
    {
        $this->initialized['percentSurcharge'] = true;
        $this->percentSurcharge = $percentSurcharge;

        return $this;
    }

    public function getProfit(): string
    {
        return $this->profit;
    }

    public function setProfit(string $profit): self
    {
        $this->initialized['profit'] = true;
        $this->profit = $profit;

        return $this;
    }

    public function getSalesChannel(): string
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(string $salesChannel): self
    {
        $this->initialized['salesChannel'] = true;
        $this->salesChannel = $salesChannel;

        return $this;
    }
}
