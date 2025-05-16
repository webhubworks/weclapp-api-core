<?php

namespace Webhubworks\WeclappApiCore\Model;

class InventorySerialNumber extends \ArrayObject
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
    protected $serialNumber;

    /**
     * @var string|null
     */
    protected $status;

    public function getSerialNumber(): ?string
    {
        return $this->serialNumber;
    }

    public function setSerialNumber(?string $serialNumber): self
    {
        $this->initialized['serialNumber'] = true;
        $this->serialNumber = $serialNumber;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }
}
