<?php

namespace Webhubworks\WeclappApiCore\Model;

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
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string
     */
    protected $version;
    /**
     * 
     *
     * @var string
     */
    protected $fixSurcharge;
    /**
     * 
     *
     * @var string
     */
    protected $fromScale;
    /**
     * 
     *
     * @var string
     */
    protected $lowerPurchasePriceBound;
    /**
     * 
     *
     * @var string
     */
    protected $margin;
    /**
     * 
     *
     * @var string
     */
    protected $percentSurcharge;
    /**
     * 
     *
     * @var string
     */
    protected $profit;
    /**
     * 
     *
     * @var string
     */
    protected $salesChannel;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int $createdDate
     *
     * @return self
     */
    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFixSurcharge(): string
    {
        return $this->fixSurcharge;
    }
    /**
     * 
     *
     * @param string $fixSurcharge
     *
     * @return self
     */
    public function setFixSurcharge(string $fixSurcharge): self
    {
        $this->initialized['fixSurcharge'] = true;
        $this->fixSurcharge = $fixSurcharge;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFromScale(): string
    {
        return $this->fromScale;
    }
    /**
     * 
     *
     * @param string $fromScale
     *
     * @return self
     */
    public function setFromScale(string $fromScale): self
    {
        $this->initialized['fromScale'] = true;
        $this->fromScale = $fromScale;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLowerPurchasePriceBound(): string
    {
        return $this->lowerPurchasePriceBound;
    }
    /**
     * 
     *
     * @param string $lowerPurchasePriceBound
     *
     * @return self
     */
    public function setLowerPurchasePriceBound(string $lowerPurchasePriceBound): self
    {
        $this->initialized['lowerPurchasePriceBound'] = true;
        $this->lowerPurchasePriceBound = $lowerPurchasePriceBound;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMargin(): string
    {
        return $this->margin;
    }
    /**
     * 
     *
     * @param string $margin
     *
     * @return self
     */
    public function setMargin(string $margin): self
    {
        $this->initialized['margin'] = true;
        $this->margin = $margin;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPercentSurcharge(): string
    {
        return $this->percentSurcharge;
    }
    /**
     * 
     *
     * @param string $percentSurcharge
     *
     * @return self
     */
    public function setPercentSurcharge(string $percentSurcharge): self
    {
        $this->initialized['percentSurcharge'] = true;
        $this->percentSurcharge = $percentSurcharge;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProfit(): string
    {
        return $this->profit;
    }
    /**
     * 
     *
     * @param string $profit
     *
     * @return self
     */
    public function setProfit(string $profit): self
    {
        $this->initialized['profit'] = true;
        $this->profit = $profit;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalesChannel(): string
    {
        return $this->salesChannel;
    }
    /**
     * 
     *
     * @param string $salesChannel
     *
     * @return self
     */
    public function setSalesChannel(string $salesChannel): self
    {
        $this->initialized['salesChannel'] = true;
        $this->salesChannel = $salesChannel;
        return $this;
    }
}