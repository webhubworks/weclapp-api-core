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
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var int|null
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $version;
    /**
     * 
     *
     * @var string|null
     */
    protected $fixSurcharge;
    /**
     * 
     *
     * @var string|null
     */
    protected $fromScale;
    /**
     * 
     *
     * @var string|null
     */
    protected $lowerPurchasePriceBound;
    /**
     * 
     *
     * @var string|null
     */
    protected $margin;
    /**
     * 
     *
     * @var string|null
     */
    protected $percentSurcharge;
    /**
     * 
     *
     * @var string|null
     */
    protected $profit;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesChannel;
    /**
     * 
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int|null $createdDate
     *
     * @return self
     */
    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int|null $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFixSurcharge(): ?string
    {
        return $this->fixSurcharge;
    }
    /**
     * 
     *
     * @param string|null $fixSurcharge
     *
     * @return self
     */
    public function setFixSurcharge(?string $fixSurcharge): self
    {
        $this->initialized['fixSurcharge'] = true;
        $this->fixSurcharge = $fixSurcharge;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFromScale(): ?string
    {
        return $this->fromScale;
    }
    /**
     * 
     *
     * @param string|null $fromScale
     *
     * @return self
     */
    public function setFromScale(?string $fromScale): self
    {
        $this->initialized['fromScale'] = true;
        $this->fromScale = $fromScale;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLowerPurchasePriceBound(): ?string
    {
        return $this->lowerPurchasePriceBound;
    }
    /**
     * 
     *
     * @param string|null $lowerPurchasePriceBound
     *
     * @return self
     */
    public function setLowerPurchasePriceBound(?string $lowerPurchasePriceBound): self
    {
        $this->initialized['lowerPurchasePriceBound'] = true;
        $this->lowerPurchasePriceBound = $lowerPurchasePriceBound;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMargin(): ?string
    {
        return $this->margin;
    }
    /**
     * 
     *
     * @param string|null $margin
     *
     * @return self
     */
    public function setMargin(?string $margin): self
    {
        $this->initialized['margin'] = true;
        $this->margin = $margin;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPercentSurcharge(): ?string
    {
        return $this->percentSurcharge;
    }
    /**
     * 
     *
     * @param string|null $percentSurcharge
     *
     * @return self
     */
    public function setPercentSurcharge(?string $percentSurcharge): self
    {
        $this->initialized['percentSurcharge'] = true;
        $this->percentSurcharge = $percentSurcharge;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProfit(): ?string
    {
        return $this->profit;
    }
    /**
     * 
     *
     * @param string|null $profit
     *
     * @return self
     */
    public function setProfit(?string $profit): self
    {
        $this->initialized['profit'] = true;
        $this->profit = $profit;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesChannel(): ?string
    {
        return $this->salesChannel;
    }
    /**
     * 
     *
     * @param string|null $salesChannel
     *
     * @return self
     */
    public function setSalesChannel(?string $salesChannel): self
    {
        $this->initialized['salesChannel'] = true;
        $this->salesChannel = $salesChannel;
        return $this;
    }
}