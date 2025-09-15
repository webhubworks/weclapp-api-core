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
     * @var int|null
     */
    protected $firstScheduledDeliveryDate;
    /**
     * 
     *
     * @var bool|null
     */
    protected $fixReleasedQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $releasedQuantity;
    /**
     * 
     *
     * @var int|null
     */
    protected $repeatInterval;
    /**
     * 
     *
     * @var string|null
     */
    protected $repeatType;
    /**
     * 
     *
     * @return int|null
     */
    public function getFirstScheduledDeliveryDate(): ?int
    {
        return $this->firstScheduledDeliveryDate;
    }
    /**
     * 
     *
     * @param int|null $firstScheduledDeliveryDate
     *
     * @return self
     */
    public function setFirstScheduledDeliveryDate(?int $firstScheduledDeliveryDate): self
    {
        $this->initialized['firstScheduledDeliveryDate'] = true;
        $this->firstScheduledDeliveryDate = $firstScheduledDeliveryDate;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getFixReleasedQuantity(): ?bool
    {
        return $this->fixReleasedQuantity;
    }
    /**
     * 
     *
     * @param bool|null $fixReleasedQuantity
     *
     * @return self
     */
    public function setFixReleasedQuantity(?bool $fixReleasedQuantity): self
    {
        $this->initialized['fixReleasedQuantity'] = true;
        $this->fixReleasedQuantity = $fixReleasedQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReleasedQuantity(): ?string
    {
        return $this->releasedQuantity;
    }
    /**
     * 
     *
     * @param string|null $releasedQuantity
     *
     * @return self
     */
    public function setReleasedQuantity(?string $releasedQuantity): self
    {
        $this->initialized['releasedQuantity'] = true;
        $this->releasedQuantity = $releasedQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRepeatInterval(): ?int
    {
        return $this->repeatInterval;
    }
    /**
     * 
     *
     * @param int|null $repeatInterval
     *
     * @return self
     */
    public function setRepeatInterval(?int $repeatInterval): self
    {
        $this->initialized['repeatInterval'] = true;
        $this->repeatInterval = $repeatInterval;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRepeatType(): ?string
    {
        return $this->repeatType;
    }
    /**
     * 
     *
     * @param string|null $repeatType
     *
     * @return self
     */
    public function setRepeatType(?string $repeatType): self
    {
        $this->initialized['repeatType'] = true;
        $this->repeatType = $repeatType;
        return $this;
    }
}