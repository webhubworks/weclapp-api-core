<?php

namespace Webhubworks\WeclappApiCore\Model;

class TransportationOrderIdIdCreatePickPostBodyExistingReservationsItem extends \ArrayObject
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
    protected $pickId;

    /**
     * @var string|null
     */
    protected $quantity;

    /**
     * @var list<string>|null
     */
    protected $serialNumbers;

    public function getPickId(): ?string
    {
        return $this->pickId;
    }

    public function setPickId(?string $pickId): self
    {
        $this->initialized['pickId'] = true;
        $this->pickId = $pickId;

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
     * @return list<string>|null
     */
    public function getSerialNumbers(): ?array
    {
        return $this->serialNumbers;
    }

    /**
     * @param  list<string>|null  $serialNumbers
     */
    public function setSerialNumbers(?array $serialNumbers): self
    {
        $this->initialized['serialNumbers'] = true;
        $this->serialNumbers = $serialNumbers;

        return $this;
    }
}
