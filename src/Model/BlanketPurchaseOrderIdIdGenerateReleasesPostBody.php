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
     * @var int
     */
    protected $firstScheduledDeliveryDate;

    /**
     * @var bool
     */
    protected $fixReleasedQuantity;

    /**
     * @var string
     */
    protected $releasedQuantity;

    /**
     * @var int
     */
    protected $repeatInterval;

    /**
     * @var string
     */
    protected $repeatType;

    public function getFirstScheduledDeliveryDate(): int
    {
        return $this->firstScheduledDeliveryDate;
    }

    public function setFirstScheduledDeliveryDate(int $firstScheduledDeliveryDate): self
    {
        $this->initialized['firstScheduledDeliveryDate'] = true;
        $this->firstScheduledDeliveryDate = $firstScheduledDeliveryDate;

        return $this;
    }

    public function getFixReleasedQuantity(): bool
    {
        return $this->fixReleasedQuantity;
    }

    public function setFixReleasedQuantity(bool $fixReleasedQuantity): self
    {
        $this->initialized['fixReleasedQuantity'] = true;
        $this->fixReleasedQuantity = $fixReleasedQuantity;

        return $this;
    }

    public function getReleasedQuantity(): string
    {
        return $this->releasedQuantity;
    }

    public function setReleasedQuantity(string $releasedQuantity): self
    {
        $this->initialized['releasedQuantity'] = true;
        $this->releasedQuantity = $releasedQuantity;

        return $this;
    }

    public function getRepeatInterval(): int
    {
        return $this->repeatInterval;
    }

    public function setRepeatInterval(int $repeatInterval): self
    {
        $this->initialized['repeatInterval'] = true;
        $this->repeatInterval = $repeatInterval;

        return $this;
    }

    public function getRepeatType(): string
    {
        return $this->repeatType;
    }

    public function setRepeatType(string $repeatType): self
    {
        $this->initialized['repeatType'] = true;
        $this->repeatType = $repeatType;

        return $this;
    }
}
