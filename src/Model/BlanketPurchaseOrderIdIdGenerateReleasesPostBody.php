<?php

namespace Webhubworks\WeclappApiCore\Model;

class BlanketPurchaseOrderIdIdGenerateReleasesPostBody extends \ArrayObject
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
     * @var int
     */
    protected $firstScheduledDeliveryDate;
    /**
     * 
     *
     * @var bool
     */
    protected $fixReleasedQuantity;
    /**
     * 
     *
     * @var string
     */
    protected $releasedQuantity;
    /**
     * 
     *
     * @var int
     */
    protected $repeatInterval;
    /**
     * 
     *
     * @var string
     */
    protected $repeatType;
    /**
     * 
     *
     * @return int
     */
    public function getFirstScheduledDeliveryDate(): int
    {
        return $this->firstScheduledDeliveryDate;
    }
    /**
     * 
     *
     * @param int $firstScheduledDeliveryDate
     *
     * @return self
     */
    public function setFirstScheduledDeliveryDate(int $firstScheduledDeliveryDate): self
    {
        $this->initialized['firstScheduledDeliveryDate'] = true;
        $this->firstScheduledDeliveryDate = $firstScheduledDeliveryDate;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFixReleasedQuantity(): bool
    {
        return $this->fixReleasedQuantity;
    }
    /**
     * 
     *
     * @param bool $fixReleasedQuantity
     *
     * @return self
     */
    public function setFixReleasedQuantity(bool $fixReleasedQuantity): self
    {
        $this->initialized['fixReleasedQuantity'] = true;
        $this->fixReleasedQuantity = $fixReleasedQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReleasedQuantity(): string
    {
        return $this->releasedQuantity;
    }
    /**
     * 
     *
     * @param string $releasedQuantity
     *
     * @return self
     */
    public function setReleasedQuantity(string $releasedQuantity): self
    {
        $this->initialized['releasedQuantity'] = true;
        $this->releasedQuantity = $releasedQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRepeatInterval(): int
    {
        return $this->repeatInterval;
    }
    /**
     * 
     *
     * @param int $repeatInterval
     *
     * @return self
     */
    public function setRepeatInterval(int $repeatInterval): self
    {
        $this->initialized['repeatInterval'] = true;
        $this->repeatInterval = $repeatInterval;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRepeatType(): string
    {
        return $this->repeatType;
    }
    /**
     * 
     *
     * @param string $repeatType
     *
     * @return self
     */
    public function setRepeatType(string $repeatType): self
    {
        $this->initialized['repeatType'] = true;
        $this->repeatType = $repeatType;
        return $this;
    }
}